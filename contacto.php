<?php
  require 'includes/funciones.php';
  incluirTemplate('header');
?>

  <main class="contenedor seccion ">
    <h1>Contactanos</h1>
    <div class="imagen imagen-formulario">
      <picture>
        <source srcset="build/img/blog1.webp" type="imagen/web">
        <source srcset="build/img/blog1.jpg" type="imagen/jpeg">
        <img loading="lazy" src="build/img/blog1.jpg" alt="entrada de blog">
      </picture>
    </div>
    <div class="contenedor-formulario">
      <P>Llena el formulario de contacto</P>
      <form class="formulario">
        <fieldset class="info-personal">
          <legend>Informacion Personal</legend>

          <label for="nombre">Nombre</label>
          <input type="text" placeholder="Tu nombre" id="nombre">

          <label for="email">Correo</label>
          <input type="email" placeholder="abcd@gmail.com" id="email">

          <label for="telefono">Telefono de contacto</label>
          <input type="tel" placeholder="Tu telefono" id="telefono">

          <label for="mensaje">Mensaje</label>
          <textarea id="mensaje" cols="30" rows="10"></textarea>
        </fieldset>
        <fieldset class="info-propiedad">
          <legend>Informacion Sobre la propiedad</legend>

          <label for="opciones">Vende o Compra</label>
          <select id="opciones">
            <option value="" disabled selected>-- seleccione --</option>
            <option value="compra">Comprar</option>
            <option value="vende">Vender</option>
          </select>

          <label for="presupuesto">Presio o Presupuesto</label>
          <input type="number" placeholder="Tu Presio o Presupuesto" id="presupuesto">
        </fieldset>
        <fieldset class="info-contactar">
          <legend>Contacto</legend>
          <p>Como desea ser contactado</p>

          <div class="forma-contacto">
            <label for="contactar-telefono">Telefono</label>
            <input name="contacto" type="radio" value="telefono" id="contactar-telefono">
            <label for="contactar-email">Email</label>
            <input name="contacto" type="radio" value="email" id="contactar-email">
          </div>
          <p>Si eligio telefono, elija la fecha y la hora</p>
          <label for="fecha">Fecha</label>
          <input type="date" id="fecha">
          <label for="hora">Hora</label>
          <input type="time" id="hora" min="09:00" max="18:00">
        </fieldset>

        <input type="submit" value="enviar" class="boton-verde boton-formulario">
      </form>
    </div>

  </main>

<?php incluirTemplate('footer');?>
