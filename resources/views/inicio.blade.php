@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row justify-content-center mb-4">
        <h1>Superheroes</h1>
    </div>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Superhero Name</th>
                <th>Real Name</th>
                <th>Universe</th>
                <th>Genre</th>
                <th>Gender</th>
                <th>Image Url</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>
            @foreach($superheroes as $superheroe)
            <tr>
                <td>{{ $superheroe ->id }}</td>
                <td>{{ $superheroe ->name }}</td>
                <td>{{ $superheroe ->realname }}</td>
                <td>{{ $superheroe ->universo->name }}</td>
                <td>{{ $superheroe ->generolit->Type }}</td>
                <td>{{ $superheroe ->genero->type }}</td>
                <td>
                    <button><a href="{{ route('superheroes.show', $superheroe->id) }}">Show</a></button>
                    
                    <button><a href="{{ route('superheroes.edit', $superheroe->id) }}">Edit</a></button>
                    
                    <form action="{{ route('superheroes.destroy', $superheroe->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Delete" onclick="return confirm('You are deleting permanently the record. This action cannot be restored')">
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection