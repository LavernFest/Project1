<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Superheroes</title>
</head>
<body>
    <h1>Create Superheroes</h1>
    <p>Welcome to the Superhero Creator!</p>
    <p>Please enter a name for your new Superhero:</p>
    <form action="{{ route('superheroes.store') }}" method="post">
        @csrf
        <label for="">Superhero Name</label>
        <input type="text" name="name">
        <label for="">Superhero Real Name</label>
        <input type="text" name="realname">
        <select name="universe_id">
            @foreach($universes as $universe)
                <option value="{{ $universe->id }}">{{ $universe->unName }}</option>
            @endforeach
        </select>
        <select name="genre_id">
            @foreach($genres as $genre)
                <option value="{{ $genre->id }}">{{ $genre->Type }}</option>
            @endforeach
        </select>
        <select name="gender_id">
            @foreach($genders as $gender)
                <option value="{{ $gender->id }}">{{ $gender->type }}</option>
            @endforeach
        </select>
        <label for="">Superhero Image URL</label>
        <input type="text" name="imageUrl">
        <br><br>
        <input type="submit" value="Create Superhero">
    </form>
</body>
</html>