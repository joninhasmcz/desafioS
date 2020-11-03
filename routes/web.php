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

Route::get('/', 'homeController')->name("home");
Route::get('/pescadores', 'pescadoresController')->name("pescadores");
Route::get('/pescados', 'pescadosController')->name("pescados");
Route::get('/pescaria', 'pescariaController')->name("pescaria");
Route::get('/reserva', 'reservaController')->name("reserva");

Route::get('/criarPescador', 'pescadoresController@criarPescador')->name("criarPescador");
Route::get('/criarPescador1', 'pescadoresController@pegarDados')->name("inserirPescador");
Route::get('/mostrarPescador', 'pescadoresController@mostrarPescador')->name("mostrarPescador");
Route::get('/deletarPescador', 'pescadoresController@deletarPescador')->name("deletarPescador");
Route::get('/deletarPescador1', 'pescadoresController@pegarId')->name("deletarIdPescador");
Route::get('/editarPescador', 'pescadoresController@editarPescador')->name("editarPescador");
Route::get('/editarPescador1', 'pescadoresController@editarIdPescador')->name("editarIdPescador");

Route::get('/mostrarPescados', 'pescadosController@mostrarPescados')->name("mostrarPescados");






