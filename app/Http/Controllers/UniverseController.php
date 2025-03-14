<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Importar modelos que vamos a necesitar
use App\Models\Universe;

class UniverseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $universes = Universe::all();
        return view('universes.index',compact('universes'));
    }

    /**
     * Show the form for creating a new resource. Cargar dependencias entre tablas y luego enviarlas a la vista
     */
    public function create()
    {
        return view('universes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Universe::create(['unName'=> $request->unName]);
        return to_route('universes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $universes = Universe::find($id);
        return view('universes.show',compact('universes'));
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
