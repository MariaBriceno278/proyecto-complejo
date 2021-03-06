<?php

namespace App\Http\Controllers;

use App\Caso;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class CasoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $casos = Caso::select('idCaso', 'nReferenciaCaso', 'fechaRegistro', 'estado')->get();
        return view('casos.index')->with('casos', $casos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('casos.create');
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
            "required" => "El campo es obligatorio",
            "after" => "La fecha de registro debe ser posterior a ayer",
            "digits_between" => "El campo debe tener entre :min y :max dígitos",
        ];

        $rules = [
            "fechaRegistro" => 'required|after:yesterday',
            'nReferenciaCaso' => 'required|digits_between: 3 , 10',
            'estado' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules, $mensajes);


        if ($validator->fails()) {
            return redirect()->Back()->withInput()->withErrors($validator);
        }

        if ($validator->fails()) {
            return redirect()->Back()->withInput()->withErrors($validator);
        }

        if ($record = Caso::firstOrCreate($data)) {
            Session::flash('message', 'Creado con exito!');
            Session::flash('alert-class', 'alert-success');
            return redirect()->route('casos');
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($idCaso)
    {
        $casos = Caso::find($idCaso);

        return view('casos.edit')->with('casos', $casos);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idCaso)
    {
        $data = $request->except('_method', '_token', 'submit');

        $mensajes = [
            "required" => "El campo es obligatorio",
            "after" => "La fecha de registro debe ser posterior a ayer",
            "digits_between" => "El campo debe tener entre :min y :max dígitos",
        ];

        $rules = [
            "fechaRegistro" => 'required|after:yesterday',
            'nReferenciaCaso' => 'required|digits_between: 3 , 10',

        ];

        $validator = Validator::make($request->all(), $rules, $mensajes);

        if ($validator->fails()) {
            return redirect()->Back()->withInput()->withErrors($validator);
        }

        if ($validator->fails()) {
            return redirect()->Back()->withInput()->withErrors($validator);
        }
        $casos = Caso::find($idCaso);

        if ($casos->update($data)) {

            Session::flash('message', 'Modificado con Exito!');
            Session::flash('alert-class', 'alert-success');
            return redirect()->route('casos');
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
    public function change_status($idCaso)
    {
        $caso = Caso::find($idCaso);
        if ($caso->estado == 1) {
            $caso->update(['estado' => 0]);
            return redirect()->back();
        } else {
            $caso->update(['estado' => 1]);
            return redirect()->back();
        }
    }
}
