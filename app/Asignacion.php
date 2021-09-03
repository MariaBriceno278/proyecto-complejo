<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asignacion extends Model
{
    protected $table = "ASIGNACION";
    protected $primaryKey = "idAsignacion";
    protected $fillable = ['fechaInicio', 'horaInicio','fechaFin','horaFin', 'notificacionEnviada', 'estado', 'idSalaFK', 'idSolicitudFK'];
    public $timestamps = false;

    public function asignacion_sala()
    {
        return $this->belongsTo('App\Sala','idSalaFK');
    }

    public function asignacion_solicitud()
    {
        return $this->morphOne('App\Solicitud', 'idSolicitudFK');

    }
    public function asignacion_audiencia()
    {
        return $this->hasMany('App\Audiencia','idAsignacionFK');
    }
    /*
    public function asignacion_audiencia()
    {
        return $this->morphOne('App\Audiencia', 'idAsignacionFK');

    }*/
}
//Sala::find(1)->sedes_salas;
