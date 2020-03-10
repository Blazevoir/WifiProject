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

Route::get('/', 'IndexController@index');
Route::get('/adminarea', 'IndexController@adminarea')->middleware('auth');

Auth::routes(['verify' => true]);

Route::resource('puntoacceso', "PuntoaccesoController")->middleware('verified');
Route::resource('activo', "ActivoController")->middleware('verified');

Route::post('/veractivo','ActivoController@index')->middleware('checkadmin');
Route::post('/verpuntoacceso','PuntoaccesoController@index')->middleware('verified');
Route::post('/verusers','UserController@index')->middleware('checkadmin');

Route::get('/users', 'IndexController@adminarea')->middleware('auth');
Route::get('/activo', 'IndexController@adminarea')->middleware('auth');
Route::get('/puntoacceso', 'IndexController@adminarea')->middleware('auth');

Route::get('/AP', 'IndexController@perPoint')->middleware('auth');
Route::get('/PD', 'IndexController@perDay')->middleware('auth');
Route::get('/PM', 'IndexController@perMonth')->middleware('auth');
Route::get('/PMacs', 'IndexController@perMacs')->middleware('auth');
Route::get('/PL', 'IndexController@perLocation')->middleware('auth');

Route::post('/activo/create','ActivoController@create');
Route::post('/puntoacceso/create','PuntoaccesoController@create');

Route::get('/home',"IndexController@index");
Route::get('token','AjaxController@token');


Route::get('rellenarActivo','AjaxController@rellenarActivo')->middleware('auth');
Route::post('borrarActivo','AjaxController@borrarActivo')->middleware('auth');

Route::get('rellenarUser','AjaxController@rellenarUser')->middleware('checkadmin');
Route::post('borrarUser','AjaxController@borrarUser')->middleware('checkadmin');

Route::get('rellenarPuntoAcceso','AjaxController@rellenarPuntoAcceso')->middleware('auth');
Route::post('borrarPuntoAcceso','AjaxController@borrarPuntoAcceso')->middleware('auth');

