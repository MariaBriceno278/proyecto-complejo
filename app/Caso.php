<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Caso extends Model
{
    protected $table = "CASO";
    protected $primaryKey = "idCaso";
    protected $fillable = ['nReferenciaCaso', 'fechaRegistro', 'estado'];
    public $timestamps = false;

    public function caso_solicitud()
    {
        return $this->hasMany('App\Solocitud','idCasoFK');
    }
}
