<?php

use Illuminate\Support\Facades\Route;
use App\Models\Universe;
use App\Http\Controllers\GenderController;
use App\Http\Controllers\UniverseController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\SuperheroeController;



Route::get('/', function () {
    echo 'Hello! First Laravel application!';
    /* echo '<pre>';
    print_r(Universe::all());
    echo '</pre>'; */
    // Retrieve all universes from the database
    // Universe::all();=> SELECT * FROM universes

    dump(Universe::all());

    //return view('welcome');
});

// Route::get('/gender',[GenderController::class,'index']);
// Route::get('/universe',[UniverseController::class,'index']);
//Generar rutas de manera automatica gracias a laravel :D 
Route::resource('genders',GenderController::class);
Route::resource('universes',UniverseController::class);
Route::resource('genres',GenreController::class);
Route::resource('superheroes',SuperheroeController::class);