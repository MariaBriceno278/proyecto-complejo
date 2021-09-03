<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Audiencia extends Model
{
    protected $table = "AUDIENCIA";
    protected $primaryKey = "idAudiencia";
    protected $fillable = ['tiempoAudiencia', 'observacionesAudiencia','estado', 'idAsignacionFK'];
    public $timestamps = false;

    public function audiencia_asignacion()
    {
        return $this->belongsTo('App\Asignacion','idAsignacionFK');
    }

   /*public function asignacion_audiencia()
    {
        return $this->morphOne('App\Asigacion', 'idAsignacionFK');

    }*/
}
