<!-- resources/views/sales/allsales.blade.php -->

@extends('layouts.app')

@section('content')
    <h2 class="text-2xl font-semibold mb-4">All Sales</h2>

    @if(count($sales) > 0)
        <table class="min-w-full bg-white border border-gray-300">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b">ID</th>
                    <th class="py-2 px-4 border-b">Product Name</th>
                    <th class="py-2 px-4 border-b">Quantity</th>
                    <th class="py-2 px-4 border-b">Amount</th>
                    <th class="py-2 px-4 border-b">Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach($sales as $sale)
                    <tr>
                        <td class="py-2 px-4 border-b">{{ $sale->id }}</td>
                        <td class="py-2 px-4 border-b">{{ $sale->product->name }}</td>
                        <td class="py-2 px-4 border-b">{{ $sale->quantity }}</td>
                        <td class="py-2 px-4 border-b">{{ $sale->amount }}</td>
                        <td class="py-2 px-4 border-b">{{ $sale->created_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No sales data available</p>
    @endif
@endsection
