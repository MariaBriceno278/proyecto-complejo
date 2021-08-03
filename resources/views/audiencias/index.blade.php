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
                            <h3><strong>Audiencia</strong></h3>
                        </th>
                    </tr>
                    <tr class="table-primary" style="text-align: center;">
                        <th>Tiempo de la Audiencia</th>
                        <th>Observación de la Audiencia</th>
                        <th width='20%'> <a class="boton_personalizado" href="{{ route('audiencias.create') }}">Nuevo</a>
                        </th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($audiencias as $audiencia)
                        <tr>
                            <td>{{ $audiencia->tiempoAudiencia }}</td>
                            <td>{{ $audiencia->observacionesAudiencia }}</td>
                            <td style="text-align: center;">
                                <!-- Edit -->
                                <a href="{{ route('audiencias.edit', [$audiencia->idAudiencia]) }}"
                                    class="btn btn-sm btn-info">Modificar</a>
                                <a href="{{ route('audiencias.delete', $audiencia->idAudiencia) }}"
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