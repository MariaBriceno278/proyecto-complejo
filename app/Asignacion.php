<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asignacion extends Model
{
    protected $table = "ASIGNACION";
    protected $primaryKey = "idAsignacion";
    protected $fillable = ['fechaHoraInicio', 'fechaHoraFin', 'notificacionEnviada', 'idSalaFK', 'idSolicitudFK'];
    public $timestamps = false;
}
