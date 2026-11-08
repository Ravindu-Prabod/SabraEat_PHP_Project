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

// Login
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');