@extends('layouts.layout')

@section('content')


    <div class="main-content container-fluid">
        <section id="multiple-column-form">
            <div class="row match-height">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">NUEVO INVOLUCRADO</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form action="{{ route('involucrados.store') }}" method="post">
                                    {{ csrf_field() }}
                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="first-name-column">Nombre del Involucrado</label>
                                                <input value="{{ old('nombreInvolucrado') }}" id="nombreInvolucrado"
                                                    class="form-control " name="nombreInvolucrado"
                                                    placeholder="Ingrese el nombre del involucrado">

                                                @if ($errors->has('nombreInvolucrado'))
                                                    <span class="text-danger"
                                                        class="errormsg">{{ $errors->first('nombreInvolucrado') }}</span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="last-name-column">Correo del Involucrado</label>
                                                <input value="{{ old('correoInvolucrado') }}" id="correoInvolucrado"
                                                    class="form-control " name="correoInvolucrado"
                                                    placeholder="Ingrese el correo del involucrado">

                                                @if ($errors->has('correoInvolucrado'))
                                                    <span class="text-danger"
                                                        class="errormsg">{{ $errors->first('correoInvolucrado') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="country-floating">Estado</label>
                                                <select class="form-select" id="basicSelect" name="estado"
                                                    class="form-control">
                                                    <option value=""> -- Seleccione Estado --</option>
                                                    <option value="1" {{ old('estado') == 1 ? 'selected' : '' }}>Activo
                                                    </option>
                                                    <option value="0" {{ old('estado') == 0 ? 'selected' : '' }}>Inactivo
                                                    </option>
                                                </select>

                                                @if ($errors->has('estado'))
                                                    <span class="text-danger"
                                                        class="errormsg">{{ $errors->first('estado') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 d-flex justify-content-end">
                                        <a  class="btn btn-light me-1 mb-1" href="{{ route('involucrados') }}">Volver</a>
                                        <button onclick="return confirm('Esta seguro de registrar?') ,myFunction()" type="submit" class="btn btn-primary me-1 mb-1">Guardar</button>
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
