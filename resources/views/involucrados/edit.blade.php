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
                    <strong> Editar Involucrado </strong>
                </div>
                <div class="card-body">

                    <a class='btn btn-info float-right' href="{{ route('involucrados') }}">Volver</a>

                    <center>
                        <form action="{{ route('involucrados.update', [$involucrados->idInvolucrado]) }}" method="post">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nombreInvolucrado">Nombre del
                                    Involucrado<span class="required"></span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="nombreInvolucrado" class="form-control col-md-12 col-xs-12"
                                        name="nombreInvolucrado" placeholder="Ingrese el nombre del involucrado"
                                        required="required" type="text"
                                        value="{{ old('nombreInvolucrado', $involucrados->nombreInvolucrado) }}">

                                    @if ($errors->has('nombreInvolucrado'))
                                        <span class="errormsg">{{ $errors->first('nombreInvolucrado') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Correo
                                    Eletrónico</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="correoInvolucrado" class="form-control col-md-12 col-xs-12"
                                        name="correoInvolucrado" placeholder="Ingrese el correo del Involucrado"
                                        required="required" type="text"
                                        value="{{ old('correoInvolucrado', $involucrados->correoInvolucrado) }}">

                                    @if ($errors->has('correoInvolucrado'))
                                        <span class="errormsg">{{ $errors->first('correoInvolucrado') }}</span>
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
