@extends('layouts.layout')

@section('content')
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <!-- Alert message (start) -->
            @if (Session::has('message'))
                <div style="text-align: center;" class="alert {{ Session::get('alert-class') }}">
                    {{ Session::get('message') }}
                </div>
            @endif
            <!-- Alert message (end) -->


            <table id="table_id" class="display">
                <thead>
                    <tr>
                        <th colspan="3" style="text-align: center;">
                            <h3><strong>Tipo Involucrado</strong></h3>
                        </th>
                    </tr>
                    <tr class="table-primary" style="text-align: center;">
                        <th>Nombre Tipo de Involucrado</th>
                        <th>Estado</th>

                        <th width='20%'>
                            <a class="boton_personalizado" href="{{ route('tiposinvolucrados.create') }}">
                                Nuevo</a>
                        </th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($tiposinvolucrados as $tipoinvolucrado)
                        <tr>
                            <td>{{ $tipoinvolucrado->nombreTipoInvolucrado }}</td>

                            @if ($tipoinvolucrado->estado == 1)
                                <td><a href="{{ route('tiposinvolucrados.change.status', [$tipoinvolucrado->idTipoInvolucrado]) }}"
                                        class="btn btn-sm btn-success">Activo</a>
                                </td>
                            @else
                                <td><a href="{{ route('tiposinvolucrados.change.status', [$tipoinvolucrado->idTipoInvolucrado]) }}"
                                        class="btn btn-sm btn-danger">Inactivo</a>
                                </td>
                            @endif


                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>

    </body>

    </html>


@endsection()
