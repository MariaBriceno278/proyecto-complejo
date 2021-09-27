@extends('layouts.layout')

@section('content')
    <center>
        <div class="main-content container-fluid">
            <section id="basic-horizontal-layouts">
                <div class="row match-height">
                    <div class="col-md-10 col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Nuevo Despacho</h4>


                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <form action="{{ route('despachos.store') }}" method="post"
                                        class="form form-horizontal">
                                        {{ csrf_field() }}
                                        <div class="form-body">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label>Número del Despacho</label>
                                                </div>
                                                <div class="col-md-8 form-group">

                                                    <input value="{{ old('numeroDespacho') }}" id="numeroDespacho"
                                                        class="form-control " name="numeroDespacho"
                                                        placeholder="Ingrese el número de despacho" type="int">

                                                    @if ($errors->has('numeroDespacho'))
                                                        <span
                                                            class="errormsg">{{ $errors->first('numeroDespacho') }}</span>
                                                    @endif
                                                </div>
                                                <div class="col-md-4">
                                                    <label>Nombre del Despacho</label>
                                                </div>
                                                <div class="col-md-8 form-group">
                                                    <input value="{{ old('nombreDespacho') }}" id="nombreDespacho"
                                                        class="form-control " name="nombreDespacho"
                                                        placeholder="Ingrese el nombre del despacho" type="text">

                                                    @if ($errors->has('nombreDespacho'))
                                                        <span
                                                            class="errormsg">{{ $errors->first('nombreDespacho') }}</span>
                                                    @endif
                                                </div>
                                                <div class="col-md-4">
                                                    <label>Número de Teléfono</label>
                                                </div>
                                                <div class="col-md-8 form-group">
                                                    <input value="{{ old('telefonoDespacho') }}" id="telefonoDespacho"
                                                        class="form-control " name="telefonoDespacho"
                                                        placeholder="Ingrese el número de teléfono" type="text">

                                                    @if ($errors->has('telefonoDespacho'))
                                                        <span
                                                            class="errormsg">{{ $errors->first('telefonoDespacho') }}</span>
                                                    @endif
                                                </div>
                                                <div class="col-md-4">
                                                    <label>Correo Electrónico</label>
                                                </div>
                                                <div class="col-md-8 form-group">
                                                    <input value="{{ old('correoDespacho') }}" id="correoDespacho"
                                                        class="form-control " name="correoDespacho"
                                                        placeholder="Ingrese el correo electrónico" type="text">

                                                    @if ($errors->has('correoDespacho'))
                                                        <span
                                                            class="errormsg">{{ $errors->first('correoDespacho') }}</span>
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
                                                        <span
                                                            class="errormsg">{{ $errors->first('estado') }}</span>
                                                    @endif
                                                </div>

                                                <div class="col-sm-12 d-flex justify-content-end">
                                                    <button type="submit" class="btn btn-primary me-1 mb-1">Guardar</button>
                                                    <a class="btn btn-light-secondary me-1 mb-1"
                                                        href="{{ route('despachos') }}">Volver</a>

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
