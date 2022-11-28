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

Route::get('/', 'App\Http\Controllers\ConsultaController@index');
Route::get('/consultar', 'App\Http\Controllers\ConsultaController@consultar')->name('consultar');
Route::post('/autenticar', 'App\Http\Controllers\ConsultaController@autenticar')->name('autenticar');
Route::get('/consulta/{token}', 'App\Http\Controllers\ConsultaController@index')->name('consulta');