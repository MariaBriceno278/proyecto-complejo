@extends('layouts.layout')

@section('content')
    <center>
        <div class="main-content container-fluid">
            <section id="basic-horizontal-layouts">
                <div class="row match-height">
                    <div class="col-md-10 col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Nuevo Caso</h4>


                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <form action="{{ route('casos.store') }}" method="post" class="form form-horizontal">
                                        {{ csrf_field() }}
                                        <div class="form-body">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label>Número de Referencia</label>
                                                </div>
                                                <div class="col-md-8 form-group">

                                                    <input value="{{ old('nReferenciaCaso') }}" id="nReferenciaCaso"
                                                        class="form-control " name="nReferenciaCaso"
                                                        placeholder="Ingrese el número de referencia" type="text">

                                                    @if ($errors->has('nReferenciaCaso'))
                                                        <span
                                                            class="errormsg">{{ $errors->first('nReferenciaCaso') }}</span>
                                                    @endif
                                                </div>
                                                <div class="col-md-4">
                                                    <label>Fecha de Registro</label>
                                                </div>
                                                <div class="col-md-8 form-group">
                                                    <input value="{{ old('fechaRegistro') }}" id="fechaRegistro"
                                                        class="form-control " name="fechaRegistro" type="date">

                                                    @if ($errors->has('fechaRegistro'))
                                                        <span
                                                            class="errormsg">{{ $errors->first('fechaRegistro') }}</span>
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
                                                        href="{{ route('casos') }}">Volver</a>

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
