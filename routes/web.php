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
Route::group(['middleware'=>'language'],function(){

  Route::get('/','FrontEndController@index')->name('home');

  Route::get('single-product/{product_id}','FrontEndController@single_product')->name('single.product');

  Route::get('your_account','CustomerAccountController@index')->name('customer_account');

  Route::get('checkout','CustomerAccountController@checkout')->name('checkout');

  Route::get('billing-address','CustomerAccountController@create_billing_address');
  Route::post('billing-address','CustomerAccountController@store_billing_address');
  Route::get('billing-address-edit/{address_type}','CustomerAccountController@edit_billing_address');

  Route::resource('cart','CartController');
  Route::get('add-item-to-cart/{id}','CartController@add')->name('add.to.cart');
  Route::get('empty-cart','CartController@empty_cart')->name('empty.cart');
  

  Route::get('language/{lang}',function($lang){
    \Session::put('locale',$lang);
    return redirect()->back();
  })->name('language');


  Auth::routes();

  //admin home route


});

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


Route::resource('admin_area/customers-account', 'admin_area\\CustomersAccountController');

