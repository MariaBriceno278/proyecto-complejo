@extends('layouts.layout')

@section('content')
    <center>
        <div class="main-content container-fluid">
            <section id="basic-horizontal-layouts">
                <div class="row match-height">
                    <div class="col-md-10 col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Nueva Audiencia</h4>


                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <form action="{{ route('audiencias.store') }}" method="post"
                                        class="form form-horizontal">
                                        {{ csrf_field() }}
                                        <div class="form-body">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label>Tiempo de la Audiencia</label>
                                                </div>
                                                <div class="col-md-8 form-group">

                                                    <input value="{{ old('tiempoAudiencia') }}" id="tiempoAudiencia"
                                                        class="form-control " name="tiempoAudiencia"
                                                        placeholder="Ingrese la dirección de la sede" type="time">

                                                    @if ($errors->has('tiempoAudiencia'))
                                                        <span
                                                            class="errormsg">{{ $errors->first('tiempoAudiencia') }}</span>
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
                                                        <span class="errormsg">{{ $errors->first('estado') }}</span>
                                                    @endif
                                                </div>
                                                <div class="col-md-4">
                                                    <label>Sala</label>
                                                </div>
                                                <div class="col-md-8 form-group">
                                                    <select class="form-select" id="basicSelect" name="idAsignacionFK"
                                                        class="form-control">
                                                        <option value=""> -- Seleccione Asignación --</option>
                                                        @foreach ($audeincia_asignacion as $a_a)
                                                            <option value="{{ $a_a->idAsignacion }}">

                                                                <strong>Notificacion Eniviada: </strong>
                                                                {{ $a_a->notificacionEnviada }}

                                                            </option>
                                                        @endforeach
                                                    </select>

                                                    @if ($errors->has('idAsignacionFK'))
                                                        <span
                                                            class="errormsg">{{ $errors->first('idAsignacionFK') }}</span>
                                                    @endif
                                                </div>
                                                <div class="col-md-4">
                                                    <label>Observación de la Audiencia</label>
                                                </div>
                                                <div class="col-md-8 form-group">

                                                    <textarea id="observacionesAudiencia"
                                                        value="{{ old('observacionesAudiencia') }}" class="form-control "
                                                        name="observacionesAudiencia" placeholder="Ingrese la observación"
                                                        type="text"></textarea>

                                                    @if ($errors->has('observacionesAudiencia'))
                                                        <span
                                                            class="errormsg">{{ $errors->first('observacionesAudiencia') }}</span>
                                                    @endif
                                                </div>

                                                <div class="col-sm-12 d-flex justify-content-end">
                                                    <button type="submit" class="btn btn-primary me-1 mb-1">Guardar</button>
                                                    <a class="btn btn-light-secondary me-1 mb-1"
                                                        href="{{ route('audiencias') }}">Volver</a>

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
