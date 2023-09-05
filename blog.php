<?php
  require 'includes/funciones.php';
  incluirTemplate('header');
?>

  <main class="contenedor seccion contenido-centrado">
    <h1>Nuestro Blog</h1>
    <article class="entrada-blog">
      <div class="imagen">
        <picture>
          <source srcset="build/img/blog1.webp" type="imagen/web">
          <source srcset="build/img/blog1.jpg" type="imagen/jpeg">
          <img loading="lazy" src="build/img/blog1.jpg" alt="entrada de blog">
        </picture>
      </div>
      <div class="texto-entrada">
        <a href="entrada.php">
          <h4>Terraza en el techo de tu casa</h4>
          <p>Escrito el: <span>20/10/2023</span> por: <span>Admin</span> </p>
          <p>
            Consejos para construir una terraza en eltecho de tu casa con los mejores materiales
            y ahorrando dinero.
          </p>
        </a>
      </div>
    </article> <!-- .entrada-blog -->

    <article class="entrada-blog">
      <div class="imagen">
        <picture>
          <source srcset="build/img/blog2.webp" type="imagen/web">
          <source srcset="build/img/blog2.jpg" type="imagen/jpeg">
          <img loading="lazy" src="build/img/blog2.jpg" alt="entrada de blog">
        </picture>
      </div>
      <div class="texto-entrada">
        <a href="entrada.php">
          <h4>Guia para la decoracion de tu hogar</h4>
          <p>Escrito el: <span>20/10/2023</span> por: <span>Admin</span> </p>
          <p>
            Maximiza el espacio en tu horgar con esta guia, aprende a cambiar muebles
            y colores para darle vida a tu espacio.
          </p>
        </a>
      </div>
    </article> <!-- .entrada-blog -->

    <article class="entrada-blog">
      <div class="imagen">
        <picture>
          <source srcset="build/img/blog3.webp" type="imagen/web">
          <source srcset="build/img/blog3.jpg" type="imagen/jpeg">
          <img loading="lazy" src="build/img/blog3.jpg" alt="entrada de blog">
        </picture>
      </div>
      <div class="texto-entrada">
        <a href="entrada.php">
          <h4>Terraza en el techo de tu casa</h4>
          <p>Escrito el: <span>20/10/2023</span> por: <span>Admin</span> </p>
          <p>
            Consejos para construir una terraza en eltecho de tu casa con los mejores materiales
            y ahorrando dinero.
          </p>
        </a>
      </div>
    </article> <!-- .entrada-blog -->

    <article class="entrada-blog">
      <div class="imagen">
        <picture>
          <source srcset="build/img/blog4.webp" type="imagen/web">
          <source srcset="build/img/blog4.jpg" type="imagen/jpeg">
          <img loading="lazy" src="build/img/blog4.jpg" alt="entrada de blog">
        </picture>
      </div>
      <div class="texto-entrada">
        <a href="entrada.php">
          <h4>Guia para la decoracion de tu hogar</h4>
          <p>Escrito el: <span>20/10/2023</span> por: <span>Admin</span> </p>
          <p>
            Maximiza el espacio en tu horgar con esta guia, aprende a cambiar muebles
            y colores para darle vida a tu espacio.
          </p>
        </a>
      </div>
    </article> <!-- .entrada-blog -->
  </main>

<?php incluirTemplate('footer');?>
