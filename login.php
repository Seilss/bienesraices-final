<?php

// INCLUDES

require 'includes/funciones.php';
incluirTemplate('header');
require_once 'includes/db.php';

?>
<main class="contenedor seccion">
    <h2>Login</h2>
    <form action="procesarLogin.php" method="post" class="formulario">
        <label for="username">Usuario:</label>
        <input type="text" name="username" required>
        <br>
        <label for="password">Contraseña:</label>
        <input type="password" name="password" required>
        <br>
        <input type="submit" value="Login" class='boton-verde'>
    </form>     
</main>

<?php
    incluirTemplate('footer');
?>