<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UniversesApi;
use App\Http\Controllers\SuperheroApi;
use App\Http\Controllers\GenderApi;
use App\Http\Controllers\GenreApi;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/universes',[UniversesApi::class,'index']);
Route::get('/universes/{name}',[UniversesApi::class,'show']);

Route::get('/genders',[GenderApi::class,'index']);
Route::get('/genders/{name}',[GenderApi::class,'show']);

Route::get('/genres',[GenreApi::class,'index']);
Route::get('/genres/{name}',[GenreApi::class,'show']);

Route::get('/superheroes',[SuperheroApi::class,'index']);
Route::get('/superheroes/{name}',[SuperheroApi::class,'show']);
/*
Route::get('/api/universes',[UniversesApi::class,'index']);
Route::get('/api/universes/{name}',[UniversesApi::class,'show']);

Route::get('/api/genders',[GenderApi::class,'index']);
Route::get('/api/genders/{name}',[GenderApi::class,'show']);

Route::get('/api/genres',[GenreApi::class,'index']);
Route::get('/api/genres/{name}',[GenreApi::class,'show']);

Route::get('/api/superheroes',[SuperheroApi::class,'index']);
Route::get('/api/superheroes/{name}',[SuperheroApi::class,'show']);
*/