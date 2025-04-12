<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Superheroe;
use App\Models\Gender;
use App\Models\Genre;
use App\Models\Universe;


class SuperheroApi extends Controller
{
    public function index(){
        $superheroes = Superheroe::all();
        return response()->json($superheroes);
    }

    public function show($name){
        $superheroe =  Superheroe::where('name',$name)->first();

        $universo = Universe::where('id', $superheroe->universe_id)->first();
        $superheroe->universo=$universo;

        $generolit = Genre::where('id', $superheroe->genre_id)->first();
        $superheroe->generolit=$generolit;
        
        $genero = Gender::where('id', $superheroe->gender_id)->first();
        $superheroe->genero=$genero;
        
        return response()->json($superheroe);
    }
}
