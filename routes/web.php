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


// =================== admin ===========================
Route::get('/admin', 'AdminController@index');

// category
Route::resource('categories', 'CategoryController');
Route::get('delete-category/{id}', 'CategoryController@destroy');

// manufacture
Route::resource('manufactures','ManufactureController');
Route::get('delete-manufacture/{id}','ManufactureController@destroy');

// product
Route::resource('products','ProductController');
Route::get('delete-product/{id}','ProductController@destroy');

// =================== public ==========================
Route::get('/', 'FontendController@index');


