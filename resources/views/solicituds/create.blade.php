@extends('layouts.layout')

@section('content')

    <div class="card">
        <div class="card-header">
            <strong> Nueva Solicitud </strong>
        </div>
        <div class="card-body">

            <a class='btn btn-info float-right' href="{{ route('solicituds') }}">Volver</a>

            <center>
                <form action="{{ route('solicituds.store') }}" method="post">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="fechaSolicitud">Fecha de la
                            Solicitud<span class="required"></span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="fechaSolicitud" class="form-control" name="fechaSolicitud" required="required"
                                type="date">

                            @if ($errors->has('fechaSolicitud'))
                                <span class="errormsg">{{ $errors->first('fechaSolicitud') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="capacidadRequerida">Capacidad
                            Requerida</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="capacidadRequerida" class="form-control" name="capacidadRequerida"
                                placeholder="Ingrese la capacidad requerida" required="required" type="text">


                            @if ($errors->has('capacidadRequerida'))
                                <span class="errormsg">{{ $errors->first('capacidadRequerida') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="prioridadNormal">Prioridad</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="prioridadNormal" class="form-control" name="prioridadNormal"
                                placeholder="Ingrese la prioridad" required="required" type="text">


                            @if ($errors->has('prioridadNormal'))
                                <span class="errormsg">{{ $errors->first('prioridadNormal') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="idCasoFK">Caso</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="idCasoFK" class="form-control" name="idCasoFK" placeholder="Ingrese el caso"
                                required="required" type="text">


                            @if ($errors->has('idCasoFK'))
                                <span class="errormsg">{{ $errors->first('idCasoFK') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="idUsuarioFK">Usuario</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="idUsuarioFK" class="form-control" name="idUsuarioFK" placeholder="Ingrese el usuario"
                                required="required" type="text">


                            @if ($errors->has('idUsuarioFK'))
                                <span class="errormsg">{{ $errors->first('idUsuarioFK') }}</span>
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
