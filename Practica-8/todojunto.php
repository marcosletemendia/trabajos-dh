<?php

$funcionesEjecutadas = 0;

include("funciones.php");
include( "superficie.php");

function trescirculos($radio1, $radio2, $radio3){
  return max(circulo($radio1), circulo($radio2), circulo($radio3));
}

echo "4) " . trescirculos(4,6,9) . "<br>";

echo "5) " . $funcionesEjecutadas . "<br>";

$find = "Me encanta php, a mi también me encanta php!";
$findme ="php";
echo "6) " . strpos($find, $findme) . "<br>";
