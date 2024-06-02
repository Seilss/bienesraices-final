<?php

// INCLUDES


require_once 'includes/db.php';

// Procesar el formulario de registro
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST['username'];
  $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
  $email = $_POST['email'];; 

  $sql = "INSERT INTO usuarios (username, password, email) VALUES ('$username', '$password', '$email')";
  $conexion->query($sql);

  header("Location: login.php");

  $conexion->close();
  exit;
}

require 'includes/funciones.php';
incluirTemplate('header');

?>

<main class="contenedor seccion">
  <form action="registro.php" method="post" class="formulario">
    <label for="username">Nombre de Usuario:</label>
    <input type="text" name="username" id="username" required>
    <label for="password">Contraseña:</label>
    <input type="password" name="password" id="password" required>
    <label for="email">Email:</label>
    <input type="email" name="email" id="email" required>
    <input type="submit" value="Registrar" class='boton-verde'>
  </form>
</main>


<?php
    incluirTemplate('footer');
?>