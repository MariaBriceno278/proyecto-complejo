@extends('layouts.layout')

@section('content')

    <div class="card">
        <div class="card-header">
            <strong> Nuevo Despacho </strong>
        </div>
        <div class="card-body">

            <a class='btn btn-info float-right' href="{{ route('despachos') }}">Volver</a></a>

            <center>
                <form action="{{ route('despachos.store') }}" method="post">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="numeroDespacho">Número de
                            Despacho<span class="required"></span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="numeroDespacho" class="form-control" name="numeroDespacho"
                                placeholder="Ingrese el número de despacho" required="required" type="int">

                            @if ($errors->has('numeroDespacho'))
                                <span class="errormsg">{{ $errors->first('numeroDespacho') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nombreDespacho">Nombre
                            Despacho</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="nombreDespacho" class="form-control " name="nombreDespacho"
                                placeholder="Ingrese el nombre del despacho" required="required" type="text">


                            @if ($errors->has('nombreDespacho'))
                                <span class="errormsg">{{ $errors->first('nombreDespacho') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telefonoDespacho">Número de
                            Teléfono</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="telefonoDespacho" class="form-control " name="telefonoDespacho"
                                placeholder="Ingrese el número de teléfono" required="required" type="text">


                            @if ($errors->has('telefonoDespacho'))
                                <span class="errormsg">{{ $errors->first('telefonoDespacho') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="correoDespacho">Correo
                            Electrónico</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="correoDespacho" class="form-control " name="correoDespacho"
                                placeholder="Ingrese el correo electrónico" required="required" type="text">


                            @if ($errors->has('correoDespacho'))
                                <span class="errormsg">{{ $errors->first('correoDespacho') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="idEspecialidadFK">Especialidad</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="idEspecialidadFK" class="form-control " name="idEspecialidadFK"
                                placeholder="Ingrese la especialidad" required="required" type="text">


                            @if ($errors->has('idEspecialidadFK'))
                                <span class="errormsg">{{ $errors->first('idEspecialidadFK') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6">

                            <input type="submit" name="submit" class="boton_personalizado" value='Guardar'
                                class='btn btn-success'>
                        </div>
                    </div>

                </form>
        </div>
    </div>

    </center>
@endsection()
