<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>DATOS DEL ACTOR {{$actor->getNombreCompleto()}} </h1>
    <ul>
      <li> {{'id: '. $actor->id}} </li>
      <li> {{$actor->getNombreCompleto()}} </li>
      <li> {{'rating: ' . $actor->rating}} </li>
    </ul>
  </body>
</html>
