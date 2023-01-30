<?php

use App\Models\Product;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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

// Get all products
Route::get('/products', function () {
    $products = Product::all();

    return view('products', ['products' => $products]);
});

Route::resource('products', ProductController::class);


