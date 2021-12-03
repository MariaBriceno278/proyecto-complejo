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
    return view('layouts.dashboard');
});

/*ASIGNACIÓN*/

## View
Route::get('asignacions', 'AsignacionController@index')->name('asignacions')->middleware('miautenticacion');

## Create
Route::get('asignacions/create', 'AsignacionController@create')->name('asignacions.create')->middleware('miautenticacion');
Route::post('asignacions/store', 'AsignacionController@store')->name('asignacions.store')->middleware('miautenticacion');

## Update
Route::get('asignacions/store/{idAsignacion}', 'AsignacionController@edit')->name('asignacions.edit')->middleware('miautenticacion');
Route::post('asignacions/update/{idAsignacion}', 'AsignacionController@update')->name('asignacions.update')->middleware('miautenticacion');

## Status
Route::get('asignacions/change_status/{idAsignacion}', 'AsignacionController@change_status')->name('asignacions.change.status')->middleware('miautenticacion');

/*AUDIENCIA*/

## View
Route::get('audiencias', 'AudienciaController@index')->name('audiencias')->middleware('miautenticacion');

## Create
Route::get('audiencias/create', 'AudienciaController@create')->name('audiencias.create')->middleware('miautenticacion');
Route::post('audiencias/store', 'AudienciaController@store')->name('audiencias.store')->middleware('miautenticacion');

## Update
Route::get('audiencias/store/{idAudiencia}', 'AudienciaController@edit')->name('audiencias.edit')->middleware('miautenticacion');
Route::post('audiencias/update/{idAudiencia}', 'AudienciaController@update')->name('audiencias.update')->middleware('miautenticacion');

## Status
Route::get('audiencias/change_status/{idAudiencia}', 'AudienciaController@change_status')->name('audiencias.change.status')->middleware('miautenticacion');

/*CASO*/

## View
Route::get('casos', 'CasoController@index')->name('casos')->middleware('miautenticacion');

## Create
Route::get('casos/create', 'CasoController@create')->name('casos.create')->middleware('miautenticacion');
Route::post('casos/store', 'CasoController@store')->name('casos.store')->middleware('miautenticacion');

## Update
Route::get('casos/store/{idCaso}', 'CasoController@edit')->name('casos.edit')->middleware('miautenticacion');
Route::post('casos/update/{idCaso}', 'CasoController@update')->name('casos.update')->middleware('miautenticacion');

## Status
Route::get('casos/change_status/{idCaso}', 'CasoController@change_status')->name('casos.change.status')->middleware('miautenticacion');

/*DESPACHO*/

## View
Route::get('despachos', 'DespachoController@index')->name('despachos')->middleware('miautenticacion');

## Create
Route::get('despachos/create', 'DespachoController@create')->name('despachos.create')->middleware('miautenticacion');
Route::post('despachos/store', 'DespachoController@store')->name('despachos.store')->middleware('miautenticacion');

## Update
Route::get('despachos/store/{idDespacho}', 'DespachoController@edit')->name('despachos.edit')->middleware('miautenticacion');
Route::post('despachos/update/{idDespacho}', 'DespachoController@update')->name('despachos.update')->middleware('miautenticacion');

## Status
Route::get('despachos/change_status/{idDespacho}', 'DespachoController@change_status')->name('despachos.change.status')->middleware('miautenticacion');

/*DETALLE CASO*/

## View
Route::get('detallescasos', 'DetalleCasoController@index')->name('detallescasos')->middleware('miautenticacion');

## Create
Route::get('detallescasos/create', 'DetalleCasoController@create')->name('detallescasos.create')->middleware('miautenticacion');
Route::post('detallescasos/store', 'DetalleCasoController@store')->name('detallescasos.store')->middleware('miautenticacion');

## Update
Route::get('detallescasos/store/{idDetalleCaso}', 'DetalleCasoController@edit')->name('detallescasos.edit')->middleware('miautenticacion');
Route::post('detallescasos/update/{idDetalleCaso}', 'DetalleCasoController@update')->name('detallescasos.update')->middleware('miautenticacion');

## Status
Route::get('detallescasos/change_status/{idDetalleCaso}', 'DetalleCasoController@change_status')->name('detallescasos.change.status')->middleware('miautenticacion');

/*ESPECIALIDAD*/

## View
Route::get('especialidads', 'EspecialidadController@index')->name('especialidads')->middleware('miautenticacion');

/*INVOLUCRADO*/

## View
Route::get('involucrados', 'InvolucradoController@index')->name('involucrados')->middleware('miautenticacion');

## Create
Route::get('involucrados/create', 'InvolucradoController@create')->name('involucrados.create');
Route::post('involucrados/store', 'InvolucradoController@store')->name('involucrados.store')->middleware('miautenticacion');

## Status
Route::get('involucrados/change_status/{idInvolucrado}', 'InvolucradoController@change_status')->name('involucrados.change.status')->middleware('miautenticacion');

/*ROL*/

## View
Route::get('rols', 'RolController@index')->name('rols')->middleware('miautenticacion');

## Create

## Update
Route::get('rols/store/{idCaso}', 'RolController@edit')->name('rols.edit')->middleware('miautenticacion');
Route::post('rols/update/{idCaso}', 'RolController@update')->name('rols.update')->middleware('miautenticacion');

/*SALA*/

