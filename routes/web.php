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
    return view('layouts.layouthome');
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

## Status
Route::get('asignacions/change_status/{idAsignacion}', 'AsignacionController@change_status')->name('asignacions.change.status');

/*AUDIENCIA*/

## View
Route::get('audiencias', 'AudienciaController@index')->name('audiencias');

## Create
Route::get('audiencias/create', 'AudienciaController@create')->name('audiencias.create');
Route::post('audiencias/store', 'AudienciaController@store')->name('audiencias.store');

## Update
Route::get('audiencias/store/{idAudiencia}', 'AudienciaController@edit')->name('audiencias.edit');
Route::post('audiencias/update/{idAudiencia}', 'AudienciaController@update')->name('audiencias.update');

## Status
Route::get('audiencias/change_status/{idAudiencia}', 'AudienciaController@change_status')->name('audiencias.change.status');

/*CASO*/

## View
Route::get('casos', 'CasoController@index')->name('casos');

## Create
Route::get('casos/create', 'CasoController@create')->name('casos.create');
Route::post('casos/store', 'CasoController@store')->name('casos.store');

## Update
Route::get('casos/store/{idCaso}', 'CasoController@edit')->name('casos.edit');
Route::post('casos/update/{idCaso}', 'CasoController@update')->name('casos.update');

## Status
Route::get('casos/change_status/{idCaso}', 'CasoController@change_status')->name('casos.change.status');

/*DESPACHO*/

## View
Route::get('despachos', 'DespachoController@index')->name('despachos');

## Create
Route::get('despachos/create', 'DespachoController@create')->name('despachos.create');
Route::post('despachos/store', 'DespachoController@store')->name('despachos.store');

## Update
Route::get('despachos/store/{idDespacho}', 'DespachoController@edit')->name('despachos.edit');
Route::post('despachos/update/{idDespacho}', 'DespachoController@update')->name('despachos.update');

## Status
Route::get('despachos/change_status/{idDespacho}', 'DespachoController@change_status')->name('despachos.change.status');

/*DETALLE CASO*/

## View
Route::get('detallescasos', 'DetalleCasoController@index')->name('detallescasos');

## Create
Route::get('detallescasos/create', 'DetalleCasoController@create')->name('detallescasos.create');
Route::post('detallescasos/store', 'DetalleCasoController@store')->name('detallescasos.store');

## Update
Route::get('detallescasos/store/{idDetalleCaso}', 'DetalleCasoController@edit')->name('detallescasos.edit');
Route::post('detallescasos/update/{idDetalleCaso}', 'DetalleCasoController@update')->name('detallescasos.update');

## Status
Route::get('detallescasos/change_status/{idDetalleCaso}', 'DetalleCasoController@change_status')->name('detallescasos.change.status');

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

## Status
Route::get('involucrados/change_status/{idInvolucrado}', 'InvolucradoController@change_status')->name('involucrados.change.status');

/*ROL*/

## View
Route::get('rols', 'RolController@index')->name('rols');

## Create

## Update
Route::get('rols/store/{idCaso}', 'RolController@edit')->name('rols.edit');
Route::post('rols/update/{idCaso}', 'RolController@update')->name('rols.update');

/*SALA*/

## View
Route::get('salas', 'SalaController@index')->name('salas');

## Create
Route::get('salas/create', 'SalaController@create')->name('salas.create');
Route::get('salas/vistasala', 'SalaController@vistasala')->name('vista');
Route::post('salas/store', 'SalaController@store')->name('salas.store');

## Update
Route::get('salas/store/{idSala}', 'SalaController@edit')->name('salas.edit');
Route::post('salas/update/{idSala}', 'SalaController@update')->name('salas.update');

## Status
Route::get('salas/change_status/{idSala}', 'SalaController@change_status')->name('salas.change.status');

/*SEDE*/

## View
Route::get('sedes', 'SedeController@index')->name('sedes');

## Create
Route::get('sedes/create', 'SedeController@create')->name('sedes.create');
Route::post('sedes/store', 'SedeController@store')->name('sedes.store');

## Update
Route::get('sedes/store/{idSede}', 'SedeController@edit')->name('sedes.edit');
Route::post('sedes/update/{idSede}', 'SedeController@update')->name('sedes.update');

## Status
Route::get('sedes/change_status/{idSede}', 'SedeController@change_status')->name('sedes.change.status');

/*SOLICITUD*/

## View
Route::get('solicituds', 'SolicitudController@index')->name('solicituds');

## Create
Route::get('solicituds/create', 'SolicitudController@create')->name('solicituds.create');
Route::post('solicituds/store', 'SolicitudController@store')->name('solicituds.store');

## Update
Route::get('solicituds/store/{idSolicitud}', 'SolicitudController@edit')->name('solicituds.edit');
Route::post('solicituds/update/{idSolicitud}', 'SolicitudController@update')->name('solicituds.update');

## Status
Route::get('solicituds/change_status/{idSolicitud}', 'SolicitudController@change_status')->name('solicituds.change.status');

/*TIPO INVOLUCRADO*/

## View
Route::get('tiposinvolucrados', 'TipoInvolucradoController@index')->name('tiposinvolucrados');

## Create
Route::get('tiposinvolucrados/create', 'TipoInvolucradoController@create')->name('tiposinvolucrados.create');
Route::post('tiposinvolucrados/store', 'TipoInvolucradoController@store')->name('tiposinvolucrados.store');

## Update
Route::get('tiposinvolucrados/store/{idTipoInvolucrado}', 'TipoInvolucradoController@edit')->name('tiposinvolucrados.edit');
Route::post('tiposinvolucrados/update/{idTipoInvolucrado}', 'TipoInvolucradoController@update')->name('tiposinvolucrados.update');

## Status
Route::get('tiposinvolucrados/change_status/{idTipoInvolucrado}', 'TipoInvolucradoController@change_status')->name('tiposinvolucrados.change.status');

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
Route::get('usuarios/change_status/{idUsuario}', 'UsuarioController@change_status')->name('usuarios.change.status');

/*DETALLE CAS*/

## View
Route::get('detallescasos', 'DetalleCasoController@index')->name('detallescasos');

## Create
Route::get('detallescasos/create', 'DetalleCasoController@create')->name('detallescasos.create');
Route::post('detallescasos/store', 'DetalleCasoController@store')->name('detallescasos.store');
