@extends('layouts.layout')

@section('content')


    <div class="main-content container-fluid">
        <section id="multiple-column-form">
            <div class="row match-height">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">EDITAR USUARIO</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form action="{{ route('usuarios.update', [$usuarios->idUsuario]) }}" method="post">
                                    {{ csrf_field() }}
                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="first-name-column">Nombre del Usuario</label>
                                                <input disabled
                                                    value="{{ old('nombreUsuario', $usuarios->nombreUsuario) }}"
                                                    id="nombreUsuario" class="form-control " name="nombreUsuario"
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
                                                <input disabled
                                                    value="{{ old('apellidoUsuario', $usuarios->apellidoUsuario) }}"
                                                    id="apellidoUsuario" class="form-control " name="apellidoUsuario"
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
                                                <input disabled
                                                    value="{{ old('correoUsuario', $usuarios->correoUsuario) }}"
                                                    id="correoUsuario" class="form-control " name="correoUsuario"
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
                                                <input disabled
                                                    value="{{ old('documentoUsuario', $usuarios->documentoUsuario) }}"
                                                    id="documentoUsuario" class="form-control " name="documentoUsuario"
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
                                                <input value="{{ old('telefonoUsuario', $usuarios->telefonoUsuario) }}"
                                                    id="telefonoUsuario" class="form-control " name="telefonoUsuario"
                                                    placeholder="Ingrese el teléfono del usuario">

                                                @if ($errors->has('telefonoUsuario'))
                                                    <span class="text-danger"
                                                        class="errormsg">{{ $errors->first('telefonoUsuario') }}</span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="company-column">Despacho</label>
                                                <select disabled class="form-select" id="basicSelect" name="idDespachoFK"
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
                                                <select disabled class="form-select" id="basicSelect" name="idRolFK"
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
