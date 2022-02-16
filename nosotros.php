<?php
    require 'includes/funciones.php';
    $inicio = true;
    incluirTemplate('header');
?>
    <main class="contenedor seccion">
        <h1>Conoce sobre Nosotros</h1>
        <div class="contenido-nosotros">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/nosotros.webp" type="image/webp">
                    <source srcset="build/img/nosotros.jpg" type="image/jpeg">
                    <img src="build/img/nosotros.jpg" alt="Imagen sobre nosotros" loading="lazy">
                </picture>
            </div>
            <div class="texto-nosotros">
                <blockquote>25 años de experiencia</blockquote>
                <p>Eiusmod velit occaecat elit enim excepteur tempor non cupidatat commodo reprehenderit officia quis. Ut officia consequat magna dolor excepteur labore ea amet. Ipsum eu ex exercitation consequat mollit ut. Esse velit eiusmod laboris tempor nostrud ipsum consequat nulla fugiat. Labore consectetur quis deserunt qui esse dolore adipisicing dolore consectetur exercitation velit aliquip minim aliqua. Ipsum laborum exercitation fugiat duis commodo dolor tempor consequat aliqua irure. Ea consequat voluptate.</p>
                <p>Eiusmod velit occaecat elit enim excepteur tempor non cupidatat commodo reprehenderit officia quis. Ut officia consequat magna dolor excepteur labore ea amet. Ipsum eu ex exercitation consequat mollit ut. Esse velit eiusmod laboris tempor nostrud ipsum consequat nulla fugiat. Labore consectetur quis deserunt qui esse dolore adipisicing dolore consectetur exercitation velit aliquip minim aliqua. Ipsum laborum exercitation fugiat duis commodo dolor tempor consequat aliqua irure. Ea consequat voluptate.</p>
            </div>
        </div>
    </main>

    <section class="contenedor seccion">
        <h1>Más sobre nosotros</h1>
        <div class="iconos-nosotros">
            <div class="icono">
                <img src="build/img/icono1.svg" alt="Icono seguridad" loading="lazy">
                <h3>Seguridad</h3>
                <p>Amet reprehenderit culpa mollit reprehenderit nostrud est commodo consequat ipsum sit non culpa. Lorem consequat nulla aliquip aliqua non minim consectetur occaecat. In laborum amet id dolor duis incididunt consequat tempor proident ullamco incididunt. Cupidatat culpa excepteur mollit dolor duis. Nostrud consectetur fugiat excepteur tempor sint enim ad non aliqua do aliqua.</p>
            </div>
            <div class="icono">
                <img src="build/img/icono2.svg" alt="Icono precio" loading="lazy">
                <h3>Precio</h3>
                <p>Amet reprehenderit culpa mollit reprehenderit nostrud est commodo consequat ipsum sit non culpa. Lorem consequat nulla aliquip aliqua non minim consectetur occaecat. In laborum amet id dolor duis incididunt consequat tempor proident ullamco incididunt. Cupidatat culpa excepteur mollit dolor duis. Nostrud consectetur fugiat excepteur tempor sint enim ad non aliqua do aliqua.</p>
            </div>
            <div class="icono">
                <img src="build/img/icono3.svg" alt="Icono tiempo" loading="lazy">
                <h3>Tiempo</h3>
                <p>Amet reprehenderit culpa mollit reprehenderit nostrud est commodo consequat ipsum sit non culpa. Lorem consequat nulla aliquip aliqua non minim consectetur occaecat. In laborum amet id dolor duis incididunt consequat tempor proident ullamco incididunt. Cupidatat culpa excepteur mollit dolor duis. Nostrud consectetur fugiat excepteur tempor sint enim ad non aliqua do aliqua.</p>
            </div>
        </div>
    </section>

<?php
    incluirTemplate('footer');
?>