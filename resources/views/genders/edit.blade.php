@extends('layouts.main')

@section('title', 'Genders Edit')
@section('content')
    <h1>Edit Genders</h1>
    <p>Please enter the updated details for the Gender:</p>
    <form action="{{ route('genders.update', $genders->id) }}" method="post">
        @csrf
        @method('patch')
        <label for="">Gender Type</label>
        <input type="text" name="type" value="{{ $genders->type }}">
        <br><br>
        <input type="submit" value="Update Gender">
    </form>
    <br>
    <button><a href="{{ route('genders.index') }}">Return to Index</a></button>
@endsection