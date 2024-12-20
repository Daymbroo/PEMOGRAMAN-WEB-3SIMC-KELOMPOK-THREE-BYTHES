@extends('layout.main')

@section('content')
<div class="container my-5">
    <h1 class="mb-4">User Reviews</h1>

    <!-- Flash message -->
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <!-- List of reviews -->
    <div class="card">
        <div class="card-header">
            <h5>All Reviews</h5>
        </div>
        <div class="card-body">
            @if ($reviews->isEmpty())
            <p class="text-muted">No reviews yet. Be the first to leave a review!</p>
            @else
            <ul class="list-group">
                @foreach ($reviews as $review)
                <li class="list-group-item">
                    <h5 class="mb-1">{{ $review->name }}</h5>
                    <p class="mb-1">{{ $review->comment }}</p>
                    <small class="text-muted">Posted on {{ $review->created_at->format('d M Y, H:i') }}</small>
                </li>
                @endforeach
            </ul>
            @endif
        </div>
    </div>
</div>
@endsection
