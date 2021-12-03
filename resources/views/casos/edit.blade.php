@extends('layouts.layout')

@section('content')


    <div class="main-content container-fluid">
        <section id="multiple-column-form">
            <div class="row match-height">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">EDITAR CASO</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form action="{{ route('casos.update', [$casos->idCaso]) }}" method="post">
                                    {{ csrf_field() }}
                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="first-name-column">Número de Referencia</label>
                                                <input value="{{ old('nReferenciaCaso', $casos->nReferenciaCaso) }}"
                                                    id="nReferenciaCaso" class="form-control " name="nReferenciaCaso"
                                                    placeholder="Ingrese el número de referencia">

                                                @if ($errors->has('nReferenciaCaso'))
                                                    <span class="text-danger"
                                                        class="errormsg">{{ $errors->first('nReferenciaCaso') }}</span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="last-name-column">Fecha de Registro</label>
                                                <input value="{{ old('fechaRegistro', $casos->fechaRegistro) }}"
                                                    class="form-control " name="fechaRegistro" type="date">

                                                @if ($errors->has('fechaRegistro'))
                                                    <span class="text-danger"
                                                        class="errormsg">{{ $errors->first('fechaRegistro') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 d-flex justify-content-end">
                                        <a class="btn btn-light me-1 mb-1" href="{{ route('casos') }}">Volver</a>
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
