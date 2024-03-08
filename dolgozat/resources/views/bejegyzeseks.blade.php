<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bejegyzeseks</title>
</head>
<body>
    <h1>Bejegyzeseks List</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Tevekenyseg ID</th>
                <th>Osztaly ID</th>
                <th>Allapot</th>
                <th>Created At</th>
                <th>Updated At</th>
            </tr>
        </thead>
        <tbody>
            @foreach($bejegyzeseks as $bejegyzesek)
            <tr>
                <td>{{ $bejegyzesek->id }}</td>
                <td>{{ $bejegyzesek->tevekenyseg_id }}</td>
                <td>{{ $bejegyzesek->osztaly_id }}</td>
                <td>{{ $bejegyzesek->allapot }}</td>
                <td>{{ $bejegyzesek->created_at }}</td>
                <td>{{ $bejegyzesek->updated_at }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>