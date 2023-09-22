<?php

namespace Model;

class Propiedad extends ActiveRecord {
  protected static $tabla = 'propiedades';
  protected static $columnasDB = ['id', 'titulo', 'precio', 'imagen', 'descripcion', 'habitaciones', 'wc', 'estacionamiento', 'creado', 'vendedores_id'];

  public $id;
  public $titulo;
  public $precio;
  public $imagen;
  public $descripcion;
  public $habitaciones;
  public $wc;
  public $estacionamiento;
  public $creado;
  public $vendedores_id;

  public function __construct($args = [])
  {
    $this->id = $args['id'] ?? NULL;
    $this->titulo = $args['titulo'] ?? '';
    $this->precio = $args['precio'] ?? '';
    $this->imagen = $args['imagen'] ?? '';
    $this->descripcion = $args['descripcion'] ?? '';
    $this->habitaciones = $args['habitaciones'] ?? '';
    $this->wc = $args['wc'] ?? '';
    $this->estacionamiento = $args['estacionamiento'] ?? '';
    $this->creado = date('Y-m-d', time());
    $this->vendedores_id = $args['vendedores_id'] ?? '';
  }

  public function validar() {
    if (!$this->titulo) {
      self::$errores['titulo'] = "Titulo no puede ir vacio";
    }
    if (!$this->precio) {
      self::$errores['precio'] = "Precio no puede ir vacio";
    }
    if (strlen($this->descripcion) < 50) {
      self::$errores['descripcion'] = "descripcion no puede ir vacio y deve tener al menos 50 caracteres";
    }
    if (!$this->habitaciones) {
      self::$errores['habitaciones'] = "habitaciones no puede ir vacio";
    }
    if (!$this->wc) {
      self::$errores['wc'] = "Baños no puede ir vacio";
    }
    if (!$this->estacionamiento) {
      self::$errores['estacionamiento'] = "Estacionamientos no puede ir vacio";
    }
    if (!$this->vendedores_id) {
      self::$errores['vendedores_id'] = "Elije a un vendedor";
    }
    if (!$this->imagen) {
      self::$errores['errorImagen'] = "La Imagen es obligatoria";
    }

    return self::$errores;
  }
}