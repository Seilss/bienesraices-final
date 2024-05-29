<?php

    require 'includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Guía para la decoración de tu salón</h1>

   
        <picture>
            <source srcset="build/img/blog3.webp" type="image/webp">
            <source srcset="build/img/blog3.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/blog3.jpg" alt="imagen de la propiedad">
        </picture>

        <p class="informacion-meta">Escrito el: <span>23/05/2024</span> por: <span>Admin</span> </p>


        <div class="resumen-propiedad">
            <p>La decoración de tu salón es fundamental para crear un espacio acogedor y estilizado donde puedas relajarte y entretener a tus invitados. Desde la selección de una paleta de colores adecuada hasta la disposición de los muebles, cada decisión cuenta para lograr un ambiente armonioso y funcional.</p>

            <p>Explora nuestras recomendaciones sobre cómo elegir los muebles perfectos, incorporar iluminación adecuada y utilizar accesorios decorativos para darle un toque personal a tu salón. Aprende sobre las últimas tendencias en diseño de interiores y cómo adaptarlas a tu propio estilo para crear un espacio que realmente te represente.</p>
            <h3>Póngase en contacto con nosotros para mas información.</h3>
        </div>
    </main>

<?php
    incluirTemplate('footer');
?>