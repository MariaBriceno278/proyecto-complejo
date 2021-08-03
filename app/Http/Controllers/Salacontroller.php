<?php

namespace App\Http\Controllers;

use App\Sala;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator as FacadesValidator;

class SalaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $salas = Sala::select('idSala', 'numeroSala', 'capacidadSala', 'bloqueSala', 'pisoSala', 'idSedeFK')->get();
        return view('salas.index')->with('salas', $salas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('salas.create');
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
            'numeroSala' => 'required|string',
            'capacidadSala' => 'string',
            'bloqueSala' => 'string',
            'pisoSala' => 'string',
            'idSedeFK' => 'string',
        ]);

        if ($validator->fails()) {
            return redirect()->Back()->withInput()->withErrors($validator);
        }

        if ($record = Sala::firstOrCreate($data)) {
            Session::flash('message', 'Creado con exito!');
            Session::flash('alert-class', 'alert-success');
            return redirect()->route('salas');
        } else {
            Session::flash('message', 'No se pudo crear!');
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($idSala)
    {
        $salas = Sala::find($idSala);

        return view('salas.edit')->with('salas', $salas);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idSala)
    {
        $data = $request->except('_method', '_token', 'submit');

        $validator = FacadesValidator::make($request->all(), [
            'numeroSala' => 'required|string',
            'capacidadSala' => 'string',
            'bloqueSala' => 'string',
            'pisoSala' => 'string',
        ]);

        if ($validator->fails()) {
            return redirect()->Back()->withInput()->withErrors($validator);
        }
        $salas = Sala::find($idSala);

        if ($salas->update($data)) {

            Session::flash('message', 'Modificado con exito!');
            Session::flash('alert-class', 'alert-success');
            return redirect()->route('salas');
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
        Sala::destroy($id);

        Session::flash('message', 'Eliminado con exito!');
        Session::flash('alert-class', 'alert-success');
        return redirect()->route('salas');
    }
}
