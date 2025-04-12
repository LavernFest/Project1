<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Genre;

class GenreApi extends Controller
{
    public function index(){
        $genres = Genre::all();
        return response()->json($genres);
    }

    public function show($name){
        $genre =  Genre::where('Type',$name)->with('superheroes')->get();
        return response()->json($genre);
    }
}
