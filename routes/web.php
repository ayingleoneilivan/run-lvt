<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepage');
});

Route::get('/shoes', function () {
    return view('shoes');
});

Route::get('/viewshoes', function () {
    return view('viewshoes');
});

Route::get('/signin', function () {
    return view('signin');
});

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/checkout', function () {
    return view('checkout');
});