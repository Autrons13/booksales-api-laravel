<!DOCTYPE html>
<html>
<head>
    <title>Books</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

<h1>List Books</h1>

<table class="table table-bordered">
    <thead class="table-dark">
        <tr>
            <th>Title</th>
            <th>Author</th>
            <th>description</th>
            <th>Price</th>
            <th>Stock</th>
        </tr>
    </thead>
    <tbody>
        @foreach($books as $book)
        <tr>
            <td>{{ $book->title }}</td>
            <td>{{ $book->author->name }}</td>
            <td>{{ $book->description }}</td>
            <td>{{ $book->price }}</td>
            <td>{{ $book->stock }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

<a href="/authors">Ke Authors</a>
<a href="/genres">Ke Genres</a>

</body>
</html>