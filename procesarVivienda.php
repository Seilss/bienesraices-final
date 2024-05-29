<?php

// INCLUDES

require_once 'includes/db.php';

// Procesar el formulario de registro
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $titulo = $_POST['titulo'];
  $descripcion = $_POST['descripcion'];
  $subtitulo = $_POST['subtitulo'];
  $precio = $_POST['precio'];
  $aseos = $_POST['aseos'];
  $garajes = $_POST['garajes'];
  $dormitorios = $_POST['dormitorios'];

  $sql = "INSERT INTO viviendas (titulo, descripcion, subtitulo, precio, aseos, garaje, dormitorios, fotos) 
  VALUES ('$titulo', '$descripcion', '$subtitulo', '$precio', '$aseos', '$garajes', '$dormitorios', 'aaa')";
  $conexion->query($sql);

  header("Location: anuncios.php");

  $conexion->close();
}

?>