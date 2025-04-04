@extends('layouts.main')

@section('title', 'Genders')
@section('content')
    <h1>Gender</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Type</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($genders as $item)
                <tr>        
                    <td>{{ $item ->id }}</td>
                    <td>{{ $item ->type }}</td>
                    <td>
                        <button><a href="{{ route('genders.show', $item->id) }}">Show</a></button>
                        <button><a href="{{ route('genders.edit', $item->id) }}">Edit</a></button>

                        <form action="{{ route('genders.destroy', $item->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Delete" onclick="return confirm('You are deleting permanently the record. This action cannot be restored')">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <button><a href="{{ route('genders.create') }}">Add Gender</a></button>
@endsection