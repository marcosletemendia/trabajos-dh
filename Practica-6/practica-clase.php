<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <!-- ARRAY -->
    <p>Ej ARRAYS</p>
    <?php
      $persona = [
        "Nombre" => "Jon",
        "Apellido" => "Snow",
        "Edad" => 27,
        "Hobbies" => ["Netflix", "Fútbol", "Programar"]
      ];

      $persona["Edad"]=25;

      $persona["Direccion"]="Winterfell";

      $persona["Hobbies"][3]="Cazar";

      var_dump($persona);
    ?>
    <br>
    <!-- CONDICIONAL -->
    <!-- UNO -->
    <p>CONDICIONAL</p>
    <span>1)</span>
    <?php
      $numero1=100;
      $numero2=50;
      if ($numero1>$numero2) {
        echo $numero1;
      } else {
        echo $numero2;
      }
    ?>

    <br>

    <!-- DOS   -->
    <span>2)</span>
    <?php
      $variable = rand(1,5);
      if ($variable==3 || $variable==5) {
        echo $variable;
      }
    ?>

    <br>

    <!-- TRES -->
    <span>3)</span>
    <?php
      if ($variable==3) {
        echo $variable;
      } else {
        echo "El número NO es 3";
      }
    ?>

    <br>

    <!-- CUATRO -->
    <span>4)</span>
    <?php
      $numerox = rand(1,100);
      if ($numerox>50) {
        echo "El número es mayor a 50";
      } else {
        echo "El número es menor a 50";
      }
    ?>

    <br>

    <!-- CINCO -->
    <span>5)</span>
    <?php
      $nombreDeUsuario = "admin";
      $ContraseniaDeUsuario = "1234";
      if ($nombreDeUsuario=="admin" && $ContraseniaDeUsuario=="1234") {
        echo "Bienvenido!";
      } else {
        if ($nombreDeUsuario!="admin") {
          echo "error en el usuario";
        }
        if ($ContraseniaDeUsuario!="1234") {
          echo "error en la contraseña";
        }
      }
    ?>

    <br>

    <!-- SEIS -->
    <span>6)</span>
    <?php
      $edad=20;
      $casado=true;
      $sexo="otro";
      if (($edad>18 && $casado==false) || $sexo=="otro") {
        echo "Bienvenido";
      }
    ?>

    <br>

    <!-- SIETE -->
    <span>7)</span>
    <?php
      $cantidadDeAlumnos = (1);
      if ($cantidadDeAlumnos) {
        echo "true";
      } else {
        echo "false";
      }
    ?>

    <br>

    <!-- OCHO -->
    <span>8)</span>
    <?php
      $numero = 101;
      $par = ($numero % 2 == 0) ? "El número es par" : "El número es impar";
      echo "$par";
    ?>

    <br>

    <!-- NUEVE -->
    <span>9)</span>
    <?php
      $nota = 7;
      switch ($nota) {
        case $nota<4:
          echo "desprobado";
          break;
        case 4 || 5:
          echo "zafamos";
          break;
        case 6||7||8:
          echo "Bien!!!";
          break;
        case 9:
          echo "MUY bien!!!";
          break;
        case 10:
          echo "Excelente!!!!";
          break;
        default:
          echo "te dimos la nota";
          break;
      }
    ?>



  </body>
</html>
