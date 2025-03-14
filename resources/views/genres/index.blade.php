<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Genres Index</title>
</head>
<body>
    <h1>Genre</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Genre</th>
            </tr>
        </thead>
        <tbody>
            @foreach($genres as $item)
                <tr>        
                    <td>{{ $item ->id }}</td>
                    <td>{{ $item ->Type }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>