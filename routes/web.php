<?php

use App\Http\Controllers\admin\bannercontroller;
use App\Http\Controllers\admin\productcontroller;
use App\Http\Controllers\admin\uploadcontronller;
use App\Http\Controllers\frontend\bannercontroller as FrontendBannercontroller;
use App\Http\Controllers\frontend\productcontroller as FrontendProductcontroller;
use Illuminate\Support\Facades\Route;

// Route::get('/',[FrontendBannercontroller::class,'show_banner']);
Route::get('/',[FrontendProductcontroller::class,'index']);
Route::get('allproducts',[FrontendProductcontroller::class,'show_allhotproduct']);
Route::get('fe/product/{id}',[FrontendProductcontroller::class,'show_product']);
// Route::get('home',[FrontendProductcontroller::class,'index']);


Route::prefix('adm') ->group( function (){
    Route::get('/home', function () {return view('admin.dashboad.home');});
    Route::post('/slide/add',[bannercontroller::class,'insert_banner']);
    Route::get('/slide/create',[bannercontroller::class,'add_banner']);
    Route::get('/slide/list',[bannercontroller::class,'list_banner']);
    Route::get('/slide/delete',[bannercontroller::class,'delete_banner']);
    Route::get('/slide/edit/{id}',[bannercontroller::class,'edit_banner']);
    Route::post('/slide/edit/{id}',[bannercontroller::class,'update_banner']);



    Route::post('/product/add',[productcontroller::class,'insert_product']);
    Route::get('/product/create',[productcontroller::class,'add_product']);
    Route::get('/product/list',[productcontroller::class,'list_product']);
    Route::get('/product/delete',[productcontroller::class,'delete_product']);
    Route::get('/product/edit/{id}',[productcontroller::class,'edit_product']);
    Route::post('/product/edit/{id}',[productcontroller::class,'update_product']);

});


Route::post('/upload',[uploadcontronller::class,'upload']);
Route::post('/uploads',[uploadcontronller::class,'uploadImage']);
