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
