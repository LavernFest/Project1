<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Superhero Index</title>
</head>
<body>
    <h1>Superhero</h1>
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
            @foreach($superheroes as $item)
                <tr>        
                    <td>{{ $item ->id }}</td>
                    <td>{{ $item ->name }}</td>
                    <td>{{ $item ->realname }}</td>
                    <td>{{ $item ->universe_id }}</td>
                    <td>{{ $item ->genre_id }}</td>
                    <td>{{ $item ->gender_id }}</td>
                    <td>{{ $item ->imageUrl }}</td>
                    <td>
                        <button><a href="{{ route('superheroes.show', $item->id) }}">Show</a></button>
                        <button><a href="{{ route('superheroes.edit', $item->id) }}">Edit</a></button>

                        <form action="{{ route('superheroes.destroy', $item->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Delete" onclick="return confirm('You are deleting permanently the record. This action cannot be restored')">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <br>
    <button><a href="{{ route('superheroes.create') }}">Add Superhero</a></button>

</body>
</html>