<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
class Logincontroller extends Controller
{
    public function form(){
        return view('auth.login');
    }

    public function login(LoginRequest $request){
        //Auth: Establcer inicios de sesion
        $credentials = $request->only('correoUsuario', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect('vista_dashboard');
        }
        else {
            return redirect('login')->with("credenciales_invalidas",'credenciales invalidas');
        }
         // Auth: Establecer inicios de sesión.


}

public function logout(){

    Auth::logout();

    return redirect('login')->with("cerrar_sesion",'sesión cerrada exitosamente');

}
}
