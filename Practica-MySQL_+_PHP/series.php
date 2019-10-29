<?php

include "connection.php";

$consulta = $db->prepare("SELECT * FROM series");
$consulta->execute();

$r = $consulta->fetchAll(PDO::FETCH_ASSOC);

?>

<ul>
  <?php foreach ($r as $series): ?>
  <li><?php echo $series["title"] ?></li>
  <?php endforeach ?>
</ul>

<?php //var_dump($r); ?>


<?php

$idSerie = 6;
$query = $db->prepare("SELECT * FROM series WHERE id = :id");
$query->bindValue(':id', $idSerie);
$query->execute();
var_dump($query->fetchAll(PDO::FETCH_ASSOC));

$stmt = $db->prepare("SELECT * FROM movies WHERE title LIKE :nombre");
$stmt->bindValue(':nombre', '%Harry Potter%');
$stmt->execute();
var_dump($stmt->fetchAll(PDO::FETCH_ASSOC));

?>
