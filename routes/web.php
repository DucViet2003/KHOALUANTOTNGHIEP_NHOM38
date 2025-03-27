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
Route::get('/loginadm', function () {
    return view('login.loginadm');
});
Route::get('/loginfee', function () {
    return view('login.loginfe');
});