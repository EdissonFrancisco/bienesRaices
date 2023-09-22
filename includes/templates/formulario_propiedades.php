<fieldset>
  <legend> informacion General </legend>

  <?php echo isset($errores['titulo']) ? '<div class="alerta error">' . $errores['titulo'] . '</div>' : ''; ?>
  <label for="titulo">Titulo</label>
  <input type="text" id="titulo" name="propiedad[titulo]" placeholder="Titulo Propiedad" value="<?php echo s($propiedad->titulo); ?>">

  <?php echo isset($errores['precio']) ? '<div class="alerta error">' . $errores['precio'] . '</div>' : ''; ?>
  <label for="precio">Precio</label>
  <input type="number" id="precio" name="propiedad[precio]" placeholder="Precio Propiedad" value="<?php echo $propiedad->precio; ?>">

  <?php echo isset($errores['errorImagen']) ? '<div class="alerta error">' . $errores['errorImagen'] . '</div>' : ''; ?>
  <label for="imagen">Imagen</label>
  <input type="file" id="imagen" name="propiedad[imagen]" accept="image/jpeg, image/png">

  <?php if ($propiedad->imagen) { ?>
    <img class="img-small" src="/imagenes/<?php echo $propiedad->imagen ?> ">
  <?php } ?>

  <?php echo isset($errores['descripcion']) ? '<div class="alerta error">' . $errores['descripcion'] . '</div>' : ''; ?>
  <label for="descripcion">Descripcion</label>
  <textarea id="descripcion" name="propiedad[descripcion]" ><?php echo $propiedad->descripcion; ?></textarea>
</fieldset>

<fieldset>
  <legend>Informacion Propiedad</legend>

  <?php echo isset($errores['habitaciones']) ? '<div class="alerta error">' . $errores['habitaciones'] . '</div>' : ''; ?>
  <label for="habitaciones">Habitaciones</label>
  <input type="number" id="habitaciones" name="propiedad[habitaciones]" value="<?php echo $propiedad->habitaciones ?>" placeholder="Ejp: 3" min="1" max="9">

  <?php echo isset($errores['wc']) ? '<div class="alerta error">' . $errores['wc'] . '</div>' : ''; ?>
  <label for="wc">Baños</label>
  <input type="number" id="wc" name="propiedad[wc]" value="<?php echo $propiedad->wc; ?>" placeholder="Ejp: 3" min="1" max="9">

  <?php echo isset($errores['estacionamiento']) ? '<div class="alerta error">' . $errores['estacionamiento'] . '</div>' : ''; ?>
  <label for="garage">Estacionamientos</label>
  <input type="number"
         id="garaje"
         name="propiedad[estacionamiento]"
         value="<?php echo $propiedad->estacionamiento; ?>"
         placeholder="Ejp: 3"
         min="0"
         max="9">
</fieldset>

<fieldset>
  <legend>Vendedor</legend>

  <label for="vendedor"> Vendedor </label>
  <select name="propiedad[vendedores_id]" id="vendedor">
    <option selected value="">-- Seleccione --</option>
    <?php foreach ($vendedores as $vendedor) { ?>
      <option <?php  echo $propiedad->vendedores_id === $vendedor->id ? 'selected' : ''; ?>
              value="<?php echo s($vendedor->id); ?>">
        <?php echo s($vendedor->nombre) . " " . s($vendedor->apellido) ?>
      </option>
    <?php } ?>
  </select>

</fieldset>