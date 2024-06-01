<?php

    require 'includes/funciones.php';
    incluirTemplate('header');
?>


    <main class="contenedor seccion">
        <h1>Conoce sobre Nosotros</h1>

        <div class="contenido-nosotros">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/nosotros.webp" type="image/webp">
                    <source srcset="build/img/nosotros.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/nosotros.jpg" alt="Sobre Nosotros">
                </picture>
            </div>

            <div class="texto-nosotros">
                <blockquote>
                    25 Años de experiencia
                </blockquote>

                <p>Con más de dos décadas en la industria, nos hemos consolidado como líderes en el diseño y construcción de hogares de lujo. Nuestro compromiso con la excelencia y la innovación nos ha permitido crear espacios que no solo son visualmente impresionantes, sino también funcionales y duraderos. Cada proyecto que emprendemos refleja nuestra pasión por el detalle y la satisfacción del cliente.</p>

                <p>Desde nuestros inicios, hemos trabajado arduamente para construir una reputación basada en la confianza y la calidad. Nuestro equipo de profesionales altamente capacitados se dedica a entender y superar las expectativas de nuestros clientes, ofreciendo soluciones personalizadas y creativas. Ya sea que estés buscando construir la casa de tus sueños o remodelar tu espacio actual, estamos aquí para ayudarte en cada paso del camino, garantizando resultados que te encantarán.</p>
            </div>
        </div>
    </main>

    <section class="contenedor seccion">
        <h1>Más Sobre Nosotros</h1>

        <div class="iconos-nosotros">
            <div class="icono">
                <img src="build/img/icono1.svg" alt="Icono seguridad" loading="lazy">
                <h3>Seguridad</h3>
                <p>Protegemos tus datos con la tecnología más avanzada del mercado. Nuestro compromiso es garantizar la confidencialidad, integridad y disponibilidad de tu información en todo momento. Con nosotros, puedes estar seguro de que tu seguridad es nuestra prioridad.</p>
            </div>
            <div class="icono">
                <img src="build/img/icono2.svg" alt="Icono Precio" loading="lazy">
                <h3>Precio</h3>
                <p>Ofrecemos precios competitivos sin comprometer la calidad. Nuestras soluciones están diseñadas para ajustarse a tu presupuesto, proporcionando el mejor valor en el mercado. Disfruta de tarifas transparentes y sin sorpresas, optimizadas para satisfacer tus necesidades.</p>
            </div>
            <div class="icono">
                <img src="build/img/icono3.svg" alt="Icono Tiempo" loading="lazy">
                <h3>A Tiempo</h3>
                <p>Valoramos tu tiempo y entendemos la importancia de cumplir con los plazos. Nos comprometemos a entregar todos nuestros proyectos puntualmente, sin excepciones. Con nuestra eficiencia y planificación meticulosa, puedes confiar en que tus objetivos se alcanzarán a tiempo.</p>
            </div>
        </div>
    </section>

<?php
    incluirTemplate('footer');
?>