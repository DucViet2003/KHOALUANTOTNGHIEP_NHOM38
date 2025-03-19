<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('fe.home');
});
Route::get('/cart', function () {
    return view('fe.cart');
});
Route::get('/all', function () {
    return view('fe.allproducts');
});
Route::get('/admin.list', function () {
    return view('admin.product.list');
});