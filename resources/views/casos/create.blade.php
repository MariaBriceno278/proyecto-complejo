@extends('layouts.layout')

@section('content')

    <div class="card">
        <div class="card-header">
            <strong> Nuevo Caso </strong>
        </div>
        <div class="card-body">

            <a class='btn btn-info float-right' href="{{ route('casos') }}">Volver</a></a>

            <center>
                <form action="{{ route('casos.store') }}" method="post">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nReferenciaCaso">
                            Número de Referencia<span class="required"></span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="nReferenciaCaso" class="form-control" name="nReferenciaCaso"
                                placeholder="Ingrese el número de referencia" required="required" type="text">

                            @if ($errors->has('nReferenciaCaso'))
                                <span class="errormsg">{{ $errors->first('nReferenciaCaso') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="fechaRegistro">
                            Fecha de Registro</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="fechaRegistro" class="form-control " name="fechaRegistro" required="required"
                                type="date">


                            @if ($errors->has('fechaRegistro'))
                                <span class="errormsg">{{ $errors->first('fechaRegistro') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="estadoCaso">Estado</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="estadoCaso" class="form-control " name="estadoCaso" placeholder="Ingrese el estado"
                                required="required" type="text">


                            @if ($errors->has('estadoCaso'))
                                <span class="errormsg">{{ $errors->first('estadoCaso') }}</span>
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