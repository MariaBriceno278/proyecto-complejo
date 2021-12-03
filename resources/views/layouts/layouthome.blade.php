<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Civilibus</title>

    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('/vendors/chartjs/Chart.min.css')}}">
    <link rel="shortcut icon" href="{{asset('/img/Recurso 10.png')}}">
    <link rel="stylesheet" href="{{asset('/vendors/perfect-scrollbar/perfect-scrollbar.css')}}">
    <link rel="stylesheet" href="{{asset('/css/app.css')}}">

</head>

<body>
    <div id="app">
        <div id="sidebar" class='active'>
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <img src="{{asset('/img/Recurso 16.png')}}" alt="" srcset="">
                </div>


                <div class="sidebar-menu">
                    <ul class="menu">


                        <li class='sidebar-title'> Menu</li>



                        <li class="sidebar-item active ">
                            <a href="{{route('vista_dashboard')}}" class='sidebar-link'>
                                <i data-feather="home" width="20"></i>
                                <span>Inicio</span>
                            </a>

                        </li>



                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>

                                <?xml version="1.0"?>
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="20" x="0" y="0"
                                    viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve"
                                    class=""><g><g xmlns=" http://www.w3.org/2000/svg">
                                    <path
                                        d="m482.284 482h-39.573v-467c0-8.284-6.716-15-15-15h-343.423c-8.284 0-15 6.716-15 15v467h-39.572c-8.284 0-15 6.716-15 15s6.716 15 15 15h452.569c8.284 0 15-6.716 15-15s-6.716-15-15.001-15zm-277.415 0v-102.261h102.261v102.261zm132.261 0v-117.261c0-8.284-6.716-15-15-15h-132.261c-8.284 0-15 6.716-15 15v117.261h-75.581v-452h313.423v452z"
                                        fill="#415e87" data-original="#000000" style="" class=""/><path d=" m223.748
                                        66.309h-73.508c-8.284 0-15 6.716-15 15v73.508c0 8.284 6.716 15 15
                                        15h73.508c8.284 0 15-6.716 15-15v-73.508c0-8.284-6.716-15-15-15zm-15
                                        73.508h-43.508v-43.508h43.508z" fill="#415e87" data-original="#000000" style=""
                                        class=""/><path d=" m361.76 66.309h-73.508c-8.284 0-15 6.716-15 15v73.508c0
                                        8.284 6.716 15 15 15h73.508c8.284 0 15-6.716
                                        15-15v-73.508c0-8.284-6.716-15-15-15zm-15 73.508h-43.508v-43.508h43.508z"
                                        fill="#415e87" data-original="#000000" style="" class=""/><path d=" m223.748
                                        205.954h-73.508c-8.284 0-15 6.716-15 15v73.508c0 8.284 6.716 15 15
                                        15h73.508c8.284 0 15-6.716 15-15v-73.508c0-8.284-6.716-15-15-15zm-15
                                        73.508h-43.508v-43.508h43.508z" fill="#415e87" data-original="#000000" style=""
                                        class=""/><path d=" m361.76 205.954h-73.508c-8.284 0-15 6.716-15 15v73.508c0
                                        8.284 6.716 15 15 15h73.508c8.284 0 15-6.716
                                        15-15v-73.508c0-8.284-6.716-15-15-15zm-15 73.508h-43.508v-43.508h43.508z"
                                        fill="#415e87" data-original="#000000" style=""
                                        class=""/></g></g></svg>

                                <span>Salas</span>
                            </a>

                            <ul class="submenu">

                                @if(Auth::check() && Auth::user()->idRolFK=='1' )
                                <li>
                                    <a href="{{ route('asignacions') }}">Asignación
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('audiencias') }}">Audiencia</a>
                        </li>

                        <li>
                            <a href="{{ route('casos') }}">Caso</a>
                        </li>

                        <li>
                            <a href="{{route('detallescasos')}}">Detalle Caso</a>
                        </li>

                        <li>
                            <a href="{{ route('salas') }}">Sala</a>
                        </li>

                        <li>
                            <a  href="{{ route('sedes') }}">Sede</a>
                        </li>

                        <li>
                            <a href="{{ route('solicituds') }}">Solicitud</a>
                        </li>

                        @elseif(Auth::check() && Auth::user()->idRolFK=='2' )
                        <li>
                            <a href="{{ route('asignacions') }}">Asignación
                    </a>
                </li>

                <li>
                    <a href="{{ route('audiencias') }}">Audiencia</a>
                </li>
                <li>
                    <a href="{{ route('salas') }}">Sala</a>
                </li>

                <li>
                    <a  href="{{ route('sedes') }}">Sede</a>
                </li>
                @elseif(Auth::check() && Auth::user()->idRolFK=='3' or Auth::user()->idRolFK=='4' or Auth::user()->idRolFK=='5' )
                <li>
                    <a href="{{ route('audiencias') }}">Audiencia</a>
                </li>

                <li>
                    <a href="{{ route('casos') }}">Caso</a>
                </li>

                <li>
                    <a href="{{route('detallescasos')}}">Detalle Caso</a>
                </li>
                <li>
                    <a href="{{ route('solicituds') }}">Solicitud</a>
                </li>
                @endif
                    </ul>

                    </li>







                    @if(Auth::check() && Auth::user()->idRolFK=='1'   )
                    <li class="sidebar-item  has-sub">

                        <a href="#" class='sidebar-link'>
                            <i data-feather="user" width="20"></i>
                            <span>Usuarios</span>
                        </a>

                        <ul class="submenu ">

                            <li>
                                <a href="{{ route('despachos') }}">Despacho</a>
                            </li>

                            <li>
                                <a href="{{ route('especialidads') }}">Especialidad</a>
                            </li>
                            <li>
                                <a href="{{ route('involucrados') }}">Involucrado</a>
                            </li>
                            <li>
                                <a href="{{ route('rols') }}">Rol</a>
                            </li>
                            <li>
                                <a href="{{ route('tiposinvolucrados') }}">Tipo Involucrado</a>
                            </li>
                            <li>
                                <a href="{{ route('usuarios') }}">Usuario</a>
                            </li>

                        </ul>

                    </li>
                    @endif

                    @if(Auth::check() && Auth::user()->idRolFK=='3' )
                    <li class="sidebar-item  has-sub">

                        <a href="#" class='sidebar-link'>
                            <i data-feather="user" width="20"></i>
                            <span>Usuarios</span>
                        </a>

                        <ul class="submenu ">

                    <li>
                        <a href="{{ route('despachos') }}">Despacho</a>
                    </li>

                    <li>
                        <a href="{{ route('especialidads') }}">Especialidad</a>
                    </li>
                    <li>
                        <a href="{{ route('involucrados') }}">Involucrado</a>
                    </li>

                    <li>
                        <a href="{{ route('tiposinvolucrados') }}">Tipo Involucrado</a>
                    </li>
                    <li>
                        <a href="{{ route('usuarios') }}">Usuario</a>
                    </li>
                </ul>

            </li>
            @endif

                    <li class="sidebar-item  has-sub">
                        <a href="#" class='sidebar-link'>
                            <i data-feather="file-text" width="20"></i>
                            <span>Informes</span>
                        </a>

                        <ul class="submenu ">

                            <li>
                                <a href="{{route('informeasignacion')}}">Asignación y Asistencia</a>
                            </li>

                            <li>
                                <a href="{{route('informeestadisticodiario')}}">Estadísticas Diaria</a>
                            </li>
                            <li>
                                <a href="{{route('informeestadisticosemanal')}}">Estadísticas Semanal</a>
                            </li>


                        </ul>

                    </li>



                    <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
                </div>

                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
        <div id="main">
            <nav class="navbar navbar-header navbar-expand navbar-light">
                <a class="sidebar-toggler" href="#"><span class="navbar-toggler-icon"></span></a>
                <button class="btn navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav d-flex align-items-center navbar-light ms-auto">
                        <li class="dropdown nav-icon">
                            <a href="#" data-bs-toggle="dropdown"
                                class="nav-link  dropdown-toggle nav-link-lg nav-link-user">
                                <div class="d-lg-inline-block">
                                    <i data-feather="bell"></i>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-large">
                                <h6 class='py-2 px-4'>Notifications</h6>
                                <ul class="list-group rounded-none">
                                    <li class="list-group-item border-0 align-items-start">
                                        <div class="avatar bg-success me-3">
                                            <span class="avatar-content"><i data-feather="shopping-cart"></i></span>
                                        </div>
                                        <div>
                                            <h6 class='text-bold'>New Order</h6>
                                            <p class='text-xs'>
                                                An order made by Ahmad Saugi for product Samsung Galaxy S69
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="dropdown">
                            <a href="#" data-bs-toggle="dropdown"
                                class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                                <div class="avatar me-1">
                                    <img src="{{asset('/img/user.png')}}" alt="" srcset="">

                                </div>
                                <div class="d-none d-md-block d-lg-inline-block">Hola @if(Auth::user()->idRolFK=='1')Jefe Administrador
                                    @elseif(Auth::user()->idRolFK=='2')Administrador
                                    @elseif(Auth::user()->idRolFK=='3')Juez
                                    @elseif(Auth::user()->idRolFK=='4')Secretario
                                    @elseif(Auth::user()->idRolFK=='5')Oficial
                                    @endif
                                    , {{ Auth::user()->nombreUsuario }}</div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#"><i data-feather="user"></i> Account</a>

                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item active" href="{{url('logout')}}"><i data-feather="log-out"></i> Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="main-content container-fluid">

                <section class="section">
                    <div class="row mb-2">




                        <div class="col-12 col-md-3">
                            <div class="card card-statistic">
                                <div class="card-body p-0">
                                    <div class="d-flex flex-column">
                                        <div class='px-3 py-3 d-flex justify-content-between'>
                                            <h3 class='card-title'>SOLICITUDES PENDIENTES</h3>
                                            <div class="card-right d-flex align-items-center">
                                                <p>{{$sp}} </p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-3">
                            <div class="card card-statistic">
                                <div class="card-body p-0">
                                    <div class="d-flex flex-column">
                                        <div class='px-3 py-3 d-flex justify-content-between'>
                                            <h3 class='card-title'>SOLICITUDES REALIZADAS HOY</h3>
                                            <div class="card-right d-flex align-items-center">
                                                <p>{{$solicitudes_hoy}} </p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-3">
                            <div class="card card-statistic">
                                <div class="card-body p-0">
                                    <div class="d-flex flex-column">
                                        <div class='px-3 py-3 d-flex justify-content-between'>
                                            <h3 class='card-title'>SOLICITUDES URGENTES</h3>
                                            <div class="card-right d-flex align-items-center">
                                                <p>{{$solicitudes_urgentes}}</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-3">
                            <div class="card card-statistic">
                                <div class="card-body p-0">
                                    <div class="d-flex flex-column">
                                        <div class='px-3 py-3 d-flex justify-content-between'>
                                            <h3 class='card-title'>SOLICITUDES NORMALES</h3>
                                            <div class="card-right d-flex align-items-center">
                                                <p>{{$solicitudes_normales}} </p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-md-8">

                            <div class="card">

                                <div class="card-header">

                                    <h3 class='card-heading p-1 pl-3'>Solicitudes    </h3>





                                </div>
                                <div class="card-body">
                                    <div class="row">


                                        <div class=" ">
                                            <div id="graficoBarrasMitadAnual" style="height: 300px;"></div>
                                            <div id="graficoBarrasMitadAnual2" style="height: 300px;"></div>
                                        </div>




                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-4">
                            <div class="card ">
                                <div class="card-header">
                                    <h4>Asignaciones Agendadas Hoy</h4>
                                </div>
                                <div class="card-body">
                                    <div id="radialBars"></div>
                                    <div class="text-center mb-5">
                                        <h6>{{$inicioFormateado}}</h6>
                                        <h1 class='text-green'>{{$asignanacions_hoy}}</h1>
                                    </div>
                                </div>
                            </div>
                            <div class="card widget-todo">
                                <div
                                    class="card-header border-bottom d-flex justify-content-between align-items-center">
                                    <h4 class="card-title d-flex">
                                        <i class='bx bx-check font-medium-5 pl-25 pr-75'></i>Salas Inhabilitadas<h4 class='text-green'>{{$csi}}</h4>
                                    </h4>

                                </div>
                                <div class="card-body px-0 py-1">
                                    <table class='table table-borderless'>

                                        <tr>
                                            @foreach ($salas_inhabilitadas as $si)
                                            <td class='col-3 text-center'>{{$si->numeroSala}}</td>



                                        </tr>
                                        @endforeach


                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>2021 Civilibus</p>
                    </div>

                </div>
            </footer>
        </div>
    </div>
    <!-- Charting library -->
<script src="https://unpkg.com/echarts/dist/echarts.min.js"></script>
<!-- Chartisan -->
<script src="https://unpkg.com/@chartisan/echarts/dist/chartisan_echarts.js"></script>
<!-- Your application script -->
<script>


  const graficoBarrasMitadAnual = new Chartisan({
    el: '#graficoBarrasMitadAnual',
    url: "@chart('mitad_anual')",
    hooks: new ChartisanHooks()
    .colors(['#44b8f8', '#4299E1'])
  });

  const graficoBarrasMitadAnual2 = new Chartisan({
    el: '#graficoBarrasMitadAnual2',
    url: "@chart('mitad_anual2')",
    hooks: new ChartisanHooks()
    .colors(['#415e87', '#4299E1'])
  });

</script>
    <script src="{{asset('/js/feather-icons/feather.min.js')}}"></script>
    <script src="{{asset('/vendors/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('/js/app.js')}}"></script>

    <script src="{{asset('/vendors/chartjs/Chart.min.js')}}"></script>
    <script src="{{asset('/vendors/apexcharts/apexcharts.min.js')}}"></script>
    <script src="{{asset('/js/pages/dashboard.js')}}"></script>

    <script src="{{asset('/js/main.js')}}"></script>
</body>

</html>
