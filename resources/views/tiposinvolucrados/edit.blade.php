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
                    <strong> Editar Tipo Involucrado </strong>
                </div>
                <div class="card-body">

                    <a class='btn btn-info float-right' href="{{ route('tiposinvolucrados') }}">Volver</a>

                    <center>

                        <form action="{{ route('tiposinvolucrados.update', [$tiposinvolucrados->idTipoInvolucrado]) }}"
                            method="post">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nombreTipoInvolucrado">Nombre
                                    del Tipo Involucrado<span class="required"></span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="nombreTipoInvolucrado" class="form-control col-md-12 col-xs-12"
                                        name="nombreTipoInvolucrado" placeholder="Ingrese el nombre del tipo involucrado"
                                        required="required" type="text"
                                        value="{{ old('nombreTipoInvolucrado', $tiposinvolucrados->nombreTipoInvolucrado) }}">

                                    @if ($errors->has('nombreTipoInvolucrado'))
                                        <span class="errormsg">{{ $errors->first('nombreTipoInvolucrado') }}</span>
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
