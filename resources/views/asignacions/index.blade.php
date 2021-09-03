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
                        <th colspan="6" style="text-align: center;">
                            <h3><strong>Asignación</strong></h3>
                        </th>
                    </tr>
                    <tr class="table-primary" style="text-align: center;">
                        <th>Fecha de Inicio</th>
                        <th>Hora de Fin</th>
                        <th>Fecha de Fin</th>
                        <th>Hora de Fin</th>
                        <th>Notificación</th>
                        <th>Estado</th>

                        <th width='20%'> <a class="boton_personalizado" href="{{ route('asignacions.create') }}">Nuevo</a>
                        </th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($asignacions as $asignacion)
                        <tr>
                            <td>{{ $asignacion->fechaInicio }}</td>
                            <td>{{ $asignacion->horaInicio }}</td>
                            <td>{{ $asignacion->fechaFin }}</td>
                            <td>{{ $asignacion->horaFin }}</td>
                            <td>{{ $asignacion->notificacionEnviada }}</td>

                            @if ($asignacion->estado == 1)
                                <td><a href="{{ route('asignacions.change.status', [$asignacion->idAsignacion]) }}"
                                        class="btn btn-sm btn-success">Activo</a>
                                </td>
                            @else
                                <td><a href="{{ route('asignacions.change.status', [$asignacion->idAsignacion]) }}"
                                        class="btn btn-sm btn-danger">Inactivo</a>
                                </td>
                            @endif

                            <td style="text-align: center;">
                                <!-- Edit -->
                                <a href="{{ route('asignacions.edit', [$asignacion->idAsignacion]) }}"
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
