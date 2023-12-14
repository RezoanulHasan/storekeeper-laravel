@extends('layouts.app')

@section('content')
    <div class="container mx-auto mt-8">
        <h2 class="text-2xl font-bold mb-4">Edit Product Price</h2>
        <form action="{{ route('products.update', $product) }}" method="post" class="max-w-md mx-auto">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="price" class="block text-sm font-semibold text-gray-600">New Product Price:</label>
                <input type="text" name="price" value="{{ $product->price }}" class="w-full mt-1 p-2 border rounded">
            </div>
            <button type="submit" class="bg-blue-500 text-white p-2 rounded hover:bg-blue-600">Update Price</button>
        </form>
    </div>
@endsection
