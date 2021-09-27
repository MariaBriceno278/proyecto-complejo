@extends('layouts.layout')

@section('content')
    <center>
        <div class="main-content container-fluid">
            <section id="basic-horizontal-layouts">
                <div class="row match-height">
                    <div class="col-md-10 col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Nueva Asignación</h4>


                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <form action="{{ route('asignacions.store') }}" method="post"
                                        class="form form-horizontal">
                                        {{ csrf_field() }}
                                        <div class="form-body">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label>Fecha de Inicio</label>
                                                </div>
                                                <div class="col-md-8 form-group">
                                                    <input value="{{ old('fechaInicio') }}" id="fechaInicio"
                                                        class="form-control " name="fechaInicio"
                                                        placeholder="Ingrese la fecha de inicio" type="date">

                                                    @if ($errors->has('fechaInicio'))
                                                        <span
                                                            class="errormsg">{{ $errors->first('fechaInicio') }}</span>
                                                    @endif
                                                </div>
                                                <div class="col-md-4">
                                                    <label>Hora de Inicio</label>
                                                </div>
                                                <div class="col-md-8 form-group">
                                                    <input value="{{ old('horaInicio') }}" id="horaInicio"
                                                        class="form-control " name="horaInicio"
                                                        placeholder="Ingrese la hora de inicio" type="time">

                                                    @if ($errors->has('horaInicio'))
                                                        <span
                                                            class="errormsg">{{ $errors->first('horaInicio') }}</span>
                                                    @endif
                                                </div>
                                                <div class="col-md-4">
                                                    <label>Fecha de Fin</label>
                                                </div>
                                                <div class="col-md-8 form-group">
                                                    <input value="{{ old('fechaFin') }}" id="fechaFin"
                                                        class="form-control " name="fechaFin"
                                                        placeholder="Ingrese la fecha de inicio" type="date">

                                                    @if ($errors->has('fechaFin'))
                                                        <span
                                                            class="errormsg">{{ $errors->first('fechaFin') }}</span>
                                                    @endif
                                                </div>
                                                <div class="col-md-4">
                                                    <label>Hora de Fin</label>
                                                </div>
                                                <div class="col-md-8 form-group">
                                                    <input value="{{ old('horaFin') }}" id="horaFin"
                                                        class="form-control " name="horaFin"
                                                        placeholder="Ingrese la hora de fin" type="time">

                                                    @if ($errors->has('horaFin'))
                                                        <span
                                                            class="errormsg">{{ $errors->first('horaFin') }}</span>
                                                    @endif
                                                </div>
                                                <div class="col-md-4">
                                                    <label>Notificación</label>
                                                </div>
                                                <div class="col-md-8 form-group">
                                                    <select class="form-select" id="basicSelect"
                                                        name="notificacionEnviada" class="form-control">
                                                        <option value=""> -- Seleccione Notificación --</option>
                                                        <option value="">Enviada</option>
                                                        <option value="">No Enviada</option>
                                                    </select>

                                                    @if ($errors->has('notificacionEnviada'))
                                                        <span
                                                            class="errormsg">{{ $errors->first('notificacionEnviada') }}</span>
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
                                                    <label>Sala</label>
                                                </div>
                                                <div class="col-md-8 form-group">
                                                    <select class="form-select" id="basicSelect" name="idSalaFK"
                                                        class="form-control">
                                                        <option value=""> -- Seleccione Sala --</option>
                                                        @foreach ($asignacion_sala as $a_s)
                                                            <option value="{{ $a_s->idSala }}">
                                                                <strong>Número de la Sala: </strong>
                                                                {{ $a_s->numeroSala }}
                                                                <strong>Piso de la Sala: </strong>{{ $a_s->pisoSala }}
                                                                <strong>Bloque de la Sala:
                                                                </strong>{{ $a_s->bloqueSala }}
                                                            </option>
                                                        @endforeach
                                                    </select>

                                                    @if ($errors->has('idSalaFK'))
                                                        <span
                                                            class="errormsg">{{ $errors->first('idSalaFK') }}</span>
                                                    @endif
                                                </div>
                                                <div class="col-md-4">
                                                    <label>Solicitud</label>
                                                </div>
                                                <div class="col-md-8 form-group">
                                                    <select class="form-select" id="basicSelect" name="idSolicitudFK"
                                                        class="form-control">
                                                        <option value=""> -- Seleccione Solicitud --</option>
                                                        @foreach ($asignacion_solicitud as $a_solicitud)
                                                            <option value="{{ $a_solicitud->idSolicitud }}">
                                                                <strong>Fecha Solicitud: </strong>
                                                                {{ $a_solicitud->fechaSolicitud }}
                                                                <strong>Capacidad Requerida:
                                                                </strong>{{ $a_solicitud->capacidadRequeria }}
                                                                <strong>Prioridad:
                                                                </strong>{{ $a_solicitud->prioridadNormal }}
                                                                <strong>Estado: </strong>{{ $a_solicitud->estado }}
                                                            </option>
                                                        @endforeach
                                                    </select>

                                                    @if ($errors->has('idSolicitudFK'))
                                                        <span
                                                            class="errormsg">{{ $errors->first('idSolicitudFK') }}</span>
                                                    @endif
                                                </div>

                                                <div class="col-sm-12 d-flex justify-content-end">
                                                    <button type="submit" class="btn btn-primary me-1 mb-1">Guardar</button>
                                                    <a class="btn btn-light-secondary me-1 mb-1"
                                                        href="{{ route('asignacions') }}">Volver</a>

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
