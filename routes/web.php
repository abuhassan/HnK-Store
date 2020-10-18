<?php

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

Route::get('/', 'App\Http\Controllers\MainController@index')
    ->name('main');

Route::resource('products', 'App\Http\Controllers\ProductController');

Route::resource('carts', 'App\Http\Controllers\CartController')
    ->only(['index']);

Route::resource('orders', 'App\Http\Controllers\OrderController')
    ->only(['create', 'store']);

Route::resource('products.carts', 'App\Http\Controllers\ProductCartController')
    ->only(['store', 'destroy']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//added for Git
