@extends('layouts.layout')

@section('content')


    <div class="row">

        <div class="col-md-12 col-sm-12 col-xs-12">

            <!-- Alert message (start) -->
            @if (Session::has('message'))
                <div class="alert {{ Session::get('alert-class') }}">
                    {{ Session::get('message') }}
                </div>
            @endif
            <!-- Alert message (end) -->

            <div class="card">
                <div class="card-header">
                    <strong> Editar Caso</strong>
                </div>
                <div class="card-body">

                    <a class='btn btn-info float-right' href="{{ route('casos') }}">Volver</a>

                    <center>

                        <form action="{{ route('casos.update', [$casos->idCaso]) }}" method="post">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nReferenciaCaso">Número de
                                    Referencia</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="nReferenciaCaso" class="form-control col-md-12 col-xs-12"
                                        name="nReferenciaCaso" placeholder="Ingrese el número de referencia"
                                         type="int"
                                        value="{{ old('nReferenciaCaso', $casos->nReferenciaCaso) }}">

                                    @if ($errors->has('nReferenciaCaso'))
                                        <span class="errormsg">{{ $errors->first('nReferenciaCaso') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="fechaRegistro">Fecha de
                                    Registro</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="fechaRegistro" class="form-control col-md-12 col-xs-12" name="fechaRegistro"
                                         type="date"
                                        value="{{ old('fechaRegistro', $casos->fechaRegistro) }}">

                                    @if ($errors->has('fechaRegistro'))
                                        <span class="errormsg">{{ $errors->first('fechaRegistro') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="estadoCaso">Estado</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="estadoCaso" class="form-control col-md-12 col-xs-12" name="estadoCaso"
                                        placeholder="ingrese el estado del caso" required="required" type="text"
                                        value="{{ old('estadoCaso', $casos->estadoCaso) }}">

                                    @if ($errors->has('estadoCaso'))
                                        <span class="errormsg">{{ $errors->first('estadoCaso') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6">
                                    <input type="submit" name="submit" value='Guardar' class="boton_personalizado">
                                </div>
                            </div>

                        </form>

                </div>
            </div>

            </center>

        </div>
    </div>
@endsection()
