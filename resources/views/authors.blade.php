<!DOCTYPE html>
<html>
<head>
    <title>Authors</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <h1 class="mb-4">List Author</h1>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nama Author</th>
                <th>Bio</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($authors as $author)
                <tr>
                    <td>{{ $author['id'] }}</td>
                    <td>{{ $author['name'] }}</td>
                    <td>{{ $author['bio'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

   
    <a href="/genres">Ke Genres</a>
    <a href="/books">Ke books</a>
    
</body>
</html>