## View
Route::get('salas', 'SalaController@index')->name('salas')->middleware('miautenticacion');

## Create
Route::get('salas/create', 'SalaController@create')->name('salas.create')->middleware('miautenticacion');
Route::get('salas/vistasala', 'SalaController@vistasala')->name('vista')->middleware('miautenticacion');
Route::post('salas/store', 'SalaController@store')->name('salas.store')->middleware('miautenticacion');

## Update
Route::get('salas/store/{idSala}', 'SalaController@edit')->name('salas.edit')->middleware('miautenticacion');
Route::post('salas/update/{idSala}', 'SalaController@update')->name('salas.update')->middleware('miautenticacion');

## Status
Route::get('salas/change_status/{idSala}', 'SalaController@change_status')->name('salas.change.status')->middleware('miautenticacion');

/*SEDE*/

## View
Route::get('sedes', 'SedeController@index')->name('sedes')->middleware('miautenticacion');

## Create
Route::get('sedes/create', 'SedeController@create')->name('sedes.create')->middleware('miautenticacion');
Route::post('sedes/store', 'SedeController@store')->name('sedes.store')->middleware('miautenticacion');

## Update
Route::get('sedes/store/{idSede}', 'SedeController@edit')->name('sedes.edit')->middleware('miautenticacion');
Route::post('sedes/update/{idSede}', 'SedeController@update')->name('sedes.update')->middleware('miautenticacion');

## Status
Route::get('sedes/change_status/{idSede}', 'SedeController@change_status')->name('sedes.change.status')->middleware('miautenticacion');

/*SOLICITUD*/

## View
Route::get('solicituds', 'SolicitudController@index')->name('solicituds')->middleware('miautenticacion');

## Create
Route::get('solicituds/create', 'SolicitudController@create')->name('solicituds.create')->middleware('miautenticacion');
Route::post('solicituds/store', 'SolicitudController@store')->name('solicituds.store')->middleware('miautenticacion');

## Update
Route::get('solicituds/store/{idSolicitud}', 'SolicitudController@edit')->name('solicituds.edit');
Route::post('solicituds/update/{idSolicitud}', 'SolicitudController@update')->name('solicituds.update')->middleware('miautenticacion');

## Status
Route::get('solicituds/change_status/{idSolicitud}', 'SolicitudController@change_status')->name('solicituds.change.status')->middleware('miautenticacion');

/*TIPO INVOLUCRADO*/

## View
Route::get('tiposinvolucrados', 'TipoInvolucradoController@index')->name('tiposinvolucrados')->middleware('miautenticacion');

## Create
Route::get('tiposinvolucrados/create', 'TipoInvolucradoController@create')->name('tiposinvolucrados.create')->middleware('miautenticacion');
Route::post('tiposinvolucrados/store', 'TipoInvolucradoController@store')->name('tiposinvolucrados.store')->middleware('miautenticacion');

## Status
Route::get('tiposinvolucrados/change_status/{idTipoInvolucrado}', 'TipoInvolucradoController@change_status')->name('tiposinvolucrados.change.status')->middleware('miautenticacion');

/*USUARIO*/

## View
Route::get('usuarios', 'UsuarioController@index')->name('usuarios');

## Create
Route::get('usuarios/create', 'UsuarioController@create')->name('usuarios.create');
Route::post('usuarios/store', 'UsuarioController@store')->name('usuarios.store');

## Update
Route::get('usuarios/store/{idUsuario}', 'UsuarioController@edit')->name('usuarios.edit')->middleware('miautenticacion');
Route::post('usuarios/update/{idUsuario}', 'UsuarioController@update')->name('usuarios.update')->middleware('miautenticacion');

## Delete
Route::get('usuarios/change_status/{idUsuario}', 'UsuarioController@change_status')->name('usuarios.change.status')->middleware('miautenticacion');

/*DETALLE CAS*/

## View
Route::get('detallescasos', 'DetalleCasoController@index')->name('detallescasos')->middleware('miautenticacion');

## Create
Route::get('detallescasos/create', 'DetalleCasoController@create')->name('detallescasos.create')->middleware('miautenticacion');
Route::post('detallescasos/store', 'DetalleCasoController@store')->name('detallescasos.store')->middleware('miautenticacion');

Route::get('login', 'Auth\LoginController@form');

Route::post('login', 'Auth\LoginController@login');

Route::get('logout', 'Auth\LoginController@logout');
Route::get('vista_dashboard', 'home@vista_dashboard')->name('vista_dashboard')->middleware('miautenticacion');
Route::get('recuperar-password', "Auth\ResetPasswordController@emailform");
Route::post('enviar-link', "Auth\ResetPasswordController@submitlink");

Route::get('reset-password/{token}', "Auth\ResetPasswordController@resetform");

Route::post('reset-password', "Auth\ResetPasswordController@resetpassword");



Route::get('informeasignacion', "informeAsignacioncontroller@vistainforme")->name('informeasignacion');


Route::get('informeestadisticodiario', "informeAsignacioncontroller@vistaestadisticadiaria")->name('informeestadisticodiario');


Route::get('informeestadisticosemanal', "informeAsignacioncontroller@vistaestadisticasemanal")->name('informeestadisticosemanal');

Route::get('informeestadisticomensual', "informeAsignacioncontroller@vistaestadisticamensual");


