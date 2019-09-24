<?php
class Usuario
{
  private $nombre;
  private $mail;
  private $password;
  private $celular;

  public function __construct($nombre, $mail, $password, $celular = NULL){
  $this->nombre= $nombre;
  $this->mail = $mail;
  $this->setPass($password);
  $this->celular = $celular;
  }

  public function saludar(){
    return "Hola " . $this->nombre . "<br>";
  }

  public function mostrarTelefono(){
    if ($this->celular->getMarca() == "Apple") {
      return "El telefono es marca " . $this->celular->getMarca() . " y modelo " . $this->celular->getModelo() . ", y soy fan de los iphones";
    } else {
      return "El telefono es marca " . $this->celular->getMarca() . " y modelo " . $this->celular->getModelo();
    }
  }

  public function getCelular(){
    return $this->celular;
  }

  public function setCelular($celular){
    $this->celular = $celular;
  }

  public function getNombre(){
    return $this->nombre;
  }

  public function getMail(){
    return $this->mail;
  }

  public function getPass(){
    return $this->password;
  }

  public function setNombre($nombre){
    $this->nombre = $nombre;
  }

  public function setMail($mail){
    $this->mail = $mail;
  }

  public function setPass($pass){
    $this->password = $this->encriptarPass($pass);
  }

  private function encriptarPass($pass){
    return password_hash($pass, PASSWORD_DEFAULT);
  }

}
