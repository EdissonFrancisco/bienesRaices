<?php
  require 'includes/funciones.php';
  incluirTemplate('header');
?>

  <main class="contenedor seccion contenido-centrado">
    <h1> Una guia para la decoracion de tu hogar </h1>
    <div class="imagen">
      <picture>
        <source srcset="build/img/destacada2.webp" type="imagen/web">
        <source srcset="build/img/destacada2.jpg" type="imagen/jpeg">
        <img loading="lazy" src="build/img/destacada2.jpg" alt="anuncio casa en venta">
      </picture>
      <p class="informacion-meta">Escrito el: <span>20/14/2023</span> por: <span>Admin</span> </p>
    </div>
    <div class="resumen-prpiedad">
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
