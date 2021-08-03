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
                            <h3><strong>Rol</strong></h3>
                        </th>
                    </tr>
                    <tr class="table-primary" style="text-align: center;">
                        <th>Nombre del Rol</th>
                        <th>Estado</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($rols as $rol)
                        <tr>
                            <td>{{ $rol->nombreRol }}</td>
                            <td>{{ $rol->estadoRol }}</td>
                            <td style="text-align: center;">
                                <!-- Edit -->
                                <a href="{{ route('rols.edit', [$rol->idRol]) }}" class="btn btn-sm btn-info">
                                    Modificar</a>
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
