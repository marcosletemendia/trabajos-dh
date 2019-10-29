<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    @foreach ($peliculas as $pelis)
        <ul>
          <li> {{ $pelis }} </li>
        </ul>
      @endforeach
  </body>
</html>
