@extends('layouts.layout')
@section('content')
<div class="row">
    @foreach($sedepaloquemao as $sp)
                    @if ($sp->reserva=='1')
    <div class="col-sm-6">
      <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
        <div class="col-md-4">
            <img src="{{asset('img/logo.png')}}" class="card-img" alt="...">
          </div>
          <div class="col-md-8">
        <div class="card-body">
            <i data-feather="user" alt="element 06"
            height="150" class="mb-1"></i>
          <h5 class="card-title">{{$sp->numeroSala}}</h5>

          <p class="card-text">{{$sp->pisoSala}}</p>
          <p class="card-text">{{$sp->bloqueSala}}</p>
        </div>
          </div>
      </div>
    </div>
    @endif
    @endforeach

    @foreach($sedepaloquemao as $sp)
    @if ($sp->reserva=='0')

    <div class="col-sm-6">
      <div class="card text-white bg-warnig">
        <div class="card-body">
          <h5 class="card-title">{{$sp->numeroSala}}</h5>
          <p class="card-text">{{$sp->pisoSala}}</p>
                <p class="card-text">{{$sp->bloqueSala}}</p>

          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
    @endif
            @endforeach
  </div>
  <div class="card mb-3" style="max-width: 540px;">
    <div class="row no-gutters">
      <div class="col-md-4">
        <img src="{{asset('img/logo.png')}}" class="card-img" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
    </div>
  </div>
@endsection
