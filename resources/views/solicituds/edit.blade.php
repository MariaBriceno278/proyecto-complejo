@extends('layouts.layout')

@section('content')


    <div class="main-content container-fluid">
        <section id="multiple-column-form">
            <div class="row match-height">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">EDITAR SOLICITUD</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form action="{{ route('solicituds.update', [$solicituds->idSolicitud]) }}" method="post">
                                    {{ csrf_field() }}
                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="first-name-column">Fecha de la Solicitud</label>
                                                <input value="{{ old('fechaSolicitud', $solicituds->fechaSolicitud) }}"
                                                    id="fechaSolicitud" class="form-control " name="fechaSolicitud"
                                                    type="date">

                                                @if ($errors->has('fechaSolicitud'))
                                                    <span class="text-danger"
                                                        class="errormsg">{{ $errors->first('fechaSolicitud') }}</span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="last-name-column">Capacidad Requerida</label>
                                                <input
                                                    value="{{ old('capacidadRequerida', $solicituds->capacidadRequerida) }}"
                                                    id="capacidadRequerida" class="form-control " name="capacidadRequerida"
                                                    placeholder="Ingrese la capacidad requerida" type="text">

                                                @if ($errors->has('capacidadRequerida'))
                                                    <span class="text-danger"
                                                        class="errormsg">{{ $errors->first('capacidadRequerida') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="city-column">Notificación</label>
                                                <select class="form-select" id="basicSelect" name="notificacionEnviada"
                                                    value="{{ old('notificacionEnviada', $solicituds->notificacionEnviada) }}"
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
                                                <label for="company-column">Caso</label>
                                                <select disabled class="form-select" id="basicSelect" name="idCasoFK"
                                                    class="form-control">
                                                    <option value=""> -- Seleccione Caso --</option>
                                                    @foreach ($solicitud_caso as $s_c)
                                                        <option value="{{ $s_c->idCaso }}"
                                                            {{ old('idCasoFK') == 0 ? 'selected' : '' }}>
                                                            <strong>Número del Caso: </strong>
                                                            {{ $s_c->nReferenciaCaso }}
                                                        </option>
                                                    @endforeach
                                                </select>

                                                @if ($errors->has('idCasoFK'))
                                                    <span class="text-danger"
                                                        class="errormsg">{{ $errors->first('idCasoFK') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="email-id-column">Usuario</label>
                                                <select disabled class="form-select" id="basicSelect" name="idUsuarioFK"
                                                    class="form-control">
                                                    <option value=""> -- Seleccione Usuario --</option>
                                                    @foreach ($solicitud_usuario as $s_u)
                                                        <option value="{{ $s_u->idUsuario }} "
                                                            {{ old('idUsuarioFK') == 0 ? 'selected' : '' }}>
                                                            {{ $s_u->nombreUsuario }}

                                                        </option>
                                                    @endforeach
                                                </select>

                                                @if ($errors->has('idUsuarioFK'))
                                                    <span class="text-danger"
                                                        class="errormsg">{{ $errors->first('idUsuarioFK') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                            </div>

                            <div class="col-12 d-flex justify-content-end">
                                <a class="btn btn-light me-1 mb-1" href="{{ route('solicituds') }}">Volver</a>
                                <button type="submit" class="btn btn-primary me-1 mb-1">Guardar</button>
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
@endsection()
