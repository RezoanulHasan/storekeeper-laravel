<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Sale;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProductController extends Controller
{
    public function dashboard()
    {
        // Logic to get sales figures for today, yesterday, this month, and last month
        $todaySales = Sale::whereDate('created_at', today())->sum('amount');
        $yesterdaySales = Sale::whereDate('created_at', today()->subDay())->sum('amount');
        $thisMonthSales = Sale::whereMonth('created_at', today()->month)->sum('amount');
        $lastMonthSales = Sale::whereMonth('created_at', today()->subMonth())->sum('amount');

        return view('dashboard', compact('todaySales', 'yesterdaySales', 'thisMonthSales', 'lastMonthSales'));
    }
    public function all()
    {
        $products = Product::all();
        return view('products.all', compact('products'));
    }


    public function showCreateProductForm()
    {
        return view('create-product');
    }

 
    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'quantity' => 'required|integer',
        ]);
    
        $product = Product::create([
            'name' => $request->input('name'),
            'price' => $request->input('price'),
            'quantity' => $request->input('quantity'),
        ]);
    
        return redirect()->route('products.all')->with('success', 'Product created successfully.');
    }
    





    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('products.show', compact('product'));
    }

    public function editPrice($id)
    {
        $product = Product::findOrFail($id);
        return view('products.edit-price', compact('product'));
    }

    public function updatePrice(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $product->update(['price' => $request->input('price')]);

        return redirect()->route('products.all')->with('success', 'Product price updated successfully.');
    }

    public function sellProduct(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        if ($product->quantity >= $request->input('quantity')) {
            $sale = Sale::create([
                'product_id' => $product->id,
                'quantity' => $request->input('quantity'),
                'amount' => $product->price * $request->input('quantity'),
            ]);

            $product->decrement('quantity', $request->input('quantity'));

            return redirect()->route('products.all')->with('success', 'Product sold successfully.');
        } else {
            return redirect()->route('products.all')->with('error', 'Not enough quantity in stock.');
        }
    }
}