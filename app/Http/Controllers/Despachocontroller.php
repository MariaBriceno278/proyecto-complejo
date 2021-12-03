<?php

namespace App\Http\Controllers;

use App\Despacho;
use App\Especialidad;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class DespachoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $despachos = Despacho::select('idDespacho', 'numeroDespacho', 'nombreDespacho', 'telefonoDespacho', 'correoDespacho', 'estado')->get();
        return view('despachos.index')->with('despachos', $despachos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $despachos_especialidads = Especialidad::select(['denominacionEspecialidad', 'idEspecialidad'])->get();
        //$despachos_especialidads = Especialidad::pluck['denominacionEspecialidad','idEspecialidad'];

        return view('despachos.create')->with('despachos_especialidads', $despachos_especialidads);
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
            "unique" => "El número despacho ya está tomado",
            "required" => "El campo es obligatorio",
            "email" => "El campo debe ser una dirección de correo electrónico válida",
            "between" => "El campo :attribute debe tener al menos :min y no puede tener más :max caracteres",
            "digits_between" => "El campo debe tener entre :min y :max dígitos"
        ];

        $rules = [
            'numeroDespacho' => 'required|digits_between: 8 , 10|unique:despacho,numerodespacho',
            'nombreDespacho' => 'required|between:5, 20|unique:despacho,nombredespacho',
            'telefonoDespacho' => 'required|digits_between: 8 , 10|unique:despacho,telefonoDespacho',
            'correoDespacho' => 'required|email:rfc,dns|unique:despacho,correoDespacho',
            'idEspecialidadFK' => 'required',
            'estado' => 'required'
        ];

        $validator = Validator::make($request->all(), $rules, $mensajes);

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

        $despachos_especialidads = Especialidad::select(['denominacionEspecialidad', 'idEspecialidad'])

            ->get();

        return view('despachos.edit', compact('despachos_especialidads', $despachos_especialidads))->with('despachos', $despachos);
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

        $mensajes = [
            "unique" => "El número despacho ya está tomado",
            "required" => "El campo es obligatorio",
            "email" => "El campo debe ser una dirección de correo electrónico válida",
            "between" => "El campo :attribute debe tener al menos :min y no puede tener más :max caracteres",
            "digits_between" => "El campo debe tener entre :min y :max dígitos"
        ];

        $rules = [
            'numeroDespacho' => 'required|digits_between: 8 , 10',
            'nombreDespacho' => 'required|between:5, 20',
            'telefonoDespacho' => 'required|digits_between: 8 , 10',
            'correoDespacho' => 'required|email:rfc,dns',

        ];
        $validator = Validator::make($request->all(), $rules, $mensajes);

        if ($validator->fails()) {
            return redirect()->Back()->withInput()->withErrors($validator);
        }

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
    public function change_status($idDespacho)
    {
        $despacho = Despacho::find($idDespacho);
        if ($despacho->estado == 1) {
            $despacho->update(['estado' => 0]);
            return redirect()->back();
        } else {
            $despacho->update(['estado' => 1]);
            return redirect()->back();
        }
    }
}
