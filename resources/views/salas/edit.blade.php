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
                    <strong> Editar Sala </strong>
                    <a class='btn btn-info float-right' href="{{ route('salas') }}">Volver</a></a>
                </div>
                <div class="card-body">



                    <center>

                        <form action="{{ route('salas.update', [$salas->idSala]) }}" method="post">
                            {{ csrf_field() }}

                            <div class="form-row">
                                <div class="form-group col-md-4">
                                <label  for="numeroSala">Número de la
                                    Sala<span class="required"></span></label>

                                    <input readonly id="numeroSala" class="form-control col-md-12 col-xs-12" name="numeroSala"
                                        placeholder="Ingrese el número de la sala" required="required" type="text"
                                        value="{{ old('numeroSala', $salas->numeroSala) }}">

                                    @if ($errors->has('numeroSala'))
                                        <span class="errormsg">{{ $errors->first('numeroSala') }}</span>
                                    @endif
                                </div>


                                <div class="form-group col-md-4">
                                <label for="capacidadSala">Capacidad de la
                                    Sala<span class="required"></span></label>

                                    <input id="capacidadSala" class="form-control col-md-12 col-xs-12" name="capacidadSala"
                                        placeholder="Ingrese la capacidad de la sala" required="required" type="text"
                                        value="{{ old('capacidadSala', $salas->capacidadSala) }}">

                                    @if ($errors->has('capacidadSala'))
                                        <span class="errormsg">{{ $errors->first('capacidadSala') }}</span>
                                    @endif
                                </div>

                                <div class="form-group col-md-4">
                                <label  for="bloqueSala">Bloque de la
                                    Sala</label>

                                    <input id="bloqueSala" class="form-control col-md-12 col-xs-12" name="bloqueSala"
                                        placeholder="Ingrese el bloque de la sala" required="required" type="text"
                                        value="{{ old('bloqueSala', $salas->bloqueSala) }}">

                                    @if ($errors->has('bloqueSala'))
                                        <span class="errormsg">{{ $errors->first('bloqueSala') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-5">
                                <label  for="pisoSala">Piso de la
                                    Sala</label>

                                    <input id="pisoSala" class="form-control col-md-12 col-xs-12" name="pisoSala"
                                        placeholder="Ingrese el piso de la sala" required="required" type="text"
                                        value="{{ old('pisoSala', $salas->pisoSala) }}">

                                    @if ($errors->has('pisoSala'))
                                        <span class="errormsg">{{ $errors->first('pisoSala') }}</span>
                                    @endif
                                </div>

                                <div class="form-group col-md-6">
                                <label  for="idSede">
                                    Sede</label>

                                     <select disabled name="idSedeFK" class="form-control" >

                                        @foreach($salas_sedes as $sala_sede )
                                            <option value="{{ $sala_sede->idSede }}"  {{ old('idSedeFK')==1 ? 'select' : '' }}>
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
