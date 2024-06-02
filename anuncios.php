<?php

    require 'includes/funciones.php';
    incluirTemplate('header');
    require_once 'includes/db.php'; // Agregar punto y coma aquí

?>
<main class="contenedor seccion">

    <h2>Casas en Venta</h2>

    <div class="contenedor-anuncios">
        <?php
        $sql = "SELECT * FROM viviendas";
        $result = $conexion->query($sql);

        // Verifica si hay resultados
        if ($result->num_rows > 0) {
            // Itera sobre cada fila de resultados
            while($row = $result->fetch_assoc()) {
                // Imprime los datos de cada fila en una fila de la tabla
                echo "<div class='anuncio'>
                    <picture>
                        <source srcset='build/img/" . htmlspecialchars($row["fotos"]) . ".webp' type='image/webp'>
                        <img loading='lazy' src='build/img/" . htmlspecialchars($row["fotos"]) . "' alt='anuncio'>
                    </picture>

                    <div class='contenido-anuncio'>
                        <h3>" . htmlspecialchars($row["titulo"]) . "</h3>
                        <p>" . htmlspecialchars($row["subtitulo"]) . "</p>
                        <p class='precio'>" . htmlspecialchars($row["precio"]) . " $</p>

                        <ul class='iconos-caracteristicas'>
                            <li>
                                <img class='icono' loading='lazy' src='build/img/icono_wc.svg' alt='icono wc'>
                                <p>" . $row["aseos"] . "</p>
                            </li>
                            <li>
                                <img class='icono' loading='lazy' src='build/img/icono_estacionamiento.svg' alt='icono estacionamiento'>
                                <p>". $row["garaje"] . "</p>
                            </li>
                            <li>
                                <img class='icono' loading='lazy' src='build/img/icono_dormitorio.svg' alt='icono habitaciones'>
                                <p>". $row["dormitorios"] . "</p>
                            </li>
                        </ul>

                        <a href='anuncio.php?id=" . $row["id"] . "' class='boton-amarillo-block'>
                            Ver Propiedad
                        </a>
                    </div>
                </div>";
            }
        } else {
            echo "<p>No se encontraron resultados</p>";
        }

        // Cierra la conexión
        $conexion->close();
        ?>
    </div> <!--.contenedor-anuncios-->
</main>

<?php
    incluirTemplate('footer');
?>