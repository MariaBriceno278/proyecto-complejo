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
                            <h3>Sede</h3>
                        </div>

                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class='breadcrumb-header'>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{route('vista_dashboard')}}">Inicio</a></li>

                                    <li class="breadcrumb-item active" aria-current="page">Sede</li>
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
                                        <th>Dirección de Sede</th>
                                        <th>Nombre de Sede</th>
                                        <th>Estado</th>
                                        <th>Modificar</th>
                                        <a class="btn btn-sm btn-info" href="{{ route('sedes.create') }}">Nuevo</a>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($sedes as $sede)
                                        <tr>
                                            <td>{{ $sede->direccionSede }}</td>
                                            <td>{{ $sede->nombreSede }}</td>

                                            @if ($sede->estado == 1)
                                                <td><a style="color:#09A626"
                                                        href="{{ route('sedes.change.status', [$sede->idSede]) }}"
                                                        class="badge bg-success"><strong>Activo</strong> </a>
                                                </td>
                                            @else
                                                <td><a style="color:#B93922"
                                                        href="{{ route('sedes.change.status', [$sede->idSede]) }}"
                                                        class="badge bg-danger"><strong>Inactivo</strong></a>
                                                </td>
                                            @endif

                                            <td style="text-align: center;">
                                                <!-- Edit -->
                                                <a href="{{ route('sedes.edit', [$sede->idSede]) }}"
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
