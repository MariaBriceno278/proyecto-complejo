<?php

declare(strict_types = 1);

namespace App\Charts;

use Chartisan\PHP\Chartisan;
use ConsoleTVs\Charts\BaseChart;
use Illuminate\Http\Request;
use App\Solicitud;
class MitadAnual2 extends BaseChart
{
    /**
     * Handles the HTTP request for the given chart.
     * It must always return an instance of Chartisan
     * and never a string or an array.
     */
    public function handler(Request $request): Chartisan
    {

        $solicitudesJulio =Solicitud::whereMonth('fechaSolicitud','7')->count('fechaSolicitud');
        $solicitudesAgosto =Solicitud::whereMonth('fechaSolicitud','8')->count('fechaSolicitud');
        $solicitudesSeptiembre =Solicitud::whereMonth('fechaSolicitud','9')->count('fechaSolicitud');
        $solicitudesOctubre =Solicitud::whereMonth('fechaSolicitud','10')->count('fechaSolicitud');
        $solicitudesNoviembre =Solicitud::whereMonth('fechaSolicitud','11')->count('fechaSolicitud');
        $solicitudesDiciembre =Solicitud::whereMonth('fechaSolicitud','12')->count('fechaSolicitud');
        return Chartisan::build()
        ->labels(['Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'])
            ->dataset('Sample ', [$solicitudesJulio, $solicitudesAgosto, $solicitudesSeptiembre, $solicitudesOctubre, $solicitudesNoviembre, $solicitudesDiciembre  ])
            ;


    }
}
