<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    protected $table = "ROL";
    protected $primaryKey = "idRol";
    protected $fillable = ['nombreRol', 'estadoRol'];
    public $timestamps = false;
}
