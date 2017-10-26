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

Route::get('/','CustomerController@index');
Route::get('home','CustomerController@index')->name('home');
Route::get('single-product/{product_id}','CustomerController@single_roduct')->name('single.product');

Route::resource('cart','CartController');
Route::get('add-item-to-cart/{id}','CartController@add')->name('add.to.cart');
Route::get('empty-cart','CartController@empty_cart')->name('empty.cart');
Route::get('checkout','CustomerController@checkout')->name('checkout');




Auth::routes();

//admin home route


Route::group(['middleware'=>'auth:admin'], function(){

Route::get('admin_area/home','admin_area\AdminHomeController@index')->name('admin-home');

//category routes
Route::resource('admin_area/categories', 'admin_area\\CategoriesController');

//all site admins routes

Route::resource('admin_area/admins', 'admin_area\\AdminsController');

//all categories routes

Route::resource('admin_area/sliders', 'admin_area\\SlidersController');

//all products routes

Route::resource('admin_area/products', 'admin_area\\ProductsController');

}
);


Route::get('admin_area/login', 'admin_area\Auth\LoginController@showLoginForm')->name('admin.login');

Route::post('admin_area/login', 'admin_area\Auth\LoginController@login');


Route::post('admin_area/logout', 'admin_area\Auth\LoginController@logout')->name('admin.logout');




