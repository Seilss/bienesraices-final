<?php
// Conectar a la base de datos
$servidor = "localhost";
$usuario = "root";
$password = "alberto";
$basedatos = "bienesraices";

// Crear conexión
$conexion = new mysqli($servidor, $usuario, $password, $basedatos);
$conexion->set_charset("utf8");

// Chequear conexión
if ($conexion->connect_error) {
    die("La conexión ha fallado: " . $conexion->connect_error);   
}
?>
