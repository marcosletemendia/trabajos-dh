<?php

function validarRegistro($datos){

  $errores=[];
  $datosFinales=[];

  foreach ($datos as $key => $value) {
    // No trimear con contraseñas y selects
    $datosFinales[$key]=trim($value);
  }


  // VALIDAR

  // NOMBRE
  if (strlen($datos["nombre"])==0) {
    $errores["nombre"]="Complete su nombre";
  } else if (!ctype_alpha($datosFinales["nombre"])){
    $errores["nombre"]="Ingrese caracteres alfabeticos";
  }

  // EMAIL
  if (strlen($datosFinales["email"])==0) {
    $errores["email"]="Ingrese su email";
  } else if (filter_var($datosFinales["email"], filter_validate_email)==false) {
    $errores["email"]="Ingrese un email valido";
  }

  // PASSWORD
  if (strlen($datosFinales["contraseña"])>4) {
    $errores["contraseña"]="La contraseña debe tener por lo menos 4 caracteres";
  }

  // CONFIRMAR PASSWORD
  if ($datosFinales["contraseña"]!=$datosFinales["confirmar-contraseña"]) {
    $errores["confirmar-contraseña"]="Las contraseñas no coinciden";
  }

  return $errores;
}
