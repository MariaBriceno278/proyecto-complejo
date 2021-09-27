@extends('layouts.layout')

@section('content')
    <center>
        <div class="main-content container-fluid">
            <section id="basic-horizontal-layouts">
                <div class="row match-height">
                    <div class="col-md-10 col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Nueva Sala</h4>


                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <form action="{{ route('salas.store') }}" method="post" class="form form-horizontal">
                                        {{ csrf_field() }}
                                        <div class="form-body">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label>Número de la Sala</label>
                                                </div>
                                                <div class="col-md-8 form-group">

                                                    <input value="{{ old('numeroSala') }}" id="numeroSala"
                                                        class="form-control " name="direccionSede"
                                                        placeholder="Ingrese el número de la sala" type="text">

                                                    @if ($errors->has('numeroSala'))
                                                        <span
                                                            class="errormsg">{{ $errors->first('numeroSala') }}</span>
                                                    @endif
                                                </div>
                                                <div class="col-md-4">
                                                    <label>Capacidad de la Sala</label>
                                                </div>
                                                <div class="col-md-8 form-group">
                                                    <input value="{{ old('capacidadSala') }}" id="capacidadSala"
                                                        class="form-control " name="capacidadSala"
                                                        placeholder="Ingrese la capacidad de la sala" type="text">

                                                    @if ($errors->has('capacidadSala'))
                                                        <span
                                                            class="errormsg">{{ $errors->first('capacidadSala') }}</span>
                                                    @endif
                                                </div>
                                                <div class="col-md-4">
                                                    <label>Bloque de la Sala</label>
                                                </div>
                                                <div class="col-md-8 form-group">
                                                    <select class="form-select" id="basicSelect" name="bloqueSala"
                                                        class="form-control">
                                                        <option value=""> -- Seleccione Bloque --</option>
                                                        <option value="A">A</option>
                                                        <option value="B">B</option>
                                                        <option value="C">C</option>
                                                        <option value="D">D</option>
                                                    </select>

                                                    @if ($errors->has('bloqueSala'))
                                                        <span
                                                            class="errormsg">{{ $errors->first('bloqueSala') }}</span>
                                                    @endif
                                                </div>
                                                <div class="col-md-4">
                                                    <label>Estado</label>
                                                </div>
                                                <div class="col-md-8 form-group">
                                                    <select class="form-select" id="basicSelect" name="estado"
                                                        class="form-control">
                                                        <option value=""> -- Seleccione Estado --</option>
                                                        <option value="1">Activo</option>
                                                        <option value="0">Inactivo</option>
                                                    </select>

                                                    @if ($errors->has('estado'))
                                                        <span class="errormsg">{{ $errors->first('estado') }}</span>
                                                    @endif
                                                </div>

                                                <div class="col-sm-12 d-flex justify-content-end">
                                                    <button type="submit" class="btn btn-primary me-1 mb-1">Guardar</button>
                                                    <a class="btn btn-light-secondary me-1 mb-1"
                                                        href="{{ route('salas') }}">Volver</a>

                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
        </div>
    </center>

@endsection()
