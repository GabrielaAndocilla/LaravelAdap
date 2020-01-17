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


Route::get('[URL]', '[Controlador@metodo]');

Route::get('test', 'PrimController@index');


Route::get('/Vista1', 'PrimController@Vista1');

Route::get('/PrimController', 'PrimController@FormS');

Route::post('/Vista1','PrimController@Tim')->name('vist');

