<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sede extends Model
{
    protected $table = "SEDE";
    protected $primaryKey = "idSede";
    protected $fillable = ['direccionSede', 'nombreSede'];
    public $timestamps = false;
}
