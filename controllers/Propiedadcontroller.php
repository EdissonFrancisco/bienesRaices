<?php

namespace Controllers;

use MVC\Router;
use Model\Propiedad;
use Model\Vendedor;
use Intervention\Image\ImageManagerStatic as Image;

class PropiedadController {

  /* Router $router -> de esta forma se pasa la referencia de
   * public index a propiedadcontroller y no se pierden datos
   * */
  public static function index(Router $router) {
    $propiedades = Propiedad::all();
    $vendedores = Vendedor::all();

    // Muestra mensaje condicional
    $resultado = $_GET['resultado'] ?? null;

    $router->render('propiedades/admin', [
      "propiedades" => $propiedades,
      "resultado" => $resultado,
      "vendedores" => $vendedores
    ]);
  }

  public static function crear(Router $router) {
    $propiedad = new Propiedad();
    $vendedores = Vendedor::all();
    //Arreglo con mensajes de error
    $errores = Propiedad::getErrores();

    //Metodo post para actualizar
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      /** crea una nueva instancia de propiedad */
      $propiedad = new Propiedad($_POST['propiedad']);

      /** generar nombre unico para la imagen */
      $nombreImagen = md5( uniqid( rand(), true ) ) . ".jpg";

      /** setea la imagen y Raalizar un resize a la imagen con intervention */
      if ($_FILES['propiedad']['tmp_name']['imagen']) {
        $image = Image::make($_FILES['propiedad']['tmp_name']['imagen'])->fit(800, 600);
        $propiedad->setImagen($nombreImagen);
      }

      //validacion de errores
      $errores = $propiedad->validar();

      //revisar que el arreglo de errores este vacio
      if (empty($errores)) {
        /** crea una carpeta imagenes si no existe */
        if (!is_dir(CARPETA_IMAGENES)) {
          mkdir(CARPETA_IMAGENES, 0777, true);
        }

        //guardar imagen en el servidor
        $image->save(CARPETA_IMAGENES . $nombreImagen);

        //Guardar en la bd
        $propiedad->guardar();
      }
    }

    $router->render('propiedades/crear', [
      "propiedad" => $propiedad,
      "vendedores" => $vendedores,
      "errores" => $errores
    ]);
  }

  public static function actualizar(Router $router) {
    $id = validarRedireccionar('/admin');
    $propiedad = Propiedad::find($id);
    $vendedores = Vendedor::all();
    //Arreglo con mensajes de error
    $errores = Propiedad::getErrores();

    //ejecuta el codigo despues de que el usuario envia el formulario
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      //asignar los atributos
      $args = $_POST['propiedad'];
      $propiedad->sincronizar($args);

      //validacion de errores
      $errores = $propiedad->validar();

      /** generar nombreunico para la imagen */
      $nombreImagen = md5(uniqid(rand(), true)) . ".jpg";

      //subida de archivos
      if ($_FILES['propiedad']['tmp_name']['imagen']) {
        $image = Image::make($_FILES['propiedad']['tmp_name']['imagen'])->fit(800,600);
        $propiedad->setImagen($nombreImagen);
      }

      //revisar que el arreglo de errores este vacio
      if (empty($errores)) {
        //guardar imagen en el servidor
        if ($_FILES['propiedad']['tmp_name']['imagen']) {
          $image->save(CARPETA_IMAGENES . $nombreImagen);
        }

        $propiedad->guardar();
      }
    }

    $router->render('/propiedades/actualizar', [
      "propiedad" => $propiedad,
      "vendedores" => $vendedores,
      "errores" => $errores
    ]);
  }

  public static function eliminar() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $id = validarRedireccionar('/admin');
      if ($id) {
        $tipo = $_POST['tipo'];
        if (validarTipoContenido($tipo)) {
          //comparo lo que se va a eliminar
          if ($tipo === 'propiedad') {
            $propiedad = Propiedad::find($id);//find busca un registro en la db
            $propiedad->eliminar();
          }
        }
      }
    }
  }
}
