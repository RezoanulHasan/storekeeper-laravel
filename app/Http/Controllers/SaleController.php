<?php

namespace App\Http\Controllers;

use App\Models\Sale;

class SaleController extends Controller
{
    public function allsales()
    {
        $sales = Sale::all();
        return view('sales.allsales', compact('sales'));
    }
}