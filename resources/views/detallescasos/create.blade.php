@extends('layouts.layout')

@section('content')

    <div class="card">
        <div class="card-header">
            <strong>Nuevo Detalle Caso</strong>
        </div>
        <div class="card-body">

            <a class='btn btn-info float-right' href="{{ route('detallescasos') }}">Volver</a></a>

            <center>
                <form action="{{ route('detallescasos.store') }}" method="post">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="idCasoFK">
                            Número de Referencia del Caso <span class="required"></span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <select name="idCasoFK" class="form-control">
                                <option value=""> -- Seleccione Caso --</option>
                                @foreach ($detallescasos_casos as $detallecaso_caso)
                                    <option value="{{ $detallecaso_caso->idCaso }}">
                                        {{ $detallecaso_caso->nReferenciaCaso }}

                                    </option>
                                @endforeach
                            </select>

                            @if ($errors->has('idCasoFK'))
                                <span class="errormsg">{{ $errors->first('idCasoFK') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="idTipoInvolucradoFK">
                            Tipo de Involucrado</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <select name="idTipoInvolucradoFK" class="form-control">
                                <option value=""> -- Seleccione Tipo Involucrado --</option>
                                @foreach ($detallescasos_tiposinvolucrados as $detallecaso_tipoinvolucrado)
                                    <option value="{{ $detallecaso_tipoinvolucrado->idTipoInvolucrado }}">
                                        {{ $detallecaso_tipoinvolucrado->nombreTipoInvolucrado }}
                                    </option>
                                @endforeach
                            </select>

                            @if ($errors->has('idTipoInvolucradoFK'))
                                <span class="errormsg">{{ $errors->first('idTipoInvolucradoFK') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="idInvolucradoFK">
                            Involucrado</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">

                            <select name="idInvolucradoFK" class="form-control">
                                <option value=""> -- Seleccione Involucrado --</option>
                                @foreach ($detallescasos_involucrados as $detallecaso_involucrado)
                                    <option value="{{ $detallecaso_involucrado->idInvolucrado }}">
                                        {{ $detallecaso_involucrado->nombreInvolucrado }}-{{ $detallecaso_involucrado->correoInvolucrado }}
                                    </option>
                                @endforeach
                            </select>
                            @if ($errors->has('idInvolucradoFK'))
                                <span class="errormsg">{{ $errors->first('idInvolucradoFK') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="estado">Estado
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <select name="estado" class="form-control">
                                <option value=""> -- Seleccione Estado --</option>
                                <option value="1">Activo</option>
                                <option value="0">Inactivo</option>
                            </select>

                            @if ($errors->has('estado'))
                                <span class="errormsg">{{ $errors->first('estado') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="observacionesDetalleCaso">
                            Obsevaciones<span class="required"></span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <textarea id="observacionesDetalleCaso" class="form-control " name="observacionesDetalleCaso"
                                required="required" type="text"></textarea>

                            @if ($errors->has('observacionesDetalleCaso'))
                                <span class="errormsg">{{ $errors->first('observacionesDetalleCaso') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6">

                            <input type="submit" name="submit" class="boton_personalizado" value='Guardar'
                                class='btn btn-success'>

                        </div>
                    </div>

                </form>
        </div>
    </div>

    </center>
@endsection()
