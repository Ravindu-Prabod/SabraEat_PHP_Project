<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/outlets', function () {
    return view('food_outlets');
});

Route::get('/bakery', function () {
    return view('bakery');
});

// Student / Customer register
Route::get('/register', [AuthController::class, 'showRegisterCustomer'])->name('register');
Route::post('/register', [AuthController::class, 'registerCustomer'])->name('register.post');

// Outlet Admin register
Route::get('/register/outlet', [AuthController::class, 'showRegisterOutlet'])->name('register.outlet');
Route::post('/register/outlet', [AuthController::class, 'registerOutlet'])->name('register.outlet.post');

// Customer login
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'loginCustomer'])->name('login.post');

// Outlet Admin login
Route::get('/login/outlet', [AuthController::class, 'showLoginOutlet'])->name('login.outlet');
Route::post('/login/outlet', [AuthController::class, 'loginOutlet'])->name('login.outlet.post');

// Logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');