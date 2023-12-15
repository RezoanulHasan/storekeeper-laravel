<!-- resources/views/create-product.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="mb-4">
        <h2 class="text-2xl font-semibold">Create Product</h2>
        <form action="{{ route('products.create') }}" method="post">
            @csrf
            <div class="mb-2">
                <label for="name" class="block">Product Name:</label>
                <input type="text" id="name" name="name" class="border p-2 w-full" required>
            </div>
            <div class="mb-2">
                <label for="price" class="block">Price:</label>
                <input type="text" id="price" name="price" class="border p-2 w-full" required>
            </div>
            <div class="mb-2">
                <label for="quantity" class="block">Quantity:</label>
                <input type="text" id="quantity" name="quantity" class="border p-2 w-full" required>
            </div>
            <button type="submit" class="bg-blue-500 text-white py-2 px-4">Create Product</button>
        </form>
    </div>
@endsection
