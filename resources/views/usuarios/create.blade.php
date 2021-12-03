@extends('layouts.layout')

@section('content')


    <div class="main-content container-fluid">
        <section id="multiple-column-form">
            <div class="row match-height">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">NUEVO USUARIO</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form action="{{ route('usuarios.store') }}" method="post">
                                    {{ csrf_field() }}
                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="first-name-column">Nombre del Usuario</label>
                                                <input value="{{ old('nombreUsuario') }}" id="nombreUsuario"
                                                    class="form-control " name="nombreUsuario"
                                                    placeholder="Ingrese el nombre del usuario">

                                                @if ($errors->has('nombreUsuario'))
                                                    <span class="text-danger"
                                                        class="errormsg">{{ $errors->first('nombreUsuario') }}</span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="last-name-column">Apellido del Usuario</label>
                                                <input value="{{ old('apellidoUsuario') }}" id="apellidoUsuario"
                                                    class="form-control " name="apellidoUsuario"
                                                    placeholder="Ingrese el apellido del usuario">

                                                @if ($errors->has('apellidoUsuario'))
                                                    <span class="text-danger"
                                                        class="errormsg">{{ $errors->first('apellidoUsuario') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="last-name-column">Correo Electrónico</label>
                                                <input value="{{ old('correoUsuario') }}" id="correoUsuario"
                                                    class="form-control " name="correoUsuario"
                                                    placeholder="Ingrese el correo electrónico">

                                                @if ($errors->has('correoUsuario'))
                                                    <span class="text-danger"
                                                        class="errormsg">{{ $errors->first('correoUsuario') }}</span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="last-name-column">Documento del Usuario</label>
                                                <input value="{{ old('documentoUsuario') }}" id="documentoUsuario"
                                                    class="form-control " name="documentoUsuario"
                                                    placeholder="Ingrese el documento del usuario">

                                                @if ($errors->has('documentoUsuario'))
                                                    <span class="text-danger"
                                                        class="errormsg">{{ $errors->first('documentoUsuario') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="last-name-column">Teléfono del Usuario</label>
                                                <input value="{{ old('telefonoUsuario') }}" id="telefonoUsuario"
                                                    class="form-control " name="telefonoUsuario"
                                                    placeholder="Ingrese el teléfono del usuario">

                                                @if ($errors->has('telefonoUsuario'))
                                                    <span class="text-danger"
                                                        class="errormsg">{{ $errors->first('telefonoUsuario') }}</span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="last-name-column">Fecha Registro</label>
                                                <input value="{{ old('fechaRegistro') }}" id="fechaRegistro"
                                                    class="form-control " name="fechaRegistro" type="date">

                                                @if ($errors->has('fechaRegistro'))
                                                    <span class="text-danger"
                                                        class="errormsg">{{ $errors->first('fechaRegistro') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="country-floating">Estado</label>
                                                <select class="form-select" id="basicSelect" name="estado"
                                                    class="form-control">
                                                    <option value=""> -- Seleccione Estado --</option>
                                                    <option value="1" {{ old('estado') == 1 ? 'selected' : '' }}>Activo
                                                    </option>
                                                    <option value="0" {{ old('estado') == 0 ? 'selected' : '' }}>Inactivo
                                                    </option>
                                                </select>

                                                @if ($errors->has('estado'))
                                                    <span class="text-danger"
                                                        class="errormsg">{{ $errors->first('estado') }}</span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="company-column">Despacho</label>
                                                <select class="form-select" id="basicSelect" name="idDespachoFK"
                                                    class="form-control">
                                                    <option value=""> -- Seleccione Despacho --</option>
                                                    @foreach ($usuarios_despachos as $usuario_despacho)
                                                        <option value="{{ $usuario_despacho->idDespacho }}"
                                                            {{ old('idDespachoFK') == 0 ? 'selected' : '' }}>
                                                            {{ $usuario_despacho->numeroDespacho }}-{{ $usuario_despacho->nombreDespacho }}
                                                        </option>
                                                    @endforeach
                                                </select>

                                                @if ($errors->has('idDespachoFK'))
                                                    <span class="text-danger"
                                                        class="errormsg">{{ $errors->first('idDespachoFK') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="email-id-column">Rol</label>
                                                <select class="form-select" id="basicSelect" name="idRolFK"
                                                    class="form-control">
                                                    <option value=""> -- Seleccione Rol --</option>
                                                    @foreach ($usuarios_rols as $usuario_rol)
                                                        <option value="{{ $usuario_rol->idRol }} "
                                                            {{ old('idRolFK') == 0 ? 'selected' : '' }}>
                                                            {{ $usuario_rol->nombreRol }}
                                                        </option>
                                                    @endforeach
                                                </select>

                                                @if ($errors->has('idRolFK'))
                                                    <span class="text-danger"
                                                        class="errormsg">{{ $errors->first('idRolFK') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 d-flex justify-content-end">
                                        <a class="btn btn-light me-1 mb-1" href="{{ route('usuarios') }}">Volver</a>
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
