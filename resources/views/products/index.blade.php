@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h2 class="mb-4">Products</h2>
    <div class="row">
        @foreach($products as $product)
            <div class="col-md-3 mb-4">
                <x-product-card :product="$product" />
            </div>
        @endforeach
    </div>
    <div class="d-flex justify-content-center">
        {{ $products->links() }}
    </div>
</div>
@endsection
