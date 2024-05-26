<?php

    require 'includes/funciones.php';
    incluirTemplate('header');
    $id = isset($_GET['id']) ? intval($_GET['id']) : 0;
    require_once 'includes/db.php';
    if ($id > 0) {
        // Consulta para obtener un usuario específico por ID
        $sql = "SELECT * FROM viviendas WHERE id = $id";
        $result = $conexion->query($sql);
    };

?>

    <main class="contenedor seccion contenido-centrado">
    <?php
    if ($result->num_rows > 0) {
        // Itera sobre cada fila de resultados
        while($row = $result->fetch_assoc()) {
            echo "<h1>" . htmlspecialchars($row["titulo"]) . "</h1>

        <picture>
            <source srcset='build/img/". htmlspecialchars($row["fotos"]) .".webp' type='image/webp'>
            <img loading='lazy' src='build/img/". htmlspecialchars($row["fotos"]) .".jpg' alt='imagen de la propiedad'>
        </picture>

        <div class='resumen-propiedad'>
            <p class='precio'>". htmlspecialchars($row["precio"]) ." $</p>
            <ul class='iconos-caracteristicas'>
                <li>
                    <img class='icono' loading='lazy' src='build/img/icono_wc.svg' alt='icono wc'>
                    <p>" . htmlspecialchars($row["aseos"]) ."</p>
                </li>
                <li>
                    <img class='icono' loading='lazy' src='build/img/icono_estacionamiento.svg' alt='icono estacionamiento'>
                    <p>". htmlspecialchars($row["garaje"]) ."</p>
                </li>
                <li>
                    <img class='icono'  loading='lazy' src='build/img/icono_dormitorio.svg' alt='icono habitaciones'>
                    <p>". htmlspecialchars($row["dormitorios"]) ."</p>
                </li>
            </ul>
          <p>"  . htmlspecialchars($row["descripcion"]) . "</p>
        </div>";
        }
    } else {
        echo "<tr><td colspan='3'>Elemento no encontrado</td></tr>";
    }

    // Cierra la conexión
    $conexion->close();
    ?>
    </main>

<?php
    incluirTemplate('footer');
?>