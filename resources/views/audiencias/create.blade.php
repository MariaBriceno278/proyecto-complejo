@extends('layouts.layout')

@section('content')


    <div class="main-content container-fluid">
        <section id="multiple-column-form">
            <div class="row match-height">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">NUEVA AUDIENCIA</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form action="{{ route('audiencias.store') }}" method="post">
                                    {{ csrf_field() }}
                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="first-name-column">Tiempo de la Audiencia</label>
                                                <input value="{{ old('tiempoAudiencia') }}" id="tiempoAudiencia"
                                                    class="form-control " name="tiempoAudiencia" type="time">

                                                @if ($errors->has('tiempoAudiencia'))
                                                    <span class="text-danger"
                                                        class="errormsg">{{ $errors->first('tiempoAudiencia') }}</span>
                                                @endif
                                            </div>
                                        </div>
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

                                    <div class="row">


                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="company-column">Asignación</label>
                                                <select class="form-select" id="basicSelect" name="idAsignacionFK"
                                                    class="form-control">
                                                    <option value=""> -- Seleccione Asignación --</option>
                                                    @foreach ($audiencia_asignacion as $a_a)
                                                        <option value="{{ $a_a->idAsignacion }}"
                                                            {{ old('idAsignacionFK') == 0 ? 'selected' : '' }}>
                                                            <strong>Notificacion Eniviada: </strong>
                                                            {{ $a_a->fechaInicio }}
                                                        </option>
                                                    @endforeach
                                                </select>

                                                @if ($errors->has('idAsignacionFK'))
                                                    <span class="text-danger"
                                                        class="errormsg">{{ $errors->first('idAsignacionFK') }}</span>
                                                @endif
                                            </div>
                                        </div>



                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="first-name-column">Observación de la Audiencia</label>
                                                <textarea value="{{ old('observacionesAudiencia') }}"
                                                    id="observacionesAudiencia" class="form-control "
                                                    name="observacionesAudiencia" placeholder="Ingrese la observación"
                                                    type="text"></textarea>

                                                @if ($errors->has('observacionesAudiencia'))
                                                    <span class="text-danger"
                                                        class="errormsg">{{ $errors->first('observacionesAudiencia') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 d-flex justify-content-end">
                                        <a  class="btn btn-light me-1 mb-1" href="{{ route('audiencias') }}">Volver</a>
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
