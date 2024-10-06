<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Add New Book</title>
</head>
<body>
    <div class="container">
    <h1>Add New Book</h1>

    <form action="{{ route('books.store') }}" method="POST">
        @csrf
        <div class="mb-3">
        <label class="form-label" for="title">Title:</label>
        <input class="form-control" type="text" id="title" name="title" required><br>
        </div>
        <div class="mb-3">
        <label class="form-label" for="author">Author:</label>
        <input class="form-control" type="text" id="author" name="author" required><br>
        </div>
        <div class="mb-3">
        <label class="form-label" for="genre">Genre:</label>
        <input class="form-control" type="text" id="genre" name="genre" required><br>
        </div>
        <div class="mb-3">
        <label class="form-label" for="publication_date">Publication Date:</label>
        <input class="form-control" type="date" id="publication_date" name="publication_date" required><br>
        </div>
        <button class="btn btn-outline-primary" type="submit">Add Book</button>
        <a class="btn btn-outline-secondary" href="/books">Back</a>
    </form>
    </div>
</body>
</html>
