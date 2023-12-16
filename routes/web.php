<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SaleController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', [ProductController::class, 'dashboard'])->name('dashboard');

Route::post('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::get('/create', [ProductController::class, 'showCreateProductForm'])->name('create');
Route::get('/products', [ProductController::class, 'all'])->name('products.all');
Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');
Route::get('/products/{id}/edit-price', [ProductController::class, 'editPrice'])->name('products.editPrice');
Route::put('/products/{id}/update-price', [ProductController::class, 'updatePrice'])->name('products.updatePrice');

Route::post('/products/{id}/sell', [ProductController::class, 'sellProduct'])->name('products.sellProduct');
Route::get('/products/{id}/sell', [ProductController::class, 'showSellProductForm'])->name('products.showSellProductForm');
Route::get('/sales', [SaleController::class, 'allsales'])->name('sales.allsales');