<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Universes Individual</title>
</head>
<body>
<h1>{{$universes->unName}}</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Universe Name</th>
            </tr>
        </thead>
        <tbody>
                <tr>        
                    <td>{{ $universes->id }}</td>
                    <td>{{ $universes->unName }}</td>
                </tr>
        </tbody>
    </table>
    <a href="{{ route('universes.index') }}">Back to Index</a>
</body>
</html>