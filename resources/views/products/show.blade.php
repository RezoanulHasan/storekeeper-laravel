<!-- resources/views/products/show.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="mb-4">
        <h2 class="text-2xl font-semibold">{{ $product->name }}</h2>
        <p>Price: ${{ $product->price }}</p>
        <p>Quantity: {{ $product->quantity }}</p>
    </div>

    <a href="{{ route('products.all') }}" class="text-blue-500">Back to All Products</a>
@endsection
