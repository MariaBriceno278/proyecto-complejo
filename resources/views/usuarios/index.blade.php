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
            <div class="main-content container-fluid">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Usuario</h3>
                        </div>

                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class='breadcrumb-header'>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="">Inicio</a></li>
                                    <li class="breadcrumb-item"><a href="">Usuarios</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Usuario</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <section class="section">
                    <div class="card">

                        <div class="card-body">
                            <table class='table table-striped' id="table1">
                                <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Apellido</th>
                                        <th>Correo Electrónico</th>
                                        <th>Número de Documento</th>
                                        <th></th>
                                        <th>Estado</th>
                                        <th>Modificar</th>
                                        <a class="btn btn-sm btn-info" href="{{ route('usuarios.create') }}">Nuevo</a>

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
                                                    class="btn btn-primary round"><i data-feather="edit"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
            </div>
            <!-- Alert message (end) -->
        @endsection()
