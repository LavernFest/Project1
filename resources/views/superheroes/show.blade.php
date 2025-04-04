@extends('layouts.main')

@section('title', 'Superheroes Show')
@section('content')
<h1>{{$superheroe->name}}</h1>
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
            </tr>
        </thead>
        <tbody>
                <tr>        
                    <td>{{ $superheroe ->id }}</td>
                    <td>{{ $superheroe ->name }}</td>
                    <td>{{ $superheroe ->realname }}</td>
                    <td>{{ $superheroe ->universe_id }} </td>
                    <td>{{ $superheroe ->genre_id }}</td>
                    <td>{{ $superheroe ->gender_id }}</td>
                    <td>{{ $superheroe ->imageUrl }}</td>

                </tr>
        </tbody>
    </table>
    <br>
    <button><a href="{{ route('superheroes.index') }}">Return to Index</a></button>
@endsection