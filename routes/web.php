<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index');
Route::get('/shop', 'ShopController@index');
Route::get('/shop/{id}', 'ShopController@show');
Route::get('/contact', 'ContactController@index');


//login
Route::group(['prefix' => 'loginpanel', 'namespace' => 'back'], function () {
  Route::get('/', 'authController@index')->name('login');
});

Route::group(['prefix' => 'panel', 'as' => 'back.', 'namespace' => 'back'], function () {   
  Route::get('/dashboard', 'dashboardController@index')->name('dashboard');
  Route::get('/banner', 'bannerController@index')->name('banner');
  Route::get('/category', 'categoryController@index')->name('category');
  Route::get('/product', 'productController@index')->name('product');
  
});