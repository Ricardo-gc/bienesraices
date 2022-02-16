<?php
    require 'includes/funciones.php';
    $inicio = true;
    incluirTemplate('header');
?>
    <main class="contenedor seccion contenido-centrado">
        <h1>Casa en venta frente al bosque</h1>
        <picture>
            <source srcset="build/img/destacada.webp" type="image/webp">
            <source srcset="build/img/destacada.jpg" type="image/jpeg">
            <img src="build/img/destacada.jpg" alt="Imagen casa" loading="lazy">
        </picture>
        <div class="resumen-propiedad">
            <p class="precio">$3,000,000</p>
            <ul class="iconos-caracteristicas">
                <li>
                    <img class="icono" src="build/img/icono_wc.svg" alt="Icono WC" loading="lazy">
                    <p>3</p>
                </li>
                <li>
                    <img class="icono" src="build/img/icono_estacionamiento.svg" alt="Icono estacionamiento" loading="lazy">
                    <p>3</p>
                </li>
                <li>
                    <img class="icono" src="build/img/icono_dormitorio.svg" alt="Icono Habitaciones" loading="lazy">
                    <p>4</p>
                </li>
            </ul>

            <p>Velit dolore laborum aliqua sunt ea cillum. Commodo deserunt eu magna ipsum cupidatat do nulla. Commodo reprehenderit et eiusmod officia ad consectetur esse aute id deserunt in excepteur tempor duis. Duis amet ullamco sunt non velit commodo exercitation sunt nulla ullamco nisi veniam exercitation. Reprehenderit aliquip duis nostrud veniam ullamco ipsum ipsum ipsum est laborum. Qui sint laboris pariatur magna ea id consectetur et voluptate eiusmod enim amet reprehenderit.</p>
            <p>Velit dolore laborum aliqua sunt ea cillum. Commodo deserunt eu magna ipsum cupidatat do nulla. Commodo reprehenderit et eiusmod officia ad consectetur esse aute id deserunt in excepteur tempor duis. Duis amet ullamco sunt non velit commodo exercitation sunt nulla ullamco nisi veniam exercitation. Reprehenderit aliquip duis nostrud veniam ullamco ipsum ipsum ipsum est laborum. Qui sint laboris pariatur magna ea id consectetur et voluptate eiusmod enim amet reprehenderit.</p>
        </div>
    </main>

<?php
    incluirTemplate('footer');
?>