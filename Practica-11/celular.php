<?php


class Celular
{
  private $marca;
  private $modelo;
  private $proveedor;
  private $telefono;

  public function getMarca(){
    return $this->marca;
  }

  public function getModelo(){
    return $this->modelo;
  }

  public function getProveedor(){
    return $this->proveedor;
  }

  public function getTelefono(){
    return $this->telefono;
  }

  public function setMarca($marca){
    $this->marca = $marca;
  }

  public function setModelo($modelo){
    $this->modelo = $modelo;
  }

  public function setProveedor($proveedor){
    $this->proveedor = $proveedor;
  }

  public function setTelefono($telefono){
    $this->telefono = $telefono;
  }


  function __construct($marca, $modelo, $proveedor, $telefono)
  {
    $this->marca = $marca;
    $this->modelo = $modelo;
    $this->proveedor = $proveedor;
    $this->telefono =$telefono;
  }
}
