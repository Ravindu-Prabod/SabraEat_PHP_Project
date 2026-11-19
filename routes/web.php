<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/uvindu', function () {
    return view('outlets.uvindu');
});

Route::get('/mohan', function () {
    return view('outlets.mohan');
});

Route::get('/dashboard', function () {
    return view('outlets.dashboard');
});

Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart/remove', [CartController::class, 'remove'])->name('cart.remove');
Route::post('/cart/clear', [CartController::class, 'clear'])->name('cart.clear');
Route::post('/cart/checkout', [CartController::class, 'checkout'])->name('cart.checkout');
Route::post('/dashboard/orders/{index}/status', [CartController::class, 'updateStatus'])->name('dashboard.orders.status');
