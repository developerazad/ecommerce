<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


/* =================== admin ==========================
   ===================================================== */
Route::get('/admin', 'AdminController@index');
Route::resource('categories', 'CategoryController');
Route::resource('manufactures','ManufactureController');
Route::resource('products','ProductController');



/* =================== public ==========================
   ===================================================== */
Route::get('/', 'PublicProductController@index');
Route::get('product-details/{productId}', 'PublicProductController@show');
Route::resource('carts', 'CartController');


