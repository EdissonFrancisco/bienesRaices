<?php
  require '../../includes/funciones.php';
  incluirTemplate('header');
?>

  <main class="contenedor seccion">
    <h1>crear</h1>

    <a href="/proyectos/bienesRaices/admin/index.php" class="boton boton-verde">Volver</a>

    <form class="formulario">
      <fieldset>
        <legend> informacion General </legend>
        <label for="titulo">Titulo</label>
        <input type="text" id="titulo" placeholder="Titulo Propiedad">

        <label for="precio">Precio</label>
        <input type="number" id="precio" placeholder="Precio Propiedad">

        <label for="imagen">Imagen</label>
        <input type="file" id="imagen" accept="image/jpeg, image/png">

        <label for="descripcion">Descripcion</label>
        <textarea id="descripcion"></textarea>
      </fieldset>

      <fieldset>
        <legend>Informacion Propiedad</legend>
        <label for="habitaciones">Habitaciones</label>
        <input type="number" id="habitaciones" placeholder="Ejp: 3" min="1" max="9">

        <label for="wc">Baños</label>
        <input type="number" id="wc" placeholder="Ejp: 3" min="1" max="9">

        <label for="garage">Estacionamientos</label>
        <input type="number" id="garage" placeholder="Ejp: 3" min="1" max="9">

      </fieldset>
    </form>
  </main>

<?php
  incluirTemplate('footer');
?>