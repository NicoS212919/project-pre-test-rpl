<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Reviews</title>
</head>
<body>
    <div class="container">
   <h2>Reviews for <span class="text-primary">{{ $book->title }}</span></h2>
@if ($reviews->isEmpty())

<div class="d-flex flex-row mb-3">
<a class="btn btn-outline-primary p-2 me-1" href="/reviews/create?id={{ $book->id }}">Create Review</a> 
<a class="btn btn-outline-secondary p-2" href="/books">Back</a>
</div>
  <p>No reviews yet.</p>
@else
<div class="d-flex flex-row mb-3">
<a class="btn btn-outline-primary p-2 me-1" href="/reviews/create?id={{ $book->id }}">Create Review</a> 
<a class="btn btn-outline-secondary p-2" href="/books">Back</a>
</div>
    <ul class="list-group">
        @foreach ($reviews as $review)
            <li class="list-group-item">
                <strong>{{ $review->reviewer_name }}</strong>
                (Rating: {{ $review->rating }}/5)
                <p>{{ $review->review_text }}</p>
                <p><small>Reviewed on: {{ $review->created_at->format('F j, Y') }}</small></p>
            </li>
        @endforeach
    </ul>
@endif
</div>
</body>
</html>
