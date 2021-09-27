<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for yourte application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/lampada', 'StatusLampadaController@index')
    ->name('apagar_lampada');

Route::post('/lampada', 'StatusLampadaController@store2');

Route::get('/lampada/acender', 'StatusLampadaController@create')
    ->name('acender_lampada');

Route::post('/lampada/acender', 'StatusLampadaController@store');

Route::get('/acessar/status', 'StatusLampadaController@acessarStatus');
