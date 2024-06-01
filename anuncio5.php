<?php

    require 'includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Casa rural</h1>

        <picture>
            <source srcset="build/img/anuncio5.webp" type="image/webp">
            <source srcset="build/img/anuncio5.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/anuncio5.jpg" alt="imagen de la propiedad">
        </picture>

        <div class="resumen-propiedad">
            <p class="precio">$3,000,000</p>
            <ul class="iconos-caracteristicas">
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
                    <p>3</p>
                </li>
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                    <p>3</p>
                </li>
                <li>
                    <img class="icono"  loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono habitaciones">
                    <p>4</p>
                </li>
            </ul>

            <p></p>

            <p></p>
        </div>
    </main>

<?php
    incluirTemplate('footer');
?>