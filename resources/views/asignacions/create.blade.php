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
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="fechaHoraInicio">
                            Fecha y Hora de Inicio<span class="required"></span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="fechaHoraInicio" class="form-control " name="fechaHoraInicio" required="required"
                                type="datetime-local">

                            @if ($errors->has('fechaHoraInicio'))
                                <span class="errormsg">{{ $errors->first('fechaHoraInicio') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="fechaHoraFin">
                            Fecha y Hora de Fin<span class="required"></span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="fechaHoraFin" class="form-control " name="fechaHoraFin" required="required"
                                type="datetime-local">

                            @if ($errors->has('fechaHoraFin'))
                                <span class="errormsg">{{ $errors->first('fechaHoraFin') }}</span>
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
                                <span class="errormsg">{{ $errors->first('notificacionEnviada') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="idSalaFK">
                            Sala</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="idSalaFK" class="form-control " name="idSalaFK" placeholder="Ingrese la sala"
                                type="text">


                            @if ($errors->has('idSalaFK'))
                                <span class="errormsg">{{ $errors->first('idSalaFK') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="idSolicitudFK">
                            Solicitud</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="idSolicitudFK" class="form-control " name="idSolicitudFK"
                                placeholder="Ingrese la solicitud" type="text">


                            @if ($errors->has('idSolicitudFK'))
                                <span class="errormsg">{{ $errors->first('idSolicitudFK') }}</span>
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
