@extends('layouts.app')

@section('content')
    <div class="container mx-auto mt-8">
        <h2 class="text-2xl font-bold mb-4">Add New Product</h2>
        <form action="{{ route('products.store') }}" method="post" class="max-w-md mx-auto">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-sm font-semibold text-gray-600">Product Name:</label>
                <input type="text" name="name" class="w-full mt-1 p-2 border rounded">
            </div>
            <div class="mb-4">
                <label for="price" class="block text-sm font-semibold text-gray-600">Product Price:</label>
                <input type="text" name="price" class="w-full mt-1 p-2 border rounded">
            </div>
            <div class="mb-4">
                <label for="quantity" class="block text-sm font-semibold text-gray-600">Product Quantity:</label>
                <input type="text" name="quantity" class="w-full mt-1 p-2 border rounded">
            </div>
            <button type="submit" class="bg-blue-500 text-white p-2 rounded hover:bg-blue-600">Add Product</button>
        </form>
    </div>
@endsection
