@extends('layouts.layout')

@section('content')

    <div class="card">
        <div class="card-header">
            <strong> Nueva Sede </strong>
        </div>
        <div class="card-body">

            <a class='btn btn-info float-right' href="{{ route('sedes') }}">Volver</a></a>

            <center>
                <form action="{{ route('sedes.store') }}" method="post">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="direccionSede">Dirección de la Sede
                            </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="direccionSede" class="form-control " name="direccionSede"
                                placeholder="Ingrese la dirección de la sede" type="text">

                            @if ($errors->has('direccionSede'))
                                <span class="errormsg">{{ $errors->first('direccionSede') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nombreSede">Nombre de la Sede</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="nombreSede" class="form-control " name="nombreSede"
                                placeholder="Ingrese el nombre de la sede" type="text">


                            @if ($errors->has('nombreSede'))
                                <span class="errormsg">{{ $errors->first('nombreSede') }}</span>
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
