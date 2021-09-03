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
                            <h3><strong>Usuario</strong></h3>
                        </th>
                    </tr>
                    <tr class="table-primary" style="text-align: center;">
                        <th>Nombre del Usuario</th>
                        <th>Apellido del Usuario</th>
                        <th>Correo Electrónico</th>
                        <th>Número de Documento</th>
                        <th>Teléfono del Usuario</th>
                        <th>Estado</th>

                        <th width='20%'> <a class="boton_personalizado" href="{{ route('usuarios.create') }}">Nuevo</a>
                        </th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($usuarios as $usuario)
                        <tr>
                            <td>{{ $usuario->nombreUsuario }}</td>
                            <td>{{ $usuario->apellidoUsuario }}</td>
                            <td>{{ $usuario->correoUsuario }}</td>
                            <td>{{ $usuario->documentoUsuario }}</td>
                            <td>{{ $usuario->telefonoUsuario }}</td>

                            @if ($usuario->estado == 1)
                                <td><a href="{{ route('usuarios.change.status', [$usuario->idUsuario]) }}"
                                        class="btn btn-sm btn-success">Activo</a>
                                </td>
                            @else
                                <td><a href="{{ route('usuarios.change.status', [$usuario->idUsuario]) }}"
                                        class="btn btn-sm btn-danger">Inactivo</a>
                                </td>
                            @endif

                            <td style="text-align: center;">
                                <!-- Edit -->
                                <a href="{{ route('usuarios.edit', [$usuario->idUsuario]) }}"
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
