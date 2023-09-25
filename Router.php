<?php
namespace MVC;
class Router {
  public $rutasGET = [];
  public $rutasPOST = [];

  //son las url's que van a reaccionar a un metodo get
  // va a resivir la url y la funcion asociada a la url
  public function get($url, $fn) {
    $this->rutasGET[$url] = $fn;
  }
  public function post($url, $fn) {
    $this->rutasPOST[$url] = $fn;
  }

  //registro de rutas que soporta la app
  public function comprobarRutas() {
    session_start();
    $auth = $_SESSION['login'] ?? NULL;
    //arreglo de rutas protegidas
    $rutasProtegidas = ['/admin', '/propiedades/crear', '/propiedades/actualizar', '/propiedades/eliminar',
      '/vendedores/crear','/vendedores/actualizar', '/vendedores/eliminar'];

    $urlActual = $_SERVER['PATH_INFO'] ?? '/';
    $metodo = $_SERVER['REQUEST_METHOD'];

    if ($metodo === 'GET') {
      $fn = $this->rutasGET[$urlActual] ?? null;
    } else {
      $fn = $this->rutasPOST[$urlActual] ?? null;
    }

    //proteger las rutas
    if (in_array($urlActual, $rutasProtegidas) && !$auth) {
      header('Location: /');
    }

    //la url existe y tiene una funcion asociada
    if ($fn) {
      //permite llamar una funcion cuando no se sabe como se llama la funcion
      call_user_func($fn, $this);
    }  else {
      //error 404 no existe la pagina
      echo "pagina no encontrada";
    }
  }

  public function render($view, $datos = []) {
    foreach ($datos as $key => $value) {
      //$$ genera una variable con el nombre del key del array que recibe
      $$key = $value;
    }

    ob_start();//inicia el almacenamiento en memoria por un momento

    include_once __DIR__ . "/views/$view.php";

    $contenido = ob_get_clean();//limpiamos el almacenamiento

    include_once __DIR__ . "/views/layout.php";
  }
}