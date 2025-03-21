<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Genre</title>
</head>
<body>
    <h1>Edit Genre</h1>

    <form action="{{ route('genres.update', $genres->id) }}" method="post">
        @csrf
        @method('patch')
        <label for="">Genre Type</label>
        <input type="text" name="Type" value="{{ $genres->Type }}">
        <br><br>
        <input type="submit" value="Update Genre">
    </form>
    <br>
    <button><a href="{{ route('genres.index') }}">Return to Index</a></button>
</body>
</html>