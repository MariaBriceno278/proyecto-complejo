<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Involucrado extends Model
{
    protected $table = "INVOLUCRADO";
    protected $primaryKey = "idInvolucrado";
    protected $fillable = ['nombreInvolucrado', 'correoInvolucrado'];
    public $timestamps = false;
}
