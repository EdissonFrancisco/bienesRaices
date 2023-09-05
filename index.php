<?php
  require 'includes/funciones.php';
  incluirTemplate('header', $inicio = true);
?>
  <main class="contenedor seccion">
    <h1>Mas sobre nosotros</h1>
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
  </main>

  <section class="contenedor seccion">
    <h2>casas y departamentos en venta</h2>
    <div class="contenedor-anuncios">
      <div class="anuncio">
        <picture>
          <source srcset="build/img/anuncio1.webp" type="imagen/web">
          <source srcset="build/img/anuncio1.jpg" type="imagen/jpeg">
          <img loading="lazy" src="build/img/anuncio1.jpg" alt="anuncio01">
        </picture>

        <div class="contenido-anuncio">
          <h3>Casa de lujo en el lago</h3>
          <p>casa en el lago con excelente vista, acabados de lujo a un excelente precio</p>
          <p class="precio">$3.865.989</p>
          
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
              <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono hbitaciones">
              <p>5</p>
            </li>
          </ul>
          <a href="anuncio.php" class="boton-amarillo-block"> saber mas </a>
        </div><!-- .contenido-anuncio -->
      </div><!-- .anuncio -->

      <div class="anuncio">
        <picture>
          <source srcset="build/img/anuncio2.webp" type="imagen/web">
          <source srcset="build/img/anuncio2.jpg" type="imagen/jpeg">
          <img loading="lazy" src="build/img/anuncio2.jpg" alt="anuncio01">
        </picture>

        <div class="contenido-anuncio">
          <h3>Casa de ensueño</h3>
          <p>casa en el lago con excelente vista, acabados de lujo a un excelente precio</p>
          <p class="precio">$3.865.989</p>

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
              <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono hbitaciones">
              <p>5</p>
            </li>
          </ul>
          <a href="anuncio.php" class="boton-amarillo-block"> saber mas </a>
        </div><!-- .contenido-anuncio -->
      </div><!-- .anuncio -->

      <div class="anuncio">
        <picture>
          <source srcset="build/img/anuncio3.webp" type="imagen/web">
          <source srcset="build/img/anuncio3.jpg" type="imagen/jpeg">
          <img loading="lazy" src="build/img/anuncio3.jpg" alt="anuncio01">
        </picture>

        <div class="contenido-anuncio">
          <h3>Casa con piscina</h3>
          <p>casa en el lago con excelente vista, acabados de lujo a un excelente precio</p>
          <p class="precio">$3.865.989</p>

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
              <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono hbitaciones">
              <p>5</p>
            </li>
          </ul>
          <a href="anuncio.php" class="boton-amarillo-block"> saber mas </a>
        </div><!-- .contenido-anuncio -->
      </div><!-- .anuncio -->

    </div><!-- contenedor-anuncio -->

    <div class="alinear-derecha">
      <a href="anuncios.php" class="boton-verde">ver todo</a>
    </div>
  </section>

  <section class="imagen-contacto">
    <h2>Encuentra la casa de tus sueños</h2>
    <p>Llena el formulario de contacto y un asesor se pondra en contacto contigo en breve</p>
    <a href="contacto.php" class="boton-amarillo">Contactanos</a>
  </section>

  <div class="contenedor seccion seccion-inferior">
    <section class="blog">
      <h3>Nuestro blog</h3>

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
            <p class="informacion-meta">Escrito el: <span>20/10/2023</span> por: <span>Admin</span> </p>
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
            <p class="informacion-meta">Escrito el: <span>20/10/2023</span> por: <span>Admin</span> </p>
            <p>
              Maximiza el espacio en tu horgar con esta guia, aprende a cambiar muebles
              y colores para darle vida a tu espacio.
            </p>
          </a>
        </div>
      </article> <!-- .entrada-blog -->
    </section>

    <section class="testimoniales">
      <h3>Testimoniales</h3>
      <div class="testimonial">
        <blockquote>
          el personal se comporto de una excelente forma, muy buena atencion y la casa que me ofrcieron
          cumple con tdas las expectativas.
        </blockquote>
        <p>- Edisson Acero</p>
      </div>
    </section>
  </div>

<?php incluirTemplate('footer');?>
