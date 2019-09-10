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
  } else if (filter_var($datosFinales["email"], FILTER_VALIDATE_EMAIL)==false) {
    $errores["email"]="Ingrese un email valido";
  }

  // PASSWORD
  if (strlen($datosFinales["contraseña"])<4) {
    $errores["contraseña"]="La contraseña debe tener por lo menos 4 caracteres";
  }

  // CONFIRMAR PASSWORD
  if ($datosFinales["contraseña"]!=$datosFinales["confirmar-contraseña"]) {
    $errores["confirmar-contraseña"]="Las contraseñas no coinciden";
  }

  return $errores;
}


// ARMAR USUARIO
function armarUsuario(){
  return [
    "nombre" => trim($_POST["nombre"]),
    "email" => trim($_POST["email"]),
    "contraseña" => password_hash($_POST["contraseña"], PASSWORD_DEFAULT)
  ];
}



//  GUARDAR USUARIO
function armarUsuario($user){
  $json = file_get_contents($archivo.json); //HAY QUE TENER UN ARCHIVO JSON
  $array = json_decode($json, true);
  $array["usuarios"][] = $user;

  $json_final = json_encode($array);
  file_put_contents("archivo.json", $json_final);
  // ESTA FUNCION NO TIENE RETURN PERO NO NECESSITA, SOLO HACE
}



// RECORDAR USUARIO
function buscarUsuarioPorMail($email){
  $json = file_get_contents($archivo.json); //HAY QUE TENER UN ARCHIVO JSON
  $array = json_decode($json, true);

  foreach ($array["usuarios"] as $usuario) {
    if ($array["usuarios"] == $email) {
      return $usuario;
    }
  }
}



// LOGIN
function validarLogin($datos){
  $errores=[];


  // EMAIL
  if (strlen($datosFinales["email"])==0) {
    $errores["email"]="Ingrese su email";
  } else if (filter_var($datosFinales["email"], FILTER_VALIDATE_EMAIL)==false) {
    $errores["email"]="Ingrese un email valido";
  } else if (!buscarUsuarioPorMail($datosFinales["email"])) {
    $errores["email"]= "El usuario no existe por favor registrese";
  }

  // PASSWORD
  if (strlen($datosFinales["contraseña"])<4) {
    $errores["contraseña"]="La contraseña debe tener por lo menos 4 caracteres";
  } else {

  }




  return $errores;
}

function loguearUsuario(){
  session_start();
  $_SESSION["email"] = $_POST["email"];
}


function usuarioLogueado(){
  return isset($_SESSION["email"]);
}
