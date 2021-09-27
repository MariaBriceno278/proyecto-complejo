@extends('layouts.layout')

@section('content')
    <center>
        <div class="main-content container-fluid">
            <section id="basic-horizontal-layouts">
                <div class="row match-height">
                    <div class="col-md-10 col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Nuevo Involucrado</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <form action="{{ route('involucrados.store') }}" method="post"
                                        class="form form-horizontal">
                                        {{ csrf_field() }}
                                        <div class="form-body">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label>Nombre del Involucrado</label>
                                                </div>
                                                <div class="col-md-8 form-group">

                                                    <input value="{{ old('nombreInvolucrado') }}" id="nombreInvolucrado"
                                                        class="form-control " name="nombreInvolucrado"
                                                        placeholder="Ingrese el nombre del involucrado" type="text">

                                                    @if ($errors->has('nombreInvolucrado'))
                                                        <span
                                                            class="errormsg">{{ $errors->first('nombreInvolucrado') }}</span>
                                                    @endif
                                                </div>
                                                <div class="col-md-4">
                                                    <label>Correo del Involucrado</label>
                                                </div>
                                                <div class="col-md-8 form-group">
                                                    <input value="{{ old('correoInvolucrado') }}" id="correoInvolucrado"
                                                        class="form-control " name="correoInvolucrado"
                                                        placeholder="Ingrese el correo del involucrado" type="text">

                                                    @if ($errors->has('correoInvolucrado'))
                                                        <span
                                                            class="errormsg">{{ $errors->first('correoInvolucrado') }}</span>
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
                                                        href="{{ route('involucrados') }}">Volver</a>

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
