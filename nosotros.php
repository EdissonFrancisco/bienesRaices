<?php
  require 'includes/funciones.php';
  incluirTemplate('header');
?>

  <main class="contenedor seccion">
    <h1>Conoce sobre nosotros</h1>
    <div class="contenido-nosotros">
      <div class="imagen">
        <picture>
          <source srcset="build/img/nosotros.webp" type="imagen/web">
          <source srcset="build/img/nosotros.jpg" type="imagen/jpeg">
          <img loading="lazy" src="build/img/nosotros.jpg" alt="entrada de blog">
        </picture>
      </div>
      <div class="texto-nosotros">
        <blockquote> 25 años de experiencia </blockquote>
        <p>
          Mi ipsum faucibus vitae aliquet nec. Blandit aliquam etiam erat velit. Ac tortor dignissim convallis aenean et.
          Donec enim diam vulputate ut. Sed id semper risus in hendrerit. Felis donec et odio pellentesque diam volutpat
          commodo sed egestas. Arcu ac tortor dignissim convallis.
        </p>
        <p>
          Diam sollicitudin tempor id eu nisl nunc mi. Lorem donec massa sapien faucibus. Volutpat ac tincidunt vitae
          semper. Gravida dictum fusce ut placerat orci nulla pellentesque dignissim enim. Et ultrices neque ornare aenean
          euismod elementum nisi quis eleifend.
        </p>
      </div>
    </div>
  </main>

  <section class="contenedor seccion">
    <h3>Mas sobre nosotros</h3>
    <div class="iconos-nosotros">
      <div class="icono">
        <img src="build/img/icono1.svg" alt="icono seguridad" loading="lazy">
        <h3>Seguridad</h3>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
          magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat.
        </p>
      </div> <!--.icono -->

      <div class="icono">
        <img src="build/img/icono2.svg" alt="icono Precio" loading="lazy">
        <h3>Precio</h3>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
          magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat.
        </p>
      </div> <!--.icono -->

      <div class="icono">
        <img src="build/img/icono3.svg" alt="icono Tiempo" loading="lazy">
        <h3>A Tiempo</h3>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
          magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat.
        </p>
      </div> <!--.icono -->
    </div>
  </section>

<?php incluirTemplate('footer');?>
