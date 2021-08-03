<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = "USUARIO";
    protected $primaryKey = "idUsuario";
    protected $fillable = ['nombreUsuario', 'apellidoUsuario', 'correoUsuario', 'documentoUsuario', 'telefonoUsuario', 'idDespachoFK', 'idRolFK'];
    public $timestamps = false;

    /*public function Roles()
    {
        return $this->belongsTo(Rol::class);
    }*/
}
