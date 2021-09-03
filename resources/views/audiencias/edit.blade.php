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
                    <strong> Editar Audiencia</strong>
                </div>
                <div class="card-body">

                    <a class='btn btn-info float-right' href="{{ route('audiencias') }}">Volver</a>

                    <center>

                        <form action="{{ route('audiencias.update', [$audiencias->idAudiencia]) }}" method="post">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tiempoAudiencia">Tiempo de la
                                    Audiencia</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="tiempoAudiencia" class="form-control col-md-12 col-xs-12"
                                        name="tiempoAudiencia" type="time"
                                        value="{{ old('tiempoAudiencia', $audiencias->tiempoAudiencia) }}">

                                    @if ($errors->has('tiempoAudiencia'))
                                        <span class="errormsg">{{ $errors->first('tiempoAudiencia') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12"
                                    for="observacionesAudiencia">Observación de la Audiencia</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="observacionesAudiencia" class="form-control col-md-12 col-xs-12"
                                        name="observacionesAudiencia" placeholder="Ingrese la observación de la audiencia"
                                        type="text"
                                        value="{{ old('observacionesAudiencia', $audiencias->observacionesAudiencia) }}">

                                    @if ($errors->has('observacionesAudiencia'))
                                        <span class="errormsg">{{ $errors->first('observacionesAudiencia') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12"
                                    for="idAsignacionFK">Asignacion</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <select disabled name="idAsignacionFK" class="form-control" >
                                        @foreach($audiencia_asignacion as $a_a )
                                            <option value="{{ old('idAsignacion',$a_a->idAsignacion) }}">
                                               <strong>Notificacion: </strong> {{ $a_a->notificacionEnviada }}

                                            </option>
                                        @endforeach
                                    </select>

                                    @if ($errors->has('idAsignacionFK'))
                                    <strong class="alert-danger">{{ $errors->first('idAsignacionFK') }}</strong>
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
