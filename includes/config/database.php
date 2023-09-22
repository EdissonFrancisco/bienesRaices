<?php

function conectarBD() : mysqli {
  $db = mysqli_connect('localhost', 'root', 'root', 'crud_bienesraices');

  if (!$db) {
    echo 'ERROR DE CONEXION';
    exit;
  }
  return $db;
}