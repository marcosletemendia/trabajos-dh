<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Actor;

class ActorController extends Controller
{
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
}
