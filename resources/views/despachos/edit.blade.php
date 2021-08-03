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
                    <strong> Editar Despacho </strong>
                </div>
                <div class="card-body">

                    <a class='btn btn-info float-right' href="{{ route('despachos') }}">Volver</a>

                    <center>

                        <form action="{{ route('despachos.update', [$despachos->idDespacho]) }}" method="post">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="numeroDespacho">Número de
                                    Despacho<span class="required"></span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="numeroDespacho" class="form-control col-md-12 col-xs-12"
                                        name="numeroDespacho" placeholder="Ingrese el número de despacho"
                                        required="required" type="int"
                                        value="{{ old('numeroDespacho', $despachos->numeroDespacho) }}">

                                    @if ($errors->has('numeroDespacho'))
                                        <span class="errormsg">{{ $errors->first('numeroDespacho') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nombreDespacho">Nombre
                                    Despacho</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="nombreDespacho" class="form-control col-md-12 col-xs-12"
                                        name="nombreDespacho" placeholder="Ingrese el nombre del despacho"
                                        required="required" type="text"
                                        value="{{ old('nombreDespacho', $despachos->nombreDespacho) }}">

                                    @if ($errors->has('nombreDespacho'))
                                        <span class="errormsg">{{ $errors->first('nombreDespacho') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telefonoDespacho">Número de
                                    Teléfono</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="telefonoDespacho" class="form-control col-md-12 col-xs-12"
                                        name="telefonoDespacho" placeholder="Ingrese el número de teléfono"
                                        required="required" type="int"
                                        value="{{ old('telefonoDespacho', $despachos->telefonoDespacho) }}">

                                    @if ($errors->has('telefonoDespacho'))
                                        <span class="errormsg">{{ $errors->first('telefonoDespacho') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="correoDespacho">Correo
                                    Electrónico</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="correoDespacho" class="form-control col-md-12 col-xs-12"
                                        name="correoDespacho" placeholder="Ingrese el correo electrónico"
                                        required="required" type="text"
                                        value="{{ old('correoDespacho', $despachos->correoDespacho) }}">

                                    @if ($errors->has('correoDespacho'))
                                        <span class="errormsg">{{ $errors->first('correoDespacho') }}</span>
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
