<h2>Agregar actores</h2>
<form class="" action="/actors/add" method="post">
  @csrf
  <input type="text" name="nombre" value="" placeholder="Nombre actor">
  <input type="text" name="apellido" value="" placeholder="Apellido actor">
  <input type="text" name="rating" value="" placeholder="Rating actor">
  <input type="text" name="id_movie_fav" value="" placeholder="Id pelicula favorita">
  <button type="submit" name="button">Agregar Actor</button>
</form>
