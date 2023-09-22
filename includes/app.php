<?php
//este es el archivo principal que llama a funciones y clases

require 'funciones.php';
require 'config/database.php';
require __DIR__ . '/../vendor/autoload.php';

//conectar  la base de datos
$db = conectarBD();

use Model\ActiveRecord;

ActiveRecord::setDB($db);



