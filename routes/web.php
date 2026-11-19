<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
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