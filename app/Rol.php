<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    protected $table = "ROL";
    protected $primaryKey = "idRol";
    protected $fillable = ['nombreRol'];
    public $timestamps = false;

    public function rols_usuarios()
    {
        return $this->hasMany('App\Usuario', 'idRolFK');
    }
}
