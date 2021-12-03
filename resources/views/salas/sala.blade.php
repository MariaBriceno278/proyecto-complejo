@extends('layouts.layout')
@section('content')
<div class="container">
    <div class="row justify-content-start">

    @foreach($sedepaloquemao as $sp)
                    @if ($sp->reserva=='1')
    <div class="col-sm-3">
      <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">

          <div class="col-md-10">
        <div class="card-body">

          <p class="card-text"><h5 style="color: #ffffff"><strong>Sala:</strong> {{$sp->numeroSala}}</h5> <br>Piso: {{$sp->pisoSala}} <br>Bloque: {{$sp->bloqueSala}}</p>

        </div>

      </div>
    </div>
    </div>
    @endif
    @endforeach
    </div>
    <div class="row justify-content-start">

        @foreach($sedepaloquemao as $sp)
                        @if ($sp->reserva=='0')
        <div class="col-sm-3">
          <div class="card text-white mb-3" style="max-width: 18rem;background-color:#72A6AC;">

              <div class="col-md-10">
            <div class="card-body">

              <p class="card-text">
                  <h5 style="color: #ffffff"><strong>Sala: </strong>{{$sp->numeroSala}}</h5>    <br>
                  Piso: {{$sp->pisoSala}} <br>
                  Bloque: {{$sp->bloqueSala}}
                  <center><a style="background-color:#55748B;margin-top: 25px;color:#fff;align-content: center;" href="{{ route('asignacions.create') }}" class="badge btn-sm btn-light round">Asignar</a></center></p>

            </div>

          </div>
        </div>
        </div>
        @endif
        @endforeach
    </div>


</div>
@endsection
