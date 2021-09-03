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

        $rules = [
            'numeroDespacho' => 'required|numeric|min:1|unique:despacho,numerodespacho',
            'nombreDespacho' => 'required|string|min:1|unique:despacho,nombredespacho',
            'telefonoDespacho' => 'required|numeric|min:6|unique:despacho,telefonoDespacho',
            'correoDespacho' => 'required|email|unique:despacho,correoDespacho',
            'idEspecialidadFK' => 'required',

        ];
                $mensajes =[
            "unique" => "ya se encuntra registrado",
            "required" => "Campo requerido ",
            "alpha" => "Solo ingrese letras",
            "numeric" => "Solo ingrese numeros",
            "email" => "Solo correo electronico valido",

            ];
            $validator = Validator::make($request->all(), $rules,$mensajes);
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

        $mensajes =[

            "required" => "Campo requerido ",
            "numeric" => "Solo ingrese numeros",
            "email" => "Solo correo electronico valido",

            ];

            $rules = [
                'numeroDespacho' => 'required|numeric|min:1',
                'nombreDespacho' => 'required|string|min:1',
                'telefonoDespacho' => 'required|numeric|min:6',
                'correoDespacho' => 'required|email',
                'estado' => 'required|string',


            ];
            $validator = Validator::make($request->all(), $rules,$mensajes);
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
