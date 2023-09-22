<?php

  if (isset($_SESSION)) {
    session_start();
  }

  $auth = $_SESSION['login'] ?? false;

?>

<!doctype html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="stylesheet" href="/../../build/css/app.css">

  <title>Bienes Raices</title>
</head>
<body>
<header class="header <?php echo $inicio ? 'inicio' : ''; ?> ">
  <div class="contenedor contenido-header">
    <div class="barra">
      <a href="/../../index.php">
        <img class="imagen-logo" src="/../../build/img/logo.svg" alt="logotipo Bienes raices">
      </a>
      <div class="mobile-menu">
        <img src="/../../build/img/barras.svg" alt="icono mnu responsive">
      </div>
      <div class="derecha">
        <img class="dark-mode-boton" src="/../../build/img/dark-mode.svg" alt="boton modo oscuro">
        <nav class="navegacion">
          <a href="/../../nosotros.php">Nosotros</a>
          <a href="/../../anuncios.php">Anuncios</a>
          <a href="/../../blog.php">blog</a>
          <a href="/../../contacto.php">Contacto</a>
          <?php if ($auth) {  ?>
            <a href="/../../cerrarSesion.php">Cerrar Sesion</a>
          <?php } else if(!$auth) { ?>
            <a href="/../../login.php">Iniciar Sesion</a>
          <?php }?>
        </nav>
      </div>
    </div><!--.barra -->

    <?php if ($inicio) { ?>
      <h1>Venta de casas y departamentos Exclusivos de lujo</h1>
    <?php } ?>
  </div>
</header>