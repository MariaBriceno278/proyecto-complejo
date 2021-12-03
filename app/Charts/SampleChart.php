<?php

declare(strict_types = 1);

namespace App\Charts;
use App\Usuario;
use App\Solicitud;
use Chartisan\PHP\Chartisan;
use ConsoleTVs\Charts\BaseChart;
use Illuminate\Http\Request;
use Carbon\Carbon;

class SampleChart extends BaseChart
{


    /**
     * Determines the chart name to be used on the
     * route. If null, the name will be a snake_case
     * version of the class name.
     */
    public ?string $name = 'custom_chart_name';

    /**
     * Determines the name suffix of the chart route.
     * This will also be used to get the chart URL
     * from the blade directrive. If null, the chart
     * name will be used.
     */


    /**
     * Determines the prefix that will be used by the chart
     * endpoint.
     */
    public ?string $prefix = 'some_prefix';

    /**
     * Determines the middlewares that will be applied
     * to the chart endpoint.
     */
    public ?array $middlewares = ['auth'];
    /**
     * Handles the HTTP request for the given chart.
     * It must always return an instance of Chartisan
     * and never a string or an array.
     */
    public function handler(Request $request): Chartisan
    {
        $inicioMes = Carbon::now()->startOfMonth();



        $solicitudesEnero =Solicitud::whereMonth('fechaSolicitud','1')->count('fechaSolicitud');
        $solicitudesFebrero =Solicitud::whereMonth('fechaSolicitud','2')->count('fechaSolicitud');
        $solicitudesMarzo =Solicitud::whereMonth('fechaSolicitud','3')->count('fechaSolicitud');
        $solicitudesAbril =Solicitud::whereMonth('fechaSolicitud','4')->count('fechaSolicitud');
        $solicitudesMayo =Solicitud::whereMonth('fechaSolicitud','5')->count('fechaSolicitud');
        $solicitudesJunio =Solicitud::whereMonth('fechaSolicitud','6')->count('fechaSolicitud');
        $solicitudesJulio =Solicitud::whereMonth('fechaSolicitud','7')->count('fechaSolicitud');
        $solicitudesAgosto =Solicitud::whereMonth('fechaSolicitud','8')->count('fechaSolicitud');
        $solicitudesSeptiembre =Solicitud::whereMonth('fechaSolicitud','9')->count('fechaSolicitud');
        $solicitudesOctubre =Solicitud::whereMonth('fechaSolicitud','10')->count('fechaSolicitud');
        $solicitudesNoviembre =Solicitud::whereMonth('fechaSolicitud','11')->count('fechaSolicitud');
        $solicitudesDiciembre =Solicitud::whereMonth('fechaSolicitud','12')->count('fechaSolicitud');
        return Chartisan::build()
        ->labels(['Enero', 'Febrero', 'Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'])
            ->dataset('Sample ', [$solicitudesEnero, $solicitudesFebrero, $solicitudesMarzo, $solicitudesAbril, $solicitudesMayo, $solicitudesJunio,
            $solicitudesJulio, $solicitudesAgosto, $solicitudesSeptiembre, $solicitudesOctubre, $solicitudesNoviembre, $solicitudesDiciembre  ])
            ;




    }


}
