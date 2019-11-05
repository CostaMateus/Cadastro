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

// Route::get('/produtos', 'ProductController@index');
Route::resource('/products', 'ProductController');
Route::get('/products/{id}/delete', 'ProductController@destroy');
Route::post('/products/{id}', 'ProductController@update');

Route::get('/categories', 'CategoryController@index');
Route::get('/categories/novo', 'CategoryController@create');
Route::post('/categories', 'CategoryController@store');
Route::get('/categories/editar/{id}', 'CategoryController@edit');
Route::get('/categories/apagar/{id}', 'CategoryController@destroy');
Route::post('/categories/{id}', 'CategoryController@update');
