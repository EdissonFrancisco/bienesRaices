<?php
namespace Model;
class ActiveRecord {
  //base de datos
  protected static $db;
  protected static $tabla = '';
  protected static $columnasDB = [];

  //erres validacion de rrores
  protected static $errores = [];

  //definir coneccion a bd
  public static function setDB($database) {
    self::$db = $database;
  }
  // Registros - CRUD
  public function guardar() {
    if (!is_null($this->id)) {
      $this->actualizar();
    } else {
      $this->crear();
    }
  }

  //funciones con crud para las propiedades crear actualizar eliminar
  public function crear() {
    //sanitizar datos
    $atributos = $this->sanitizarDatos();

    //insertar a la base de datos
    $query = "INSERT INTO " . static::$tabla . " ( ";
    $query .= join(', ', array_keys($atributos));
    $query .= " ) VALUES (' ";
    $query .= join("', '", array_values($atributos));
    $query .= " '); ";
    $resultado = self::$db->query($query);

    //mensaje de exito
    if ($resultado) {
      //redirecionamiento de usuario para evitar duplicado de entradas
      header("Location: /admin?resultado=1");
    }
  }

  public function actualizar() {
    //sanitizar datos
    $atributos = $this->sanitizarDatos();

    $valores = [];

    foreach ($atributos as $key => $value) {
      $valores[] = "{$key} = '{$value}'";
    }

    $query = "UPDATE " . static::$tabla . " SET ";
    $query .= join(', ', $valores);
    $query .= " WHERE id = '" . self::$db->escape_string($this->id) . "' ";
    $query .= " LIMIT 1;";

    $resultado = self::$db->query($query);

    if ($resultado) {
      //redirecionamiento de usuario para evitar duplicado de entradas
      header("Location: /admin?resultado=2");
    }
  }

  public function eliminar() {
    $query = "DELETE FROM " . static::$tabla .
      " WHERE id = " . self::$db->escape_string($this->id) .
      " LIMIT 1;";
    $resultado = self::$db->query($query);

    if ($resultado) {
      $this->borrarImagen();
      header("Location: /admin?resultado=3");
    }
  }
  //FIN funciones con crud

  //este esta encargado de iterar sobre el array $columnasDB
  public function atributos(): array {
    $atributos = [];
    foreach (static::$columnasDB as $columna){
      if ($columna === 'id') continue;
      $atributos[$columna] = $this->$columna;
    }
    return $atributos;
  }

  //encargada de la sanitizacion de los datos
  public function sanitizarDatos(): array {
    $atributos = $this->atributos();
    $sanitizando = [];
    foreach ($atributos as $key => $value) {
      $sanitizando[$key] = self::$db->escape_string($value);
    }
    return $sanitizando;
  }

  //subida de archivos
  public function setImagen($imagen) {
    //eliminala imagen previa
    if ( !is_null($this->id) ) {
      $this->borrarImagen();
    }

    //asignar nombre de la imagen al atributo imagen del constructor
    if ($imagen) {
      $this->imagen = $imagen;
    }
  }

  //Elimina archivo de imagen
  public function borrarImagen(){
    //comprobar que exista el archivo
    $existeArchivo = file_exists(CARPETA_IMAGENES . $this->imagen);
    if ($existeArchivo) {
      unlink(CARPETA_IMAGENES . $this->imagen);
    }
  }

  //validacion de errores getErrores retorna los errores validar() llena el arrego con los errores
  public static function getErrores(): array {
    return static::$errores;
  }
  public function validar() {
    static::$errores = [];
    return static::$errores;
  }

  //lista todos los registros
  public static function all() {
    $query = "SELECT *  FROM " . static::$tabla;

    $resultado = self::consultarSQL($query);

    return $resultado;
  }

  //Obtiene un numero determinado de registros
  public static function get($cantidad) {
    $query = "SELECT *  FROM " . static::$tabla . " LIMIT {$cantidad};";

    $resultado = self::consultarSQL($query);

    return $resultado;
  }

  // Busca un registro por su id
  public static function find($id) {
    $query = "SELECT * FROM " . static::$tabla  ." WHERE id = {$id}";

    $resultado = self::consultarSQL($query);

    return array_shift( $resultado ) ;
  }

  //envia una consulta o query a la bd
  public static function consultarSQL($query) {
    //consultar la bd
    $resultado = self::$db->query($query);

    //iterar los resultados
    $array = [];
    while ($registro = $resultado->fetch_assoc()) {
      $array[] = static::crearObjeto($registro);
    }
    //libera la memoria
    $resultado->free();
    //retornar los resultados
    return $array;
  }

  protected static function crearObjeto($registro) {
    $objeto = new static;

    foreach($registro as $key => $value ) {
      $key = strtolower($key);
      if(property_exists( $objeto, $key  )) {
        $objeto->$key = $value;
      }
    }
    return $objeto;
  }

  //sincroniza el objeto en memoria por lo cambios realizados por el usuario
  public function sincronizar( $args =[] ) {
    foreach ($args as $key => $value) {
      if (property_exists($this, $key) && !is_null($value)) {
        $this->$key = $value;
      }
    }
  }

}