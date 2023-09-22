<main class="contenedor seccion">
  <h1>Administrador de bienes raices</h1>

  <?php
    if ($resultado) {
      $mensaje = mostrarNotificacion(intval($resultado));
      if($mensaje) { ?>
        <p class="alerta exito"> <?php echo s($mensaje); ?> </p>
  <?php }
    }?>

  <a href="../propiedades/crear" class="boton boton-verde">Nueva Propiedad</a>
  <a href="../vendedores/crear" class="boton boton-amarillo">Nuevo Vendedor</a>

  <h2>Propiedades</h2>

  <table class="propiedades">
    <thead>
    <tr>
      <th>#</th>
      <th>Titulo</th>
      <th>Imagen</th>
      <th>Precio</th>
      <th>Aciones</th>
    </tr>
    </thead>
    <tbody><!-- Mostrar resultados -->
    <?php foreach( $propiedades as $propiedad ) : ?>
      <tr>
        <td><?php echo $propiedad->id; ?></td>
        <td><?php echo $propiedad->titulo; ?></td>
        <td> <img src="../imagenes/<?php echo $propiedad->imagen; ?>"
                  alt="imagen de la casa en venta" class="imagen-tabla"> </td>
        <td><?php echo $propiedad->precio; ?></td>
        <td class="table-acciones">
          <form method="POST" action="/propiedades/eliminar">
            <input type="hidden" name="id" value="<?php echo $propiedad->id ?>">
            <input type="hidden" name="tipo" value="propiedad">
            <input type="submit" value="Eliminar" class="boton-rojo-block">
          </form>
          <a href="/propiedades/actualizar?id=<?php echo $propiedad->id; ?>"
             class="boton-amarillo-block"> Actualizar </a>
        </td>
      </tr>
    <?php endforeach; ?>
    </tbody>
  </table>
</main>