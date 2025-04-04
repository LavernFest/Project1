@extends('layouts.main')

@section('title', 'Genders Create')
@section('content')
    <h1>Create Genders</h1>
    <p>>:C</p>
    <form action="{{ route('genders.store') }}" method="post">
        @csrf
        <label for="">Genders Name</label>
        <input type="text" name="type">

        <input type="submit" value="Create Gender">
    </form>
@endsection