@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="row">
        <div class="col-md-6">
            <img src="{{ $product->image }}" class="img-fluid rounded" alt="{{ $product->name }}">
        </div>
        <div class="col-md-6">
            <h2>{{ $product->name }}</h2>
            <h4 class="text-success mb-3">${{ number_format($product->price, 2) }}</h4>
            <p>{{ $product->description }}</p>
            <p><strong>Stock:</strong> {{ $product->stock }}</p>
            <p><strong>Type:</strong> {{ ucfirst($product->type) }}</p>
            <a href="{{ url()->previous() }}" class="btn btn-secondary mt-3">Back to Products</a>
        </div>
    </div>
</div>
@endsection
