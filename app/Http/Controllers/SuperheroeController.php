<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Superheroe;
use App\Models\Gender;
use App\Models\Genre;
use App\Models\Universe;

class SuperheroeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $superheroes = Superheroe::all();
        return view('superheroes.index',compact('superheroes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $universes = Universe::select('id','unName')->get();

        $genres = Genre::select('id','Type')->get();

        $genders = Gender::select('id','type')->get();

        return view('superheroes.create',compact('universes','genres','genders'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $superheroe = Superheroe::create([
            'name' => $request->name,
            'realname' => $request ->realname,
            'universe_id' => $request->universe_id,
            'genre_id' => $request->genre_id,
            'gender_id' => $request->gender_id,
            'imageUrl' => $request->imageUrl
        ]);
        return to_route('superheroes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $superheroe = Superheroe::find($id);
        return view('superheroes.show',compact('superheroe'));
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
