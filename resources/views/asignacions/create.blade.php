@extends('layouts.layout')

@section('content')

    <div class="card">
        <div class="card-header">
            <strong> Nueva Asignación </strong>
        </div>
        <div class="card-body">

            <a class='btn btn-info float-right' href="{{ route('asignacions') }}">Volver</a></a>

            <center>
                <form action="{{ route('asignacions.store') }}" method="post">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="fechaInicio">
                            Fecha de Inicio<span class="required"></span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="fechaInicio" class="form-control " name="fechaInicio"
                                type="date">

                            @if ($errors->has('fechaInicio'))
                                <strong class="alert-danger" >{{ $errors->first('fechaInicio') }}</strong>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="horaInicio">
                            Hora de Inicio<span class="required"></span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="horaInicio" class="form-control " name="horaInicio"
                                type="time">

                            @if ($errors->has('horaInicio'))
                                <strong class="alert-danger" >{{ $errors->first('horaInicio') }}</strong>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="fechaFin">
                            Fecha Fin<span class="required"></span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="fechaFin" class="form-control " name="fechaFin"
                                type="date">

                            @if ($errors->has('fechaFin'))
                                <strong class="alert-danger" >{{ $errors->first('fechaFin') }}</strong>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="horaFin">
                            Hora de Fin<span class="required"></span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="horaFin" class="form-control " name="horaFin"
                                type="time">

                            @if ($errors->has('horaFin'))
                            <strong class="alert-danger">{{ $errors->first('horaFin') }}</strong>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="notificacionEnviada">
                            Notificación</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="notificacionEnviada" class="form-control " name="notificacionEnviada"
                                placeholder="Ingrese la notificación" type="text">


                            @if ($errors->has('notificacionEnviada'))
                            <strong class="alert-danger">{{ $errors->first('notificacionEnviada') }}</strong>
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
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="idSalaFK">
                            Sala</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">


                                <select name="idSalaFK" class="form-control" >
                                    <option value=""> -- Seleccione Sala --</option>
                                    @foreach($asignacion_sala as $a_s )
                                        <option value="{{ $a_s->idSala }}">
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
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="idSolicitudFK">
                            Solicitud</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">

                                <select name="idSolicitudFK" class="form-control" >
                                    <option value=""> -- Seleccione Solicitud --</option>
                                    @foreach($asignacion_solicitud as $a_solicitud )
                                        <option value="{{ $a_solicitud->idSolicitud }}">
                                           <strong>Fecha Solicitud: </strong> {{ $a_solicitud->fechaSolicitud }}
                                           <strong>Capacidad Requerida: </strong>{{ $a_solicitud->capacidadRequeria }}
                                           <strong>Prioridad: </strong>{{ $a_solicitud->prioridadNormal }}
                                           <strong>Estado: </strong>{{ $a_solicitud->estado }}
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

                            <input type="submit" name="submit" class="boton_personalizado" value='Guardar'
                                class='btn btn-success'>

                        </div>
                    </div>

                </form>
        </div>
    </div>

    </center>
@endsection()
