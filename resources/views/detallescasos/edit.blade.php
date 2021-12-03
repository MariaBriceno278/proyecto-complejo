@extends('layouts.layout')

@section('content')


    <div class="main-content container-fluid">
        <section id="multiple-column-form">
            <div class="row match-height">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">EDITAR DETALLE CASO</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form action="{{ route('detallescasos.update', [$detallescasos->idDetalleCaso]) }}"
                                    method="post">
                                    {{ csrf_field() }}
                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="company-column">Número de Referencia del Caso</label>
                                                <select disabled class="form-select" id="basicSelect" name="idCasoFK"
                                                    class="form-control">
                                                    <option value=""> -- Seleccione Caso --</option>
                                                    @foreach ($detallescasos_casos as $detallecaso_caso)
                                                        <option value="{{ $detallecaso_caso->idCaso }}"
                                                            {{ old('idCasoFK') == 0 ? 'selected' : '' }}>
                                                            {{ $detallecaso_caso->nReferenciaCaso }}
                                                        </option>
                                                    @endforeach
                                                </select>

                                                @if ($errors->has('idCasoFK'))
                                                    <span class="text-danger"
                                                        class="errormsg">{{ $errors->first('idCasoFK') }}</span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="company-column">Tipo de Involucrado</label>
                                                <select disabled class="form-select" id="basicSelect"
                                                    name="idTipoInvolucradoFK" class="form-control">
                                                    <option value=""> -- Seleccione Tipo Involucrado --</option>
                                                    @foreach ($detallescasos_tiposinvolucrados as $detallecaso_tipoinvolucrado)
                                                        <option
                                                            value="{{ $detallecaso_tipoinvolucrado->idTipoInvolucrado }}"
                                                            {{ old('idTipoInvolucradoFK') == 0 ? 'selected' : '' }}>
                                                            {{ $detallecaso_tipoinvolucrado->nombreTipoInvolucrado }}
                                                        </option>
                                                    @endforeach
                                                </select>

                                                @if ($errors->has('idTipoInvolucradoFK'))
                                                    <span class="text-danger"
                                                        class="errormsg">{{ $errors->first('idTipoInvolucradoFK') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="company-column">Involucrado</label>
                                                <select disabled class="form-select" id="basicSelect"
                                                    name="idInvolucradoFK" class="form-control">
                                                    <option value=""> -- Seleccione Tipo Involucrado --</option>
                                                    @foreach ($detallescasos_involucrados as $detallecaso_involucrado)
                                                        <option value="{{ $detallecaso_involucrado->idInvolucrado }}"
                                                            {{ old('idInvolucradoFK') == 0 ? 'selected' : '' }}>
                                                            {{ $detallecaso_involucrado->nombreInvolucrado }}-{{ $detallecaso_involucrado->correoInvolucrado }}
                                                        </option>
                                                    @endforeach
                                                </select>

                                                @if ($errors->has('idInvolucradoFK'))
                                                    <span class="text-danger"
                                                        class="errormsg">{{ $errors->first('idInvolucradoFK') }}</span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="first-name-column">Observaciones</label>
                                                <textarea
                                                    value="{{ old('observacionesDetalleCaso', $detallescasos->observacionesDetalleCaso) }}"
                                                    id="observacionesDetalleCaso" class="form-control "
                                                    name="observacionesDetalleCaso" placeholder="Ingrese las observaciones"
                                                    type="text"></textarea>

                                                @if ($errors->has('observacionesDetalleCaso'))
                                                    <span class="text-danger"
                                                        class="errormsg">{{ $errors->first('observacionesDetalleCaso') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 d-flex justify-content-end">
                                        <a class="btn btn-light me-1 mb-1" href="{{ route('detallescasos') }}">Volver</a>
                                        <button onclick="return confirm('Esta seguro de Modificar?')" type="submit" class="btn btn-primary me-1 mb-1">Guardar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection()
