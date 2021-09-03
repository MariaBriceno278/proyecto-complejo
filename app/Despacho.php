<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\This;

class Despacho extends Model
{
    protected $table = "DESPACHO";
    protected $primaryKey = "idDespacho";
    protected $fillable = ['numeroDespacho', 'nombreDespacho', 'telefonoDespacho', 'correoDespacho', 'estado', 'idEspecialidadFK'];
    public $timestamps = false;

    public function especialidads_despachos()
    {
        return $this->belongsTo('App\Especialidad', 'idEspecialidadFK');
    }

    public function despachos_usuarios()
    {
        return $this->hasMany('App\Usuario', 'idDespachoFK');
    }
}
