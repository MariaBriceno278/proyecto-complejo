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
                        <th colspan="4" style="text-align: center;">
                            <h3><strong>Asignación</strong></h3>
                        </th>
                    </tr>
                    <tr class="table-primary" style="text-align: center;">
                        <th>Fecha y Hora de Inicio</th>
                        <th>Fecha y Hora de Fin</th>
                        <th>Notificación</th>
                        <th width='20%'> <a class="boton_personalizado" href="{{ route('asignacions.create') }}">Nuevo</a>
                        </th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($asignacions as $asignacion)
                        <tr>
                            <td>{{ $asignacion->fechaHoraInicio }}</td>
                            <td>{{ $asignacion->fechaHoraFin }}</td>
                            <td>{{ $asignacion->notificacionEnviada }}</td>
                            <td style="text-align: center;">
                                <!-- Edit -->
                                <a href="{{ route('asignacions.edit', [$asignacion->idAsignacion]) }}"
                                    class="btn btn-sm btn-info">Modificar</a>
                                <a href="{{ route('asignacions.delete', $asignacion->idAsignacion) }}"
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
