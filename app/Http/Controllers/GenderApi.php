<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gender;

class GenderApi extends Controller
{
    public function index(){
        $genders = Gender::all();
        return response()->json($genders);
    }

    public function show($name){
        $gender =  Gender::where('type',$name)->with('superheroes')->get();
        return response()->json($gender);
    }
}
