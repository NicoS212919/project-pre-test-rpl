<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Edit Book</title>
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Edit Book: <span class="text-primary">{{ $book->title }}</span></h1>

        <form action="{{ route('books.update', $book->id) }}" method="POST">
            @csrf
            @method('PUT') <!-- Ensure the form uses the PUT method for updates -->
            
            <div class="mb-3">
                <label class="form-label" for="title">Title:</label>
                <input class="form-control" type="text" id="title" name="title" value="{{ $book->title }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label" for="author">Author:</label>
                <input class="form-control" type="text" id="author" name="author" value="{{ $book->author }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label" for="genre">Genre:</label>
                <input class="form-control" type="text" id="genre" name="genre" value="{{ $book->genre }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label" for="publication_date">Publication Date:</label>
                <input class="form-control" type="date" id="publication_date" name="publication_date" value="{{ $book->publication_date }}" required>
            </div>

            <button class="btn btn-outline-primary" type="submit">Save Changes</button>
            <a class="btn btn-outline-secondary" href="{{ route('books.index') }}">Back</a>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-n5oS/J3BZ9bIzjDdXsmBuH7LYQBNNSyI90n/yd8xGeA4CRcIfWAsM1vdu2dL8u5A" crossorigin="anonymous"></script>
</body>
</html>
