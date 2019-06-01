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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/Reg_PunstosDeControl', function () {
    return view('puntos de control/create');
});

// Cargo
Route::get('reg_Cargo', 'GestionarCargos@create');
Route::post('guardarCargo', 'GestionarCargos@store');
Route::get('listaCargo', 'GestionarCargos@index');
Route::get('eliminarCargo/{id}', 'GestionarCargos@destroy');

// Personas
Route::get('reg_Empleado', 'GestionarPersonas@create');
Route::post('guardarEmpleado', 'GestionarPersonas@store');
Route::get('listaEmpleados', 'GestionarPersonas@index');

// Buses
Route::get('reg_Bus', 'GestionarBuses@create');
Route::post('guardarBus', 'GestionarBuses@store');
Route::get('listaBuses', 'GestionarBuses@index');

// Bus - Chofer
Route::get('Asig_Bus=Chofer', 'Asignaciones_Bus_Chofer@create');
Route::post('guardarAsignacion', 'Asignaciones_Bus_Chofer@store');
Route::get('listaAsignacines', 'Asignaciones_Bus_Chofer@index');

// Asistencia
Route::get('marcarEntrada', 'MarcarAsistencia@entrada');
Route::get('marcarSalida', 'MarcarAsistencia@salida');
Route::post('guardarMarcacion', 'MarcarAsistencia@storeIn');
Route::get('reporteAsistencias', 'MarcarAsistencia@index');

// Rol de Partida
Route::get('enlistar/{id}', 'RolDePartidas@store');
Route::get('rolDePartidas', 'RolDePartidas@index');


// Rol de Partida
Route::get('reg_PuntoDeControl', 'GestionarPuntos_de_controles@create');