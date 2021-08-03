<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Caso extends Model
{
    protected $table = "CASO";
    protected $primaryKey = "idCaso";
    protected $fillable = ['nReferenciaCaso', 'fechaRegistro', 'estadoCaso'];
    public $timestamps = false;
}
