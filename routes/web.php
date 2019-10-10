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

// Route::get('/productos', 'ProductController@index')->name('productos');
// Route::get('/lista-productos/{id/show}', 'ProductController@show')->name('lista-productos');
// Route::get('/lista-productos', 'ProductController@index')->name('lista-productos');
// //GET SECTION
// Route::get('/registrar-producto', 'ProductController@create')->name('registrar-producto');


// // POST SECTION
// Route::post('/registrar-producto', 'ProductController@store')->name('registrar-producto');


Route::resource('productos','ProductController');
Route::post('productos/{id}/editar','ProductController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
