<div class="card h-100">
    <img src="{{ $product->image && filter_var($product->image, FILTER_VALIDATE_URL) ? $product->image : asset('images/no-image.png') }}"
         class="card-img-top" alt="{{ $product->name }}"
         onerror="this.onerror=null;this.src='https://via.placeholder.com/400x400?text=No+Image';">
    <div class="card-body">
        <h5 class="card-title">{{ $product->name }}</h5>
        <p class="card-text">${{ number_format($product->price, 2) }}</p>
        <a href="{{ route('products.show', $product->id) }}" class="btn btn-primary btn-sm">View Details</a>
    </div>
</div>
