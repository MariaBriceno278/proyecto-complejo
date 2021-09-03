<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
    protected $table = "SOLICITUD";
    protected $primaryKey = "idSolicitud";
    protected $fillable = ['fechaSolicitud', 'capacidadRequerida', 'prioridadNormal','estado', 'idCasoFK', 'idUsuarioFK'];
    public $timestamps = false;

    public function solicitud_asignacion()
    {
        return $this->hasMany('App\Asignacion','idSolicitudFK');
    }

    public function solicitud_caso()
    {
        return $this->belongsTo('App\Caso','idCasoFK');
    }

    public function solicitud_usuario()
    {
        return $this->belongsTo('App\Usuario','idUsuarioFK');
    }
}
