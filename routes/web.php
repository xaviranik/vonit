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

Route::get('/', 'FrontendController@index');

Auth::routes(['register' => false]);

Route::get('show-product/{product}', 'ProductController@show')->name('product.show');
Route::get('show-category/{subcategory}', 'FrontendController@showByCategory')->name('product.show.category');

Route::group(['middleware' => 'auth'], function() {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('category', 'CategoryController');
    Route::resource('subcategory', 'SubCategoryController');
    Route::resource('product', 'ProductController')->except(['show']);
});

