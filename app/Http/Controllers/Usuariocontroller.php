<?php

namespace App\Http\Controllers;

use App\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator as FacadesValidator;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = Usuario::select('idUsuario', 'nombreUsuario', 'apellidoUsuario', 'correoUsuario', 'documentoUsuario', 'telefonoUsuario')->get();
        return view('usuarios.index')->with('usuarios', $usuarios);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usuarios.create');
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

        $validator = FacadesValidator::make($request->all(), [
            'nombreUsuario' => 'required|string|min:1',
            'apellidoUsuario' => 'required|string|min:1',
            'correoUsuario' => 'required|string|min:10',
            'documentoUsuario' => 'required|int|min:10',
            'telefonoUsuario' => 'required|int|min:6',
            'idDespachoFK' => 'string',
            'idRolFK' => 'string'


        ]);

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

        return view('usuarios.edit')->with('usuarios', $usuarios);
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

        $validator = FacadesValidator::make($request->all(), [
            'nombreUsuario' => 'required|string|min:1',
            'apellidoUsuario' => 'required|string|min:1',
            'correoUsuario' => 'required|string|min:10',
            'documentoUsuario' => 'required|int|min:10',
            'telefonoUsuario' => 'required|int|min:6',
            'idDespachoFK' => 'string',
            'idRolFK' => 'string'

        ]);

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
    public function destroy($id)
    {
        Usuario::destroy($id);

        Session::flash('message', 'Eliminado con Exito!');
        Session::flash('alert-class', 'alert-success');
        return redirect()->route('usuarios');
    }
}
