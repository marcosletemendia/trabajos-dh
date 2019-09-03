<?php


function mayor($num1, $num2, $num3=100){
  global $funcionesEjecutadas;
  $funcionesEjecutadas++;
  return max($num1, $num2, $num3);
}

echo "1a) " . mayor(1,2) . "<br>";

function tabla($base, $limite=100){
  global $funcionesEjecutadas;
  $funcionesEjecutadas++;
  $array=[];
  for ($i=$base; $i <= $limite; $i++) {
      $array[]=$i;
  }
  return $array;
}

var_dump(tabla(85));
