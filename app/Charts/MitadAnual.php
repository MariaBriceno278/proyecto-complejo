<?php

declare(strict_types = 1);

namespace App\Charts;

use Chartisan\PHP\Chartisan;
use ConsoleTVs\Charts\BaseChart;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Solicitud;
class MitadAnual extends BaseChart
{
    /**
     * Handles the HTTP request for the given chart.
     * It must always return an instance of Chartisan
     * and never a string or an array.
     */
    public function handler(Request $request): Chartisan
    {

        $solicitudesEnero =Solicitud::whereMonth('fechaSolicitud','1')->count('fechaSolicitud');
        $solicitudesFebrero =Solicitud::whereMonth('fechaSolicitud','2')->count('fechaSolicitud');
        $solicitudesMarzo =Solicitud::whereMonth('fechaSolicitud','3')->count('fechaSolicitud');
        $solicitudesAbril =Solicitud::whereMonth('fechaSolicitud','4')->count('fechaSolicitud');
        $solicitudesMayo =Solicitud::whereMonth('fechaSolicitud','5')->count('fechaSolicitud');
        $solicitudesJunio =Solicitud::whereMonth('fechaSolicitud','6')->count('fechaSolicitud');

        return Chartisan::build()
        ->labels(['Enero', 'Febrero', 'Marzo','Abril','Mayo','Junio'])
            ->dataset('Sample ', [$solicitudesEnero, $solicitudesFebrero, $solicitudesMarzo, $solicitudesAbril, $solicitudesMayo, $solicitudesJunio,
             ]);



    }
}
