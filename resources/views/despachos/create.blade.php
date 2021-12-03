@extends('layouts.layout')

@section('content')


    <div class="main-content container-fluid">
        <section id="multiple-column-form">
            <div class="row match-height">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">NUEVO DESPACHO</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form action="{{ route('despachos.store') }}" method="post">
                                    {{ csrf_field() }}
                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="first-name-column">Número del Despacho</label>
                                                <input value="{{ old('numeroDespacho') }}" id="numeroDespacho"
                                                    class="form-control " name="numeroDespacho"
                                                    placeholder="Ingrese el número del despacho">

                                                @if ($errors->has('numeroDespacho'))
                                                    <span class="text-danger"
                                                        class="errormsg">{{ $errors->first('numeroDespacho') }}</span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="last-name-column">Nombre del Despacho</label>
                                                <input value="{{ old('nombreDespacho') }}" id="nombreDespacho"
                                                    class="form-control " name="nombreDespacho"
                                                    placeholder="Ingrese el nombre del despacho">

                                                @if ($errors->has('nombreDespacho'))
                                                    <span class="text-danger"
                                                        class="errormsg">{{ $errors->first('nombreDespacho') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="first-name-column">Número de Teléfono</label>
                                                <input value="{{ old('telefonoDespacho') }}" id="telefonoDespacho"
                                                    class="form-control " name="telefonoDespacho"
                                                    placeholder="Ingrese el número de teléfono">

                                                @if ($errors->has('telefonoDespacho'))
                                                    <span class="text-danger"
                                                        class="errormsg">{{ $errors->first('telefonoDespacho') }}</span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="last-name-column">Correo Electrónico</label>
                                                <input value="{{ old('correoDespacho') }}" id="correoDespacho"
                                                    class="form-control " name="correoDespacho"
                                                    placeholder="Ingrese el correo electrónico">

                                                @if ($errors->has('correoDespacho'))
                                                    <span class="text-danger"
                                                        class="errormsg">{{ $errors->first('correoDespacho') }}</span>
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

                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="company-column">Especialidad</label>
                                                <select class="form-select" id="basicSelect" name="idEspecialidadFK"
                                                    class="form-control">
                                                    <option value=""> -- Seleccione Especialidad --</option>
                                                    @foreach ($despachos_especialidads as $despacho_especialidad)
                                                        <option value="{{ $despacho_especialidad->idEspecialidad }}"
                                                            {{ old('idEspecialidadFK') == 0 ? 'selected' : '' }}>
                                                            <strong>Nombre Especialidad: </strong>
                                                            {{ $despacho_especialidad->denominacionEspecialidad }}
                                                        </option>
                                                    @endforeach
                                                </select>

                                                @if ($errors->has('idEspecialidadFK'))
                                                    <span class="text-danger"
                                                        class="errormsg">{{ $errors->first('idEspecialidadFK') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 d-flex justify-content-end">
                                        <a  class="btn btn-light me-1 mb-1" href="{{ route('despachos') }}">Volver</a>
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
