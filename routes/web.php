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

Route::get('/', function () {
    return view('index');
});

Route::get('/products', 'ProductController@indexView')->name('products.index');
Route::post('/products', 'ProductController@store')->name('products.store');
Route::get('/products/create', 'ProductController@create')->name('products.create');
Route::get('/products/{id}/edit', 'ProductController@edit')->name('products.edit');
Route::post('/products/{id}', 'ProductController@update')->name('products.update');
Route::get('/products/{id}/delete', 'ProductController@destroyNormal')->name('products.destroy');

Route::get('/categories', 'CategoryController@index');
Route::post('/categories', 'CategoryController@store');
Route::get('/categories/novo', 'CategoryController@create');
Route::post('/categories/{id}', 'CategoryController@update');
Route::get('/categories/editar/{id}', 'CategoryController@edit');
Route::get('/categories/apagar/{id}', 'CategoryController@destroy');
