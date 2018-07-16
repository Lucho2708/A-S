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


Route::get('towns/{id}','ClienteController@getTowns');

// E-mail verification
Route::get('verifyEmailFirst','Auth\RegisterController@verifyEmailFirst')->name('verifyEmailFirst');

Route::get('verify/{email}/{confirmation_code}','Auth\RegisterController@sendEmailDone')->name('sendEmailDone');


Route::post('/enviar','ContatoController@enviaContato');

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/home', 'HomeController@index')->name('home');

Route::get('perfil', 'UserController@perfil')->name('perfil')->middleware('auth');
Route::post('perfil', 'UserController@update_avatar')->name('perfil')->middleware('auth');

Route::get('edit', 'GarantiasController@edit')->name('edit')->middleware('auth');
Route::post('edit', 'GarantiasController@update')->name('edit')->middleware('auth');

Route::get('edit', 'ClienteController@edit')->name('edit')->middleware('auth');
Route::post('edit', 'ClienteController@update')->name('edit')->middleware('auth');



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
