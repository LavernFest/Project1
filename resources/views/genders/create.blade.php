<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Genders</title>
</head>
<body>
    <h1>Create Genders</h1>
    <p>>:C</p>
    <form action="{{ route('genders.store') }}" method="post">
        @csrf
        <label for="">Genders Name</label>
        <input type="text" name="type">

        <input type="submit" value="Create Gender">
    </form>

</body>
</html>