<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Genre</title>
</head>
<body>
    <h1>Create Genre</h1>
    <p>:D</p>
    <form action="{{ route('genres.store') }}" method="post">
        @csrf
        <label for="">Genre Name</label>
        <input type="text" name="Type">

        <input type="submit" value="Create Genre">
    </form>
</body>
</html>