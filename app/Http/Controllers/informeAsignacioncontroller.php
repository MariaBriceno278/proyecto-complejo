<?php

namespace App\Http\Controllers;

use App\Charts\Asignaciones;
use App\Solicitud;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Usuario;
use Illuminate\Support\Facades\DB;
use App\Asignacion;
use App\Http\Controllers\BD;
use App\Despacho;
use PhpParser\Node\Expr\AssignOp\Concat;

class informeAsignacioncontroller extends Controller
{



    public function vistainforme(){

        $asignaciones=DB::select('SELECT nombreUsuario , apellidoUsuario ,
        idUsuario,fechaSolicitud,  NUMERODESPACHO,idDespacho, nReferenciaCaso,
        fechaInicio, horaFin,horaInicio  FROM solicitud
        INNER JOIN usuario as s on solicitud.idUsuarioFK=s.idUsuario
        INNER JOIN DESPACHO AS d ON s.idDespachoFK=d.idDespacho
        INNER JOIN CASO AS c ON solicitud.idCasoFK=c.idCaso
        INNER JOIN ASIGNACION AS fa ON solicitud.idSolicitud = fa.idSolicitudFK');


        $nsolicitudes= Solicitud::select('COUNT(idSolicitud','AS N')->where('estado','=','1');
        return view('informes.general')->with('asignaciones',$asignaciones)->with('nsolicitudes',$nsolicitudes);
    }

    public function vistaestadisticadiaria(){
        $nd = Despacho::select('nombreDespacho')->where('idDespacho','=','1')->get();
        $iniciodia = Carbon::now()->startOfDay();

        $inicioFormateado = $iniciodia->format('Y/m/d');

        $itemsds = Solicitud::select(DB::raw("COUNT(*) as count"))
        ->whereDay('fechaSolicitud', $iniciodia)
        ->pluck('count');

        $itemsda = Asignacion::select(DB::raw("COUNT(*) as count"))
        ->whereDay('fechaInicio', $iniciodia)
        ->pluck('count');

            // Solicitudes de garantias emergencia
            $sgec = Solicitud::where('SOLICITUD.estado','=','1')
            ->join('USUARIO', 'USUARIO.idUsuario', '=', 'Solicitud.idUsuarioFK')
            ->join('DESPACHO', 'DESPACHO.idDespacho', '=', 'USUARIO.idDespachoFK')
            ->join('ESPECIALIDAD', 'ESPECIALIDAD.idEspecialidad', '=', 'DESPACHO.idEspecialidadFK')
            ->where('denominacionEspecialidad','=','Garantías')
            ->whereDay('fechaSolicitud',$iniciodia)
            ->count();
            // Solicitudes de garantias normales
            $sgnc = Solicitud::where('SOLICITUD.estado','=','0')
            ->join('USUARIO', 'USUARIO.idUsuario', '=', 'Solicitud.idUsuarioFK')
            ->join('DESPACHO', 'DESPACHO.idDespacho', '=', 'USUARIO.idDespachoFK')
            ->join('ESPECIALIDAD', 'ESPECIALIDAD.idEspecialidad', '=', 'DESPACHO.idEspecialidadFK')
            ->where('denominacionEspecialidad','=','Garantías')
            ->whereDay('fechaSolicitud',$iniciodia)
            ->count();

                        // Solicitudes de circuito emergencia
                        $scec = Solicitud::where('SOLICITUD.estado','=','1')
                        ->join('USUARIO', 'USUARIO.idUsuario', '=', 'Solicitud.idUsuarioFK')
                        ->join('DESPACHO', 'DESPACHO.idDespacho', '=', 'USUARIO.idDespachoFK')
                        ->join('ESPECIALIDAD', 'ESPECIALIDAD.idEspecialidad', '=', 'DESPACHO.idEspecialidadFK')
                        ->where('denominacionEspecialidad','=','Circuito')
                        ->whereDay('fechaSolicitud',$iniciodia)
                        ->count();
                        // Solicitudes de circuito normales
                        $scnc = Solicitud::where('SOLICITUD.estado','=','0')
                        ->join('USUARIO', 'USUARIO.idUsuario', '=', 'Solicitud.idUsuarioFK')
                        ->join('DESPACHO', 'DESPACHO.idDespacho', '=', 'USUARIO.idDespachoFK')
                        ->join('ESPECIALIDAD', 'ESPECIALIDAD.idEspecialidad', '=', 'DESPACHO.idEspecialidadFK')
                        ->where('denominacionEspecialidad','=','Circuito')
                        ->whereDay('fechaSolicitud',$iniciodia)
                        ->count();

                        $sg = Solicitud::selectRaw('COUNT(idSolicitud) AS Conteo')
                        ->join('USUARIO', 'USUARIO.idUsuario', '=', 'Solicitud.idUsuarioFK')
                        ->join('DESPACHO', 'DESPACHO.idDespacho', '=', 'USUARIO.idDespachoFK')
                        ->join('ESPECIALIDAD', 'ESPECIALIDAD.idEspecialidad', '=', 'DESPACHO.idEspecialidadFK')
                        ->where('denominacionEspecialidad','=','Circuito')
                        ->whereDay('fechaSolicitud',$iniciodia)
                        ->groupby('numeroDespacho')->get();


        return view('informes.estadistica_diaria',
         compact('nd','sgec','sgnc','scec','scnc','itemsds','itemsda','inicioFormateado',
        'sg'));
    }

    public function vistaestadisticasemanal(){

        $monday = Carbon::now()->startOfWeek((Carbon::MONDAY));
        $tuesday = Carbon::now()->startOfWeek((Carbon::TUESDAY));
        $wednesday = Carbon::now()->endOfWeek((Carbon::WEDNESDAY));
        $thursday = Carbon::now()->startOfWeek((Carbon::THURSDAY));
        $friday = Carbon::now()->startOfWeek((Carbon::FRIDAY));

        $m = $monday->format('Y/m/d');
        $f = $friday->format('Y/m/d');
// SOLICITUD Y ASIGNACION SEMANAL
        $sl = Solicitud::whereDay('fechaSolicitud','=',$monday)
            ->count();
        $sm = Solicitud::whereDay('fechaSolicitud','=',$tuesday)
            ->count();
        $sw = Solicitud::whereDay('fechaSolicitud','=',$wednesday)
            ->count();
        $st = Solicitud::whereDay('fechaSolicitud','=',$thursday)
            ->count();
        $sf = Solicitud::whereDay('fechaSolicitud','=',$friday)
            ->count();

        $al = Asignacion::whereDay('fechaInicio','=',$monday)
            ->count();
        $am = Asignacion::whereDay('fechaInicio','=',$tuesday)
            ->count();
        $aw = Asignacion::whereDay('fechaInicio','=',$wednesday)
            ->count();
        $at = Asignacion::whereDay('fechaInicio','=',$thursday)
            ->count();
        $af = Asignacion::whereDay('fechaInicio','=',$friday)
            ->count();

            // ESPACILIDAD Y PRIORIDAD
            // --------------LUNES---------------
           // Solicitudes  emergencia lunes
           $sel = Solicitud::where('SOLICITUD.estado','=','1')
           ->join('USUARIO', 'USUARIO.idUsuario', '=', 'Solicitud.idUsuarioFK')
           ->join('DESPACHO', 'DESPACHO.idDespacho', '=', 'USUARIO.idDespachoFK')
           ->join('ESPECIALIDAD', 'ESPECIALIDAD.idEspecialidad', '=', 'DESPACHO.idEspecialidadFK')
           ->whereDay('fechaSolicitud',$monday)
           ->count();
           // Solicitudes normales lunes
           $snl = Solicitud::where('SOLICITUD.estado','=','0')
           ->join('USUARIO', 'USUARIO.idUsuario', '=', 'Solicitud.idUsuarioFK')
           ->join('DESPACHO', 'DESPACHO.idDespacho', '=', 'USUARIO.idDespachoFK')
           ->join('ESPECIALIDAD', 'ESPECIALIDAD.idEspecialidad', '=', 'DESPACHO.idEspecialidadFK')
           ->whereDay('fechaSolicitud',$monday)
           ->count();
            // Solicitudes garantias lunes
           $sgl = Solicitud::join('USUARIO', 'USUARIO.idUsuario', '=', 'Solicitud.idUsuarioFK')
           ->join('DESPACHO', 'DESPACHO.idDespacho', '=', 'USUARIO.idDespachoFK')
           ->join('ESPECIALIDAD', 'ESPECIALIDAD.idEspecialidad', '=', 'DESPACHO.idEspecialidadFK')
           ->where('denominacionEspecialidad','=','Garantías')
           ->whereDay('fechaSolicitud',$monday)
           ->count();
                       // Solicitudes circuito lunes
           $scl = Solicitud::join('USUARIO', 'USUARIO.idUsuario', '=', 'Solicitud.idUsuarioFK')
           ->join('DESPACHO', 'DESPACHO.idDespacho', '=', 'USUARIO.idDespachoFK')
           ->join('ESPECIALIDAD', 'ESPECIALIDAD.idEspecialidad', '=', 'DESPACHO.idEspecialidadFK')
           ->where('denominacionEspecialidad','=','Circuito')
           ->whereDay('fechaSolicitud',$monday)
           ->count();

                      // --------------MARTES---------------
           // Solicitudes  emergencia MARTES
           $sem = Solicitud::where('SOLICITUD.estado','=','1')
           ->join('USUARIO', 'USUARIO.idUsuario', '=', 'Solicitud.idUsuarioFK')
           ->join('DESPACHO', 'DESPACHO.idDespacho', '=', 'USUARIO.idDespachoFK')
           ->join('ESPECIALIDAD', 'ESPECIALIDAD.idEspecialidad', '=', 'DESPACHO.idEspecialidadFK')
           ->whereDay('fechaSolicitud',$tuesday)
           ->count();
           // Solicitudes normales MARTES
           $snm = Solicitud::where('SOLICITUD.estado','=','0')
           ->join('USUARIO', 'USUARIO.idUsuario', '=', 'Solicitud.idUsuarioFK')
           ->join('DESPACHO', 'DESPACHO.idDespacho', '=', 'USUARIO.idDespachoFK')
           ->join('ESPECIALIDAD', 'ESPECIALIDAD.idEspecialidad', '=', 'DESPACHO.idEspecialidadFK')
           ->whereDay('fechaSolicitud',$tuesday)
           ->count();
            // Solicitudes garantias MARTES
           $sgm = Solicitud::join('USUARIO', 'USUARIO.idUsuario', '=', 'Solicitud.idUsuarioFK')
           ->join('DESPACHO', 'DESPACHO.idDespacho', '=', 'USUARIO.idDespachoFK')
           ->join('ESPECIALIDAD', 'ESPECIALIDAD.idEspecialidad', '=', 'DESPACHO.idEspecialidadFK')
           ->where('denominacionEspecialidad','=','Garantías')
           ->whereDay('fechaSolicitud',$tuesday)
           ->count();
                       // Solicitudes circuito MARTES
           $scm = Solicitud::join('USUARIO', 'USUARIO.idUsuario', '=', 'Solicitud.idUsuarioFK')
           ->join('DESPACHO', 'DESPACHO.idDespacho', '=', 'USUARIO.idDespachoFK')
           ->join('ESPECIALIDAD', 'ESPECIALIDAD.idEspecialidad', '=', 'DESPACHO.idEspecialidadFK')
           ->where('denominacionEspecialidad','=','Circuito')
           ->whereDay('fechaSolicitud',$tuesday)
           ->count();


                                 // --------------MIERCOLES---------------
           // Solicitudes  emergencia MIERCOLES
           $sew = Solicitud::where('SOLICITUD.estado','=','1')
           ->join('USUARIO', 'USUARIO.idUsuario', '=', 'Solicitud.idUsuarioFK')
           ->join('DESPACHO', 'DESPACHO.idDespacho', '=', 'USUARIO.idDespachoFK')
           ->join('ESPECIALIDAD', 'ESPECIALIDAD.idEspecialidad', '=', 'DESPACHO.idEspecialidadFK')
           ->whereDay('fechaSolicitud',$wednesday)
           ->count();
           // Solicitudes normales MIERCOLES
           $snw = Solicitud::where('SOLICITUD.estado','=','0')
           ->join('USUARIO', 'USUARIO.idUsuario', '=', 'Solicitud.idUsuarioFK')
           ->join('DESPACHO', 'DESPACHO.idDespacho', '=', 'USUARIO.idDespachoFK')
           ->join('ESPECIALIDAD', 'ESPECIALIDAD.idEspecialidad', '=', 'DESPACHO.idEspecialidadFK')
           ->whereDay('fechaSolicitud',$wednesday)
           ->count();
            // Solicitudes garantias MIERCOLES
           $sgw = Solicitud::join('USUARIO', 'USUARIO.idUsuario', '=', 'Solicitud.idUsuarioFK')
           ->join('DESPACHO', 'DESPACHO.idDespacho', '=', 'USUARIO.idDespachoFK')
           ->join('ESPECIALIDAD', 'ESPECIALIDAD.idEspecialidad', '=', 'DESPACHO.idEspecialidadFK')
           ->where('denominacionEspecialidad','=','Garantías')
           ->whereDay('fechaSolicitud',$wednesday)
           ->count();
                       // Solicitudes circuito MIERCOLES
           $scw = Solicitud::join('USUARIO', 'USUARIO.idUsuario', '=', 'Solicitud.idUsuarioFK')
           ->join('DESPACHO', 'DESPACHO.idDespacho', '=', 'USUARIO.idDespachoFK')
           ->join('ESPECIALIDAD', 'ESPECIALIDAD.idEspecialidad', '=', 'DESPACHO.idEspecialidadFK')
           ->where('denominacionEspecialidad','=','Circuito')
           ->whereDay('fechaSolicitud',$wednesday)
           ->count();


                                            // --------------JUEVES---------------
           // Solicitudes  emergencia JUEVES
           $set = Solicitud::where('SOLICITUD.estado','=','1')
           ->join('USUARIO', 'USUARIO.idUsuario', '=', 'Solicitud.idUsuarioFK')
           ->join('DESPACHO', 'DESPACHO.idDespacho', '=', 'USUARIO.idDespachoFK')
           ->join('ESPECIALIDAD', 'ESPECIALIDAD.idEspecialidad', '=', 'DESPACHO.idEspecialidadFK')
           ->whereDay('fechaSolicitud',$thursday)
           ->count();
           // Solicitudes normales JUEVES
           $snt = Solicitud::where('SOLICITUD.estado','=','0')
           ->join('USUARIO', 'USUARIO.idUsuario', '=', 'Solicitud.idUsuarioFK')
           ->join('DESPACHO', 'DESPACHO.idDespacho', '=', 'USUARIO.idDespachoFK')
           ->join('ESPECIALIDAD', 'ESPECIALIDAD.idEspecialidad', '=', 'DESPACHO.idEspecialidadFK')
           ->whereDay('fechaSolicitud',$thursday)
           ->count();
            // Solicitudes garantias JUEVES
           $sgt = Solicitud::join('USUARIO', 'USUARIO.idUsuario', '=', 'Solicitud.idUsuarioFK')
           ->join('DESPACHO', 'DESPACHO.idDespacho', '=', 'USUARIO.idDespachoFK')
           ->join('ESPECIALIDAD', 'ESPECIALIDAD.idEspecialidad', '=', 'DESPACHO.idEspecialidadFK')
           ->where('denominacionEspecialidad','=','Garantías')
           ->whereDay('fechaSolicitud',$thursday)
           ->count();
                       // Solicitudes circuito JUEVES
           $sct = Solicitud::join('USUARIO', 'USUARIO.idUsuario', '=', 'Solicitud.idUsuarioFK')
           ->join('DESPACHO', 'DESPACHO.idDespacho', '=', 'USUARIO.idDespachoFK')
           ->join('ESPECIALIDAD', 'ESPECIALIDAD.idEspecialidad', '=', 'DESPACHO.idEspecialidadFK')
           ->where('denominacionEspecialidad','=','Circuito')
           ->whereDay('fechaSolicitud',$thursday)
           ->count();

                                                       // --------------FRIDAY---------------
           // Solicitudes  emergencia FRIDAY
           $sef = Solicitud::where('SOLICITUD.estado','=','1')
           ->join('USUARIO', 'USUARIO.idUsuario', '=', 'Solicitud.idUsuarioFK')
           ->join('DESPACHO', 'DESPACHO.idDespacho', '=', 'USUARIO.idDespachoFK')
           ->join('ESPECIALIDAD', 'ESPECIALIDAD.idEspecialidad', '=', 'DESPACHO.idEspecialidadFK')
           ->whereDay('fechaSolicitud',$friday)
           ->count();
           // Solicitudes normales FRIDAY
           $snf = Solicitud::where('SOLICITUD.estado','=','0')
           ->join('USUARIO', 'USUARIO.idUsuario', '=', 'Solicitud.idUsuarioFK')
           ->join('DESPACHO', 'DESPACHO.idDespacho', '=', 'USUARIO.idDespachoFK')
           ->join('ESPECIALIDAD', 'ESPECIALIDAD.idEspecialidad', '=', 'DESPACHO.idEspecialidadFK')
           ->whereDay('fechaSolicitud',$friday)
           ->count();
            // Solicitudes garantias FRIDAY
           $sgf = Solicitud::join('USUARIO', 'USUARIO.idUsuario', '=', 'Solicitud.idUsuarioFK')
           ->join('DESPACHO', 'DESPACHO.idDespacho', '=', 'USUARIO.idDespachoFK')
           ->join('ESPECIALIDAD', 'ESPECIALIDAD.idEspecialidad', '=', 'DESPACHO.idEspecialidadFK')
           ->where('denominacionEspecialidad','=','Garantías')
           ->whereDay('fechaSolicitud',$friday)
           ->count();
                       // Solicitudes circuito FRIDAY
           $scf = Solicitud::join('USUARIO', 'USUARIO.idUsuario', '=', 'Solicitud.idUsuarioFK')
           ->join('DESPACHO', 'DESPACHO.idDespacho', '=', 'USUARIO.idDespachoFK')
           ->join('ESPECIALIDAD', 'ESPECIALIDAD.idEspecialidad', '=', 'DESPACHO.idEspecialidadFK')
           ->where('denominacionEspecialidad','=','Circuito')
           ->whereDay('fechaSolicitud',$friday)
           ->count();

        return view('informes.estadistica_semanal',
        compact('m','f','wednesday','sl','sm','sw','st','sf',
                'al','am','aw','at','af',
                'sel','snl','sgl','scl',
                'sem','snm','sgm','scm',
                'sew','snw','sgw','scw',
                'set','snt','sgt','sct',
                'sef','snf','sgf','scf'

            ));
    }

    public function vistaestadisticamensual(){
        return view('informes.estadistica_mensual');
    }
}
