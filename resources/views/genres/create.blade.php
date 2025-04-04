@extends('layouts.main')

@section('title', 'Genres Create')
@section('content')
    <h1>Create Genre</h1>
    <p>:D</p>
    <form action="{{ route('genres.store') }}" method="post">
        @csrf
        <label for="">Genre Name</label>
        <input type="text" name="Type">

        <input type="submit" value="Create Genre">
    </form>
@endsection