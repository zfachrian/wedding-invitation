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
  Route::put('/banner/{id}', 'bannerController@update')->name('banner.update');
  Route::delete('/banner/{id}', 'bannerController@destroy')->name('banner.destroy');


  Route::get('/category', 'categoryController@index')->name('category');
  Route::get('/category/create', 'categoryController@create')->name('category.create');
  Route::post('/category', 'categoryController@store')->name('category.store');
  Route::get('/category/edit/{id}', 'categoryController@edit')->name('category.edit');
  Route::put('/category/{id}', 'categoryController@update')->name('category.update');
  Route::delete('/category/{id}', 'categoryController@destroy')->name('category.destroy');

  Route::get('/product', 'productController@index')->name('product');
  Route::get('/product/create', 'productController@create')->name('product.create');
  Route::post('/product', 'productController@store')->name('product.store');
  Route::get('/product/edit/{id}', 'productController@edit')->name('product.edit');
  Route::put('/product/{id}', 'productController@update')->name('product.update');
  Route::delete('/product/{id}', 'productController@destroy')->name('product.destroy');

  Route::get('/store', 'storeController@index')->name('store');
  Route::put('/store/{id}', 'storeController@update')->name('store.update');

  Route::get('/password', 'passwordController@index')->name('password');
  Route::put('/password', 'passwordController@update')->name('password.update');


  Route::get('/logout', 'authController@logout')->name('logout');
});
