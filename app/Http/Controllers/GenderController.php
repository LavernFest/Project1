<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gender;

class GenderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $genders = Gender::all();
        return view('genders.index',compact('genders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('genders.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $genders = Gender::create([
            'type' => $request->type,
        ]);
        return to_route('genders.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $genders = Gender::find($id);
        return view('genders.show',compact('genders'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $genders = Gender::find($id);
        return view('genders.edit',compact('genders'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $genders = Gender::find($id);
        $genders->update([
            'type' => $request->type,
        ]);
        return to_route('genders.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $genders = Gender::find($id);
        $genders->delete();
        return to_route('genders.index');
    }
}
