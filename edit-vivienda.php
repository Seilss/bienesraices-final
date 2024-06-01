<?php

    require 'includes/funciones.php';
    require 'includes/denegarAcceso.php';
    incluirTemplate('header');

?>

<main class="contenedor seccion">

    <h1>Actualizar vivienda</h1>

    <?php

    checkAccess();

    $id = isset($_GET['id']) ? intval($_GET['id']) : 0;
    require_once 'includes/db.php';
    if ($id > 0) {
        // Consulta para obtener un usuario específico por ID.
        $sql = "SELECT * FROM viviendas WHERE id = $id";
        $result = $conexion->query($sql);

    };

    if ($result->num_rows > 0) {
        // Itera sobre cada fila de resultados.
        while($row = $result->fetch_assoc()) {
            echo "<form action='procesarVivienda.php?id=$id' method='post' class='formulario' enctype='multipart/form-data'>
            <fieldset>
    
                <label for='nombre'>Título</label> 
                <input type='text' name='titulo' id='titulo' required value=" . htmlspecialchars($row['titulo']) . ">
    
                <label for='descripcion'>Descripción</label>
                <textarea type='text' name='descripcion' id='descripcion'>" . htmlspecialchars($row['descripcion']) . "</textarea>
    
                <label for='subtitulo'>Subtitulo</label>
                <textarea type='subtitulo' name='subtitulo' id='subtitulo' required>" . htmlspecialchars($row['subtitulo']) . "</textarea>
    
                <label for='precio'>Precio</label>
                <input type='number' name='precio' id='precio' required value=" . htmlspecialchars($row['precio']) . ">
    
                <label for='aseos'>Número de aseos:</label>
                <input type='number' name='aseos' id='aseos' required value=" . htmlspecialchars($row['dormitorios']) . "></input>
    
                <label for='garajes'>Número de garajes:</label>
                <input type='garajes' name='garajes' id='garajes' required value=" . htmlspecialchars($row['garaje']) . "></input>
    
                <label for='dormitorios'>Número de dormitorios:</label>
                <input type='dormitorios' name='dormitorios' id='dormitorios' required value=" . htmlspecialchars($row['dormitorios']) . "></input>
    
            </fieldset>
    
            <input type='submit' value='Enviar' class='boton-verde'>
        </form>";
        }
    }
     ?>
        

<?php
    incluirTemplate('footer');
?>