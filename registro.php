<?php

// INCLUDES

require 'includes/funciones.php';
incluirTemplate('header');
require_once 'includes/db.php';

// Procesar el formulario de registro
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST['username'];
  $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
  $email = $_POST['email'];; 

  $sql = "INSERT INTO usuarios (username, password, email) VALUES ('$username', '$password', '$email')";
  $conexion->query($sql);

  $conexion->close();
}

?>

    <form action="registro.php" method="post" class="formulario">
        <div>
            <label for="username">Nombre de Usuario:</label>
            <input type="text" name="username" id="username" required>
        </div>
        <div>
            <label for="password">Contraseña:</label>
            <input type="password" name="password" id="password" required>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>
        </div>
        <div>
            <input type="submit" value="Registrar">
        </div>
    </form>
</body>
</html>


<?php
    incluirTemplate('footer');
?>