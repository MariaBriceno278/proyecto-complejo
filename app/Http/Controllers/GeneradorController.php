<?php

namespace App\Http\Controllers;
use App\Asignacion;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use App\Solicitud;

use App\Sala;
use Carbon\Carbon;

class GeneradorController extends Controller
{
    public function imprimir(){



        $pdf = PDF::loadView('informes.estadistica_diaria');




        return $pdf->download('ejemplo.pdf');
   }
}
