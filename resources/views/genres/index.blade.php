@extends('layouts.main')

@section('title', 'Genres')
@section('content')
    <h1>Genre</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Genre</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($genres as $item)
                <tr>        
                    <td>{{ $item ->id }}</td>
                    <td>{{ $item ->Type }}</td>
                    <td>
                        <button><a href="{{ route('genres.show', $item->id) }}">Show</a></button>
                        <button><a href="{{ route('genres.edit', $item->id) }}">Edit</a></button>

                        <form action="{{ route('genres.destroy', $item->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Delete" onclick="return confirm('You are deleting permanently the record. This action cannot be restored')">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <button><a href="{{ route('genres.create') }}">Add Gender</a></button>
</body>
@endsection