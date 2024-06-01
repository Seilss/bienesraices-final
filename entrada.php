<?php

    require 'includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Guía para la decoración de tu hogar</h1>

   
        <picture>
            <source srcset="build/img/destacada2.webp" type="image/webp">
            <source srcset="build/img/destacada2.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/destacada2.jpg" alt="imagen de la propiedad">
        </picture>

        <p class="informacion-meta">Escrito el: <span>23/05/2024</span> por: <span>Admin</span> </p>


        <div class="resumen-propiedad">
            <p>Descubre cómo transformar tu hogar en un espacio acogedor y estilizado con nuestra guía de decoración. Desde la selección de colores hasta la elección de muebles, te proporcionamos consejos prácticos y tendencias actuales para cada rincón de tu casa. Aprende a combinar elementos clásicos y modernos, creando ambientes únicos y personalizados que reflejen tu personalidad y gusto.</p>

            <p>Además, exploraremos la importancia de la iluminación adecuada y cómo ésta puede cambiar por completo el ambiente de una habitación. Te enseñaremos a utilizar accesorios decorativos, como cojines, alfombras y obras de arte, para añadir toques finales que hagan de tu hogar un lugar especial. No importa el tamaño de tu espacio, con nuestras recomendaciones podrás maximizar su potencial y crear un entorno que no solo sea estéticamente agradable, sino también funcional y cómodo para vivir.</p>
            <h3>Póngase en contacto con nosotros para mas información.</h3>
        </div>
    </main>

<?php
    incluirTemplate('footer');
?>