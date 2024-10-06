<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Books Details</title>
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Details for <span class="text-primary">{{ $book->title }}</span></h2>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Book Information</h5>
                <p class="card-text"><strong>Author:</strong> {{ $book->author }}</p>
                <p class="card-text"><strong>Genre:</strong> {{ $book->genre }}</p>
                <p class="card-text"><strong>Publication Date:</strong> {{ $book->publication_date }}</p>
            </div>
        </div>
        <div class="d-flex flex-row mb-3">
        <a href="{{ route('reviews.create', ['id' => $book->id]) }}" class="btn btn-outline-primary mt-3 me-1">Add a Review</a>
    <a class="btn btn-outline-secondary mt-3" href="/books">Back</a>
    </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-n5oS/J3BZ9bIzjDdXsmBuH7LYQBNNSyI90n/yd8xGeA4CRcIfWAsM1vdu2dL8u5A" crossorigin="anonymous"></script>
</body>
</html>
