<?php

namespace App\Http\Controllers;

use App\Solicitud;
use App\Caso;
use App\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class SolicitudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $solicituds = Solicitud::select('idSolicitud', 'fechaSolicitud', 'capacidadRequerida', 'prioridadNormal', 'estado', 'idCasoFK', 'idUsuarioFK')->get();
        return view('solicituds.index')->with('solicituds', $solicituds);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $solicitud_caso = Caso::select('nReferenciaCaso','idCaso')->get();

        $solicitud_usuario = Usuario::select('nombreUsuario','idUsuario')->get();
        return view('solicituds.create')->with('solicitud_caso',$solicitud_caso)->with('solicitud_usuario',$solicitud_usuario);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->except('_method', '_token', 'submit');

        $mensajes =[
            "unique" => "el numero de solicitud ya tiene una asignacion",
            "required" => "Campo requerido ",
            "after" => "Fecha posterior o igual a la actual",
            ];
            $rules = [
                'fechaSolicitud' => 'required|after:yesterday',
                'capacidadRequerida' => 'required',
                'prioridadNormal' => 'required',
                'estado' => 'required',
                'idCasoFK' => 'required',
                'idUsuarioFK' => 'required',
            ];

        $validator = Validator::make($request->all(), $rules,$mensajes);

        if ($validator->fails()) {
            return redirect()->Back()->withInput()->withErrors($validator);
        }

        if ($record = Solicitud::firstOrCreate($data)) {
            Session::flash('message', 'Creado con exito!');
            Session::flash('alert-class', 'alert-success');
            return redirect()->route('solicituds');
        } else {
            Session::flash('message', 'No se pudo crear!');
            Session::flash('alert-class', 'alert-danger');
        }

        return Back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($idSolicitud)
    {
        $solicituds = Solicitud::find($idSolicitud);
        $solicitud_caso = Caso::select('nReferenciaCaso','idCaso')->get();

        $solicitud_usuario = Usuario::select('nombreUsuario','idUsuario')->get();

        return view('solicituds.edit')->with('solicituds', $solicituds)->with('solicitud_caso', $solicitud_caso)->with('solicitud_usuario', $solicitud_usuario);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idSolicitud)
    {
        $data = $request->except('_method', '_token', 'submit');

        $mensajes =[
            "unique" => "el numero de solicitud ya tiene una asignacion",
            "required" => "Campo requerido ",
            "after" => "Fecha posterior o igual a la actual",
            ];
            $rules = [
                'fechaSolicitud' => '',
                'capacidadRequerida' => 'required',
                'prioridadNormal' => 'required',
                'idCasoFK' => '',
                'idUsuarioFK' => '',
            ];

        $validator = Validator::make($request->all(), $rules,$mensajes);
        if ($validator->fails()) {
            return redirect()->Back()->withInput()->withErrors($validator);
        }
        $solicituds = Solicitud::find($idSolicitud);

        if ($solicituds->update($data)) {

            Session::flash('message', 'Modificado con exito!');
            Session::flash('alert-class', 'alert-success');
            return redirect()->route('solicituds');
        } else {
            Session::flash('message', 'No se pudo modificar!');
            Session::flash('alert-class', 'alert-danger');
        }

        return Back()->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function change_status($idSolicitud)
    {
        $solicitud = Solicitud::find($idSolicitud);
        if ($solicitud->estado == 1) {
            $solicitud->update(['estado' => 0]);
            return redirect()->back();
        } else {
            $solicitud->update(['estado' => 1]);
            return redirect()->back();
        }
    }
}
