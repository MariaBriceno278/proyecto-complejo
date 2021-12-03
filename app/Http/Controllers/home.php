<?php

namespace App\Http\Controllers;

use App\Asignacion;
use Illuminate\Http\Request;
use Chartisan\PHP\Chartisan;
use App\Charts\SampleChart;
use App\Solicitud;

use App\Sala;
use Carbon\Carbon;

use ConsoleTVs\Charts\BaseChart;
class home extends Controller
{
    public function vista_dashboard(Request $request){



        $inicioMes = Carbon::now()->startOfMonth();

        $diadehoy = Carbon::now()->startOfDay();

        $inicioFormateado = $diadehoy->format('Y/m/d');
        $solicitudes_hoy = Solicitud::whereday('fechaSolicitud',$diadehoy)->count('fechaSolicitud');
        $solicitudes =Solicitud::whereMonth('fechaSolicitud',$inicioMes)->count('fechaSolicitud');
        $solicitudes_urgentes = Solicitud::where('PrioridadNormal','=','1')->where('estado','=','0')->count('idSolicitud');
        $solicitudes_normales = Solicitud::where('PrioridadNormal','=','0')->where('estado','=','0')->count('idSolicitud');
        $asignanacions_hoy = Asignacion::whereDay('fechaInicio', $diadehoy)->count('fechaInicio');


        $salas_inhabilitadas = Sala::select('numeroSala')->where('estado','=','0')->get();
        $csi = $salas_inhabilitadas->count();

        $s=Solicitud::where('estado','=','0')->get();
        $sp = $s->count();
        return view('layouts.layouthome')->with('sp',$sp)->with('asignanacions_hoy',$asignanacions_hoy)->with('solicitudes',$solicitudes)->with('inicioMes',$inicioMes)
        ->with('solicitudes_hoy',$solicitudes_hoy)->with('solicitudes_urgentes',$solicitudes_urgentes)->with('solicitudes_normales',$solicitudes_normales)
        ->with('inicioFormateado',$inicioFormateado)->with('salas_inhabilitadas',$salas_inhabilitadas)->with('csi',$csi);
    }
}
