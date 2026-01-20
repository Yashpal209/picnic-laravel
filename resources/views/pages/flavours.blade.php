@extends('layouts.app')

@section('title', 'Our Flavours')

@section('content')
<div class="container py-5">
    <h1 class="h3 mb-4 text-center">Our Flavours</h1>
    
    @if($selectedCategory)
        <p class="text-center text-muted">Showing: <strong>{{ $selectedCategory->name }}</strong></p>
    @endif

    <div class="row g-3 mt-4">
        @forelse($products as $product)
            <div class="col-6 col-md-3">
                <div class="card shadow-sm h-100">
                    <div class="card-body text-center">
                        @if($product->image)
                            <img src="{{ asset($product->image) }}" alt="{{ $product->name }}" class="img-fluid mb-2" style="max-height: 120px;">
                        @endif
                        <h6 class="mb-1">{{ $product->name }}</h6>
                        @if($product->price)
                            <p class="text-primary fw-bold mb-0">₹{{ number_format($product->price, 2) }}</p>
                        @endif
                        <small class="text-muted">{{ $product->category?->name }}</small>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12">
                <p class="text-center text-muted">No products available in this category yet.</p>
            </div>
        @endforelse
    </div>
</div>
@endsection
