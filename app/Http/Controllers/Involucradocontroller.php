<?php

namespace App\Http\Controllers;

use App\Involucrado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator as FacadesValidator;

class InvolucradoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $involucrados = Involucrado::select('idInvolucrado', 'nombreInvolucrado', 'correoInvolucrado')->get();
        return view('involucrados.index')->with('involucrados', $involucrados);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('involucrados.create');
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
            'nombreInvolucrado' => 'required|string|min:3',
            'correoInvolucrado' => 'required|string|min:3',
        ]);

        if ($validator->fails()) {
            return redirect()->Back()->withInput()->withErrors($validator);
        }

        if ($record = Involucrado::firstOrCreate($data)) {
            Session::flash('message', 'Creado con exito!');
            Session::flash('alert-class', 'alert-success');
            return redirect()->route('involucrados');
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
        $involucrados = Involucrado::find($id);

        return view('involucrados.edit')->with('involucrado', $involucrados);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($idInvolucrado)
    {
        $involucrados = Involucrado::find($idInvolucrado);

        return view('involucrados.edit')->with('involucrados', $involucrados);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idInvolucrado)
    {
        $data = $request->except('_method', '_token', 'submit');

        $validator = FacadesValidator::make($request->all(), [
            'nombreInvolucrado' => 'required|string|min:3',
            'correoInvolucrado' => 'required|string|min:3',
        ]);

        if ($validator->fails()) {
            return redirect()->Back()->withInput()->withErrors($validator);
        }
        $involucrados = Involucrado::find($idInvolucrado);

        if ($involucrados->update($data)) {

            Session::flash('message', 'Modificado con Exito!');
            Session::flash('alert-class', 'alert-success');
            return redirect()->route('involucrados');
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
        Involucrado::destroy($id);

        Session::flash('message', 'Eliminado con Exito!');
        Session::flash('alert-class', 'alert-success');
        return redirect()->route('involucrados');
    }
}
