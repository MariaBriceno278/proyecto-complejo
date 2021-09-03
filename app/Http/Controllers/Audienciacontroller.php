<?php

namespace App\Http\Controllers;

use App\Audiencia;
use App\Asignacion;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class AudienciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $audiencias = Audiencia::select('audiencia.idAudiencia', 'audiencia.tiempoAudiencia', 'audiencia.observacionesAudiencia','audiencia.estado','asignacion.notificacionEnviada')
        ->join('asignacion','audiencia.idAsignacionFK','=','asignacion.idAsignacion')
        ->get();
        return view('audiencias.index')->with('audiencias', $audiencias);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $audeincia_asignacion = Asignacion::select(['fechaInicio','horaInicio','fechaFin','horaFin','notificacionEnviada','idAsignacion'])->get();
        return view('audiencias.create')->with('audeincia_asignacion',$audeincia_asignacion);
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

        $rules =  [
            'tiempoAudiencia' => 'required',
            'observacionesAudiencia' => 'required',
            'estado' => 'required',
            'idAsignacionFK'=>'required|unique:audiencia,idAsignacionFK',

        ];
        $mensajes =[
            "unique" => "el la asignacion ya tine una audiencia registrada",
            "required" => "Campo requerido ",


            ];




        $validator = Validator::make($request->all(), $rules,$mensajes);

        if ($validator->fails()) {
            return redirect()->Back()->withInput()->withErrors($validator);
        }

        if ($record = Audiencia::firstOrCreate($data)) {
            Session::flash('message', 'Creado con exito!');
            Session::flash('alert-class', 'alert-success');
            return redirect()->route('audiencias');
        } else {
            Session::flash('message', 'Data not saved!');
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
        $audiencias = Audiencia::find($id);

        return view('audiencias.edit')->with('audiencia', $audiencias);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($idAudiencia)
    {
        $audiencias = Audiencia::find($idAudiencia);
        $audiencia_asignacion = Asignacion::select(['fechaInicio','horaInicio','fechaFin','horaFin','notificacionEnviada','idAsignacion'])->get();

        return view('audiencias.edit')->with('audiencias', $audiencias)->with('audiencia_asignacion',$audiencia_asignacion);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idAudiencia)
    {
        $data = $request->except('_method', '_token', 'submit');
        $rules =  [
            'tiempoAudiencia' => '',
            'observacionesAudiencia' => 'required',
            'estado' => '',
            'idAsignacionFK'=>'',

        ];
        $mensajes =[

            "required" => "Campo requerido ",


            ];




        $validator = Validator::make($request->all(), $rules,$mensajes);
        if ($validator->fails()) {
            return redirect()->Back()->withInput()->withErrors($validator);
        }
        $audiencias = Audiencia::find($idAudiencia);

        if ($audiencias->update($data)) {

            Session::flash('message', 'Modificado con Exito!');
            Session::flash('alert-class', 'alert-success');
            return redirect()->route('audiencias');
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
    public function change_status($idAudiencia)
    {
        $audiencia = Audiencia::find($idAudiencia);
        if ($audiencia->estado == 1) {
            $audiencia->update(['estado' => 0]);
            return redirect()->back();
        } else {
            $audiencia->update(['estado' => 1]);
            return redirect()->back();
        }
    }
}
