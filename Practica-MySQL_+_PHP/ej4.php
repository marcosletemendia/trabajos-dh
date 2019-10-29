<?php

include "connection.php";

$consulta = $db->prepare("SELECT * FROM :radio WHERE title LIKE :busqueda");
$consulta->bindValue(':radio', $_GET['radio']);
$consulta->bindValue(':busqueda', $_GET['busqueda']);
$consulta->execute();

var_dump($consulta->fetchAll(PDO::FETCH_ASSOC));
