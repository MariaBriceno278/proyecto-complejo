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
                        <th colspan="5" style="text-align: center;">
                            <h3><strong>Solicitud</strong></h3>
                        </th>
                    </tr>
                    <tr class="table-primary" style="text-align: center;">
                        <th>Fecha de la Solicitud</th>
                        <th>Capacidad</th>
                        <th>Prioridad</th>
                        <th>Estado</th>

                        <th width='20%'> <a class="boton_personalizado" href="{{ route('solicituds.create') }}">Nuevo</a>
                        </th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($solicituds as $solicitud)
                        <tr>
                            <td>{{ $solicitud->fechaSolicitud }}</td>
                            <td>{{ $solicitud->capacidadRequerida }}</td>
                            <td>{{ $solicitud->prioridadNormal }}</td>

                            @if ($solicitud->estado == 1)
                                <td><a href="{{ route('solicituds.change.status', [$solicitud->idSolicitud]) }}"
                                        class="btn btn-sm btn-success">Activo</a>
                                </td>
                            @else
                                <td><a href="{{ route('solicituds.change.status', [$solicitud->idSolicitud]) }}"
                                        class="btn btn-sm btn-danger">Inactivo</a>
                                </td>
                            @endif

                            <td style="text-align: center;">
                                <!-- Edit -->
                                <a href="{{ route('solicituds.edit', [$solicitud->idSolicitud]) }}"
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
