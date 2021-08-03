@extends('layouts.layout')

@section('content')

    <div class="card">
        <div class="card-header">
            <strong> Nueva Audiencia </strong>
        </div>
        <div class="card-body">

            <a class='btn btn-info float-right' href="{{ route('audiencias') }}">Volver</a></a>

            <center>
                <form action="{{ route('audiencias.store') }}" method="post">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tiempoAudiencia">
                            Tiempo de la Audiencia<span class="required"></span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="tiempoAudiencia" class="form-control " name="tiempoAudiencia" required="required"
                                type="time">

                            @if ($errors->has('tiempoAudiencia'))
                                <span class="errormsg">{{ $errors->first('tiempoAudiencia') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="observacionesAudiencia">
                            Observación de la Audiencia</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="observacionesAudiencia" class="form-control " name="observacionesAudiencia"
                                placeholder="Ingrese la observación de la audiencia" type="text">


                            @if ($errors->has('observacionesAudiencia'))
                                <span class="errormsg">{{ $errors->first('observacionesAudiencia') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="idAsignacionFK">
                            Asignación Sala</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="idAsignacionFK" class="form-control " name="idAsignacionFK"
                                placeholder="Ingrese la asignación" type="text">


                            @if ($errors->has('idAsignacionFK'))
                                <span class="errormsg">{{ $errors->first('idAsignacionFK') }}</span>
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
