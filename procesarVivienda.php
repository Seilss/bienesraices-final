<?php

// INCLUDES

require_once 'includes/db.php';

// Procesar el formulario de registro
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // Configuración para aumentar el tamaño del envio del formulario.
  ini_set('upload_max_filesize', '20M');
  ini_set('post_max_size', '20M');

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

  // Ruta a la carpeta de imagenes.
  $target_dir = "src/img/";

  // Obtener el nombre del archivo sin la extensión.
  $imagen_name = basename($_FILES["imagen"]["name"], ".jpg");

  // Sanitizar el nombre del archivo.
  $imagen_name = preg_replace("/[^a-zA-Z0-9_.-]/", "", $imagen_name);

  $target_file = $target_dir . "" . $imagen_name . ".jpg";

  move_uploaded_file($_FILES["imagen"]["tmp_name"], $target_file);

  // Preparamos la query.

  if ($id == 0) {
    $sql = "INSERT INTO viviendas (titulo, descripcion, subtitulo, precio, aseos, garaje, dormitorios, fotos) 
    VALUES ('$titulo', '$descripcion', '$subtitulo', '$precio', '$aseos', '$garajes', '$dormitorios', '$imagen_name')";
  } elseif ($id > 0) {
    $sql = "UPDATE viviendas 
    SET titulo = '$titulo',
      descripcion = '$descripcion',
      subtitulo = '$subtitulo',
      precio = '$precio',
      aseos = '$aseos',
      garaje = '$garajes',
      dormitorios = '$dormitorios',
      fotos = 'UPDATE'
    WHERE ID = $id";
  }
  

  //Ejecutamos la query.
  $conexion->query($sql);

  header("Location: anuncios.php");

  $conexion->close();
  
}

?>