<?php

namespace App\Http\Controllers;

use App\Audiencia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator as FacadesValidator;

class AudienciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $audiencias = Audiencia::select('idAudiencia', 'tiempoAudiencia', 'observacionesAudiencia')->get();
        return view('audiencias.index')->with('audiencias', $audiencias);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('audiencias.create');
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
            'tiempoAudiencia' => 'required|string',
            'observacionesAudiencia' => 'string',
            'idAsignacionFK' => 'string',

        ]);

        if ($validator->fails()) {
            return redirect()->Back()->withInput()->withErrors($validator);
        }

        if ($record = Audiencia::firstOrCreate($data)) {
            Session::flash('message', 'Creado con exito!');
            Session::flash('alert-class', 'alert-success');
            return redirect()->route('audiencias');
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
        $audiencias = Audiencia::find($id);

        return view('audiencias.edit')->with('audiencia', $audiencias);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($idAudiencia)
    {
        $audiencias = Audiencia::find($idAudiencia);

        return view('audiencias.edit')->with('audiencias', $audiencias);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idAudiencia)
    {
        $data = $request->except('_method', '_token', 'submit');

        $validator = FacadesValidator::make($request->all(), [
            'tiempoAudiencia' => 'required|string',
            'observacionesAudiencia' => 'string',
            'idAsignacionFK' => 'string',

        ]);

        if ($validator->fails()) {
            return redirect()->Back()->withInput()->withErrors($validator);
        }
        $audiencias = Audiencia::find($idAudiencia);

        if ($audiencias->update($data)) {

            Session::flash('message', 'Modificado con Exito!');
            Session::flash('alert-class', 'alert-success');
            return redirect()->route('audiencias');
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
        Audiencia::destroy($id);

        Session::flash('message', 'Eliminado con Exito!');
        Session::flash('alert-class', 'alert-success');
        return redirect()->route('audiencias');
    }
}
