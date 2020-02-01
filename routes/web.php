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


/* ======================================== admin ============================================= */

/* =================== login ===========================*/
Route::get('/admin', 'AdminController@index');

/* =================== Access Control=================== */
Route::resource('modules', 'ModuleController');
Route::resource('module-links', 'ModuleLinkController');
Route::resource('users', 'UserController');
Route::resource('user-groups', 'UserGroupController');
Route::resource('permissions', 'PermissionController');
Route::post('user-group-wise-permission', 'PermissionController@userGroupWisePage');


/* ====================UI Setup========================= */
Route::resource('sliders', 'SliderController');

/* =================== Setup =========================== */
Route::resource('categories', 'CategoryController');
Route::resource('brands','BrandController');
Route::resource('products','ProductController');

/*======================Order Manage=====================*/
Route::get('pending-orders', 'OrderManageController@index');
Route::get('order-received', 'OrderManageController@receivedOrders');
Route::get('order-processing', 'OrderManageController@orderProcessing');
Route::get('delivered-orders', 'OrderManageController@deliveredOrders');
Route::get('order-details-view/{orderId}', 'OrderManageController@show');
Route::post('order-approve/{orderId}', 'OrderManageController@orderApprove');



/* ===================================== public ============================================= */
Route::get('/', 'PublicProductController@index');
Route::get('product-details/{productId}', 'PublicProductController@show');
Route::get('customer-login', 'CustomerController@login');

/* ===================== Search =========================== */
Route::get('category-wise-search/{category_id}', 'CategoryController@categoryWiseSearch');
Route::get('brand-wise-search/{brand_id}', 'BrandController@brandWiseSearch');

/* ===================== Cart =========================== */
Route::resource('carts', 'CartController');
Route::post('add-to-cart', 'CartController@store');
Route::get('remove-cart/{rowId}', 'CartController@destroy');
Route::post('update-cart/{rowId}', 'CartController@update');
Route::get('checkout', 'CartController@checkout');

/* ====================== Customer ======================= */
Route::post('order-submit',  'CustomerController@orderSubmit');
Route::post('user-validate', 'CustomerController@userValidation');
Route::get('account', 'CustomerController@index');
Route::get('update-profile', 'CustomerController@updateProfile');
Route::put('update-customer-profile', 'CustomerController@updateProfile');
Route::get('order-tracking', 'CustomerController@orderTrack');
Route::get('received-orders', 'CustomerController@orderReceived');
Route::get('order-details/{orderId}', 'CustomerController@orderDetails');
Route::get('subscriptions', 'CustomerController@subscription');
