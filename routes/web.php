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

//RUTA DE PRUEBA
Route::get('/prueba', 'PruebaController@prueba');


//RUTA DE LOGIN

Route::get('/', 'LoginController@index');

Route::get('layouts/login', 'LoginController@login');

Route::get('/logout', 'LoginController@logout');


//RUTA DE REGISTER

Route::get('/register', 'RegisterController@create');

Route::resource('layouts/register', 'RegisterController');


// RUTAS PARA EL BET

Route::patch('/bet/carga/{id}/update/', 'CargaController@update')->name('bet.carga.update');
Route::resource('bet/carga', 'CargaController');

Route::patch('/bet/seleccion/{id}/update/', 'SeleccionController@update')->name('bet.seleccion.update');
Route::resource('bet/seleccion', 'SeleccionController');

Route::patch('/bet/jugador/{id}/update/', 'JugadorController@update')->name('bet.jugador.update');
Route::resource('bet/jugador', 'JugadorController');

Route::patch('/bet/partido/{id}/update/', 'PartidoController@update')->name('bet.partido.update');
Route::resource('bet/partido', 'PartidoController');

Route::patch('/bet/pronostico/{id}/update/', 'PronosticoController@update')->name('bet.pronostico.update');
Route::resource('bet/pronostico', 'PronosticoController');

Route::patch('/bet/participante/{id}/update/', 'ParticipanteController@update')->name('bet.participante.update');
Route::resource('bet/participante', 'ParticipanteController');


// RUTAS PARA LOS REPORTES

Route::resource('bet/reporte/reporte1', 'Reporte1Controller');
Route::resource('bet/reporte/reporte2', 'Reporte2Controller');
Route::resource('bet/reporte/reporte3', 'Reporte3Controller');
Route::resource('bet/reporte/reporte4', 'Reporte4Controller');
Route::resource('bet/reporte/reporte5', 'Reporte5Controller');

