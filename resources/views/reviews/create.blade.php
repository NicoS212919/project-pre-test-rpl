<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Add a Review</title>
</head>
<body>
    <div class="container">
        <h2>Add a Review for {{ $book->title }}</h2>

        <form action="{{ route('reviews.store') }}" method="POST">
            @csrf
            <input type="hidden" name="book_id" value="{{ $book->id }}">
            <div class="mb-3">
                <label for="reviewer_name" class="form-label">Reviewer Name</label>
                <input type="text" name="reviewer_name" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="rating" class="form-label">Rating</label>
                <input type="number" name="rating" class="form-control" min="1" max="5" required>
            </div>

            <div class="mb-3">
                <label for="review_text" class="form-label">Review Text</label>
                <textarea name="review_text" class="form-control" rows="4" required></textarea>
            </div>

            <button type="submit" class="btn btn-outline-primary">Submit Review</button>
            <a class="btn  btn-outline-secondary" href="/reviews/{{$book->id}}">Back</a>
        </form>
    </div>
</body>
</html>
