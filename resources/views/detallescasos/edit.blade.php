@extends('layouts.layout')

@section('content')


    <div class="row">

        <div class="col-md-12 col-sm-12 col-xs-12">

            <!-- Alert message (start) -->
            @if (Session::has('message'))
                <div class="alert {{ Session::get('alert-class') }}">
                    {{ Session::get('message') }}
                </div>
            @endif
            <!-- Alert message (end) -->

            <div class="card">
                <div class="card-header">
                    <strong> Editar Detalle Caso </strong>
                </div>
                <div class="card-body">

                    <a class='btn btn-info float-right' href="{{ route('detallescasos') }}">Volver</a>

                    <center>

                        <form action="{{ route('detallescasos.update', [$detallescasos->idDetalleCaso]) }}" method="post">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="idCaso">
                                    Caso</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <select name="idCasoFK" class="form-control">

                                        @foreach ($detallescasos_casos as $detallecaso_caso)
                                            <option value="{{ $detallecaso_caso->idCaso }}"
                                                {{ old('idCasoFK') == 1 ? 'select' : '' }}>
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
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="idTipoInvolucrado">
                                    Tipo Involucrado</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <select name="idTipoInvolucradoFK" class="form-control">

                                        @foreach ($detallescasos_tiposinvolucrados as $detallecaso_tipoinvolucrado)
                                            <option value="{{ $detallecaso_tipoinvolucrado->idTipoInvolucrado }}"
                                                {{ old('idTipoInvolucradoFK') == 1 ? 'select' : '' }}>
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
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="idInvolucrado">
                                    Involucrado</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <select name="idInvolucradoFK" class="form-control">

                                        @foreach ($detallescasos_involucrados as $detallecaso_involucrado)
                                            <option value="{{ $detallecaso_involucrado->idInvolucrado }}"
                                                {{ old('idInvolucradoFK') == 1 ? 'select' : '' }}>
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
                                <label class="control-label col-md-3 col-sm-3 col-xs-12"
                                    for="observacionesDetalleCaso">Observaciones<span class="required"></span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="observacionesDetalleCaso" class="form-control col-md-12 col-xs-12"
                                        name="observacionesDetalleCaso" placeholder="Ingrese la observación del caso"
                                        required="required" type="text"
                                        value="{{ old('observacionesDetalleCaso', $detallescasos->observacionesDetalleCaso) }}">

                                    @if ($errors->has('observacionesDetalleCaso'))
                                        <span
                                            class="errormsg">{{ $errors->first('observacionesDetalleCaso') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6">
                                    <input type="submit" name="submit" value='Guardar' class="boton_personalizado">
                                </div>
                            </div>

                        </form>
                </div>
            </div>

            </center>

        </div>
    </div>
@endsection()
