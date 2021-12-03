<?php

namespace App\Http\Controllers;

use App\Sala;
use App\Sede;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;


class SalaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $salas = Sala::select('sala.idSala', 'sala.numeroSala', 'sala.capacidadSala', 'sala.bloqueSala', 'sala.pisoSala', 'sala.estado', 'sede.nombreSede', 'sede.direccionSede')
            ->join('sede', 'sala.idSedeFK', '=', 'sede.idSede')
            ->get();
        return view('salas.index')->with('salas', $salas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $salas_sedes = Sede::select(['nombreSede', 'direccionSede', 'idSede'])->get();
        //$salas_sedes = Sede::pluck['nombreSede','direccionSede','idSede'];

        return view('salas.create')->with('salas_sedes', $salas_sedes);
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
            "unique" => "El número sala ya ha sido tomado",
            "digits_between" => "El campo debe tener entre :min y :max dígitos",
        ];

        $rules = [
            'numeroSala' => 'required|digits_between: 1 , 3|unique:sala,numeroSala',
            'capacidadSala' => 'required|digits_between: 1 , 3',
            'bloqueSala' => 'required',
            'pisoSala' => 'required|digits_between: 1 , 2',
            'estado' => 'required',
            'idSedeFK' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules, $mensajes);

        if ($validator->fails()) {
            return redirect()->Back()->withInput()->withErrors($validator);
        }
        $s = new Sala();
        $s->numeroSala = $request->input("numeroSala");
        $s->capacidadSala = $request->input("capacidadSala");
        $s->bloqueSala = $request->input("bloqueSala");
        $s->pisoSala = $request->input("pisoSala");
        $s->idSedeFK = $request->input("idSedeFK");
        $s->estado = $request->input("estado");
        $s->reserva = "0";

        $s->save();

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

        $salas_sedes = Sede::select(['nombreSede', 'direccionSede', 'idSede'])

            ->get();

        return view('salas.edit', compact('salas_sedes', $salas_sedes))->with('salas', $salas);
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

        $mensajes = [
            "required" => "El campo es obligatorio",
            "unique" => "El número sala ya ha sido tomado",
            "digits_between" => "El campo debe tener entre :min y :max dígitos",
        ];

        $rules = [

            'capacidadSala' => 'required|digits_between: 1 , 3',
            'bloqueSala' => 'required',
            'pisoSala' => 'required|digits_between: 1 , 2',

        ];

        $validator = Validator::make($request->all(), $rules, $mensajes);

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
    public function change_status($idSala)
    {
        $sala = Sala::find($idSala);
        if ($sala->estado == 1) {
            $sala->update(['estado' => 0]);
            return redirect()->back();
        } else {
            $sala->update(['estado' => 1]);
            return redirect()->back();
        }
    }

    public function vistasala()
    {



        $sedepaloquemao = Sala::select('numeroSala', 'pisoSala', 'bloqueSala', 'reserva')->orderby('bloqueSala', 'asc')->get();
        $sedeconvida = Sala::where('idSedeFK', '=', '2');
        return view('salas.sala')->with('sedepaloquemao', $sedepaloquemao)->with('sedeconvida', $sedeconvida);
    }
}
