<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gender Individual</title>
</head>
<body>
<h1>{{$genders->type}}</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Type</th>
            </tr>
        </thead>
        <tbody>
                <tr>        
                    <td>{{ $genders->id }}</td>
                    <td>{{ $genders->type }}</td>
                </tr>
        </tbody>
    </table>
    <a href="{{ route('genders.index') }}">Back to Index</a>
</body>
</html>