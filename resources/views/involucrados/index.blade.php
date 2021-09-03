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
                            <h3><strong>Involucrado</strong></h3>
                        </th>
                    </tr>
                    <tr class="table-primary" style="text-align: center;">
                        <th>Nombre del Involucrado</th>
                        <th>Correo Electrónico</th>
                        <th>Estado</th>

                        <th width='20%'> <a class="boton_personalizado"
                                href="{{ route('involucrados.create') }}">Nuevo</a>
                        </th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($involucrados as $involucrado)
                        <tr>
                            <td>{{ $involucrado->nombreInvolucrado }}</td>
                            <td>{{ $involucrado->correoInvolucrado }}</td>

                            @if ($involucrado->estado == 1)
                                <td><a href="{{ route('involucrados.change.status', [$involucrado->idInvolucrado]) }}"
                                        class="btn btn-sm btn-success">Activo</a>
                                </td>
                            @else
                                <td><a href="{{ route('involucrados.change.status', [$involucrado->idInvolucrado]) }}"
                                        class="btn btn-sm btn-danger">Inactivo</a>
                                </td>
                            @endif

                            <td style="text-align: center;">
                                <!-- Edit -->
                                <a href="{{ route('involucrados.edit', [$involucrado->idInvolucrado]) }}"
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
