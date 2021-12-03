@extends('layouts.layout')

@section('content')


    <div class="main-content container-fluid">
        <section id="multiple-column-form">
            <div class="row match-height">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">EDITAR AUDIENCIA</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form action="{{ route('audiencias.update', [$audiencias->idAudiencia]) }}" method="post">
                                    {{ csrf_field() }}
                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="first-name-column">Tiempo de la Audiencia</label>
                                                <input value="{{ old('tiempoAudiencia', $audiencias->tiempoAudiencia) }}"
                                                    id="tiempoAudiencia" class="form-control " name="tiempoAudiencia"
                                                    type="time">

                                                @if ($errors->has('tiempoAudiencia'))
                                                    <span class="text-danger"
                                                        class="errormsg">{{ $errors->first('tiempoAudiencia') }}</span>
                                                @endif
                                            </div>
                                        </div>



                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="first-name-column">Observación de la Audiencia</label>
                                                <textarea
                                                    value="{{ old('observacionesAudiencia', $audiencias->observacionesAudiencia) }}"
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
                                        <a class="btn btn-light me-1 mb-1" href="{{ route('audiencias') }}">Volver</a>
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
