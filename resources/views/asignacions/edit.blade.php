@extends('layouts.layout')

@section('content')


    <div class="main-content container-fluid">
        <section id="multiple-column-form">
            <div class="row match-height">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">EDITAR ASIGNACIÓN DE SALA</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form action="{{ route('asignacions.update', [$asignacions->idAsignacion]) }}"
                                    method="post">
                                    {{ csrf_field() }}
                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="first-name-column">Fecha de Inicio</label>
                                                <input value="{{ old('fechaInicio', $asignacions->fechaInicio) }}"
                                                    id="fechaInicio" class="form-control " name="fechaInicio" type="date">

                                                @if ($errors->has('fechaInicio'))
                                                    <span class="text-danger"
                                                        class="errormsg">{{ $errors->first('fechaInicio') }}</span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="last-name-column">Hora de Inicio</label>
                                                <input value="{{ old('horaInicio', $asignacions->horaInicio) }}"
                                                    id="horaInicio" class="form-control " name="horaInicio" type="time">

                                                @if ($errors->has('horaInicio'))
                                                    <span class="text-danger"
                                                        class="errormsg">{{ $errors->first('horaInicio') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="first-name-column">Fecha de Fin</label>
                                                <input value="{{ old('fechaFin', $asignacions->fechaFin) }}" id="fechaFin"
                                                    class="form-control " name="fechaFin" type="date">

                                                @if ($errors->has('fechaFin'))
                                                    <span class="text-danger"
                                                        class="errormsg">{{ $errors->first('fechaFin') }}</span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="last-name-column">Hora de Fin</label>
                                                <input value="{{ old('horaFin', $asignacions->horaFin) }}" id="horaFin"
                                                    class="form-control " name="horaFin" type="time">

                                                @if ($errors->has('horaFin'))
                                                    <span class="text-danger"
                                                        class="errormsg">{{ $errors->first('horaFin') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="city-column">Notificación</label>
                                                <select class="form-select" id="basicSelect" name="notificacionEnviada"
                                                    value="{{ old('notificacionEnviada', $asignacions->notificacionEnviada) }}"
                                                    class="form-control">
                                                    <option value=""> -- Seleccione Notificación --</option>
                                                    <option value="0"
                                                        {{ old('notificacionEnviada') == 0 ? 'selected' : '' }}>
                                                        Enviada</option>
                                                    <option value="1"
                                                        {{ old('notificacionEnviada') == 1 ? 'selected' : '' }}>
                                                        No Enviada</option>
                                                </select>

                                                @if ($errors->has('notificacionEnviada'))
                                                    <span class="text-danger"
                                                        class="errormsg">{{ $errors->first('notificacionEnviada') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="company-column">Sala</label>
                                                <select disabled class="form-select" id="basicSelect" name="idSalaFK"
                                                    class="form-control">
                                                    <option value=""> -- Seleccione Sala --</option>
                                                    @foreach ($asignacion_sala as $a_s)
                                                        <option value="{{ old('idSala', $a_s->idSala) }}"
                                                            {{ old('idSalaFK') == 0 ? 'selected' : '' }}>
                                                            <strong>Número de la Sala: </strong>
                                                            {{ $a_s->numeroSala }}
                                                            {{ old('idSalaFK') == 1 ? 'selected' : '' }}-
                                                            <strong>Piso de la Sala: </strong>
                                                            {{ $a_s->pisoSala }}
                                                            {{ old('idSalaFK') == 2 ? 'selected' : '' }}-
                                                            <strong>Bloque de la Sala: </strong>
                                                            {{ $a_s->bloqueSala }}
                                                        </option>
                                                    @endforeach
                                                </select>

                                                @if ($errors->has('idSalaFK'))
                                                    <span class="text-danger"
                                                        class="errormsg">{{ $errors->first('idSalaFK') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="email-id-column">Solicitud</label>
                                                <select disabled class="form-select" id="basicSelect"
                                                    name="idSolicitudFK" class="form-control">
                                                    <option value=""> -- Seleccione Solicitud --</option>
                                                    @foreach ($asignacion_solicitud as $a_solicitud)
                                                        <option
                                                            value="{{ old('idSolicitud', $a_solicitud->idSolucitud) }}"
                                                            {{ old('idSolicitudFK') == 0 ? 'selected' : '' }}>
                                                            <strong>Fecha Solicitud: </strong>
                                                            {{ $a_solicitud->fechaSolicitud }}
                                                            {{ old('idSolicitudFK') == 1 ? 'selected' : '' }}-
                                                            <strong>Capacidad Requerida: </strong>
                                                            {{ $a_solicitud->capacidadRequerida }}
                                                            {{ old('idSolicitudFK') == 2 ? 'selected' : '' }}-
                                                            <strong>Prioridad: </strong>
                                                            {{ $a_solicitud->prioridadNormal }}-
                                                            {{ old('idSolicitudFK') == 3 ? 'selected' : '' }}
                                                        </option>
                                                    @endforeach
                                                </select>

                                                @if ($errors->has('idSolicitudFK'))
                                                    <span class="text-danger"
                                                        class="errormsg">{{ $errors->first('idSolicitudFK') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                            <div class="col-12 d-flex justify-content-end">
                                <a class="btn btn-light me-1 mb-1" href="{{ route('asignacions') }}">Volver</a>
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
