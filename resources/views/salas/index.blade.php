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
                            <h3><strong>Salas</strong></h3>
                        </th>
                    </tr>
                    <tr class="table-primary" style="text-align: center;">
                        <th>Número de la Sala</th>
                        <th>Capacidad de la Sala</th>
                        <th>Bloque de la Sala</th>
                        <th>Piso de la Sala</th>
                        <th>Sede</th>
                        <th>Estado</th>
                        <th width='20%'> <a class="boton_personalizado" href="{{ route('salas.create') }}">Nuevo</a>
                        </th>
                    </tr>
                </thead>
                <tbody>
                     @foreach ($salas as $sala)
                        <tr>
                      <td>{{ $sala->numeroSala }}</td>
                            <td>{{ $sala->capacidadSala }}</td>
                            <td>{{ $sala->bloqueSala }}</td>
                            <td>{{ $sala->pisoSala }}</td>
                            <td>{{ $sala->nombreSede }} - {{ $sala->direccionSede }}</td>

                            @if ($sala->estado == 1)
                            <td><a href="{{ route('salas.change.status', [$sala->idSala]) }}"
                                    class="btn btn-sm btn-success">Activo</a>
                            </td>
                        @else
                            <td><a href="{{ route('salas.change.status', [$sala->idSala]) }}"
                                    class="btn btn-sm btn-danger">Inactivo</a>
                            </td>
                        @endif

                            <td style="text-align: center;">
                                <!-- Edit -->

                                <a href="{{ route('salas.edit', [$sala->idSala]) }}"
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
