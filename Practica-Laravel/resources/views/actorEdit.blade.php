<h2>Editar actores</h2>
<form class="" action="/actor/{{$actor->id}}" method="post">
  @csrf
  <input type="text" name="nombre" value="{{$actor->first_name}}" placeholder="Nombre actor">
  <input type="text" name="apellido" value="{{$actor->last_name}}" placeholder="Apellido actor">
  <input type="text" name="rating" value="{{$actor->rating}}" placeholder="Rating actor">
  <input type="text" name="id_movie_fav" value="{{$actor->favorite_movie_id}}" placeholder="Id pelicula favorita">
  <button type="submit" name="button">Agregar Actor</button>
</form>
