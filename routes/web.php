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

Route::get('/', 'homeController');
Route::get('/pescadores', 'pescadoresController');
Route::get('/pescados', 'pescadosController');
Route::get('/pescaria', 'pescariaController');
Route::get('/reserva', 'reservaController');
Route::get('/criarPescador', 'pescadoresController@criarPescador');
#Route::get('/criarPescado', 'pescadoController@criarPescado');



