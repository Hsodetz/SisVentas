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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//Rutas del sistema
//Rutas de Categorias
Route::get('/categorias',                   'CategoriaController@index')->name('categorias.index');
Route::get('/categorias/create',            'CategoriaController@create')->name('categorias.create');
Route::post('/categorias/store',            'CategoriaController@store')->name('categorias.store');
Route::get('categoria/{categoria}',         'CategoriaController@show')->name('categorias.show');
Route::get('/categorias/{categoria}',       'CategoriaController@edit')->name('categorias.edit');
Route::put('/categorias/{categoria}',       'CategoriaController@update')->name('categorias.update');
Route::delete('/categorias/{categoria}',    'CategoriaController@destroy')->name('categorias.destroy');

//Rutas de Clientes
Route::get('/clientes',                     'ClienteController@index')->name('clientes.index');
Route::get('/clientes/create',              'ClienteController@create')->name('clientes.create');
Route::post('/clientes/store',              'ClienteController@store')->name('clientes.store');
Route::get('cliente/{cliente}',             'ClienteController@show')->name('clientes.show');
Route::get('/clientes/{cliente}',           'ClienteController@edit')->name('clientes.edit');
Route::put('/clientes/{cliente}',           'ClienteController@update')->name('clientes.update');
Route::delete('/clientes/{cliente}',        'ClienteController@destroy')->name('clientes.destroy');

//Route::resource('categorias', 'CategoriaController');