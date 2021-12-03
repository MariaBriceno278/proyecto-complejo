<?php

declare(strict_types = 1);

namespace App\Charts;

use Chartisan\PHP\Chartisan;
use ConsoleTVs\Charts\BaseChart;
use Illuminate\Http\Request;
use App\Solicitud;
use App\Asignacion;
use App\Audiencia;
use Carbon\Carbon;
class Ed1 extends BaseChart
{
    /**
     * Handles the HTTP request for the given chart.
     * It must always return an instance of Chartisan
     * and never a string or an array.
     */
    public function handler(Request $request): Chartisan
    {
        $iniciodia = Carbon::now()->startOfDay();

        $sd1 = Solicitud::whereDay('fechaSolicitud',$iniciodia)
      /*   ->join('usuario', 'usuario.idUsuario', '=', 'solicitud.idUsuarioFK')
        ->join('despacho', 'despacho.idDespacho', '=', 'usuario.idDespachoFK')
        ->join('especialidad', 'especialidad.idEspecialidad', '=', 'despacho.idEspecialidadFK')
        ->where('idEspecialidad','=','1') */
        ->count();

        $sd2 = Solicitud::whereDay('fechaSolicitud',$iniciodia)
      /*   ->join('usuario', 'usuario.idUsuario', '=', 'solicitud.idUsuarioFK')
        ->join('despacho', 'despacho.idDespacho', '=', 'usuario.idDespachoFK')
        ->join('especialidad', 'especialidad.idEspecialidad', '=', 'despacho.idEspecialidadFK')
        ->where('idEspecialidad','=','2') */
        ->count();

        $ad1 = Asignacion::whereDay('fechaInicio',$iniciodia)
      /*   ->join('solicitud', 'solicitud.idSolicitudFK', '=', 'asignacion.idSolicitud')
        ->join('usuario', 'usuario.idUsuario', '=', 'solicitud.idUsuarioFK')
        ->join('despacho', 'despacho.idDespacho', '=', 'usuario.idDespachoFK')
        ->join('especialidad', 'especialidad.idEspecialidad', '=', 'despacho.idEspecialidadFK')
        ->where('idEspecialidad','=','1') */
        ->count();

        $ad2 = Asignacion::whereDay('fechaInicio',$iniciodia)
       /*  ->join('solicitud', 'solicitud.idSolicitudFK', '=', 'asignacion.idSolicitud')
        ->join('usuario', 'usuario.idUsuario', '=', 'solicitud.idUsuarioFK')
        ->join('despacho', 'despacho.idDespacho', '=', 'usuario.idDespachoFK')
        ->join('especialidad', 'especialidad.idEspecialidad', '=', 'despacho.idEspecialidadFK')
        ->where('idEspecialidad','=','2') */
        ->count();



        return Chartisan::build()
            ->labels(['Solicitud', 'Asignacion'])
            ->dataset('Sample', [$sd1, $ad1])
            ->dataset('Sample 2', [$sd2, $ad2])
            ;
    }
}
