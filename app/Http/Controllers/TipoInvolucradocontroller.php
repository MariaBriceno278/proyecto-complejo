<?php

namespace App\Http\Controllers;

use App\TipoInvolucrado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator as FacadesValidator;

class TipoInvolucradoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tiposinvolucrados = TipoInvolucrado::select('idTipoInvolucrado', 'nombreTipoInvolucrado')->get();
        return view('tiposinvolucrados.index')->with('tiposinvolucrados', $tiposinvolucrados);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tiposinvolucrados.create');
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
            'nombreTipoInvolucrado' => 'required|string|min:3',
        ]);

        if ($validator->fails()) {
            return redirect()->Back()->withInput()->withErrors($validator);
        }

        if ($record = TipoInvolucrado::firstOrCreate($data)) {
            Session::flash('message', 'Creado con exito!');
            Session::flash('alert-class', 'alert-success');
            return redirect()->route('tiposinvolucrados');
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
        $tiposinvolucrados = TipoInvolucrado::find($id);

        return view('tiposinvolucrados.edit')->with('tipoinvolucrado', $tiposinvolucrados);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($idTipoInvolucrado)
    {
        $tiposinvolucrados = TipoInvolucrado::find($idTipoInvolucrado);

        return view('tiposinvolucrados.edit')->with('tiposinvolucrados', $tiposinvolucrados);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idTipoInvolucrado)
    {
        $data = $request->except('_method', '_token', 'submit');

        $validator = FacadesValidator::make($request->all(), [
            'nombreTipoInvolucrado' => 'required|string|min:3',
        ]);

        if ($validator->fails()) {
            return redirect()->Back()->withInput()->withErrors($validator);
        }
        $tiposinvolucrados = TipoInvolucrado::find($idTipoInvolucrado);

        if ($tiposinvolucrados->update($data)) {

            Session::flash('message', 'Modificado con Exito!');
            Session::flash('alert-class', 'alert-success');
            return redirect()->route('tiposinvolucrados');
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
        TipoInvolucrado::destroy($id);

        Session::flash('message', 'Eliminado con Exito!');
        Session::flash('alert-class', 'alert-success');
        return redirect()->route('tiposinvolucrados');
    }
}
