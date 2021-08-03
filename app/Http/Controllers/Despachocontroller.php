<?php

namespace App\Http\Controllers;

use App\Despacho;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator as FacadesValidator;

class DespachoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $despachos = Despacho::select('idDespacho', 'numeroDespacho', 'nombreDespacho', 'telefonoDespacho', 'correoDespacho')->get();
        return view('despachos.index')->with('despachos', $despachos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('despachos.create');
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
            'numeroDespacho' => 'required|string|min:1',
            'nombreDespacho' => 'required|string|min:1',
            'telefonoDespacho' => 'required|string|min:6',
            'correoDespacho' => 'required|string|min:1',
            'idEspecialidadFK' => 'string',

        ]);

        if ($validator->fails()) {
            return redirect()->Back()->withInput()->withErrors($validator);
        }

        if ($record = Despacho::firstOrCreate($data)) {
            Session::flash('message', 'Creado con exito!');
            Session::flash('alert-class', 'alert-success');
            return redirect()->route('despachos');
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
        $despachos = Despacho::find($id);

        return view('despachos.edit')->with('despacho', $despachos);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($idDespacho)
    {
        $despachos = Despacho::find($idDespacho);

        return view('despachos.edit')->with('despachos', $despachos);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idDespacho)
    {
        $data = $request->except('_method', '_token', 'submit');

        $validator = FacadesValidator::make($request->all(), [
            'numeroDespacho' => 'required|string|min:1',
            'nombreDespacho' => 'required|string|min:1',
            'telefonoDespacho' => 'required|string|min:6',
            'correoDespacho' => 'required|string|min:1',
            'idEspecialidadFK' => 'string',

        ]);

        if ($validator->fails()) {
            return redirect()->Back()->withInput()->withErrors($validator);
        }
        $despachos = Despacho::find($idDespacho);

        if ($despachos->update($data)) {

            Session::flash('message', 'Modificado con Exito!');
            Session::flash('alert-class', 'alert-success');
            return redirect()->route('despachos');
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
        Despacho::destroy($id);

        Session::flash('message', 'Eliminado con Exito!');
        Session::flash('alert-class', 'alert-success');
        return redirect()->route('despachos');
    }
}
