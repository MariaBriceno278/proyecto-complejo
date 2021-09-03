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
                    <strong> Editar Asignación
                    </strong>
                </div>
                <div class="card-body">

                    <a class='btn btn-info float-right' href="{{ route('asignacions') }}">Volver</a></a>

                    <center>

                        <form action="{{ route('asignacions.update', [$asignacions->idAsignacion]) }}" method="post">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="fechaInicio">Fecha de Inicio</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="fechaInicio" class="form-control col-md-12 col-xs-12"
                                        name="fechaInicio" type="date"
                                        value="{{ old('fechaInicio', $asignacions->fechaInicio) }}">

                                    @if ($errors->has('fechaInicio'))
                                        <span class="errormsg">{{ $errors->first('fechaInicio') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="horaInicio">Hora de Inicio</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="horaInicio" class="form-control col-md-12 col-xs-12"
                                        name="horaInicio" type="time"
                                        value="{{ old('horaInicio', $asignacions->horaInicio) }}">

                                    @if ($errors->has('horaInicio'))
                                        <span class="errormsg">{{ $errors->first('horaInicio') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="fechaFin">Fecha de Fin</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="fechaFin" class="form-control col-md-12 col-xs-12"
                                        name="fechaFin" type="date"
                                        value="{{ old('fechaFin', $asignacions->fechaFin) }}">

                                    @if ($errors->has('fechaFin'))
                                        <span class="errormsg">{{ $errors->first('fechaFin') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="horaFin">Hora
                                    de Fin</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="horaFin" class="form-control col-md-12 col-xs-12" name="horaFin"
                                        type="time"
                                        value="{{ old('horaFin', $asignacions->horaFin) }}">

                                    @if ($errors->has('horaFin'))
                                        <span class="errormsg">{{ $errors->first('horaFin') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12"
                                    for="notificacionEnviada">Notificación</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="notificacionEnviada" class="form-control col-md-12 col-xs-12"
                                        name="notificacionEnviada" placeholder="Ingrese la notificación"
                                        type="text"
                                        value="{{ old('notificacionEnviada', $asignacions->notificacionEnviada) }}">

                                    @if ($errors->has('notificacionEnviada'))
                                        <span class="errormsg">{{ $errors->first('notificacionEnviada') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12"
                                    for="idSalaFK">Sala</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <select disabled name="idSalaFK" class="form-control" >
                                        @foreach($asignacion_sala as $a_s )
                                            <option value="{{ old('idSala',$a_s->idSala) }}">
                                               <strong>Numero Sala: </strong> {{ $a_s->numeroSala }}
                                               <strong>Piso Sala: </strong>{{ $a_s->pisoSala }}
                                               <strong>Bloque Sala: </strong>{{ $a_s->bloqueSala }}
                                            </option>
                                        @endforeach
                                    </select>

                                    @if ($errors->has('idSalaFK'))
                                    <strong class="alert-danger">{{ $errors->first('idSalaFK') }}</strong>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12"
                                    for="idSolicitudFK">Solicitud</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">

                                        <select disabled name="idSolicitudFK" class="form-control" >

                                            @foreach($asignacion_solicitud as $a_solicitud )
                                                <option value="{{ old('idSolicitud',$a_solicitud->idSolucitud) }}">
                                                   <strong>Fecha Solicitud: </strong> {{ $a_solicitud->fechaSolicitud }}

                                                </option>
                                            @endforeach
                                        </select>
                                    @if ($errors->has('idSolicitudFK'))
                                    <strong class="alert-danger">{{ $errors->first('idSolicitudFK') }}</strong>
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
