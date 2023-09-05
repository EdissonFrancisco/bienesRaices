<!doctype html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="stylesheet" href="/proyectos/bienesRaices/build/css/app.css">

  <title>Bienes Raices</title>
</head>
<body>
<header class="header <?php echo $inicio ? 'inicio' : ''; ?> ">
  <div class="contenedor contenido-header">
    <div class="barra">
      <a href="/proyectos/bienesRaices/index.php">
        <img src="/proyectos/bienesRaices/build/img/logo.svg" alt="logotipo Bienes raices">
      </a>
      <div class="mobile-menu">
        <img src="/proyectos/bienesRaices/build/img/barras.svg" alt="icono mnu responsive">
      </div>
      <div class="derecha">
        <img class="dark-mode-boton" src="/proyectos/bienesRaices/build/img/dark-mode.svg" alt="boton modo oscuro">
        <nav class="navegacion">
          <a href="/proyectos/bienesRaices/nosotros.php">Nosotros</a>
          <a href="/proyectos/bienesRaices/anuncios.php">Anuncios</a>
          <a href="/proyectos/bienesRaices/blog.php">blog</a>
          <a href="/proyectos/bienesRaices/contacto.php">Contacto</a>
        </nav>
      </div>
    </div><!--.barra -->

    <?php if ($inicio) { ?>
    <h1>Venta de casas y departamentos Exclusivos de lujo</h1>
    <?php } ?>
  </div>
</header>