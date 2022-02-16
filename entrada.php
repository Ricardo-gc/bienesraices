<?php
    require 'includes/funciones.php';
    $inicio = true;
    incluirTemplate('header');
?>
    <main class="contenedor seccion contenido-centrado">
        <h1>Guía para la decoracion de tu hogar</h1>
        <picture>
            <source srcset="build/img/destacada2.webp" type="image/webp">
            <source srcset="build/img/destacada2.jpg" type="image/jpeg">
            <img src="build/img/destacada2.jpg" alt="Imagen casa" loading="lazy">
        </picture>
        <p class="informacion-meta">Escrito el <span>02/02/2022</span> por: <span>Ricardo García</span></p>
        <div>
            <p>Velit dolore laborum aliqua sunt ea cillum. Commodo deserunt eu magna ipsum cupidatat do nulla. Commodo reprehenderit et eiusmod officia ad consectetur esse aute id deserunt in excepteur tempor duis. Duis amet ullamco sunt non velit commodo exercitation sunt nulla ullamco nisi veniam exercitation. Reprehenderit aliquip duis nostrud veniam ullamco ipsum ipsum ipsum est laborum. Qui sint laboris pariatur magna ea id consectetur et voluptate eiusmod enim amet reprehenderit.</p>
            <p>Velit dolore laborum aliqua sunt ea cillum. Commodo deserunt eu magna ipsum cupidatat do nulla. Commodo reprehenderit et eiusmod officia ad consectetur esse aute id deserunt in excepteur tempor duis. Duis amet ullamco sunt non velit commodo exercitation sunt nulla ullamco nisi veniam exercitation. Reprehenderit aliquip duis nostrud veniam ullamco ipsum ipsum ipsum est laborum. Qui sint laboris pariatur magna ea id consectetur et voluptate eiusmod enim amet reprehenderit.</p>
        </div>
    </main>

<?php
    incluirTemplate('footer');
?>