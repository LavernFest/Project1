@extends('layouts.main')

@section('title', 'Universes Edit')
@section('content')
<h1>{{$universes->unName}}</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Universe Name</th>
            </tr>
        </thead>
        <tbody>
                <tr>        
                    <td>{{ $universes->id }}</td>
                    <td>{{ $universes->unName }}</td>
                </tr>
        </tbody>
    </table>
    <a href="{{ route('universes.index') }}">Back to Index</a>
@endsection