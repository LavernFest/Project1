@extends('layouts.main')

@section('title', 'Genders Show')
@section('content')
<h1>{{$genders->type}}</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Type</th>
            </tr>
        </thead>
        <tbody>
                <tr>        
                    <td>{{ $genders->id }}</td>
                    <td>{{ $genders->type }}</td>
                </tr>
        </tbody>
    </table>
    <a href="{{ route('genders.index') }}">Back to Index</a>
@endsection