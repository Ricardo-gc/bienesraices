<?php
    require 'includes/funciones.php';
    $inicio = true;
    incluirTemplate('header', $inicio = true);
?>
    <main class="contenedor seccion">
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
    </main>
    <section class="seccion contenedor">
        <h2>Casas y Depas en venta</h2>
        <div class="contenedor-anuncios">
            <div class="anuncio">
                <picture>
                    <source srcset="build/img/anuncio1.webp" type="image/webp">
                    <source srcset="build/img/anuncio1.jpg" type="image/jpeg">
                    <img src="build/img/anuncio1.jpg" alt="Anuncio" loading="lazy">
                </picture>
                <div class="contenido-anuncio">
                    <h3>Casa de lujo en el lago</h3>
                    <p>Casa en el lago con excelente vista,acabados de lujo y un excelente precio</p>
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
                    <a class="boton-amarillo-block" href="anuncio.php">Ver propiedad</a>
                </div><!--.Contenido anuncio-->
            </div><!--.Anuncion-->

            <div class="anuncio">
                <picture>
                    <source srcset="build/img/anuncio2.webp" type="image/webp">
                    <source srcset="build/img/anuncio2.jpg" type="image/jpeg">
                    <img src="build/img/anuncio1.jpg" alt="Anuncio" loading="lazy">
                </picture>
                <div class="contenido-anuncio">
                    <h3>Casa terminados lujo</h3>
                    <p>Casa en el lago con excelente vista,acabados de lujo y un excelente precio</p>
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
                    <a class="boton-amarillo-block" href="anuncio.php">Ver propiedad</a>
                </div><!--.Contenido anuncio-->
            </div><!--.Anuncion-->

            <div class="anuncio">
                <picture>
                    <source srcset="build/img/anuncio3.webp" type="image/webp">
                    <source srcset="build/img/anuncio3.jpg" type="image/jpeg">
                    <img src="build/img/anuncio1.jpg" alt="Anuncio" loading="lazy">
                </picture>
                <div class="contenido-anuncio">
                    <h3>Casa con laberca</h3>
                    <p>Casa en el lago con excelente vista,acabados de lujo y un excelente precio</p>
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
                    <a class="boton-amarillo-block" href="anuncio.php">Ver propiedad</a>
                </div><!--.Contenido anuncio-->
            </div><!--.Anuncion-->
        </div><!--.contenedor-anuncios-->

        <div class="alinear-derecha">
            <a class="boton-verde" href="anuncios.php">Ver Todas</a>
        </div>
    </section>

    <section class="imagen-contacto">
        <h2>Encuentra la casa de tus sueños</h2>
        <p>Llena el formulario de contacto y un asesor se pondrá en contacto contigo lo más pronto posible</p>
        <a href="contacto.php" class="boton-amarillo">Contactanos</a>
    </section>

    <div class="contenedor seccion seccion-inferior">
        <section class="blog">
            <h3 >Nuestro Blog</h3>
            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source srcset="build/img/blog1.webp" type="image/webp" loading="lazy">
                        <source srcset="build/img/blog1.jpg" type="image/jpeg" loading="lazy">
                        <img src="build/img/blog1.jpg" alt="Entrada blog"  loading="lazy">
                    </picture>
                </div>
                <div class="texto-entrada">
                    <a href="entrada.php">
                        <h4>Terraza en el techo de tu casa</h4>
                        <p class="informacion-meta">Escrito el: <span>02/02/2022</span> por <span>Administrador</span></p>
                        <p>Consejos para contruir una terraza en el techo de tu casa con los mejores materiales y a bajo costo </p>
                    </a>
                </div>
            </article>
            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source srcset="build/img/blog2.webp" type="image/webp" >
                        <source srcset="build/img/blog2.jpg" type="image/jpeg" >
                        <img src="build/img/blog2.jpg" alt="Entrada blog"  loading="lazy">
                    </picture>
                </div>
                <div class="texto-entrada">
                    <a href="entrada.php">
                        <h4>Guía para la decoración de tu hogar</h4>
                        <p class="informacion-meta">Escrito el: <span>02/02/2022</span> por <span>Administrador</span></p>
                        <p>Consejos para contruir una terraza en el techo de tu casa con los mejores materiales y a bajo costo </p>
                    </a>
                </div>
            </article>
        </section>

        <section class="testimoniales">
            <h3>Testimoniales</h3>
            <div class="testimonial">
                <blockquote>
                    Laboris aliquip ea ea labore.In culpa do minim culpa ad exercitation ea consectetur aliqua ipsum exercitation.
                </blockquote>
                <p>-Ricardo García</p>
            </div>
        </section>
    </div>

<?php
    incluirTemplate('footer');
?>