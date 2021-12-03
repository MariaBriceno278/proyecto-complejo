@extends('layouts.layout')

@section('content')


    <div class="main-content container-fluid">
        <section id="multiple-column-form">
            <div class="row match-height">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">NUEVA SEDE</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form action="{{ route('sedes.store') }}" method="post">
                                    {{ csrf_field() }}
                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="first-name-column">Dirección de la Sede</label>
                                                <input value="{{ old('direccionSede') }}" id="direccionSede"
                                                    class="form-control " name="direccionSede"
                                                    placeholder="Ingrese la dirección de la sede">

                                                @if ($errors->has('direccionSede'))
                                                    <span class="text-danger"
                                                        class="errormsg">{{ $errors->first('direccionSede') }}</span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="last-name-column">Nombre de la Sede</label>
                                                <input value="{{ old('nombreSede') }}" id="nombreSede"
                                                    class="form-control " name="nombreSede"
                                                    placeholder="Ingrese el nombre de la sede">

                                                @if ($errors->has('nombreSede'))
                                                    <span class="text-danger"
                                                        class="errormsg">{{ $errors->first('nombreSede') }}</span>
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
                                        <a  class="btn btn-light me-1 mb-1" href="{{ route('sedes') }}">Volver</a>
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
