<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sala extends Model
{
    protected $table = "SALA";
    protected $primaryKey = "idSala";
    protected $fillable = ['numeroSala', 'capacidadSala', 'bloqueSala', 'pisoSala', 'idSedeFK'];
    public $timestamps = false;
}
