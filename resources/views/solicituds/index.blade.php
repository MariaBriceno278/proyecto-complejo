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
                            <h3>Solicitud Sala</h3>
                        </div>

                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class='breadcrumb-header'>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="">Inicio</a></li>
                                    <li class="breadcrumb-item"><a href="">Salas</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Solicitud</li>
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
                                        <th>Fecha de la Solicitud</th>
                                        <th>Capacidad</th>
                                        <th>Prioridad</th>
                                        <th>Estado</th>
                                        <th>Modificar</th>
                                        <a class="btn btn-sm btn-info" href="{{ route('solicituds.create') }}">Nuevo</a>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($solicituds as $solicitud)
                                        <tr>
                                            <td>{{ $solicitud->fechaSolicitud }}</td>
                                            <td>{{ $solicitud->capacidadRequerida }}</td>
                                            <td>{{ $solicitud->prioridadNormal }}</td>

                                            @if ($solicitud->estado == 1)
                                                <td><a style="color:#09A626" href="{{ route('solicituds.change.status', [$solicitud->idSolicitud]) }}"
                                                        class="badge bg-success"><strong>Activo</strong> </a>
                                                </td>
                                            @else
                                                <td><a  style="color:#B93922"href="{{ route('solicituds.change.status', [$solicitud->idSolicitud]) }}"
                                                        class="badge bg-danger"><strong>Inactivo</strong></a>
                                                </td>
                                            @endif

                                            <td style="text-align: center;">
                                                <!-- Edit -->
                                                <a href="{{ route('solicituds.edit', [$solicitud->idSolicitud]) }}"
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
