<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
    protected $table = "SOLICITUD";
    protected $primaryKey = "idSolicitud";
    protected $fillable = ['fechaSolicitud', 'capacidadRequerida', 'prioridadNormal', 'idCasoFK', 'idUsuarioFK'];
    public $timestamps = false;
}
