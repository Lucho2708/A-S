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

Route::get('/ejemplo', function () {
    return view('ejemplo');
});


Route::post('/enviar','ContatoController@enviaContato');
/*
Route::get('/', 'HomeController@index')->name('/');	

Route::post('enviar', 'HomeController@enviar')->name('enviar');

Route::post('/enviar','ContratoController@enviarContato');