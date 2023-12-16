<!-- resources/views/products/all.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="mb-4 flex justify-between items-center">
        <h2 class="text-2xl font-semibold">All Products</h2>
        <a href="{{ route('create') }}" class="text-blue-500 mb-10">Create Product</a>
    </div>

    @if(session('success'))
        <div class="bg-green-200 text-green-800 p-2 mb-4">
            {{ session('success') }}
        </div>
    @endif

    @if(session('error'))
        <div class="bg-red-200 text-red-800 p-2 mb-4">
            {{ session('error') }}
        </div>
    @endif

    @if(count($products) > 0)
        <table class="min-w-full bg-white border border-gray-300">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b">ID</th>
                    <th class="py-2 px-4 border-b">Name</th>
                    <th class="py-2 px-4 border-b">Price</th>
                    <th class="py-2 px-4 border-b">Quantity</th>
                    <th class="py-2 px-4 border-b">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                    <tr>
                        <td class="py-2 px-4 border-b">{{ $product->id }}</td>
                        <td class="py-2 px-4 border-b">{{ $product->name }}</td>
                        <td class="py-2 px-4 border-b">{{ $product->price }}</td>
                        <td class="py-2 px-4 border-b">{{ $product->quantity }}</td>
                        <td class="py-2 px-4 border-b">
    <a href="{{ route('products.editPrice', $product->id) }}" class="text-blue-500">Edit Price</a>
    @if ($product->quantity > 0)

    <a href="{{ route('products.showSellProductForm', $product->id) }}" class="text-red-500 mx-7">Sell</a>

      
    @else
        <span class="text-gray-500 mx-7">No stock available</span>
    @endif
</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No products available. <a href="{{ route('create') }}" class="text-blue-500">Create a product</a>.</p>
    @endif
    
    

