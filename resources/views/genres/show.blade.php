@extends('layouts.main')

@section('title', 'Genres Show')
@section('content')
<h1>{{$genres->type}}</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Type</th>
            </tr>
        </thead>
        <tbody>
                <tr>        
                    <td>{{ $genres->id }}</td>
                    <td>{{ $genres->Type }}</td>
                </tr>
        </tbody>
    </table>
    <a href="{{ route('genres.index') }}">Back to Index</a>
@endsection