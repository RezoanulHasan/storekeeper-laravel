<!-- resources/views/dashboard.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="mb-4">
        <h2 class="text-2xl font-semibold">Dashboard</h2>

        <div class="grid grid-cols-2 gap-4 mt-4">
            <div class="bg-white p-4 rounded-md shadow-md">
                <h3 class="text-xl font-semibold mb-2">Today's Sales</h3>
                <p class="text-lg">{{ $todaySales }}</p>
            </div>
            <div class="bg-white p-4 rounded-md shadow-md">
                <h3 class="text-xl font-semibold mb-2">Yesterday's Sales</h3>
                <p class="text-lg">{{ $yesterdaySales }}</p>
            </div>
            <div class="bg-white p-4 rounded-md shadow-md">
                <h3 class="text-xl font-semibold mb-2">This Month's Sales</h3>
                <p class="text-lg">{{ $thisMonthSales }}</p>
            </div>
            <div class="bg-white p-4 rounded-md shadow-md">
                <h3 class="text-xl font-semibold mb-2">Last Month's Sales</h3>
                <p class="text-lg">{{ $lastMonthSales }}</p>
            </div>
        </div>
    </div>
@endsection
