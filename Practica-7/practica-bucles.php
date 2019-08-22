<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <!-- BUCLES  -->
    <h1>BUCLES</h1>
    <span>1)</span>
    <?php
      for ($i=2; $i < 21; $i = $i+2) {
        echo "$i, ";
      }
    ?>
    <br>
    <span>2)</span>
    <?php
      $i=100;
      while ($i>84) {
        echo "$i, ";
        $i--;
      }
    ?>

    <br>
    <span>3)</span>
    <?php
      $contador=1;
      while ($contador<6) {
        echo $contador*2 . ", ";
        $contador++;
      }
    ?>

    <br>
    <span>4)</span>
    <?php
      $cara=0;
      $seca=0;
      $tiros=0;
      while ($cara!=5) {
        $moneda=rand(0,1);
        if ($moneda==1) {
          $cara++;
          $tiros++;
        } else {
          $seca++;
          $tiros++;
        }
      }
      echo $tiros . " tiros";
    ?>

    <br><span>5)</span>
    <?php
      $array5=["gilles", "tomas", "marcos", "tobias", "carlos"];
      echo "FOR =>  ";
      for ($i=0; $i < count($array5); $i++) {
        echo $array5[$i] . ", ";
      }
      echo "<br> WHILE =>  ";
      $z=0;
      while ($z < count($array5)) {
        echo $array5[$z] . ", ";
        $z++;
      }
      echo "<br> DO-WHILE =>  ";
      $x=0;
      do {
        echo $array5[$x] . ", ";
        $x++;
      } while ($x<count($array5));
      echo "<br> FOREACH =>  ";
      foreach ($array5 as $posicion => $value){
        echo $value . ", ";
      }
    ?>

    <br>
    <span>6)</span>
    <?php
      $array6 =[];
      for ($i=0; $i < 10; $i++) {
        $array6[]=rand(1,10);
      }
      foreach ($array6 as $key => $value) {
        if ($value != 5) {
          echo $value . ", ";
        } else {
          echo "Se encontró un 5!";
          break;
        }
      }
    ?>
  </body>
</html>
