@extends('layouts.layout')

@section('content')

    <div class="card">
        <div class="card-header">
            <strong> Tipo Involucrado</strong>
        </div>
        <div class="card-body">

            <a class='btn btn-info float-right' href="{{ route('tiposinvolucrados') }}">Volver</a></a>

            <center>
                <form action="{{ route('tiposinvolucrados.store') }}" method="post">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nombreTipoInvolucrado">
                            Nombre Tipo de Involucrado<span class="required"></span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="nombreTipoInvolucrado" class="form-control" name="nombreTipoInvolucrado"
                                placeholder="Ingrese el nombre del tipo involucrado" required="required" type="text">

                            @if ($errors->has('nombreTipoInvolucrado'))
                                <span class="errormsg">{{ $errors->first('nombreTipoInvolucrado') }}</span>
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