<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\This;

class Usuario extends Model
{
    protected $table = "USUARIO";
    protected $primaryKey = "idUsuario";
    protected $fillable = ['nombreUsuario', 'apellidoUsuario', 'correoUsuario', 'documentoUsuario', 'telefonoUsuario', 'estado', 'idDespachoFK', 'idRolFK'];
    public $timestamps = false;

    public function despachos_usuarios()
    {
        return $this->belongsTo('App\Despacho', 'idDespachoFK');
    }

    public function rols_usuarios()
    {
        return $this->belongsTo('App\Rol', 'idRolFK');
    }
}
