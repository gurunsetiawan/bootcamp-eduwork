<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
    //return "Welcome to Toko Roti App!";
});

Route::get('/products', function () {
    return view('products');
    //return "Here are our products";});
});

Route::get('/cart', function () {
    return view('cart');
    //return "This is your shopping cart";
});

Route::get('/checkout', function () {
    return view('checkout');
    //return "Checkout Page";
});

Route::get('/about', function () {
    return view('about');
    //return "About Us Page";
});
