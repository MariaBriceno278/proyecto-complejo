<?php

namespace App\Http\Controllers;

use App\Sede;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class SedeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sedes = Sede::select('idSede', 'direccionSede', 'nombreSede', 'estado')->get();
        return view('sedes.index')->with('sedes', $sedes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sedes.create');
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

        $rules = [
            'direccionSede' => 'required|between:5, 20|unique:sede,direccionSede',
            'nombreSede' => 'required|between:5, 20|regex:/^[\pL\s\-]+$/u',
            'estado' => 'required',
        ];

        $mensajes = [
            "required" => "El campo es obligatorio",
            'unique' => "La dirección sede ya está tomada",
            "between" => "El campo deben tener entre :min y :max caracteres",
            "regex" => "El campo solo puede contener letras",
        ];

        $validator = Validator::make($request->all(), $rules, $mensajes);

        if ($validator->fails()) {
            return redirect()->Back()->withInput()->withErrors($validator);
        }

        if ($record = Sede::firstOrCreate($data)) {
            Session::flash('message', 'Creado con exito!');
            Session::flash('alert-class', 'alert-success');
            return redirect()->route('sedes');
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
    public function edit($idSede)
    {
        $sedes = Sede::find($idSede);

        return view('sedes.edit')->with('sedes', $sedes);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idSede)
    {
        $data = $request->except('_method', '_token', 'submit');

        $rules = [
            'direccionSede' => 'required|between:5, 20|unique:sede,direccionSede',
            'nombreSede' => 'required|between:5, 20|regex:/^[\pL\s\-]+$/u',

        ];

        $mensajes = [
            "required" => "El campo es obligatorio",
            'unique' => "La dirección sede ya está tomada",
            "between" => "El campo deben tener entre :min y :max caracteres",
            "regex" => "El campo solo puede contener letras",
        ];

        $validator = Validator::make($request->all(), $rules, $mensajes);

        if ($validator->fails()) {
            return redirect()->Back()->withInput()->withErrors($validator);
        }
        $sedes = Sede::find($idSede);

        if ($sedes->update($data)) {

            Session::flash('message', 'Modificado con exito!');
            Session::flash('alert-class', 'alert-success');
            return redirect()->route('sedes');
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
    public function change_status($idSede)
    {
        $sede = Sede::find($idSede);
        if ($sede->estado == 1) {
            $sede->update(['estado' => 0]);
            return redirect()->back();
        } else {
            $sede->update(['estado' => 1]);
            return redirect()->back();
        }
    }
}
