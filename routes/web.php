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

Route::get('/', function () {
    return view('welcome');
});

/*ASIGNACIÓN*/

## View
Route::get('asignacions', 'AsignacionController@index')->name('asignacions');

## Create
Route::get('asignacions/create', 'AsignacionController@create')->name('asignacions.create');
Route::post('asignacions/store', 'AsignacionController@store')->name('asignacions.store');

## Update
Route::get('asignacions/store/{idAsignacion}', 'AsignacionController@edit')->name('asignacions.edit');
Route::post('asignacions/update/{idAsignacion}', 'AsignacionController@update')->name('asignacions.update');

## Delete
Route::get('asignacions/delete/{idAsignacion}', 'AsignacionController@destroy')->name('asignacions.delete');

/*AUDIENCIA*/

## View
Route::get('audiencias', 'AudienciaController@index')->name('audiencias');

## Create
Route::get('audiencias/create', 'AudienciaController@create')->name('audiencias.create');
Route::post('audiencias/store', 'AudienciaController@store')->name('audiencias.store');

## Update
Route::get('audiencias/store/{idAudiencia}', 'AudienciaController@edit')->name('audiencias.edit');
Route::post('audiencias/update/{idAudiencia}', 'AudienciaController@update')->name('audiencias.update');

## Delete
Route::get('audiencias/delete/{idAudiencia}', 'AudienciaController@destroy')->name('audiencias.delete');

/*CASO*/

## View
Route::get('casos', 'CasoController@index')->name('casos');

## Create
Route::get('casos/create', 'CasoController@create')->name('casos.create');
Route::post('casos/store', 'CasoController@store')->name('casos.store');

## Update
Route::get('casos/store/{idCaso}', 'CasoController@edit')->name('casos.edit');
Route::post('casos/update/{idCaso}', 'CasoController@update')->name('casos.update');

## Delete
Route::get('casos/delete/{idCaso}', 'CasoController@destroy')->name('casos.delete');

/*DESPACHO*/

## View
Route::get('despachos', 'DespachoController@index')->name('despachos');

## Create
Route::get('despachos/create', 'DespachoController@create')->name('despachos.create');
Route::post('despachos/store', 'DespachoController@store')->name('despachos.store');

## Update
Route::get('despachos/store/{idDespacho}', 'DespachoController@edit')->name('despachos.edit');
Route::post('despachos/update/{idDespacho}', 'DespachoController@update')->name('despachos.update');

## Delete
Route::get('despachos/delete/{idDespacho}', 'DespachoController@destroy')->name('despachos.delete');

/*ESPECIALIDAD*/

## View
Route::get('especialidads', 'EspecialidadController@index')->name('especialidads');

/*INVOLUCRADO*/

## View
Route::get('involucrados', 'InvolucradoController@index')->name('involucrados');

## Create
Route::get('involucrados/create', 'InvolucradoController@create')->name('involucrados.create');
Route::post('involucrados/store', 'InvolucradoController@store')->name('involucrados.store');

## Update
Route::get('involucrados/store/{idInvolucrado}', 'InvolucradoController@edit')->name('involucrados.edit');
Route::post('involucrados/update/{idInvolucrado}', 'InvolucradoController@update')->name('involucrados.update');

## Delete
Route::get('involucrados/delete/{idInvolucrado}', 'InvolucradoController@destroy')->name('involucrados.delete');

/*ROL*/

## View
Route::get('rols', 'RolController@index')->name('rols');

## Create

## Update
Route::get('rols/store/{idCaso}', 'RolController@edit')->name('rols.edit');
Route::post('rols/update/{idCaso}', 'RolController@update')->name('rols.update');

## Delete

/*SALA*/

## View
Route::get('salas', 'SalaController@index')->name('salas');

## Create
Route::get('salas/create', 'SalaController@create')->name('salas.create');
Route::post('salas/store', 'SalaController@store')->name('salas.store');

## Update
Route::get('salas/store/{idSala}', 'SalaController@edit')->name('salas.edit');
Route::post('salas/update/{idSala}', 'SalaController@update')->name('salas.update');

## Delete
Route::get('salas/delete/{idSala}', 'SalaController@destroy')->name('salas.delete');

/*SEDE*/

## View
Route::get('sedes', 'SedeController@index')->name('sedes');

## Create
Route::get('sedes/create', 'SedeController@create')->name('sedes.create');
Route::post('sedes/store', 'SedeController@store')->name('sedes.store');

## Update
Route::get('sedes/store/{idSede}', 'SedeController@edit')->name('sedes.edit');
Route::post('sedes/update/{idSede}', 'SedeController@update')->name('sedes.update');

## Delete
Route::get('sedes/delete/{idSede}', 'SedeController@destroy')->name('sedes.delete');

/*SOLICITUD*/

## View
Route::get('solicituds', 'SolicitudController@index')->name('solicituds');

## Create
Route::get('solicituds/create', 'SolicitudController@create')->name('solicituds.create');
Route::post('solicituds/store', 'SolicitudController@store')->name('solicituds.store');

## Update
Route::get('solicituds/store/{idSolicitud}', 'SolicitudController@edit')->name('solicituds.edit');
Route::post('solicituds/update/{idSolicitud}', 'SolicitudController@update')->name('solicituds.update');

## Delete
Route::get('solicituds/delete/{idSolicitud}', 'SolicitudController@destroy')->name('solicituds.delete');

/*TIPO INVOLUCRADO*/

## View
Route::get('tiposinvolucrados', 'TipoInvolucradoController@index')->name('tiposinvolucrados');

## Create
Route::get('tiposinvolucrados/create', 'TipoInvolucradoController@create')->name('tiposinvolucrados.create');
Route::post('tiposinvolucrados/store', 'TipoInvolucradoController@store')->name('tiposinvolucrados.store');

## Update
Route::get('tiposinvolucrados/store/{idTipoInvolucrado}', 'TipoInvolucradoController@edit')->name('tiposinvolucrados.edit');
Route::post('tiposinvolucrados/update/{idTipoInvolucrado}', 'TipoInvolucradoController@update')->name('tiposinvolucrados.update');

## Delete
Route::get('tiposinvolucrados/delete/{idTipoInvolucrado}', 'TipoInvolucradoController@destroy')->name('tiposinvolucrados.delete');

/*USUARIO*/

## View
Route::get('usuarios', 'UsuarioController@index')->name('usuarios');

## Create
Route::get('usuarios/create', 'UsuarioController@create')->name('usuarios.create');
Route::post('usuarios/store', 'UsuarioController@store')->name('usuarios.store');

## Update
Route::get('usuarios/store/{idUsuario}', 'UsuarioController@edit')->name('usuarios.edit');
Route::post('usuarios/update/{idUsuario}', 'UsuarioController@update')->name('usuarios.update');

## Delete
Route::get('usuarios/delete/{idUsuario}', 'UsuarioController@destroy')->name('usuarios.delete');
