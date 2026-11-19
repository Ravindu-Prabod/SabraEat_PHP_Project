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
