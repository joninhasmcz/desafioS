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
// Mains
Route::get('/', 'homeController')->name("home");
Route::get('/pescadores', 'pescadoresController')->name("pescadores");
Route::get('/pescados', 'pescadosController')->name("pescados");
Route::get('/pescaria', 'pescariaController')->name("pescaria");
Route::get('/reserva', 'reservaController')->name("reserva");
// Pescador
Route::get('/criarPescador', 'pescadoresController@criarPescador')->name("criarPescador");
Route::get('/criarPescador1', 'pescadoresController@pegarDados')->name("inserirPescador");
Route::get('/mostrarPescador', 'pescadoresController@mostrarPescador')->name("mostrarPescador");
Route::get('/deletarPescador', 'pescadoresController@deletarPescador')->name("deletarPescador");
Route::get('/deletarPescador1', 'pescadoresController@pegarId')->name("deletarIdPescador");
Route::get('/editarPescador', 'pescadoresController@editarPescador')->name("editarPescador");
Route::get('/editarPescador1', 'pescadoresController@editarIdPescador')->name("editarIdPescador");
// Pescado
Route::get('/mostrarPescados', 'pescadosController@mostrarPescados')->name("mostrarPescados");
Route::get('/criarPescados', 'pescadosController@criarPescado')->name("criarPescados");
Route::get('/criarPescados1', 'pescadosController@pegarDados')->name("inserirPescados");
Route::get('/editarPescados', 'pescadosController@editarPescado')->name("editarPescados");
Route::get('/editarPescados1', 'pescadosController@editarIdPescado')->name("editarIdPescados");
Route::get('/deletarPescados', 'pescadosController@deletarPescado')->name("deletarPescados");
Route::get('/deletarPescados1', 'pescadosController@deletarIdPescado')->name("deletarIdPescados");
// Pescaria
Route::get('/mostrarPescarias', 'pescariaController@mostrarPescarias')->name("mostrarPescarias");
Route::get('/criarPescarias', 'pescariaController@criarPescaria')->name("criarPescarias");
Route::get('/criarPescarias1', 'pescariaController@pegarDados')->name("inserirPescarias");
Route::get('/editarPescarias', 'pescariaController@editarPescaria')->name("editarPescarias");
Route::get('/editarPescarias1', 'pescariaController@editarIdPescaria')->name("editarIdPescarias");
Route::get('/deletarPescarias', 'pescariaController@deletarPescaria')->name("deletarPescarias");
Route::get('/deletarPescarias1', 'pescariaController@deletarIdPescaria')->name("deletarIdPescarias");
// Campeonato Pesca
Route::get('/reservaInitial', 'reservaController@reservaInitial')->name("reservarInitial");
Route::get('/reservaInitial1', 'reservaController@reservaId')->name("reservarId");
Route::get('/reservaClassificacaoP', 'reservaController@mostrarCampeonatoPeso')->name("classificarPeso");
Route::get('/reservaClassificacaoQ', 'reservaController@mostrarCampeonatoQuantidade')->name("classificarQuantidade");










