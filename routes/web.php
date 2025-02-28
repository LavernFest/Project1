<?php

use Illuminate\Support\Facades\Route;
use App\Models\Universe;

Route::get('/', function () {
    echo 'Hello! First Laravel application!';
    /* echo '<pre>';
    print_r(Universe::all());
    echo '</pre>'; */
    // Retrieve all universes from the database
    // Universe::all();=> SELECT * FROM universes

    dump(Universe::all());
    dump(Gender::all());

    //return view('welcome');
});
