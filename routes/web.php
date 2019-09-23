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

// category
Route::resource('categories', 'CategoryController');

// manufacture
Route::resource('manufactures','ManufactureController');

// product
Route::resource('products','ProductController');

/* =================== public ==========================
   ===================================================== */
Route::get('/', 'FontendController@index');


