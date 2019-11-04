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
Route::resource('/produtos', 'ProductController');

Route::get('/categorias', 'CategoryController@index');
Route::get('/categorias/novo', 'CategoryController@create');
Route::post('/categorias', 'CategoryController@store');
Route::get('/categorias/editar/{id}', 'CategoryController@edit');
Route::get('/categorias/apagar/{id}', 'CategoryController@destroy');
Route::post('/categorias/{id}', 'CategoryController@update');
