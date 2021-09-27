@extends('layouts.layout')

@section('content')
    <center>
        <div class="main-content container-fluid">
            <section id="basic-horizontal-layouts">
                <div class="row match-height">
                    <div class="col-md-10 col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Nuevo Usuario</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <form action="{{ route('usuarios.store') }}" method="post"
                                        class="form form-horizontal">
                                        {{ csrf_field() }}
                                        <div class="form-body">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label>Nombre del Usuario</label>
                                                </div>
                                                <div class="col-md-8 form-group">

                                                    <input value="{{ old('nombreUsuario') }}" id="nombreUsuario"
                                                        class="form-control " name="nombreUsuario"
                                                        placeholder="Ingrese el apellido del usuario" type="text">

                                                    @if ($errors->has('nombreUsuario'))
                                                        <span
                                                            class="errormsg">{{ $errors->first('nombreUsuario') }}</span>
                                                    @endif
                                                </div>
                                                <div class="col-md-4">
                                                    <label>Apellido del Usuario</label>
                                                </div>
                                                <div class="col-md-8 form-group">
                                                    <input value="{{ old('apellidoUsuario') }}" id="apellidoUsuario"
                                                        class="form-control " name="apellidoUsuario"
                                                        placeholder="Ingrese el apellido del usuario" type="text">

                                                    @if ($errors->has('apellidoUsuario'))
                                                        <span
                                                            class="errormsg">{{ $errors->first('apellidoUsuario') }}</span>
                                                    @endif
                                                </div>
                                                <div class="col-md-4">
                                                    <label>Correo Electrónico</label>
                                                </div>
                                                <div class="col-md-8 form-group">
                                                    <input value="{{ old('correoUsuario') }}" id="correoUsuario"
                                                        class="form-control " name="correoUsuario"
                                                        placeholder="Ingrese el correo electrónico" type="text">

                                                    @if ($errors->has('correoUsuario'))
                                                        <span
                                                            class="errormsg">{{ $errors->first('correoUsuario') }}</span>
                                                    @endif
                                                </div>
                                                <div class="col-md-4">
                                                    <label>Documento del Usuario</label>
                                                </div>
                                                <div class="col-md-8 form-group">
                                                    <input value="{{ old('documentoUsuario') }}" id="documentoUsuario"
                                                        class="form-control " name="documentoUsuario"
                                                        placeholder="Ingrese el documento del usuario" type="text">

                                                    @if ($errors->has('documentoUsuario'))
                                                        <span
                                                            class="errormsg">{{ $errors->first('documentoUsuario') }}</span>
                                                    @endif
                                                </div>
                                                <div class="col-md-4">
                                                    <label>Teléfono del Usuario</label>
                                                </div>
                                                <div class="col-md-8 form-group">
                                                    <input value="{{ old('telefonoUsuario') }}" id="telefonoUsuario"
                                                        class="form-control " name="telefonoUsuario"
                                                        placeholder="Ingrese el teléfono del usuario" type="int">

                                                    @if ($errors->has('telefonoUsuario'))
                                                        <span
                                                            class="errormsg">{{ $errors->first('telefonoUsuario') }}</span>
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
                                                    <label>Despacho</label>
                                                </div>
                                                <div class="col-md-8 form-group">
                                                    <select class="form-select" id="basicSelect" name="idDespachoFK"
                                                        class="form-control">
                                                        <option value=""> -- Seleccione Despacho --</option>
                                                        @foreach ($usuarios_despachos as $usuario_despacho)
                                                            <option value="{{ $usuario_despacho->idDespacho }}">
                                                                {{ $usuario_despacho->numeroDespacho }}-{{ $usuario_despacho->nombreDespacho }}
                                                            </option>
                                                        @endforeach
                                                    </select>

                                                    @if ($errors->has('idDespachoFK'))
                                                        <span
                                                            class="errormsg">{{ $errors->first('idDespachoFK') }}</span>
                                                    @endif
                                                </div>
                                                <div class="col-md-4">
                                                    <label>Rol</label>
                                                </div>
                                                <div class="col-md-8 form-group">
                                                    <select class="form-select" id="basicSelect" name="idRolFK"
                                                        class="form-control">
                                                        <option value=""> -- Seleccione Rol --</option>
                                                        @foreach ($usuarios_rols as $usuario_rol)
                                                            <option value="{{ $usuario_rol->idRol }}">
                                                                {{ $usuario_rol->nombreRol }}
                                                            </option>
                                                        @endforeach
                                                    </select>

                                                    @if ($errors->has('idRolFK'))
                                                        <span
                                                            class="errormsg">{{ $errors->first('idRolFK') }}</span>
                                                    @endif
                                                </div>

                                                <div class="col-sm-12 d-flex justify-content-end">
                                                    <button type="submit" class="btn btn-primary me-1 mb-1">Guardar</button>
                                                    <a class="btn btn-light-secondary me-1 mb-1"
                                                        href="{{ route('usuarios') }}">Volver</a>

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
