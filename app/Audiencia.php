<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Audiencia extends Model
{
    protected $table = "AUDIENCIA";
    protected $primaryKey = "idAudiencia";
    protected $fillable = ['tiempoAudiencia', 'observacionesAudiencia', 'idAsignacionFK'];
    public $timestamps = false;
}
