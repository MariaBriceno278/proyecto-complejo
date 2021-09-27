@extends('layouts.layout')

@section('content')
    <center>
        <div class="main-content container-fluid">
            <section id="basic-horizontal-layouts">
                <div class="row match-height">
                    <div class="col-md-10 col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Nuevo Detalle Caso</h4>


                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <form action="{{ route('detallescasos.store') }}" method="post"
                                        class="form form-horizontal">
                                        {{ csrf_field() }}
                                        <div class="form-body">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label>Número de Referencia del Caso</label>
                                                </div>
                                                <div class="col-md-8 form-group">
                                                    <select class="form-select" id="basicSelect" name="idCasoFK"
                                                        class="form-control">
                                                        <option value=""> -- Seleccione Caso --</option>
                                                        @foreach ($detallescasos_casos as $detallecaso_caso)
                                                            <option value="{{ $detallecaso_caso->idCaso }}">
                                                                {{ $detallecaso_caso->nReferenciaCaso }}

                                                            </option>
                                                        @endforeach
                                                    </select>

                                                    @if ($errors->has('idCasoFK'))
                                                        <span
                                                            class="errormsg">{{ $errors->first('idCasoFK') }}</span>
                                                    @endif
                                                </div>
                                                <div class="col-md-4">
                                                    <label>Tipo de Involucrado</label>
                                                </div>
                                                <div class="col-md-8 form-group">
                                                    <select class="form-select" id="basicSelect"
                                                        name="idTipoInvolucradoFK" class="form-control">
                                                        <option value=""> -- Seleccione Tipo Involucrado --</option>
                                                        @foreach ($detallescasos_tiposinvolucrados as $detallecaso_tipoinvolucrado)
                                                            <option
                                                                value="{{ $detallecaso_tipoinvolucrado->idTipoInvolucrado }}">
                                                                {{ $detallecaso_tipoinvolucrado->nombreTipoInvolucrado }}
                                                            </option>
                                                        @endforeach
                                                    </select>

                                                    @if ($errors->has('idTipoInvolucradoFK'))
                                                        <span
                                                            class="errormsg">{{ $errors->first('idTipoInvolucradoFK') }}</span>
                                                    @endif
                                                </div>
                                                <div class="col-md-4">
                                                    <label>Involucrado</label>
                                                </div>
                                                <div class="col-md-8 form-group">
                                                    <select class="form-select" id="basicSelect"
                                                        name="idTipoInvolucradoFK" class="form-control">
                                                        <option value=""> -- Seleccione Involucrado --</option>
                                                        @foreach ($detallescasos_involucrados as $detallecaso_involucrado)
                                                            <option value="{{ $detallecaso_involucrado->idInvolucrado }}">
                                                                {{ $detallecaso_involucrado->nombreInvolucrado }}-{{ $detallecaso_involucrado->correoInvolucrado }}
                                                            </option>
                                                        @endforeach
                                                    </select>

                                                    @if ($errors->has('idInvolucradoFK'))
                                                        <span
                                                            class="errormsg">{{ $errors->first('idInvolucradoFK') }}</span>
                                                    @endif
                                                </div>
                                                <div class="col-md-4">
                                                    <label>Estado</label>
                                                </div>
                                                <div class="col-md-8 form-group">
                                                    <select class="form-select" id="basicSelect" name="estado"
                                                        class="form-control">
                                                        <option value=""> -- Seleccione Estado --</option>
                                                        <option value="1">Activo</option>
                                                        <option value="0">Inactivo</option>
                                                    </select>

                                                    @if ($errors->has('estado'))
                                                        <span
                                                            class="errormsg">{{ $errors->first('estado') }}</span>
                                                    @endif
                                                </div>
                                                <div class="col-md-4">
                                                    <label>Observaciones</label>
                                                </div>
                                                <div class="col-md-8 form-group">

                                                    <textarea id="observacionesDetalleCaso"
                                                        value="{{ old('observacionesDetalleCaso') }}"
                                                        class="form-control " name="observacionesDetalleCaso"
                                                        placeholder="Ingrese las observaciones" type="text"></textarea>

                                                    @if ($errors->has('observacionesDetalleCaso'))
                                                        <span
                                                            class="errormsg">{{ $errors->first('observacionesDetalleCaso') }}</span>
                                                    @endif
                                                </div>

                                                <div class="col-sm-12 d-flex justify-content-end">
                                                    <button type="submit" class="btn btn-primary me-1 mb-1">Guardar</button>
                                                    <a class="btn btn-light-secondary me-1 mb-1"
                                                        href="{{ route('detallescasos') }}">Volver</a>

                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
        </div>
    </center>

@endsection()
