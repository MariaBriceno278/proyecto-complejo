@extends('layouts.layout')

@section('content')

    <div class="card">
        <div class="card-header">
            <strong> Nuevo Involucrado </strong>
        </div>
        <div class="card-body">

            <a class='btn btn-info float-right' href="{{ route('involucrados') }}">Volver</a></a>

            <center>
                <form action="{{ route('involucrados.store') }}" method="post">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nombreInvolucrado">Nombre del
                            Involucrado<span class="required"></span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="nombreInvolucrado" class="form-control" name="nombreInvolucrado"
                                placeholder="Ingrese el nombre del involucrado" required="required" type="text">

                            @if ($errors->has('nombreInvolucrado'))
                                <span class="errormsg">{{ $errors->first('nombreInvolucrado') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="correoInvolucrado">Correo del
                            Involucrado</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="correoInvolucrado" class="form-control" name="correoInvolucrado"
                                placeholder="Ingrese el correo del involucrado" required="required" type="text">


                            @if ($errors->has('correoInvolucrado'))
                                <span class="errormsg">{{ $errors->first('correoInvolucrado') }}</span>
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
