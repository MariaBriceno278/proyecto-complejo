<?php

namespace App\Http\Controllers;

use App\Asignacion;
use App\DetalleCaso;
use App\Sala;
use App\Solicitud;
use App\Usuario;
use App\Caso;
use Facade\IgnitionContracts\Solution;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use App\Mail\NotificacionAsignacion;
use Illuminate\Support\Facades\Validator as FacadesValidator;

class AsignacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //$request->user()->authorizeRoles(['user', 'admin']);
        $asignacions = Asignacion::select(
            'asignacion.idAsignacion',
            'asignacion.fechaInicio',
            'asignacion.horaInicio',
            'asignacion.fechaFin',
            'asignacion.horaFin',
            'asignacion.notificacionEnviada',
            'asignacion.estado',
            'sala.numeroSala',
            'sala.bloqueSala',
            'sala.pisoSala',
            'asignacion.idSolicitudFK'
        )
            ->join('sala', 'asignacion.idSalaFK', '=', 'sala.idSala')
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
        $asignacion_sala = Sala::select(['numeroSala', 'pisoSala', 'bloqueSala', 'idSala'])->get();
        $asignacion_solicitud = Solicitud::select(['fechaSolicitud', 'capacidadRequerida', 'prioridadNormal', 'estado', 'idSolicitud'])

            ->orderby('fechaSolicitud', 'ASC')
            ->get();
        return view('asignacions.create', compact('asignacion_solicitud', $asignacion_solicitud))->with('asignacion_sala', $asignacion_sala);
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

        $mensajes = [
            "unique" => "El número de solicitud ya tiene una asignación registrada",
            "required" => "El campo es obligatorio",
            "after" => "La fecha de registro debe ser posterior a ayer",
            "after_or_equal" => "La fecha debe ser una fecha posterior o igual a la fecha inicio",
        ];

        $rules = [
            "fechaInicio" => 'required|after:yesterday',
            'horaInicio' => 'required',
            'fechaFin' => 'required|date|after_or_equal:fechaInicio',
            'horaFin' => 'required',
            'notificacionEnviada' => 'required',
            'estado' => 'required',
            'idSalaFK' => 'required',
            'idSolicitudFK' => 'required|unique:asignacion,idSolicitudFK',
        ];

        $validator = Validator::make($request->all(), $rules, $mensajes);

        if ($validator->fails()) {
            return redirect('asignacions/create')
                ->withErrors($validator)
                ->withInput();
        }


        $a = new Asignacion();
        $a->fechaInicio = $request->input("fechaInicio");
        $a->horaInicio = $request->input("horaInicio");
        $a->fechaFin = $request->input("fechaFin");
        $a->horaFin = $request->input("horaFin");
        $a->notificacionEnviada = $request->input("notificacionEnviada");
        $a->estado = $request->input("estado");
        $a->idSalaFK = $request->input("idSalaFK");
        $a->idSolicitudFK = $request->input("idSolicitudFK");
        $a->save();

        $id = $request->input("idSalaFK");
        $cu=Usuario::select('correoUsuario','nombreUsuario','apellidoUsuario')->join('solicitud','Usuario.idUsuario','=','Solicitud.idUsuarioFK')->where('idSolicitud','=',$request->input("idSolicitudFK"));

        $su = Solicitud::join('usuario','Usuario.idUsuario','=','Solicitud.idUsuarioFK')->select('idUsuarioFK','nombreUsuario','correoUsuario')->where('idSolicitud','=',$a->idSolicitudFK)->get();

        $sala = Sala::select('numeroSala','pisoSala','bloqueSala','direccionSede','nombreSede')
        ->join('sede','Sede.idSede','=','Sala.idSedeFK')
        ->where('idSala','=',$id)->get();

        $ss= Solicitud::select('idCasoFK')->where('idSolicitud','=',$a->idSolicitudFK)->get();

        foreach($ss as $s){
        $caso = Caso::select('nReferenciaCaso')->where('idCaso','=',$s->idCasoFK)->get();
        }
         $cdc=DetalleCaso::select('idTipoInvolucradoFK','idInvolucradoFK')->where('idCasoFK','=',$ss);
     $detallescasos = DetalleCaso::select('detallecaso.idDetalleCaso', 'detallecaso.observacionesDetalleCaso',
          'detallecaso.estado', 'caso.idCaso', 'caso.nReferenciaCaso', 'tipoinvolucrado.idTipoInvolucrado',
          'tipoinvolucrado.nombreTipoInvolucrado', 'involucrado.idInvolucrado', 'involucrado.nombreInvolucrado',
          'involucrado.correoInvolucrado')
             ->join('involucrado', 'detallecaso.idInvolucradoFK', '=', 'involucrado.idInvolucrado')
             ->join('tipoinvolucrado', 'detallecaso.idTipoInvolucradoFK', '=', 'tipoinvolucrado.idTipoInvolucrado')
            ->join('caso', 'detallecaso.idCasoFK', '=', 'caso.idCaso')
            ->where('idCasoFK','=',$ss)
             ->get();
            $destinatario="mfbriceno0@misnea.edu.co";

         $destinatarios= Solicitud::select('usuario.correoUsuario','involucrado.correoInvolucrado')
         ->join('usuario','usuario.idUsuario','=','solicitud.idUsuarioFK')
         ->join('caso','caso.idCaso','=','solicitud.idCasoFK')
         ->join('detalleCaso','detallecaso.idCasoFK','=','caso.idCaso')
         ->join('involucrado','involucrado.idInvolucrado','=','detallecaso.idInvolucradoFK')
         ->where('idSolicitud','=',$request->input("idSolicitudFK"))->get();

         if ($record = Asignacion::firstOrCreate($data)) {
            Session::flash('message', 'Creado con exito!');
            Session::flash('alert-class', 'alert-success');
              Mail::to($destinatario)->send(new NotificacionAsignacion($caso,$a, $sala));

            return redirect()->route('asignacions');
        } else {
            Session::flash('message', 'No se guardo!');
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
        $asignacion_sala = Sala::select(['numeroSala', 'pisoSala', 'bloqueSala', 'idSala'])->get();
        $asignacion_solicitud = Solicitud::select(['fechaSolicitud', 'capacidadRequerida', 'prioridadNormal', 'estado', 'idSolicitud'])->get();

        return view('asignacions.edit')->with('asignacions', $asignacions)->with('asignacion_solicitud', $asignacion_solicitud)->with('asignacion_sala', $asignacion_sala);
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

        $mensajes = [
            "unique" => "El número de solicitud ya tiene una asignación registrada",
            "required" => "El campo es obligatorio",
            "after" => "La fecha de registro debe ser posterior a ayer",
            "after_or_equal" => "La fecha debe ser una fecha posterior o igual a la fecha inicio",
        ];

        $rules = [
            "fechaInicio" => 'required|after:yesterday',
            'horaInicio' => 'required',
            'fechaFin' => 'required|date|after_or_equal:fechaInicio',
            'horaFin' => 'required',
            'notificacionEnviada' => 'required',
            'estado' => 'required',
            'idSalaFK' => 'required',
            'idSolicitudFK' => 'required|unique:asignacion,idSolicitudFK',
        ];

        $validator = Validator::make($request->all(),  $rules, $mensajes);

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
