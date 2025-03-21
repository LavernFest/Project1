<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Universe Index</title>
</head>
<body>
    <h1>Universe</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Universe</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($universes as $item)
                <tr>        
                    <td>{{ $item ->id }}</td>
                    <td>{{ $item ->unName }}</td>
                    <td>
                        <button><a href="{{ route('universes.show', $item->id) }}">Show</a></button>
                        <button><a href="{{ route('universes.edit', $item->id) }}">Edit</a></button>

                        <form action="{{ route('universes.destroy', $item->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Delete" onclick="return confirm('You are deleting permanently the record. This action cannot be restored')">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <button><a href="{{ route('universes.create') }}">Add Universe</a></button>
</body>
</html>