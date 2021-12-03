<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\ResetPasswordRequest;
use App\Http\Requests\SubmitlinkdRequest;
//paquetes utilitarios para la caracteristica
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Usuario;
use Illuminate\Support\Facades\Hash;

//correo personalizado
use App\Mail\ResetPasswordMail;

class ResetPasswordController extends Controller
 {
                public function emailform(){
                    return view('auth.recordar_correo');
            }

            public function submitlink(SubmitlinkdRequest $r){
                //1.Generar Codigo aletorio

                $token = Str::random(64);

                //2.Registrar el password_resets email,codigo,fecha
                DB::table('password_resets')->insert(
                    ["email"=>$r->input("correoUsuario"),
                    "token"=>$token,
                    "created_at"=> Carbon::now()
                    ]
                );
                //3.enviar el amil al destino, con el codigo generado
                Mail::to($r->input("correoUsuario"))->send(new ResetPasswordMail($token));
                return redirect('login')->with("mensaje_enviado",'recibice su correo');
            }

            public function resetform($token){

                return view('auth.reset-password')
                ->with('token',$token);

            }


            /**
             * resetear password
             * method: post
             */

             public function resetpassword(ResetPasswordRequest $r){

                //1.obtener  registro correspondiente al token e mai ingresados en la tabla password-resets: select
                    $pass_reset = DB::table('password_resets')->
                                        where([
                                            'email' => $r->input('correoUsuario'),
                                                'token'=>$r->input('token')
                                                ])->first();
                    if($pass_reset==null){
                        die("token invalido");
                    }


                    //2. de estar el registro proceder a actulizar el password al usurio correspondiente ese email(modelo user)

                        $user = Usuario::where('correoUsuario', $r->input('correoUsuario'))->first();

                        $user->password = Hash::make($r->input("password"));

                        $user->save();
                        return redirect('login')->with("credenciales_cambiadas",'Su contraseña se ha cambiadao exitosamente');

                    //3. eliminar el registrodel toquen utilizado en la tabla password resers



             }


}
