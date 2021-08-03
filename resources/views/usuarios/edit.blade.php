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
                    <strong> Editar Usuario</strong>
                </div>
                <div class="card-body">

                    <a class='btn btn-info float-right' href="{{ route('usuarios') }}">Volver</a>


                    <center>

                        <form action="{{ route('usuarios.update', [$usuarios->idUsuario]) }}" method="post">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nombreUsuario">Nombre del
                                    Usuario<span class="required"></span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="nombreUsuario" class="form-control col-md-12 col-xs-12" name="nombreUsuario"
                                        placeholder="Ingrese el nombre del usuario" required="required" type="text"
                                        value="{{ old('nombreUsuario', $usuarios->nombreUsuario) }}">

                                    @if ($errors->has('nombreUsuario'))
                                        <span class="errormsg">{{ $errors->first('nombreUsuario') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="apellidoUsuario">Apellido del
                                    Usuario</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="apellidoUsuario" class="form-control col-md-12 col-xs-12"
                                        name="apellidoUsuario" placeholder="Ingrese el apellido del usuario"
                                        required="required" type="text"
                                        value="{{ old('apellidoUsuario', $usuarios->apellidoUsuario) }}">

                                    @if ($errors->has('apellidoUsuario'))
                                        <span class="errormsg">{{ $errors->first('apellidoUsuario') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="correoUsuario">Correo
                                    Electrónico</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="correoUsuario" class="form-control col-md-12 col-xs-12" name="correoUsuario"
                                        placeholder="Ingrese el correo electrónico" required="required" type="text"
                                        value="{{ old('correoUsuario', $usuarios->correoUsuario) }}">

                                    @if ($errors->has('correoUsuario'))
                                        <span class="errormsg">{{ $errors->first('correoUsuario') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="documentoUsuario">Documento
                                    del Usuario</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="documentoUsuario" class="form-control col-md-12 col-xs-12"
                                        name="documentoUsuario" placeholder="Ingrese el documento del usuario"
                                        required="required" type="int"
                                        value="{{ old('documentoUsuario', $usuarios->documentoUsuario) }}">

                                    @if ($errors->has('documentoUsuario'))
                                        <span class="errormsg">{{ $errors->first('documentoUsuario') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Teléfono de
                                    Usuario</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="telefonoUsuario" class="form-control col-md-12 col-xs-12"
                                        name="telefonoUsuario" placeholder="Ingrese el teléfono del usuario"
                                        required="required" type="text"
                                        value="{{ old('telefonoUsuario', $usuarios->telefonoUsuario) }}">

                                    @if ($errors->has('telefonoUsuario'))
                                        <span class="errormsg">{{ $errors->first('telefonoUsuario') }}</span>
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
