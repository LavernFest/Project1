@extends('layouts.main')

@section('title', 'Universes Edit')
@section('content')
<body>
    <h1>Edit Universes</h1>
    <p>Please enter the updated details for the Universe:</p>
    <form action="{{ route('universes.update', $universes->id) }}" method="post">
        @csrf
        @method('patch')
        <label for="">Universe Name</label>
        <input type="text" name="unName" value="{{ $universes->unName }}">
        <br><br>
        <input type="submit" value="Update Universe">
    </form>
    <br>
    <button><a href="{{ route('universes.index') }}">Return to Index</a></button>
@endsection