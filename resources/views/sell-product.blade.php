<!-- resources/views/sell-product.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="mb-4">
        <h2 class="text-2xl font-semibold">Sell Product</h2>
        <form action="{{ route('products.sellProduct', $product->id) }}" method="post">
            @csrf
           

            <div class="mb-2">
                <label for="quantity" class="block">Quantity to Sell:</label>
                <input type="text" id="quantity" name="quantity" class="border p-2 w-full"   required>
            </div>
            <button type="submit" class="bg-blue-500 text-white py-2 px-4">Sell Product</button>
        </form>
    </div>

    <a href="{{ route('products.all') }}" class="text-blue-500">Back to All Products</a>
@endsection
