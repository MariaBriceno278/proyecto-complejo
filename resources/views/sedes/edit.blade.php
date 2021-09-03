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
                    <strong> Editar Sede</strong>
                </div>
                <div class="card-body">

                    <a class='btn btn-info float-right' href="{{ route('sedes') }}">Volver</a>

                    <center>

                        <form action="{{ route('sedes.update', [$sedes->idSede]) }}" method="post">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="direccionSede">Dirección de la
                                    Sede</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="direccionSede" class="form-control col-md-12 col-xs-12" name="direccionSede"
                                        placeholder="Ingrese la dirreción de la sede" type="text"
                                        value="{{ old('direccionSede', $sedes->direccionSede) }}">

                                    @if ($errors->has('direccionSede'))
                                        <span class="errormsg">{{ $errors->first('direccionSede') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nombreSede">Nombre de la
                                    Sede</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="nombreSede" class="form-control col-md-12 col-xs-12" name="nombreSede"
                                        placeholder="Ingrese el nombre de la sede" type="text"
                                        value="{{ old('nombreSede', $sedes->nombreSede) }}">

                                    @if ($errors->has('nombreSede'))
                                        <span class="errormsg">{{ $errors->first('nombreSede') }}</span>
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
