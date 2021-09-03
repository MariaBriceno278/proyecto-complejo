@extends('layouts.layout')

@section('content')

    <div class="card">
        <div class="card-header">
            <strong> Nueva Sala </strong>
        </div>
        <div class="card-body">

            <a class='btn btn-info float-right' href="{{ route('salas') }}">Volver</a></a>

            <center>
                <form action="{{ route('salas.store') }}" method="post">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="numeroSala">
                            Número de la Sala<span class="required"></span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="numeroSala" class="form-control " name="numeroSala"
                                placeholder="Ingrese el número de la sala"  type="text">

                            @if ($errors->has('numeroSala'))
                                <span class="errormsg">{{ $errors->first('numeroSala') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="capacidadSala">
                            Capacidad de la Sala<span class="required"></span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="capacidadSala" class="form-control " name="capacidadSala"
                                placeholder="Ingrese la capacidad de la sala"  type="text">

                            @if ($errors->has('capacidadSala'))
                                <span class="errormsg">{{ $errors->first('capacidadSala') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="bloqueSala">
                            Bloque de la Sala</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="bloqueSala" class="form-control " name="bloqueSala"
                                placeholder="Ingrese el bloque de la sala" type="text">


                            @if ($errors->has('bloqueSala'))
                                <span class="errormsg">{{ $errors->first('bloqueSala') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="pisoSala">
                            Piso de la Sala</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="pisoSala" class="form-control " name="pisoSala"
                                placeholder="Ingrese el piso de la sala" type="text">


                            @if ($errors->has('pisoSala'))
                                <span class="errormsg">{{ $errors->first('pisoSala') }}</span>
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
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="idSede">
                            Sede</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <select name="idSedeFK" class="form-control" >
                                <option value=""> -- Seleccione Sede --</option>
                                @foreach($salas_sedes as $sala_sede )
                                    <option value="{{ $sala_sede->idSede }}">
                                        {{ $sala_sede->nombreSede }}-{{ $sala_sede->direccionSede }}
                                    </option>
                                @endforeach
                            </select>



                            @if ($errors->has('idSedeFK'))
                                <span class="errormsg">{{ $errors->first('idSedeFK') }}</span>
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
