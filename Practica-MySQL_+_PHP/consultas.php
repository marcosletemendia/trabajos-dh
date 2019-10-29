<?php


include "connection.php";

//Prepare
// $query = $db->prepare("INSERT INTO actors VALUES(default, null, null, :nombre, :apellido, :rating, :pelicula_fav)");
//
// $query->bindValue(":nombre", "Gonza");
// $query->bindValue(":apellido", "Zevallos");
// $query->bindValue(":rating", "9");
// $query->bindValue(":pelicula_fav", "8");
//
// $query->execute();

$consult = $db->prepare("DELETE FROM actors WHERE first_name = 'Gonza'");
$consult->execute();

$consulta = $db->prepare("SELECT * FROM actors");
$consulta->execute();
$r = $consulta->fetchAll();// Solo para consultas SELECT;
var_dump($r);




?>
