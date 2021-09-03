<?php

namespace App\Http\Controllers;

use App\Asignacion;
use App\Sala;
use App\Solicitud;
use Facade\IgnitionContracts\Solution;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Validator as FacadesValidator;

class AsignacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $asignacions = Asignacion::select('asignacion.idAsignacion', 'asignacion.fechaInicio', 'asignacion.horaInicio',
                                        'asignacion.fechaFin', 'asignacion.horaFin', 'asignacion.notificacionEnviada', 'asignacion.estado',
                                        'sala.numeroSala','sala.bloqueSala', 'sala.pisoSala', 'asignacion.idSolicitudFK')
                                        ->join('sala','asignacion.idSalaFK','=','sala.idSala')
                                         ->get();

        return view('asignacions.index')->with('asignacions', $asignacions);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $asignacion_sala = Sala::select(['numeroSala', 'pisoSala','bloqueSala','idSala'])->get();
        $asignacion_solicitud = Solicitud::select(['fechaSolicitud','capacidadRequerida', 'prioridadNormal','estado','idSolicitud'])
                                        ->orderby('fechaSolicitud','ASC')
                                        ->get();
        return view('asignacions.create',compact('asignacion_solicitud',$asignacion_solicitud))->with('asignacion_sala',$asignacion_sala);
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
            "after_or_equal" => "Fecha posterior o igual a la actual",

            ];
        $rules = [
            "fechaInicio" => 'required|after:yesterday',
            'horaInicio' => 'required',
            'fechaFin' => 'required|date|after_or_equal:fechaInicio',
            'horaFin' => 'required',
            'notificacionEnviada' => 'required',
            'estado' => 'required|string',
            'idSalaFK'=> 'required',
            'idSolicitudFK' => 'required|unique:asignacion,idSolicitudFK',

        ];

        $validator = Validator::make($request->all(),  $rules,$mensajes);

        if ($validator->fails()) {
            return redirect()->Back()->withInput()->withErrors($validator);
        }

        if ($record = Asignacion::firstOrCreate($data)) {
            Session::flash('message', 'Creado con exito!');
            Session::flash('alert-class', 'alert-success');
            return redirect()->route('asignacions');
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
    public function edit($idAsignacion)
    {

        $asignacions = Asignacion::find($idAsignacion);
        $asignacion_sala = Sala::select(['numeroSala', 'pisoSala','bloqueSala','idSala'])->get();
        $asignacion_solicitud = Solicitud::select(['fechaSolicitud','capacidadRequerida', 'prioridadNormal','estado','idSolicitud'])->get();

        return view('asignacions.edit')->with('asignacions', $asignacions)->with('asignacion_solicitud',$asignacion_solicitud)->with('asignacion_sala',$asignacion_sala);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idAsignacion)
    {
        $data = $request->except('_method', '_token', 'submit');

        $mensajes =[
            "required" => "Campo requerido ",
            "after" => "Fecha posterior o igual a la actual",
            "after_or_equal" => "Fecha posterior o igual a la actual",

            ];
        $rules = [
            "fechaInicio" => 'required|after:yesterday',
            'horaInicio' => 'required',
            'fechaFin' => 'required|date|after_or_equal:fechaInicio',
            'horaFin' => 'required',
            'notificacionEnviada' => 'required',
            'idSalaFK'=> '',
            'idSolicitudFK' => '',

        ];

        $validator = Validator::make($request->all(),  $rules,$mensajes);

        if ($validator->fails()) {
            return redirect()->Back()->withInput()->withErrors($validator);
        }
        $asignacions = Asignacion::find($idAsignacion);

        if ($asignacions->update($data)) {

            Session::flash('message', 'Modificado con exito!');
            Session::flash('alert-class', 'alert-success');
            return redirect()->route('asignacions');
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
    public function change_status($idAsignacion)
    {
        $asignacion = Asignacion::find($idAsignacion);
        if ($asignacion->estado == 1) {
            $asignacion->update(['estado' => 0]);
            return redirect()->back();
        } else {
            $asignacion->update(['estado' => 1]);
            return redirect()->back();
        }
    }
}
