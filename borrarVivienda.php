<?php

require_once 'includes/db.php';

$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}
 // Eliminar la vivienda de la base de datos.
 $sql = "DELETE FROM viviendas WHERE id = " . $id;
 $conexion->query($sql);

 // Redirigir a la lista de viviendas.
 header("Location: anuncios.php");
 exit;

$conexion->close();
?>