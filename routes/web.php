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
Route::get('/loginadm', function () {
    return view('login.loginadm');
});
Route::get('/loginfee', function () {
    return view('login.loginfe');
});
Route::get('/adm', function () {
    return view('admin.product.list');
});
Route::get('/adm/addproduct', function () {
    return view('admin.product.add');
});