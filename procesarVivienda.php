<?php

// INCLUDES

require_once 'includes/db.php';

// Procesar el formulario de registro
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // Configuración para aumentar el tamaño del envio del formulario.
  ini_set('upload_max_filesize', '25M');
  ini_set('post_max_size', '25M');

  // Si actualizas una vivienda existente.
  $id = isset($_GET['id']) ? intval($_GET['id']) : 0;

  // Recogiendo datos del formulario.
  $titulo = $_POST['titulo'];
  $descripcion = $_POST['descripcion'];
  $subtitulo = $_POST['subtitulo'];
  $precio = $_POST['precio'];
  $aseos = $_POST['aseos'];
  $garajes = $_POST['garajes'];
  $dormitorios = $_POST['dormitorios'];

  if (!empty($_FILES["imagen"]["name"])) {
    // Ruta a la carpeta de imagenes.
    $target_dir = "src/img/";

    // Obtener el nombre del archivo sin la extensión.
    $image_name_extension = strtolower(preg_replace("/[^a-zA-Z0-9_.-]/", "", basename($_FILES["imagen"]["name"])));
    $image_split = explode(".", basename($_FILES["imagen"]["name"]));
    $imagen_name = $image_split[0];
    //$imagen_name = basename($_FILES["imagen"]["name"]);


    // Sanitizar el nombre del archivo.
    $imagen_name = strtolower(preg_replace("/[^a-zA-Z0-9_.-]/", "", $imagen_name));

    $target_file = $target_dir . "" . $imagen_name . "." .$image_split[1];

    // Comprobamos si el fichero es una imagen. 
    $check = getimagesize($_FILES["imagen"]["tmp_name"]);
    if($check !== false) {
      $uploadOk = 1;
    } else {
      echo "No es una imagen.";
      // Tratamos la imagen anuncio2 como si fuera una imagen por defecto si algo va mal con la imagen.
      $imagen_name = "anuncio2";
      $uploadOk = 0;
    }

    if ($uploadOk == 1) {
      move_uploaded_file($_FILES["imagen"]["tmp_name"], $target_file);
    }
  }


  // Preparamos la query.

  if ($id == 0) {
    $sql = "INSERT INTO viviendas (titulo, descripcion, subtitulo, precio, aseos, garaje, dormitorios, fotos) 
    VALUES ('$titulo', '$descripcion', '$subtitulo', '$precio', '$aseos', '$garajes', '$dormitorios', '$image_name_extension')";
  } elseif ($id > 0) {
    $sql = "";
    if (!empty($image_name_extension)) {
      $sql = "UPDATE viviendas 
      SET titulo = '$titulo',
        descripcion = '$descripcion',
        subtitulo = '$subtitulo',
        precio = '$precio',
        aseos = '$aseos',
        garaje = '$garajes',
        dormitorios = '$dormitorios',
        fotos = '$image_name_extension'
      WHERE ID = $id";
    } else {
      $sql = "UPDATE viviendas 
      SET titulo = '$titulo',
        descripcion = '$descripcion',
        subtitulo = '$subtitulo',
        precio = '$precio',
        aseos = '$aseos',
        garaje = '$garajes',
        dormitorios = '$dormitorios',
      WHERE ID = $id";
    }
  }


  //Ejecutamos la query.
  $conexion->query($sql);

  header("Location: anuncios.php");

  $conexion->close();
  
}

?>