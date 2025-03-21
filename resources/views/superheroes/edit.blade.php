<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Superheroes</title>
</head>
<body>
    <h1>Edit Superheroes</h1>
    <p>Welcome to the Superhero Editor!</p>
    <p>Please enter the updated details for the Superhero:</p>
    <form action="{{ route('superheroes.update', $superheroe->id) }}" method="post">
        @csrf
        @method('patch')
        <label for="">Superhero Name</label>
        <input type="text" name="name" value="{{ $superheroe->name }}">
        <label for="">Superhero Real Name</label>
        <input type="text" name="realname" value="{{ $superheroe->realname }}">
        <select name="universe_id">
            @foreach($universes as $universe)
                <option value="{{ $universe->id }}"
                @if ($universe->id == $superheroe->universe_id)
                    selected
                @endif    
                >{{ $universe->unName }}</option>
            @endforeach
        </select>
        <select name="genre_id">
            @foreach($genres as $genre)
                <option value="{{ $genre->id }}"
                @if ($genre->id == $superheroe->genre_id)
                    selected
                @endif
                >{{ $genre->Type }}</option>
            @endforeach
        </select>
        <select name="gender_id">
            @foreach($genders as $gender)
                <option value="{{ $gender->id }}"
                @if ($gender->id == $superheroe->gender_id)
                    selected
                @endif
                >{{ $gender->type }}</option>
            @endforeach
        </select>
        <label for="">Superhero Image URL</label>
        <input type="text" name="imageUrl" value="{{ $superheroe->imageUrl }}">
        <br><br>
        <input type="submit" value="Update Superheroe">
    </form>
    <br>
    <button><a href="{{ route('superheroes.index') }}">Return to Index</a></button>
</body>
</html>