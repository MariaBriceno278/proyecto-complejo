<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\This;

class DetalleCaso extends Model
{
    protected $table = "DETALLECASO";
    protected $primaryKey = "idDetalleCaso";
    protected $fillable = ['observacionesDetalleCaso', 'estado', 'idCasoFK', 'idTipoInvolucradoFK', 'idInvolucradoFK'];
    public $timestamps = false;

    public function detallescasos_casos()
    {
        return $this->belongsTo('App\Caso', 'idCasoFK');
    }

    public function detallescasos_tiposinvolucrados()
    {
        return $this->belongsTo('App\TipoInvolucrado', 'idTipoInvolucradoFK');
    }

    public function detallescasos_involucrados()
    {
        return $this->belongsTo('App\Involucrado', 'idInvolucradoFK');
    }
}
