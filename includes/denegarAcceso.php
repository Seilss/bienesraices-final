<?php

    function checkAccess() {
        session_start();
        if (isset($_SESSION['username'])) {
            // Redirigir si no estás logueado.
            header("Location: acceso-denegado.php");
            exit;
        }
    }
    
?>
