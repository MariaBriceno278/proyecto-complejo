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
                            <input id="tiempoAudiencia" class="form-control " name="tiempoAudiencia"
                                type="time">

                            @if ($errors->has('tiempoAudiencia'))
                            <strong class="alert-danger">{{ $errors->first('tiempoAudiencia') }}</strong>
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
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="idAsignacionFK">
                            Asignación Sala</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">


                                <select name="idAsignacionFK" class="form-control" >
                                    <option value=""> -- Seleccione Asignacion --</option>
                                    @foreach($audeincia_asignacion as $a_a )
                                        <option value="{{ $a_a->idAsignacion }}">

                                           <strong>Notificacion Eniviada: </strong> {{ $a_a->notificacionEnviada }}

                                        </option>
                                    @endforeach
                                </select>
                            @if ($errors->has('idAsignacionFK'))
                            <strong class="alert-danger">{{ $errors->first('idAsignacionFK') }}</strong>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="observacionesAudiencia">
                            Observación de la Audiencia</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <textarea id="observacionesAudiencia" class="form-control " name="observacionesAudiencia"
                                placeholder="Ingrese la observación de la audiencia" type="text"></textarea>


                            @if ($errors->has('observacionesAudiencia'))
                            <strong class="alert-danger">{{ $errors->first('observacionesAudiencia') }}</strong>
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
