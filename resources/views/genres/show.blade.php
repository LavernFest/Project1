<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Genres Individual</title>
</head>
<body>
<h1>{{$genres->type}}</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Type</th>
            </tr>
        </thead>
        <tbody>
                <tr>        
                    <td>{{ $genres->id }}</td>
                    <td>{{ $genres->Type }}</td>
                </tr>
        </tbody>
    </table>
    <a href="{{ route('genres.index') }}">Back to Index</a>
</body>
</html>