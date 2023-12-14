@extends('layouts.app')

@section('content')
    <div class="container mx-auto mt-8">
        <h2 class="text-2xl font-bold mb-4">Sale Transaction History</h2>
        <table class="min-w-full border rounded overflow-hidden">
            <thead class="bg-gray-200">
                <tr>
                    <th class="py-2 px-4">Product</th>
                    <th class="py-2 px-4">Quantity</th>
                    <th class="py-2 px-4">Amount</th>
                    <th class="py-2 px-4">Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($sales as $sale)
                    <tr>
                        <td class="py-2 px-4">{{ $sale->product->name }}</td>
                        <td class="py-2 px-4">{{ $sale->quantity }}</td>
                        <td class="py-2 px-4">${{ $sale->amount }}</td>
                        <td class="py-2 px-4">{{ $sale->created_at->format('Y-m-d H:i:s') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
