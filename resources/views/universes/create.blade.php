<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Universe</title>
</head>
<body>
    <h1>Create Universe</h1>
    <p>Welcome to the Universe Creator!</p>
    <p>Please enter a name for your new universe:</p>
    <form action="{{ route('universes.store') }}" method="post">
        @csrf
        <label for="">Universe Name</label>
        <input type="text" name="unName">

        <input type="submit" value="Create Universe">
    </form>
</body>
</html>