<?php
  require 'includes/funciones.php';
  incluirTemplate('header');
?>

  <main class="contenedor seccion contenido-centrado">
    <h1>Casa en venta frente al bosque</h1>
    <div class="imagen">
      <picture>
        <source srcset="build/img/destacada.webp" type="imagen/web">
        <source srcset="build/img/destacada.jpg" type="imagen/jpeg">
        <img loading="lazy" src="build/img/destacada.jpg" alt="anuncio casa en venta">
      </picture>
    </div>
    <div class="resumen-prpiedad">
      <p class="precio">$3.569.999 </p>
      <ul class="iconos-caracteristicas">
        <li>
          <img loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
          <p>3</p>
        </li>
        <li>
          <img loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
          <p>3</p>
        </li>
        <li>
          <img loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono hbitaciones">
          <p>5</p>
        </li>
      </ul>
      <p>
        Sed viverra tellus in hac. Feugiat in fermentum posuere urna nec tincidunt praesent semper feugiat. Fermentum
        leo vel orci porta non pulvinar neque laoreet. Turpis egestas pretium aenean pharetra magna ac placerat
        vestibulum. Semper quis lectus nulla at volutpat diam. In iaculis nunc sed augue lacus viverra vitae. Dolor
        magna eget est lorem ipsum dolor sit amet consectetur.<br>
        Sit amet tellus cras adipiscing enim. Diam quam nulla porttitor massa id. Donec et odio pellentesque diam
        volutpat. Et odio pellentesque diam volutpat commodo sed. Nunc sed augue lacus viverra vitae congue eu. Viverra
        adipiscing at in tellus. Volutpat consequat mauris nunc congue nisi vitae suscipit. Faucibus et molestie ac
        feugiat sed. Nunc consequat interdum varius sit. Quam nulla porttitor massa id neque.
      </p>
      <p>
        Eget est lorem ipsum dolor sit amet. Tempus quam pellentesque nec nam aliquam sem et tortor consequat. Nam
        aliquam sem et tortor consequat id porta nibh. Vitae elementum curabitur vitae nunc sed velit. Hac habitasse
        platea dictumst quisque. Aliquam eleifend mi in nulla posuere sollicitudin aliquam ultrices. Nec sagittis
        aliquam malesuada bibendum arcu vitae elementum curabitur vitae.
      </p>
    </div>
  </main>

  <?php incluirTemplate('footer');?>
