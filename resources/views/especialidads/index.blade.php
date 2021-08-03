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
                        <th colspan="1" style="text-align: center;">
                            <h3><strong>Especialidad</strong></h3>
                        </th>
                    </tr>
                    <tr class="table-primary" style="text-align: center;">
                        <th>Denominación de la Especialidad</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($especialidads as $especialidad)
                        <tr>
                            <td>{{ $especialidad->denominacionEspecialidad }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>

    </body>

    </html>


@endsection()
