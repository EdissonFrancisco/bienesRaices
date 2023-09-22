<?php
require_once __DIR__ . "/../includes/app.php";
use MVC\Router;
use Controllers\PropiedadController;

$router = new Router();

/* PropiedadController::class => trae el namespace donde esta la funcion,
 * y se identifica en que clase se encuentra el metodo
 * [PropiedadController::class, 'index'] en su forma completa me dice
 * en el controlador busca el metodo index
 * */

$router->get('/admin', [PropiedadController::class, 'index']);
$router->get('/propiedades/crear', [PropiedadController::class, 'crear']);
$router->post('/propiedades/crear', [PropiedadController::class, 'crear']);
$router->get('/propiedades/actualizar', [PropiedadController::class, 'actualizar']);
$router->post('/propiedades/actualizar', [PropiedadController::class, 'actualizar']);
$router->post('/propiedades/eliminar', [PropiedadController::class, 'eliminar']);

$router->comprobarRutas();