<?php
include("usuario.php");
include("celular.php");

$usuario = new Usuario("tomas", "horrible@gmail.com", "5678");

$usuario2 = new Usuario("Marcos","marcos@gmail.com", "1234");

$usuario->saludar();
$usuario2->saludar();


$usuario2->setPass("gilofeo");

$iphone = new Celular("Apple", "SE", "Movistar", "1140819288");
$motog = new Celular("Motorola", "4", "Personal", "1161174003");

$usuario->setCelular($motog);
$usuario2->setCelular($iphone);

var_dump($usuario->mostrarTelefono());
var_dump($usuario2->mostrarTelefono());


var_dump($usuario, $usuario2);
