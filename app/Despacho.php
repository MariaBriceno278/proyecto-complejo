<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Despacho extends Model
{
    protected $table = "DESPACHO";
    protected $primaryKey = "idDespacho";
    protected $fillable = ['numeroDespacho', 'nombreDespacho', 'telefonoDespacho', 'correoDespacho',  'idEspecialidadFK'];
    public $timestamps = false;
}
