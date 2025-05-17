@extends('layouts.app')

@section('content')
<div class="container">
    <form method="POST" action="{{ route('toggle.darkmode') }}">
        @csrf
        <button class="btn btn-secondary mb-3">Toggle Dark Mode</button>
    </form>

    @foreach($products as $product)
    <div class="card mb-3 {{ session('dark_mode') ? 'bg-dark text-white' : '' }}">
        <div class="card-body">
            <h3>{{ $product->name }}</h3>
            <p>{{ $product->description }}</p>

            <h5>Reviews:</h5>
            @foreach($product->reviews as $review)
                <p>Rating: {{ $review->rating }} - {{ $review->comment }}</p>
            @endforeach

            @auth
            <form method="POST" action="{{ route('products.review', $product) }}">
                @csrf
                <label>Rating: <input type="number" name="rating" min="1" max="5" required></label><br>
                <label>Comment: <textarea name="comment" required></textarea></label><br>
                <button type="submit" class="btn btn-primary">Add Review</button>
            </form>
            @endauth
        </div>
    </div>
    @endforeach
</div>
@endsection
