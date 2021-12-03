<?php

namespace App;
use App\Rol;
use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\This;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Usuario extends Authenticatable
{
    protected $table = "USUARIO";
    protected $primaryKey = "idUsuario";
    protected $fillable = ['nombreUsuario', 'apellidoUsuario', 'correoUsuario', 'documentoUsuario', 'telefonoUsuario', 'estado', 'idDespachoFK', 'idRolFK','password'];
    public $timestamps = false;
 /**

    * The attributes that should be hidden for arrays.
    *
    * @var array
    */
   protected $hidden = [
       'password', 'remember_token',
   ];

   /**
    * The attributes that should be cast to native types.
    *
    * @var array
    */
   protected $casts = [
       'email_verified_at' => 'datetime',
   ];
    public function despachos_usuarios()
    {
        return $this->belongsTo('App\Despacho', 'idDespachoFK');
    }

    public function rols_usuarios()
    {
        return $this->belongsTo('App\Rol', 'idRolFK');
    }

    public function roles()
    {
        return $this->belongsToMany(Rol::class)->withTimestamps();
    }
}
