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


Route::post('/enviar','ContatoController@enviaContato');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home', 'HomeController@index')->name('home');

Route::group([],function(){
	Route::resource('contratos','ContratosController')->middleware('auth');
});

Route::group([],function(){
	Route::resource('cliente','ClienteController')->middleware('auth');
});


Route::group([],function(){
	Route::resource('proveedor','ProveedorController')->middleware('auth');
});

Route::group([],function(){
	Route::resource('garantias','GarantiasController')->middleware('auth');
});
// Authentication Routes...
Route::get('login', [
  'as' => 'login',
  'uses' => 'Auth\LoginController@showLoginForm'
]);
Route::post('login', [
  'as' => '',
  'uses' => 'Auth\LoginController@login'
]);
Route::post('logout', [
  'as' => 'logout',
  'uses' => 'Auth\LoginController@logout'
]);
Route::get('logout', [
  'as' => 'logout',
  'uses' => 'Auth\LoginController@logout'
]);
// Registration Routes...
Route::get('register', [
  'as' => 'register',
  'uses' => 'Auth\RegisterController@showRegistrationForm'
]);
Route::post('register', [
  'as' => '',
  'uses' => 'Auth\RegisterController@register'
]);
