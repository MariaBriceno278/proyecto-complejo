<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoInvolucrado extends Model
{
    protected $table = "TIPOINVOLUCRADO";
    protected $primaryKey = "idTipoInvolucrado";
    protected $fillable = ['nombreTipoInvolucrado'];
    public $timestamps = false;
}
