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


/* =================== admin ===========================
   ===================================================== */

/* =================== Access Control=================== */

Route::resource('modules', 'ModuleController');
Route::resource('module-links', 'ModuleLinkController');
Route::resource('users', 'UserController');
Route::resource('user-groups', 'UserGroupController');
Route::resource('module-assign', 'ModuleAssignController');


/* ====================UI Setup========================= */
Route::resource('sliders', 'SliderController');

/* =================== Setup =========================== */

Route::get('/admin', 'AdminController@index');
Route::resource('categories', 'CategoryController');
Route::resource('brands','BrandController');
Route::resource('products','ProductController');



/* =================== public ==========================
   ===================================================== */
Route::get('/', 'PublicProductController@index');
Route::get('product-details/{productId}', 'PublicProductController@show');
Route::get('customer-login', 'CustomerController@login');

/* ===================== Search =========================== */
Route::get('category-wise-search/{category_id}', 'CategoryController@categoryWiseSearch');
Route::get('brand-wise-search/{brand_id}', 'BrandController@brandWiseSearch');

/* ===================== Cart =========================== */
Route::resource('carts', 'CartController');
Route::post('add-to-cart', 'CartController@store');
