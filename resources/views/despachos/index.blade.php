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
                            <h3><strong>Despacho</strong></h3>
                        </th>
                    </tr>
                    <tr class="table-primary" style="text-align: center;">
                        <th>Número de Despacho</th>
                        <th>Nombre Despacho</th>
                        <th>Teléfono</th>
                        <th>Correo Electrónico</th>
                        <th width='20%'> <a class="boton_personalizado" href="{{ route('despachos.create') }}">Nuevo</a>
                        </th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($despachos as $despacho)
                        <tr>
                            <td>{{ $despacho->numeroDespacho }}</td>
                            <td>{{ $despacho->nombreDespacho }}</td>
                            <td>{{ $despacho->telefonoDespacho }}</td>
                            <td>{{ $despacho->correoDespacho }}</td>
                            <td style="text-align: center;">
                                <!-- Edit -->
                                <a href="{{ route('despachos.edit', [$despacho->idDespacho]) }}"
                                    class="btn btn-sm btn-info">Modificar</a>
                                <a href="{{ route('despachos.delete', $despacho->idDespacho) }}"
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
