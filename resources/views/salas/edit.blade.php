@extends('layouts.layout')

@section('content')


    <div class="main-content container-fluid">
        <section id="multiple-column-form">
            <div class="row match-height">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">EDITAR SALA</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form action="{{ route('salas.update', [$salas->idSala]) }}" method="post">
                                    {{ csrf_field() }}
                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="first-name-column">Número de la Sala</label>
                                                <input readonly value="{{ old('numeroSala', $salas->numeroSala) }}"
                                                    id="numeroSala" class="form-control " name="numeroSala"
                                                    placeholder="Ingrese el número de la sala">

                                                @if ($errors->has('numeroSala'))
                                                    <span class="text-danger"
                                                        class="errormsg">{{ $errors->first('numeroSala') }}</span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="last-name-column">Capacidad de la Sala</label>
                                                <input value="{{ old('capacidadSala', $salas->capacidadSala) }}"
                                                    id="capacidadSala" class="form-control " name="capacidadSala"
                                                    placeholder="Ingrese la capacidad de la sala">

                                                @if ($errors->has('capacidadSala'))
                                                    <span class="text-danger"
                                                        class="errormsg">{{ $errors->first('capacidadSala') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="city-column">Bloque de la Sala</label>
                                                <select class="form-select" id="basicSelect" name="bloqueSala"
                                                    class="form-control">
                                                    <option value=""> -- Seleccione Bloque --</option>
                                                    <option value="A" {{ old('bloqueSala') == 1 ? 'selected' : '' }}>
                                                        A</option>
                                                    <option value="B" {{ old('bloqueSala') == 2 ? 'selected' : '' }}>
                                                        B</option>
                                                    <option value="C" {{ old('bloqueSala') == 3 ? 'selected' : '' }}>
                                                        C</option>
                                                    <option value="D" {{ old('bloqueSala') == 4 ? 'selected' : '' }}>
                                                        D</option>
                                                </select>
                                                @if ($errors->has('bloqueSala'))
                                                    <span class="text-danger"
                                                        class="errormsg">{{ $errors->first('bloqueSala') }}</span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="last-name-column">Piso de la Sala</label>
                                                <input value="{{ old('pisoSala', $salas->pisoSala) }}" id="pisoSala"
                                                    class="form-control " name="pisoSala"
                                                    placeholder="Ingrese el piso de la sala">

                                                @if ($errors->has('pisoSala'))
                                                    <span class="text-danger"
                                                        class="errormsg">{{ $errors->first('pisoSala') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="company-column">Sede</label>
                                                <select disabled class="form-select" id="basicSelect" name="idSedeFK"
                                                    class="form-control">
                                                    <option value=""> -- Seleccione Sede --</option>
                                                    @foreach ($salas_sedes as $sala_sede)
                                                        <option value="{{ $sala_sede->idSede }}"
                                                            {{ old('idSedeFK') == 0 ? 'selected' : '' }}>
                                                            {{ $sala_sede->nombreSede }}-{{ $sala_sede->direccionSede }}
                                                        </option>
                                                    @endforeach
                                                </select>

                                                @if ($errors->has('idSedeFK'))
                                                    <span class="text-danger"
                                                        class="errormsg">{{ $errors->first('idSedeFK') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 d-flex justify-content-end">
                                        <a class="btn btn-light me-1 mb-1" href="{{ route('salas') }}">Volver</a>
                                        <button onclick="return confirm('Esta seguro de Modificar?')" type="submit" class="btn btn-primary me-1 mb-1">Guardar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection()
