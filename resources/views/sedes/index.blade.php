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
                            <h3><strong>Sede</strong></h3>
                        </th>
                    </tr>
                    <tr class="table-primary" style="text-align: center;">
                        <th>Dirección de Sede</th>
                        <th>Nombre de Sede</th>
                        <th width='20%'> <a class="boton_personalizado" href="{{ route('sedes.create') }}">Nuevo</a></th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($sedes as $sede)
                        <tr>
                            <td>{{ $sede->direccionSede }}</td>
                            <td>{{ $sede->nombreSede }}</td>
                            <td style="text-align: center;">
                                <!-- Edit -->
                                <a href="{{ route('sedes.edit', [$sede->idSede]) }}"
                                    class="btn btn-sm btn-info">Modificar</a>
                                <a href="{{ route('sedes.delete', $sede->idSede) }}"
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