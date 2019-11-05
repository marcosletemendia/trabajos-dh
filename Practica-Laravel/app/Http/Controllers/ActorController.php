<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Actor;

class ActorController extends Controller
{

    // PRACTICA 29/10
    public function directory(){
      $actores = Actor::all();
      $vac = compact("actores");
      return view('actores', $vac);
    }

    public function show($id){
      $actor = Actor::find($id);
      $vac = compact('actor');
      return view('actor', $vac);
    }

    public function search(){
      $search = '%' . $_GET['search'] . '%';
      $actores = Actor::where('last_name', 'LIKE', $search )
        ->orwhere('first_name', 'LIKE', $search)
        ->get();
      $vac = compact("actores");
      return view('actores', $vac);
    }

    // PRACTICA 31/10

    public function store(Request $form){
      $actorNuevo = new Actor;
      $actorNuevo->first_name = $form['nombre'];
      $actorNuevo->last_name = $form['apellido'];
      $actorNuevo->rating = $form['rating'];
      $actorNuevo->favorite_movie_id = $form['id_movie_fav'];
      $actorNuevo->save();
      return redirect('actores');
    }

    public function edit(){
      $actorNuevo->first_name = $form['nombre'];
      $actorNuevo->last_name = $form['apellido'];
      $actorNuevo->rating = $form['rating'];
      $actorNuevo->favorite_movie_id = $form['id_movie_fav'];
      $actorNuevo->save();
      return redirect('actor');
    }
}
