<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Civilibus</title>
{{-- IMPORTANTE --}}
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('/vendors/chartjs/Chart.min.css') }}">
    <link rel="shortcut icon" href="{{ asset('/img/Recurso 10.png') }}">
    <link rel="stylesheet" href="{{ asset('/vendors/perfect-scrollbar/perfect-scrollbar.css') }}">
    <link rel="shortcut icon" href="{{ asset('/images/favicon.svg" type="image/x-icon') }}">

    {{-- <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}"> --}}


</head>

<body>
    <div id="app">
        <div id="sidebar" class='active'>
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <img src="{{ asset('/img/Recurso 16.png') }}" alt="" srcset="">
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">


                        <li class='sidebar-title'> Menu</li>



                        <li class="sidebar-item active ">
                            <a href="{{route('vista_dashboard')}}" class='sidebar-link'>
                                <i data-feather="home" width="20" style="color: #415e87;"></i>
                                <span>Inicio</span>
                            </a>

                        </li>




                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>

                                <?xml version="1.0"?>
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="20" x="0" y="0"
                                    viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve"
                                    class="">
                                    <g>
                                        <g xmlns=" http://www.w3.org/2000/svg">
                                            <path
                                                d="m482.284 482h-39.573v-467c0-8.284-6.716-15-15-15h-343.423c-8.284 0-15 6.716-15 15v467h-39.572c-8.284 0-15 6.716-15 15s6.716 15 15 15h452.569c8.284 0 15-6.716 15-15s-6.716-15-15.001-15zm-277.415 0v-102.261h102.261v102.261zm132.261 0v-117.261c0-8.284-6.716-15-15-15h-132.261c-8.284 0-15 6.716-15 15v117.261h-75.581v-452h313.423v452z"
                                                fill="#415e87" data-original="#000000" style="" class="" />
                                            <path d=" m223.748
                                        66.309h-73.508c-8.284 0-15 6.716-15 15v73.508c0 8.284 6.716 15 15
                                        15h73.508c8.284 0 15-6.716 15-15v-73.508c0-8.284-6.716-15-15-15zm-15
                                        73.508h-43.508v-43.508h43.508z" fill="#415e87" data-original="#000000" style=""
                                                class="" />
                                            <path d=" m361.76 66.309h-73.508c-8.284 0-15 6.716-15 15v73.508c0
                                        8.284 6.716 15 15 15h73.508c8.284 0 15-6.716
                                        15-15v-73.508c0-8.284-6.716-15-15-15zm-15 73.508h-43.508v-43.508h43.508z"
                                                fill="#415e87" data-original="#000000" style="" class="" />
                                            <path d=" m223.748
                                        205.954h-73.508c-8.284 0-15 6.716-15 15v73.508c0 8.284 6.716 15 15
                                        15h73.508c8.284 0 15-6.716 15-15v-73.508c0-8.284-6.716-15-15-15zm-15
                                        73.508h-43.508v-43.508h43.508z" fill="#415e87" data-original="#000000" style=""
                                                class="" />
                                            <path d=" m361.76 205.954h-73.508c-8.284 0-15 6.716-15 15v73.508c0
                                        8.284 6.716 15 15 15h73.508c8.284 0 15-6.716
                                        15-15v-73.508c0-8.284-6.716-15-15-15zm-15 73.508h-43.508v-43.508h43.508z"
                                                fill="#415e87" data-original="#000000" style=""
                                                class="" />
                                        </g>
                                    </g>
                                </svg>

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

                        <a href="#" class='sidebar-link' >
                            <i data-feather="user" width="20" style="color: #415e87;"></i>
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
                            <i data-feather="user" width="20" style="color: #415e87;"></i>
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
                            <i data-feather="file-text" width="20" style="color: #415e87;"></i>
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

                            <li class="dropdown nav-icon me-2">


                            </li>
                            <li class="dropdown">
                                <a href="#" data-bs-toggle="dropdown"
                                class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                                <div class="avatar me-1">
                                    <img src="{{asset('/img/user.png')}}" alt="" srcset="">

                                </div>
                                <div class="d-none d-md-block d-lg-inline-block">@if(Auth::user()->idRolFK=='1')Jefe Administrador
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

                @yield('content')


            </div>
        </div>
        <script src="{{ asset('/js/feather-icons/feather.min.js') }}"></script>
        <script src="{{ asset('/vendors/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>


        <script src="{{ asset('/vendors/chartjs/Chart.min.js') }}"></script>
        <script src="{{ asset('/vendors/apexcharts/apexcharts.min.js') }}"></script>
        <script src="{{ asset('/js/pages/dashboard.js') }}"></script>


        <script src="{{ asset('js/feather-icons/feather.min.js') }}"></script>
        <script src="{{ asset('vendors/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>


        {{-- <script src="{{ asset('vendors/simple-datatables/simple-datatables.js') }}"></script> --}}
        <script src="{{ asset('js/vendors.js') }}"></script>

        <script src="{{ asset('js/main.js') }}"></script>

        <script src="{{ asset('/js/feather-icons/feather.min.js') }}"></script>
        <script src="{{ asset('/vendors/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
        <script src="{{ asset('/js/app.js') }}"></script>

</body>

</html>
