<?php

namespace App\Http\Controllers;

use App\Solicitud;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator as FacadesValidator;

class SolicitudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $solicituds = Solicitud::select('idSolicitud', 'fechaSolicitud', 'capacidadRequerida', 'prioridadNormal', 'idCasoFK', 'idUsuarioFK')->get();
        return view('solicituds.index')->with('solicituds', $solicituds);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('solicituds.create');
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

        $validator = FacadesValidator::make($request->all(), [
            'fechaSolicitud' => 'required|string',
            'capacidadRequerida' => 'string',
            'prioridadNormal' => 'string',
            'idCasoFK' => 'string',
            'idUsuarioFK' => 'string',
        ]);

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

        return view('solicituds.edit')->with('solicituds', $solicituds);
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

        $validator = FacadesValidator::make($request->all(), [
            'fechaSolicitud' => 'required|string',
            'capacidadRequerida' => 'string',
            'prioridadNormal' => 'string',
        ]);

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
    public function destroy($id)
    {
        Solicitud::destroy($id);

        Session::flash('message', 'Eliminado con exito!');
        Session::flash('alert-class', 'alert-success');
        return redirect()->route('solicituds');
    }
}
