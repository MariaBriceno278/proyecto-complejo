@extends('layouts.layout')

@section('content')

    <div class="card">
        <div class="card-header">
            <strong>Nuevo Usuario </strong>
        </div>
        <div class="card-body">

            <a class='btn btn-info float-right' href="{{ route('usuarios') }}">Volver</a>

            <center>

                <form action="{{ route('usuarios.store') }}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nombreUsuario">Nombre del
                            Usuario</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="nombreUsuario" class="form-control " name="nombreUsuario"
                                placeholder="Ingrese el apellido del usuario" type="text">

                            @if ($errors->has('nombreUsuario'))
                                <span class="alert-danger">{{ $errors->first('nombreUsuario') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="apellidoUsuario">Apellido del
                            Usuario</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="apellidoUsuario" class="form-control " name="apellidoUsuario"
                                placeholder="Ingrese el apellido del usuario" type="text">

                            @if ($errors->has('apellidoUsuario'))
                                <span class="alert-danger">{{ $errors->first('apellidoUsuario') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="correoUsuario">Correo
                            Electrónico</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="correoUsuario" class="form-control " name="correoUsuario"
                                placeholder="Ingrese el correo electrónico" type="text">


                            @if ($errors->has('correoUsuario'))
                                <span class="alert-danger">{{ $errors->first('correoUsuario') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="documentoUsuario">Documento del
                            Usuario</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="documentoUsuario" class="form-control " name="documentoUsuario"
                                placeholder="Ingrese el documento del usuario" type="text">

                            @if ($errors->has('documentoUsuario'))
                                <span class="alert-danger">{{ $errors->first('documentoUsuario') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telefonoUsuario">Teléfono del
                            Usuario</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="telefonoUsuario" class="form-control " name="telefonoUsuario"
                                placeholder="Ingrese el teléfono del usuario" type="int">

                            @if ($errors->has('telefonoUsuario'))
                                <span class="alert-danger">{{ $errors->first('telefonoUsuario') }}</span>
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
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="idDespacho">
                            Despacho</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <select name="idDespachoFK" class="form-control">
                                <option value=""> -- Seleccione Despacho --</option>
                                @foreach ($usuarios_despachos as $usuario_despacho)
                                    <option value="{{ $usuario_despacho->idDespacho }}">
                                        {{ $usuario_despacho->numeroDespacho }}-{{ $usuario_despacho->nombreDespacho }}
                                    </option>
                                @endforeach
                            </select>

                            @if ($errors->has('idDespachoFK'))
                                <span class="alert-danger">{{ $errors->first('idDespachoFK') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="idRol">
                            Rol</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <select name="idRolFK" class="form-control">
                                <option value=""> -- Seleccione Rol --</option>
                                @foreach ($usuarios_rols as $usuario_rol)
                                    <option value="{{ $usuario_rol->idRol }}">
                                        {{ $usuario_rol->nombreRol }}
                                    </option>
                                @endforeach
                            </select>

                            @if ($errors->has('idRolFK'))
                                <span class="alert-danger">{{ $errors->first('idRolFK') }}</span>
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
