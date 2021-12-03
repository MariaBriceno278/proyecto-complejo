<?php

namespace App\Http\Controllers;

use App\Usuario;
use App\Despacho;
use App\Rol;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use App\Mail\UsuarioCreadoMail;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = Usuario::select('idUsuario', 'nombreUsuario', 'apellidoUsuario', 'correoUsuario', 'documentoUsuario', 'telefonoUsuario', 'estado')->get();
        return view('usuarios.index')->with('usuarios', $usuarios);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $usuarios_despachos = Despacho::select(['numeroDespacho', 'nombreDespacho', 'idDespacho'])->get();
        $usuarios_rols = Rol::select(['nombreRol', 'idRol'])->get();

        return view('usuarios.create')->with('usuarios_despachos', $usuarios_despachos)->with('usuarios_rols', $usuarios_rols);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->except('_method', '_token', 'submit');

        $mensajes = [
            "unique" => "El correo ya ha sido tomado",
            "required" => "El campo es obligatorio",
            "email" => "El campo debe ser una dirección de correo electrónico válida",
            "between" => "El campo deben tener entre :min y :max caracteres",
            "regex" => "El campo solo puede contener letras",
            "digits_between" => "El campo debe tener entre :min y :max dígitos",
        ];

        $rules = [
            'nombreUsuario' => 'required|regex:/^[\pL\s\-]+$/u|between:3, 20',
            'apellidoUsuario' => 'required|regex:/^[\pL\s\-]+$/u|between:5, 20',
            'correoUsuario' => 'required|email:rfc,dns|unique:usuario,correoUsuario',
            'documentoUsuario' => 'required|digits_between: 8 , 10|unique:usuario,documentoUsuario',
            'telefonoUsuario' => 'required|digits_between: 7 , 10|unique:usuario,telefonoUsuario',
            'idDespachoFK' => 'required',
            'idRolFK' => 'required',
            'estado' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules, $mensajes);

        if ($validator->fails()) {
            return redirect('usuarios/create')
                ->withErrors($validator)
                ->withInput();
        }
        $password = Str::random(10);

        $u = new Usuario();
        $u->nombreUsuario = $request->input("nombreUsuario");
        $u->apellidoUsuario = $request->input("apellidoUsuario");
        $u->correoUsuario = $request->input("correoUsuario");
        $u->documentoUsuario = $request->input("documentoUsuario");
        $u->telefonoUsuario = $request->input("telefonoUsuario");
        $u->estado = $request->input("estado");
        $u->idDespachoFK = $request->input("idDespachoFK");
        $u->idRolFK = $request->input("idRolFK");
        $u->password = Hash::make($password);
        $u->save();
        Session::flash('message', 'Creado con exito!');
        Session::flash('alert-class', 'alert-success');
        Mail::to($request->input("correoUsuario"))->send(new UsuarioCreadoMail($password, $u));

        return redirect()->route('usuarios');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $usuarios = Usuario::find($id);

        return view('usuarios.edit')->with('usuario', $usuarios);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($idUsuario)
    {
        $usuarios = Usuario::find($idUsuario);

        $usuarios_despachos = Despacho::select(['numeroDespacho', 'nombreDespacho', 'idDespacho'])->get();

        $usuarios_rols = Rol::select(['nombreRol', 'idRol'])->get();

        return view('usuarios.edit')->with('usuarios_despachos', $usuarios_despachos)->with('usuarios_rols', $usuarios_rols)->with('usuarios', $usuarios);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idUsuario)
    {
        $data = $request->except('_method', '_token', 'submit');

        $mensajes = [
            "unique" => "El correo ya ha sido tomado",
            "required" => "El campo es obligatorio",
            "email" => "El campo debe ser una dirección de correo electrónico válida",
            "between" => "El campo deben tener entre :min y :max caracteres",
            "regex" => "El campo solo puede contener letras",
            "digits_between" => "El campo debe tener entre :min y :max dígitos",
        ];

        $rules = [

            'telefonoUsuario' => 'required|digits_between: 7 , 10|unique:usuario,telefonoUsuario',

        ];

        $validator = Validator::make($request->all(), $rules, $mensajes);

        if ($validator->fails()) {
            return redirect()->Back()->withInput()->withErrors($validator);
        }
        $usuarios = Usuario::find($idUsuario);

        if ($usuarios->update($data)) {

            Session::flash('message', 'Modificado con Exito!');
            Session::flash('alert-class', 'alert-success');
            return redirect()->route('usuarios');
        } else {
            Session::flash('message', 'No se pudo modificar!');
            Session::flash('alert-class', 'alert-danger');
        }

        return Back()->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function change_status($idUsuario)
    {
        $usuario = Usuario::find($idUsuario);
        if ($usuario->estado == 1) {
            $usuario->update(['estado' => 0]);
            return redirect()->back();
        } else {
            $usuario->update(['estado' => 1]);
            return redirect()->back();
        }
    }
}
