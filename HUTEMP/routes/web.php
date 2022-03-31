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

Route::group(['prefix' => 'hutemp'], function(){
    Route::get('/', 'DatosController@index');
    Route::get('/documentacion', 'DatosController@documentacion');
    Route::get('/monitoreo', 'DatosController@monitoreo');
    Route::get('/listado_datos', 'DatosController@listado');
});

