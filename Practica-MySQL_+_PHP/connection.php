<?php

$dsn = "mysql:host=127.0.0.1;dbname=movies_db;port=3306";
$user = "root";
$pass = "";

// $db = new PDO($dsn, $user, $pass); // resuelve la conexion
// $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // para poder ver errores que devuelve SQL

// Hago lo mismo pero con el try-catch
try {
  $db = new PDO($dsn, $user, $pass); // resuelve la conexion
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // para poder ver errores que devuelve SQL
} catch (\Exception $e) {
  echo "No se pudo hacer la conexion";
  var_dump($e->getMessage()); exit;
}



?>
