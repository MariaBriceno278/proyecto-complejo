<?php

namespace App\Http\Controllers;

use App\Involucrado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class InvolucradoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $involucrados = Involucrado::select('idInvolucrado', 'nombreInvolucrado', 'correoInvolucrado', 'estado')->get();
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

        $mensajes = [
            "unique" => "El correo involucrado ya está tomado",
            "required" => "El campo es obligatorio",
            "between" => "El campo deben tener entre :min y :max caracteres",
            "regex" => "El campo solo puede contener letras",
            "email" => "El campo debe ser una dirección de correo electrónico válida",
        ];

        $rules = [
            'nombreInvolucrado' => 'required|between:3, 20|regex:/^[\pL\s\-]+$/u',
            'correoInvolucrado' => 'required|email:rfc,dns|unique:involucrado,correoInvolucrado',
            'estado' => 'required'
        ];

        $validator = Validator::make($request->all(), $rules, $mensajes);

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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function change_status($idInvolucrado)
    {
        $involucrado = Involucrado::find($idInvolucrado);
        if ($involucrado->estado == 1) {
            $involucrado->update(['estado' => 0]);
            return redirect()->back();
        } else {
            $involucrado->update(['estado' => 1]);
            return redirect()->back();
        }
    }
}
