<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Universe Index</title>
</head>
<body>
    <h1>Universe</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Universe</th>
            </tr>
        </thead>
        <tbody>
            @foreach($universes as $item)
                <tr>        
                    <td>{{ $item ->id }}</td>
                    <td>{{ $item ->unName }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>