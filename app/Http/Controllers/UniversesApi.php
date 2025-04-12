<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Universe;

class UniversesApi extends Controller
{
    public function index(){
        $universes = Universe::all();
        return response()->json($universes);
    }

    /* public function show($id){
        $universes = Universe::width('superheroes')->findOrFail($id);
        return response()->json($universes);
    } */

    public function show($name){
        $universe =  Universe::where('unName',$name)->with('superheroes')->get();
        return response()->json($universe);
    }

}
