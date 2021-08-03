<?php

namespace App\Http\Controllers;

use App\Rol;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator as FacadesValidator;

class RolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rols = Rol::select('idRol', 'nombreRol', 'estadoRol')->get();
        return view('rols.index')->with('rols', $rols);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($idRol)
    {
        $rols = Rol::find($idRol);

        return view('rols.edit')->with('rols', $rols);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idRol)
    {
        $data = $request->except('_method', '_token', 'submit');

        $validator = FacadesValidator::make($request->all(), [
            'estadoRol' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect()->Back()->withInput()->withErrors($validator);
        }
        $rols = Rol::find($idRol);

        if ($rols->update($data)) {

            Session::flash('message', 'Modificado con exito!');
            Session::flash('alert-class', 'alert-success');
            return redirect()->route('rols');
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
        //
    }
}
