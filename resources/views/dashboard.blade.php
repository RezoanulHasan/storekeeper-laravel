@extends('layouts.app')

@section('content')
    <div class="container mx-auto mt-8">
        <h2 class="text-2xl font-bold mb-4">Sales Figures</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
            @foreach ($products as $product)
                <div class="bg-white p-4 rounded shadow-md">
                    <h3 class="text-lg font-semibold">{{ $product->name }}</h3>
                    <p class="text-gray-600">Price: ${{ $product->price }}</p>
                   
                    <p class="text-gray-600">Quantity: {{ $product->quantity }}</p>
                </div>
            @endforeach
        </div>
    </div>
@endsection
