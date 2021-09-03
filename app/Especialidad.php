<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Especialidad extends Model
{
    protected $table = "ESPECIALIDAD";
    protected $primaryKey = "idEspecialidad";
    protected $fillable = ['denominacionEspecialidad','estado'];
    public $timestamps = false;
}
