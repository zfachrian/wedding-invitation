<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index');
Route::get('/shop', 'ShopController@index');
Route::get('/shop/{id}', 'ShopController@show');
Route::get('/contact', 'ContactController@index');


//login
Route::group(['prefix' => 'loginpanel', 'namespace' => 'back'], function () {
  Route::get('/', 'authController@index');
  Route::post('/', 'authController@loginAuth')->name('loginAuth');
});

Route::group(['middleware' => 'is.login', 'prefix' => 'panel', 'as' => 'back.', 'namespace' => 'back'], function () {   
  Route::get('/dashboard', 'dashboardController@index')->name('dashboard');

  Route::get('/banner', 'bannerController@index')->name('banner');
  Route::get('/banner/create', 'bannerController@create')->name('banner.create');
  Route::post('/banner', 'bannerController@store')->name('banner.store');
  Route::get('/banner/edit/{id}', 'bannerController@edit')->name('banner.edit');

  
  Route::get('/category', 'categoryController@index')->name('category');
  Route::get('/product', 'productController@index')->name('product');
  
  Route::get('/logout', 'authController@logout')->name('logout');
});