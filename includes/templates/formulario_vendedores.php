<fieldset>
  <legend> informacion General </legend>

  <?php echo isset($errores['nombre']) ? '<div class="alerta error">' . $errores['nombre'] . '</div>' : ''; ?>
  <label for="nombre">Nombre</label>
  <input type="text" id="nombre" name="vendedor[nombre]" placeholder="Nombre vededor(a)" value="<?php echo s($vendedor->nombre); ?>">
  <?php echo isset($errores['apellido']) ? '<div class="alerta error">' . $errores['apellido'] . '</div>' : ''; ?>
  <label for="apellido">Apellido</label>
  <input type="text" id="apellido" name="vendedor[apellido]" placeholder="Apellido vededor(a)" value="<?php echo s($vendedor->apellido); ?>">

</fieldset>

<fieldset>
  <legend>Informacion Extra</legend>

  <?php echo isset($errores['telefono']) ? '<div class="alerta error">' . $errores['telefono'] . '</div>' : ''; ?>
  <label for="telefono">Telefono</label>
  <input type="text" id="telefono" name="vendedor[telefono]" placeholder="1234567895" value="<?php echo s($vendedor->telefono) ?>">
</fieldset>