<?php

namespace App\Http\Controllers;

use App\DetalleCaso;
use App\Caso;
use App\Involucrado;
use App\TipoInvolucrado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator as FacadesValidator;

class DetalleCasoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detallescasos = DetalleCaso::select('detallecaso.idDetalleCaso', 'detallecaso.observacionesDetalleCaso', 'detallecaso.estado', 'caso.idCaso', 'caso.nReferenciaCaso', 'tipoinvolucrado.idTipoInvolucrado', 'tipoinvolucrado.nombreTipoInvolucrado', 'involucrado.idInvolucrado', 'involucrado.nombreInvolucrado', 'involucrado.correoInvolucrado')
            ->join('involucrado', 'detallecaso.idInvolucradoFK', '=', 'involucrado.idInvolucrado')
            ->join('tipoinvolucrado', 'detallecaso.idTipoInvolucradoFK', '=', 'tipoinvolucrado.idTipoInvolucrado')
            ->join('caso', 'detallecaso.idCasoFK', '=', 'caso.idCaso')
            ->get();
        return view('detallescasos.index')->with('detallescasos', $detallescasos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $detallescasos_casos = Caso::select(['nReferenciaCaso', 'idCaso'])->get();
        $detallescasos_tiposinvolucrados = TipoInvolucrado::select(['nombreTipoInvolucrado', 'idTipoInvolucrado'])->get();
        $detallescasos_involucrados = Involucrado::select(['nombreInvolucrado', 'correoInvolucrado', 'idInvolucrado'])->get();

        return view('detallescasos.create')->with('detallescasos_casos', $detallescasos_casos)->with('detallescasos_tiposinvolucrados', $detallescasos_tiposinvolucrados)->with('detallescasos_involucrados', $detallescasos_involucrados);
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
            'observacionesDetalleCaso' => 'required|string',
            'estado' => 'required|string',
            'idCasoFK' => 'string',
            'idTipoInvolucradoFK' => 'string',
            'idInvolucradoFK' => 'string'
        ]);

        if ($validator->fails()) {
            return redirect()->Back()->withInput()->withErrors($validator);
        }

        if ($record = DetalleCaso::firstOrCreate($data)) {
            Session::flash('message', 'Creado con exito!');
            Session::flash('alert-class', 'alert-success');
            return redirect()->route('detallescasos');
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
    public function edit($idDetalleCaso)
    {
        $detallescasos = DetalleCaso::find($idDetalleCaso);

        $detallescasos_casos = Caso::select(['nReferenciaCaso', 'idCaso'])->get();

        $detallescasos_tiposinvolucrados = TipoInvolucrado::select(['nombreTipoInvolucrado', 'idTipoInvolucrado'])->get();

        $detallescasos_involucrados = Involucrado::select(['nombreInvolucrado', 'correoInvolucrado', 'idInvolucrado'])->get();

        return view('detallescasos.edit')->with('detallescasos_casos', $detallescasos_casos)->with('detallescasos_tiposinvolucrados', $detallescasos_tiposinvolucrados)->with('detallescasos_involucrados', $detallescasos_involucrados)->with('detallescasos', $detallescasos);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idDetalleCaso)
    {
        $data = $request->except('_method', '_token', 'submit');

        $validator = FacadesValidator::make($request->all(), [
            'observacionesDetalleCaso' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect()->Back()->withInput()->withErrors($validator);
        }
        $detallescasos = DetalleCaso::find($idDetalleCaso);

        if ($detallescasos->update($data)) {

            Session::flash('message', 'Modificado con exito!');
            Session::flash('alert-class', 'alert-success');
            return redirect()->route('detallescasos');
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
    public function change_status($idDetalleCaso)
    {
        $detallecaso = DetalleCaso::find($idDetalleCaso);
        if ($detallecaso->estado == 1) {
            $detallecaso->update(['estado' => 0]);
            return redirect()->back();
        } else {
            $detallecaso->update(['estado' => 1]);
            return redirect()->back();
        }
    }
}
