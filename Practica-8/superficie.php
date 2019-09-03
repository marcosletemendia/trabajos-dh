<?php

function triangulo($base, $altura){
  global $funcionesEjecutadas;
  $funcionesEjecutadas++;
  return ($base*$altura)/2;
}

echo "2a) " . triangulo (10, 15) . "<br>";


function rectangulo($base, $altura){
  global $funcionesEjecutadas;
  $funcionesEjecutadas++;
  return $base*$altura;
}

echo "2b) " . rectangulo(2,4) . "<br>";

function cuadrado($base, $altura){
  global $funcionesEjecutadas;
  $funcionesEjecutadas++;
  return rectangulo($base, $altura);
}

echo "2c) " . cuadrado(2,3) . "<br>";

function circulo($radio){
  global $funcionesEjecutadas;
  $funcionesEjecutadas++;
  return pi()*$radio*$radio;
}

echo "2d) " . circulo(2) . "<br> ";
