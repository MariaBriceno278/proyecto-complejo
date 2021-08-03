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
                            <h3><strong>Caso</strong></h3>
                        </th>
                    </tr>
                    <tr class="table-primary" style="text-align: center;">
                        <th>Número de Referencia</th>
                        <th>Fecha de Registro</th>
                        <th>Estado</th>
                        <th width='20%'> <a class="boton_personalizado" href="{{ route('casos.create') }}">
                                Nuevo</a></th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($casos as $caso)
                        <tr>
                            <td>{{ $caso->nReferenciaCaso }}</td>
                            <td>{{ $caso->fechaRegistro }}</td>
                            <td>{{ $caso->estadoCaso }}</td>
                            <td style="text-align: center;">
                                <!-- Edit -->
                                <a href="{{ route('casos.edit', [$caso->idCaso]) }}" class="btn btn-sm btn-info">
                                    Modificar</a>
                                <a href="{{ route('casos.delete', $caso->idCaso) }}" class="btn btn-sm btn-danger">
                                    Eliminar</a>
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
