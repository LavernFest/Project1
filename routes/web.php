<?php

use Illuminate\Support\Facades\Route;
use App\Models\Universe;
use App\Http\Controllers\GenderController;


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

Route::get('/gender',[GenderController::class,'index']);
