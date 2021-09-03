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
                        <th colspan="7" style="text-align: center;">
                            <h3><strong>Detalle Caso</strong></h3>
                        </th>
                    </tr>
                    <tr class="table-primary" style="text-align: center;">
                        <th>Número del Caso</th>
                        <th>Tipo de Involucrado</th>
                        <th>Involucrado</th>
                        <th>Correo Electrónio del Involucrado</th>
                        <th>Observaciones</th>
                        <th>Estado</th>

                        <th width='20%'> <a class="boton_personalizado"
                                href="{{ route('detallescasos.create') }}">Nuevo</a></th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($detallescasos as $detallecaso)
                        <tr>
                            <td>{{ $detallecaso->nReferenciaCaso }}</td>
                            <td>{{ $detallecaso->nombreTipoInvolucrado }}</td>
                            <td>{{ $detallecaso->nombreInvolucrado }}</td>
                            <td>{{ $detallecaso->correoInvolucrado }} </td>
                            <td>{{ $detallecaso->observacionesDetalleCaso }}</td>

                            @if ($detallecaso->estado == 1)
                                <td><a href="{{ route('detallescasos.change.status', [$detallecaso->idDetalleCaso]) }}"
                                        class="btn btn-sm btn-success">Activo</a>
                                </td>
                            @else
                                <td><a href="{{ route('detallescasos.change.status', [$detallecaso->idDetalleCaso]) }}"
                                        class="btn btn-sm btn-danger">Inactivo</a>
                                </td>
                            @endif

                            <td style="text-align: center;">
                                <!-- Edit -->
                                <a href="{{ route('detallescasos.edit', [$detallecaso->idDetalleCaso]) }}"
                                    class="btn btn-sm btn-info">Modificar</a>
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
