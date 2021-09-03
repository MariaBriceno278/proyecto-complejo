<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\This;

class Sala extends Model
{
    protected $table = "SALA";
    protected $primaryKey = "idSala";
    protected $fillable = ['numeroSala', 'capacidadSala', 'bloqueSala', 'pisoSala', 'estado','idSedeFK'];
    public $timestamps = false;


    public function sedes_salas()
    {
        return $this->belongsTo('App\Sede','idSedeFK');
    }

    public function sala_asignacion()
    {
        return $this->hasMany('App\Asignacion','idSalaFK');
    }



}
