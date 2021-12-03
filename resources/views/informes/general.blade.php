@extends('layouts.layoutInforme')

@section('content')
<link rel="stylesheet" type="text/css"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Datatable Responsive script -->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap4.min.js"></script>

<!-- Datatable Responsive css -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap4.min.css">

<!-- Datatable Responsive busqueda script -->
<script src="https://cdn.datatables.net/searchbuilder/1.3.0/js/dataTables.searchBuilder.min.js"></script>
<script src="https://cdn.datatables.net/searchbuilder/1.3.0/js/searchBuilder.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/datetime/1.1.1/js/dataTables.dateTime.min.js"></script>

<!-- Datatable Responsive busqueda link -->
<link rel="stylesheet" href="https://cdn.datatables.net/searchbuilder/1.3.0/css/searchBuilder.bootstrap4.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/datetime/1.1.1/css/dataTables.dateTime.min.css">

<!-- Datatable export script -->
<script src="https://cdn.datatables.net/buttons/2.0.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.bootstrap4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.colVis.min.js"></script>

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
                        <h3 style="margin-top: 0;
                        margin-bottom: 0.5rem;
                        font-weight: 500;
                        line-height: 1.2;
                        color: #475f7b;">Informe Asignacion</h3>
                    </div>


                </div>
            </div>
            <section class="section">
                <div class="card">

                    <div class="card-body">

                        <table class="table table-striped table-bordered dt-responsive nowrap" style="width:100%" id="table1">
                            <thead>
                                <tr>
                                    <th>Despacho</th>
                                    <th>Usuario</th>
                                    <th>Caso</th>
                                    <th>Fecha Solicitud</th>
                                    <th>Fecha Audiencia</th>
                                    <th>Horario Audiencia</th>


                                </tr>
                            </thead>
                            <tbody>
                               {{-- @php
                                $rowid = 0;
                                $rowspan = 0;
                                @endphp --}}

                                {{-- @php
                                    $rowid += 1
                                @endphp --}}
                                <tr>
                                    @foreach($asignaciones as  $a)
                                    {{-- @if ($idDepacho == 0 || $rowspan == $rowid) --}}
                                        {{-- @php
                                            $rowid++;
                                            $rowspan = $a->NUMERODESPACHO;
                                        @endphp --}}
                                        <td >{{$a->NUMERODESPACHO}}</td>
                                    {{-- @endif --}}
                                    <td>{{$a->nombreUsuario}} <br>
                                        {{$a->apellidoUsuario}}</td>
                                    <td>{{$a->nReferenciaCaso}}</td>
                                    <td>{{$a->fechaSolicitud}}</td>
                                    <td>{{$a->fechaInicio}}</td>
                                    <td>{{$a->horaInicio}} <br>{{$a->horaFin}}</td>
                                </tr>
                                @endforeach







                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </div>
        <style>
            div.container { max-width: 1200px }
        </style>
        <script>
            $(document).ready(function() {
        $('#table1').DataTable( {
            "language": {
                            "url": "https://cdn.datatables.net/plug-ins/1.11.3/i18n/es_es.json"
                        },
                        "dom": 'Qlfrtip<"clear">Bfrtip',

            responsive: true,
            searchBuilder: true,
            buttons: [{
                                extend: 'copyHtml5',
                                className: "btn-warning",
                                text: '<i class="fa fa-files-o"></i>',
                                titleAttr: 'Copiar'
                            },
                            {
                                extend: 'excelHtml5',
                                className: "btn-success",
                                text: '<i class="fa fa-file-excel-o"></i>',
                                titleAttr: 'Excel'
                            },
                            {
                                extend: 'csvHtml5',
                                className: "btn-secondary",
                                text: '<i class="fa fa-file-text-o"></i>',
                                titleAttr: 'CSV'
                            },
                            {
                                extend: 'pdfHtml5',
                                className: "btn-danger",
                                text: '<i class="fa fa-file-pdf-o"></i>',
                                titleAttr: 'PDF',
                                customize: function ( doc ) {
                    doc.content.splice( 1, 0, {
                        margin: [ 0, 0, 0, 12 ],
                        alignment: 'center',
                        width: 100,
                        styles: {
	header: {
		fontSize: 18,
		bold: true
	},
	bigger: {
		fontSize: 15,
		italics: true
	}},
            bold: true,
            background: '#ff1',
                        image: 'data:image/png;base64,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'    } );
                    console.log(doc.content)
                }

                            },
                            {
                                extend: 'print',
                                className: "btn-primary",
                                text: '<i class="fa fa-cloud-download"></i>',
                                titleAttr: 'Imprimir'
                            }
                        ],

        } );
        table.searchBuilder.container().prependTo(table.table().container());


    } );


        </script>
@endsection
