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
                            <h3>Sala</h3>
                        </div>

                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class='breadcrumb-header'>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="">Inicio</a></li>
                                    <li class="breadcrumb-item"><a href="">Salas</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Sala</li>
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
                                        <th>Número de la Sala</th>
                                        <th>Capacidad de la Sala</th>
                                        <th>Bloque de la Sala</th>
                                        <th>Piso de la Sala</th>
                                        <th>Sede</th>
                                        <th>Estado</th>
                                        <th>Modificar</th>
                                        <a class="btn btn-sm btn-info" href="{{ route('salas.create') }}">Nuevo</a>
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
