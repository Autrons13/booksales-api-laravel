<!DOCTYPE html>
<html>
<head>
    <title>Genres</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <h1 class="mb-4">List Author</h1>List Genre</h1>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nama Genre</th>
                <th>Deskripsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($genres as $genre)
                <tr>
                    <td>{{ $genre['id'] }}</td>
                    <td>{{ $genre['name'] }}</td>
                    <td>{{ $genre['description'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="/authors">Ke Authors</a>
    <a href="/books">Ke books</a>
</body>
</html>