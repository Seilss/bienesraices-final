<?php
    require 'includes/funciones.php';
    require_once 'includes/db.php';
    require 'includes/denegarAcceso.php';

    // Comprobamos si el usuario tiene acceso. Sino lo redirigimos a otra página.
    $access = checkAccess();
    if (!$access) {
        header("Location: acceso-denegado.php");
        exit;
    }

    incluirTemplate('header');
?>

<main class="contenedor seccion">

    <h1>Crea una nueva vivienda</h1>

    <form action="procesarVivienda.php" method="post" class="formulario" enctype="multipart/form-data">
        <fieldset>

            <label for="nombre">Título</label>
            <input type="text" name="titulo" id="titulo" required>

            <label for="descripcion">Descripción</label>
            <textarea type="text" name="descripcion" id="descripcion" required></textarea>

            <label for="subtitulo">Subtitulo</label>
            <textarea type="subtitulo" name="subtitulo" id="subtitulo" required></textarea>

            <label for="precio">Precio</label>
            <input type="number" min='0'  name="precio"id="precio" required>

            <label for="aseos">Número de aseos:</label>
            <input type="number" min='0'  name="aseos" id="aseos" required></input>

            <label for="garajes">Número de garajes:</label>
            <input type="number" min='0'  name="garajes" id="garajes" required></input>

            <label for="dormitorios">Número de dormitorios:</label>
            <input type="number" min='0'  name="dormitorios" id="dormitorios" required></input>

            <label for="imagen">Imagen de la vivienda:</label>
            <input type="file" name="imagen" id="imagen">
            
        </fieldset>

        <input type="submit" value="Enviar" class="boton-verde">
    </form>
</main>

<?php
    incluirTemplate('footer');
?>