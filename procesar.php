<?php

    require 'includes/funciones.php';
    incluirTemplate('header');
    require_once 'includes/db.php'
?>

<?php



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger y sanitizar los datos del formulario
    $nombre = htmlspecialchars($_POST['nombre']);
    $email = htmlspecialchars($_POST['email']);
    $errorForm = FALSE;
    if(is_numeric($_POST['telefono'])) {
        $telefono = htmlspecialchars($_POST['telefono']);
    } else {
        $errorForm = TRUE;
    }
    $mensaje = htmlspecialchars($_POST['mensaje']);
    $opciones = htmlspecialchars($_POST['opciones']);
    $contacto = htmlspecialchars($_POST['contacto']);
    $fecha = isset($_POST['fecha']) ? htmlspecialchars($_POST['fecha']) : '';
    $hora = isset($_POST['hora']) ? htmlspecialchars($_POST['hora']) : '';


    if ($errorForm === FALSE) {
        $sql = "INSERT INTO contactos (nombre, email, telefono, mensaje, opciones, contacto, fecha, hora) 
            VALUES ('$nombre', '$email', '$telefono', '$mensaje', '$opciones', '$contacto', '$fecha', '$hora')";
        $conexion->query($sql);
         // Mostrar los datos recibidos
        echo "<h1>Datos recibidos y enviados</h1>";
        echo "<p><strong>Nombre:</strong> $nombre</p>";
        echo "<p><strong>Email:</strong> $email</p>";
        echo "<p><strong>Teléfono:</strong> $telefono</p>";
        echo "<p><strong>Mensaje:</strong> $mensaje</p>";
        echo "<p><strong>Compra:</strong> $opciones</p>";
        echo "<p><strong>Contacto preferido:</strong> $contacto</p>";
        if ($contacto == 'telefono') {
            echo "<p><strong>Fecha:</strong> $fecha</p>";
            echo "<p><strong>Hora:</strong> $hora</p>";
        }
    } else {
        if($errorForm === TRUE) {
            echo "<h1>El numero de telefono introducido no es un número, vuelva a rellenar el formulario.</h1>";
        }
        if($conexion->error) {
            echo "Error: " . $conexion->error;
        }
    }
} else {
    // Si no se accedió al script a través de un método POST
    echo "Por favor, envía el formulario.";
}

// Cerrar la conexión
$conexion->close();
?>

<?php
    incluirTemplate('footer');
?>