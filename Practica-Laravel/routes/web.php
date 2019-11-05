<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//CLASE 24/10

Route::get('/', function () {
    return view('welcome');
});

Route::get('/miPrimeraRuta', function(){
  return "Creé mi primer ruta en Laravel";
});

Route::get('/esPar/{numero}', function($num){
  if ($num%2==0) {
    return "Soy par!";
  } else {
    return "Soy inpar!";
  }
});

Route::get('/sumar/{num1}/{num2}/{num3?}', function($num1, $num2, $num3=null){
  return $num1 + $num2 + $num3;
});

Route::get('/peliculas', function(){
  // $peliculas = ['Harry Potter', 'Buscando a Nemo', 'Star Wars', 'Narnia', 'Sherlock'];
  if (isset($peliculas)) {
    $vac = compact('peliculas');
    return view("peliculas", $vac);
  } else {
    return "No hay peliculas";
  }
});


//CLASE 29/10

Route::get('/actores', 'ActorController@directory');

Route::get('/actor/{id}', 'ActorController@show');

Route::get('/actores/buscar', 'ActorController@search');


//CLASE 31/10

Route::get('/actors/add', function(){
  return view('actorAdd');
});

Route::post('/actors/add', 'ActorController@store');

Route::get('/actor/{id}/edit', function(){
  return view('actorEdit');
});

Route::post('/actor/{id}/edit', 'ActorController@edit');


// CLASE 5/11
