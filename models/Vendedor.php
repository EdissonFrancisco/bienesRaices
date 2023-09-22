<?php

namespace Model;

class Vendedor extends ActiveRecord {
  protected static $tabla = 'vendedores';
  protected static $columnasDB = ['id', 'nombre', 'apellido', 'telefono'];

  public $id;
  public $nombre;
  public $apellido;
  public $telefono;

  public function __construct( $args = [] )
  {
    $this->id = $args['id'] ?? NULL;
    $this->nombre = $args['nombre'] ?? '';
    $this->apellido = $args['apellido'] ?? '';
    $this->telefono = $args['telefono'] ?? '';
  }

  public function validar()
  {
    if (!$this->titulo) {
      self::$errores['nombre'] = "Nombre Obligatorio";
    }
    if (!$this->titulo) {
      self::$errores['apellido'] = "Apellido Obligatorio";
    }
    if (!$this->titulo) {
      self::$errores['telefono'] = "Telefono Obligatorio";
    }
    if (!preg_match('/[0-9]{10}/', $this->telefono)) {
      self::$errores['telefono'] = "Formato telefono no valido";
    }

    return self::$errores;
  }
}

