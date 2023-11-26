<?php

use App\Http\Controllers\AddCartController;
use App\Http\Controllers\AddProductController;
use App\Http\Controllers\HomeController;
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


Route::get('/', [HomeController::class, 'index']);

// Cart Routes
Route::get('/open_cart', [AddCartController::class, 'open_cart']);
// Make Order Routes
Route::get('/make_order', [AddCartController::class, 'make_order']);
// Fort Add To Cart
Route::get('/add_to_cart', [AddCartController::class, 'add_to_cart']);
// For Add Product

Route::get('/add_product', [AddProductController::class, 'index']);
Route::post('/add_product', [AddProductController::class, 'upload']);
