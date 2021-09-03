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
                    <strong> Editar Solicitud </strong>
                </div>
                <div class="card-body">

                    <a class='btn btn-info float-right' href="{{ route('solicituds') }}">Volver</a></a>

                    <center>

                        <form action="{{ route('solicituds.update', [$solicituds->idSolicitud]) }}" method="post">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="fechaSolicitud">Fecha de la
                                    Solicitud</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="fechaSolicitud" class="form-control col-md-12 col-xs-12"
                                        name="fechaSolicitud" type="date" readonly
                                        value="{{ old('fechaSolicitud', $solicituds->fechaSolicitud) }}">

                                    @if ($errors->has('fechaSolicitud'))
                                        <span class="errormsg">{{ $errors->first('fechaSolicitud') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="capacidadRequerida">Capacidad
                                    Requerida</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="capacidadRequerida" class="form-control col-md-12 col-xs-12"
                                        name="capacidadRequerida" placeholder="Ingrese la capacidad requerida"
                                        type="text"
                                        value="{{ old('capacidadRequerida', $solicituds->capacidadRequerida) }}">

                                    @if ($errors->has('capacidadRequerida'))
                                        <span class="errormsg">{{ $errors->first('capacidadRequerida') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12"
                                    for="prioridadNormal">Notificación</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="prioridadNormal" class="form-control col-md-12 col-xs-12"
                                        name="prioridadNormal" placeholder="Ingrese la prioridad"
                                        type="text" value="{{ old('prioridadNormal', $solicituds->prioridadNormal) }}">

                                    @if ($errors->has('prioridadNormal'))
                                        <span class="errormsg">{{ $errors->first('prioridadNormal') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12"  for="idCaso">
                                    Caso </label><div class="col-md-6 col-sm-6 col-xs-12">
                                    <select  disabled name="idCasoFK" class="form-control" >

                                        @foreach ($solicitud_caso as $solicitud_caso)
                                            <option value="{{ $solicitud_caso->idCaso }}"
                                                {{ old('idCasoFK') == 1 ? 'select' : '' }}>
                                                {{ $solicitud_caso->nReferenciaCaso }}
                                            </option>
                                        @endforeach
                                    </select>

                                    @if ($errors->has('idCasoFK'))
                                        <span class="errormsg">{{ $errors->first('idCasoFK') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12"  for="idUsuario">
                                    Usuario </label><div class="col-md-6 col-sm-6 col-xs-12">
                                    <select disabled name="idUsuarioFK" class="form-control">

                                        @foreach ($solicitud_usuario as $solicitud_usuario)
                                            <option  value="{{ $solicitud_usuario->idUsuario }}"
                                                {{ old('idUsuarioFK') == 1 ? 'select' : '' }}>
                                                {{ $solicitud_usuario->nombreUsuario }}
                                            </option>
                                        @endforeach
                                    </select>

                                    @if ($errors->has('idUsuarioFK'))
                                        <span class="errormsg">{{ $errors->first('idUsuarioFK') }}</span>
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
