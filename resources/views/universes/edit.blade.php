<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Universes</title>
</head>
<body>
    <h1>Edit Universes</h1>
    <p>Please enter the updated details for the Universe:</p>
    <form action="{{ route('universes.update', $universes->id) }}" method="post">
        @csrf
        @method('patch')
        <label for="">Universe Name</label>
        <input type="text" name="unName" value="{{ $universes->unName }}">
        <br><br>
        <input type="submit" value="Update Universe">
    </form>
    <br>
    <button><a href="{{ route('universes.index') }}">Return to Index</a></button>
</body>
</html>