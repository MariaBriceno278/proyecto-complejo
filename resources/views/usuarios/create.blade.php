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
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nombreUsuario">Nombre del Usuario<span
                                class="required"></span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="nombreUsuario" class="form-control " name="nombreUsuario"
                                placeholder="Ingrese el nombre del usuario" required="required" type="text">

                            @if ($errors->has('nombreUsuario'))
                                <span class="errormsg">{{ $errors->first('nombreUsuario') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="apellidoUsuario">Apellido del
                            Usuario<span class="required"></span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="apellidoUsuario" class="form-control " name="apellidoUsuario"
                                placeholder="Ingrese el apellido del usuario" required="required" type="text">

                            @if ($errors->has('apellidoUsuario'))
                                <span class="errormsg">{{ $errors->first('apellidoUsuario') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="correoUsuario">Correo
                            Electrónico</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="correoUsuario" class="form-control " name="correoUsuario"
                                placeholder="Ingrese el correo electrónico" required="required" type="text">


                            @if ($errors->has('correoUsuario'))
                                <span class="errormsg">{{ $errors->first('correoUsuario') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="documentoUsuario">Documento del
                            Usuario<span class="required"></span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="documentoUsuario" class="form-control " name="documentoUsuario"
                                placeholder="Ingrese el documento del usuario" required="required" type="text">

                            @if ($errors->has('documentoUsuario'))
                                <span class="errormsg">{{ $errors->first('documentoUsuario') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telefonoUsuario">Teléfono del
                            Usuario<span class="required"></span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="telefonoUsuario" class="form-control " name="telefonoUsuario"
                                placeholder="Ingrese el teléfono del usuario" required="required" type="int">

                            @if ($errors->has('telefonoUsuario'))
                                <span class="errormsg">{{ $errors->first('telefonoUsuario') }}</span>
                            @endif
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="idDespachoFK">Número del Despacho<span
                                class="required"></span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="idDespachoFK" class="form-control " name="idDespachoFK"
                                placeholder="Ingrese el número del despacho" required="required" type="int">

                            @if ($errors->has('idDespachoFK'))
                                <span class="errormsg">{{ $errors->first('idDespachoFK') }}</span>
                            @endif
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="idRolFK">Rol<span
                                class="required"></span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="idRolFK" class="form-control " name="idRolFK" placeholder="Ingrese el rol"
                                required="required" type="int">

                            @if ($errors->has('idRolFK'))
                                <span class="errormsg">{{ $errors->first('idRolFK') }}</span>
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
