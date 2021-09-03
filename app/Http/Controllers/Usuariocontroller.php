<?php

namespace App\Http\Controllers;

use App\Usuario;
use App\Despacho;
use App\Rol;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

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

        return view('usuarios.create')->with('usuarios_despachos', $usuarios_despachos)->with('usuarios_rols', $usuarios_rols);    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->except('_method', '_token', 'submit');

        $mensajes =[
            "unique" => "ya se encuntra registrado",
            "required" => "Campo requerido ",
            "alpha" => "Solo ingrese letras",
            "numeric" => "Solo ingrese numeros",
            "email" => "Solo correo electronico valido",

            ];

            $rules = [
                'nombreUsuario' => 'required|string|min:3',
            'apellidoUsuario' => 'required|string|min:3',
            'correoUsuario' => 'required|email|unique:usuario,correoUsuario',
            'documentoUsuario' => 'required|numeric|min:10|unique:usuario,documentoUsuario',
            'telefonoUsuario' => 'required|numeric|min:6|unique:usuario,telefonoUsuario',
            'idDespachoFK' => 'required',
            'idRolFK' => 'required'


            ];

        $validator = Validator::make($request->all(), $rules,$mensajes);

        if ($validator->fails()) {
            return redirect()->Back()->withInput()->withErrors($validator);
        }

        if ($record = Usuario::firstOrCreate($data)) {
            Session::flash('message', 'Creado con exito!');
            Session::flash('alert-class', 'alert-success');
            return redirect()->route('usuarios');
        } else {
            Session::flash('message', 'Data not saved!');
            Session::flash('alert-class', 'alert-danger');
        }

        return Back();
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

        $mensajes =[
            "unique" => "ya se encuntra registrado",
            "required" => "Campo requerido ",
            "alpha" => "Solo ingrese letras",
            "numeric" => "Solo ingrese numeros",
            "email" => "Solo correo electronico valido",

            ];

            $rules = [
                'nombreUsuario' => 'required|string|min:3',
            'apellidoUsuario' => 'required|string|min:3',
            'correoUsuario' => 'required|email',
            'documentoUsuario' => 'required|numeric|min:10',
            'telefonoUsuario' => 'required|numeric|min:6',
            'idDespachoFK' => 'required',
            'idRolFK' => 'required'


            ];

        $validator = Validator::make($request->all(), $rules,$mensajes);

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
