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
                        <th colspan="2" style="text-align: center;">
                            <h3><strong>Tipo Involucrado</strong></h3>
                        </th>
                    </tr>
                    <tr class="table-primary" style="text-align: center;">
                        <th>Nombre Tipo de Involucrado</th>
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
                            <td style="text-align: center;">
                                <!-- Edit -->
                                <a href="{{ route('tiposinvolucrados.edit', [$tipoinvolucrado->idTipoInvolucrado]) }}"
                                    class="btn btn-sm btn-info">Modificar</a>
                                <a href="{{ route('tiposinvolucrados.delete', $tipoinvolucrado->idTipoInvolucrado) }}"
                                    class="btn btn-sm btn-danger">Eliminar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>

    </body>

    </html>


@endsection()
