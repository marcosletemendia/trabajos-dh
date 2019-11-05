<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>ARCHIVO ACTORES</h1>

{{-- PRACTCICA 31/10 --}}

    <a href="/actors/add" class="btn btn-info">Agregar actores</a>


{{-- PRACTICA 29/10 --}}
    <h2>Buscar actores</h2>
    <form class="search" action="/actores/buscar" method="get">
      <input type="text" name="search" value="" placeholder="Busqueda del actor">
      <button type="submit" name="button">Enviar</button>
    </form>

    <h2>Lista actores</h2>
    <ul>
      @forelse($actores as $actor)
        <li>
          <a href="/actor/{{$actor->id}}"> {{ $actor->getNombreCompleto() }} </a>
        </li>
      @empty
        <p>No hay actores disponibles</p>
      @endforelse

      @dd($_GET);
    </ul>
  </body>
</html>
