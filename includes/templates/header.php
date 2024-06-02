<?php

    session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienes Raices</title>
    <link rel="stylesheet" href="/build/css/app.css">
</head>
<body>
    
    <header class="header <?php echo $inicio ? 'inicio' : ''; ?>">
        <div class="contenedor contenido-header">
            <div class="barra">
                <a href="/index.php">
                    <img src="build/img/logo.svg" alt="Logotipo de Bienes Raices">
                </a>

                <div class="mobile-menu">
                    <img src="/bienesraices/build/img/barras.svg" alt="icono menu responsive">
                </div>

                <div class="derecha">
                    <img class="dark-mode-boton" src="/bienesraices/build/img/dark-mode.svg">
                    <nav class="navegacion">
                        <a href="nosotros.php">Nosotros</a>
                        <a href="anuncios.php">Anuncios</a>
                        <a href="blog.php">Blog</a>
                        <a href="contacto.php">Contacto</a>
                        <?php
                    
                        if (isset($_SESSION['uid']) && $_SESSION['uid'] == 1) {
													echo "<a href='add-vivienda.php'>Añadir vivienda</a>";
                        } 
												
												if (isset($_SESSION['username'])) {
													echo "<a href='#'>" . $_SESSION['username'] . "</a>";
													echo "<a href='logout.php'>Desconectarse</a>";
                        } else {
													echo "<a href='registro.php'>Registrarse</a>";
													echo "<a href='login.php'>Login</a>";
                        }

                        ?>
                    </nav>
                </div>
   
                
            </div> <!--.barra-->
            <?php if($inicio) { ?>
                <h1>Venta de Casas y Departamentos  Exclusivos de Lujo</h1>
            <?php } ?>
        </div>
    </header>