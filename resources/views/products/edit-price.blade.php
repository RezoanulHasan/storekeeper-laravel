<!-- resources/views/products/edit-price.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="mb-4">
        <h2 class="text-2xl font-semibold">Edit Price - {{ $product->name }}</h2>
        <form action="{{ route('products.updatePrice', $product->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="mb-2">
                <label for="price" class="block">New Price:</label>
                <input type="text" id="price" name="price" value="{{ $product->price }}" class="border p-2 w-full">
            </div>
            <button type="submit" class="bg-blue-500 text-white py-2 px-4">Update Price</button>
        </form>
    </div>

    <a href="{{ route('products.all') }}" class="text-blue-500">Back to All Products</a>
@endsection
