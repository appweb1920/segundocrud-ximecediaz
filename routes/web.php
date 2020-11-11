<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {return view('welcome');});

Route::get('/piezas','PiezasController@index');
Route::get('/agrega','PiezasController@agrega');
Route::post('/add', 'PiezasController@store');
Route::get('/editar/{id}', 'PiezasController@MuestraEdicion');
Route::post('/editar/guardaEdicion', 'PiezasController@guardaEdicion');

Route::get('/borrar/{id}', 'PiezasController@destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
