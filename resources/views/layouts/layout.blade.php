<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css"
        integrity="sha512-P5MgMn1jBN01asBgU0z60Qk4QxiXo86+wlFahKrsQf37c9cro517WzVSPPV1tDKzhku2iJ2FVgL67wG03SGnNA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css"
        integrity="sha512-P5MgMn1jBN01asBgU0z60Qk4QxiXo86+wlFahKrsQf37c9cro517WzVSPPV1tDKzhku2iJ2FVgL67wG03SGnNA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css'>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script>
    <script type="text/javascript" src="{{ asset('/js/menu.js') }}"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/botones.css') }}">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>
    <script type="text/javascript" src="{{ asset('/js/datatable.js') }}"></script>
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maxium-scale=1.0, minimum-scale=1.0">



</head>

<body>


    <!-- partial:index.partial.html -->
    <div class='dashboard'>
        <div class="dashboard-nav">
            <header><a href="#!" class="menu-toggle"><i class="fas fa-bars"></i></a><a href="#" class="brand-logo"><i
                        class="fas fa-balance-scale"></i> <span>CIVILIBUS</span></a></header>
            <nav class="dashboard-nav-list"><a href="#" class="dashboard-nav-item"><i class="fas fa-home"></i>
                    Inicio </a>

                <div class='dashboard-nav-dropdown'><a href="#!"
                        class="dashboard-nav-item dashboard-nav-dropdown-toggle"><i class="fas fa-landmark"></i> Salas
                    </a>
                    <div class='dashboard-nav-dropdown-menu'><a href="{{ route('asignacions') }}"
                            class="dashboard-nav-dropdown-item">Asignación</a><a href="{{ route('audiencias') }}"
                            class="dashboard-nav-dropdown-item">Audiencia</a><a href="{{ route('casos') }}"
                            class="dashboard-nav-dropdown-item">Caso</a><a href="{{ route('salas') }}"
                            class="dashboard-nav-dropdown-item">Sala</a><a href="{{ route('sedes') }}"
                            class="dashboard-nav-dropdown-item">Sede</a><a href="{{ route('solicituds') }}"
                            class="dashboard-nav-dropdown-item">Solicitud</a></div>
                </div>
                <div class='dashboard-nav-dropdown'><a href="#!"
                        class="dashboard-nav-item dashboard-nav-dropdown-toggle"><i class="fas fa-users"></i> Usuarios
                    </a>
                    <div class='dashboard-nav-dropdown-menu'><a href="{{ route('despachos') }}"
                            class="dashboard-nav-dropdown-item">Despacho</a><a href="{{ route('especialidads') }}"
                            class="dashboard-nav-dropdown-item">Especialidad</a><a href="{{ route('involucrados') }}"
                            class="dashboard-nav-dropdown-item">Involucrado</a><a href="{{ route('rols') }}"
                            class="dashboard-nav-dropdown-item">Rol</a><a href="{{ route('tiposinvolucrados') }}"
                            class="dashboard-nav-dropdown-item">Tipo Involucrado</a><a href="{{ route('usuarios') }}"
                            class="dashboard-nav-dropdown-item">Usuario</a></div>
                </div>
                <div class='dashboard-nav-dropdown'><a href="#!"
                        class="dashboard-nav-item dashboard-nav-dropdown-toggle"><i class="fas fa-folder-open"></i>
                        Informes </a>
                    <div class='dashboard-nav-dropdown-menu'><a href="#" class="dashboard-nav-dropdown-item">Asignación
                            y Asistencia</a><a href="#" class="dashboard-nav-dropdown-item">Estadísticas</a>
                    </div>
                </div>
                <a href="#" class="dashboard-nav-item"><i class="fas fa-user"></i> Perfil </a>
                <div class="nav-item-divider"></div>
                <a href="#" class="dashboard-nav-item"><i class="fas fa-sign-out-alt"></i> Cerrar Sesión </a>
            </nav>
        </div>
        <div class='dashboard-app'>
            <header class='dashboard-toolbar'><a href="#!" class="menu-toggle">
                    <i class="fas fa-bars"></i></a>

            </header>

            <div class='dashboard-content'>

                @yield('content')




            </div>

            <script>
                $(document).ready(function() {
$('#example').DataTable( {
"language": {
    "url": "https://cdn.datatables.net/plug-ins/1.10.20/ilon/Spaniish.json"
}
} );
} );
             </script>


        </div>
    </div>
    <!-- partial -->




    <div class="footer">
        <p>Civilibus, Colombia 2021</p>
    </div>
    </div>



    <style>
        /* The side navigation menu */

        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: #166088;
            color: white;
            text-align: center;
        }

        :root {
            --font-family-sans-serif: "Open Sans", -apple-system, BlinkMacSystemFont,
                "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji",
                "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        }

        *,
        *::before,
        *::after {
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
        }

        html {
            font-family: sans-serif;
            line-height: 1.15;
            -webkit-text-size-adjust: 100%;
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
        }

        nav {
            display: block;
        }

        body {
            margin: 0;
            font-family: "Open Sans", -apple-system, BlinkMacSystemFont, "Segoe UI",
                Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji",
                "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #;
            text-align: left;
            background-color: #e9edf4;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            margin-top: 0;
            margin-bottom: 0.5rem;
        }

        p {
            margin-top: 0;
            margin-bottom: 1rem;
        }

        a {
            color: #3f84fc;
            text-decoration: none;
            background-color: transparent;
        }

        a:hover {
            color: #0458eb;
            text-decoration: underline;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        .h1,
        .h2,
        .h3,
        .h4,
        .h5,
        .h6 {
            font-family: "Nunito", sans-serif;
            margin-bottom: 0.5rem;
            font-weight: 500;
            line-height: 1.2;
        }

        h1,
        .h1 {
            font-size: 2.5rem;
            font-weight: normal;
        }

        .card {
            position: relative;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 1px solid rgba(0, 0, 0, 0.125);
            border-radius: 0;
        }

        .card-body {
            -webkit-box-flex: 1;
            -webkit-flex: 1 1 auto;
            -ms-flex: 1 1 auto;
            flex: 1 1 auto;
            padding: 1.25rem;
        }

        .card-header {
            padding: 0.75rem 1.25rem;
            margin-bottom: 0;
            background-color: rgba(0, 0, 0, 0.03);
            border-bottom: 1px solid rgba(0, 0, 0, 0.125);
            text-align: center;
        }

        .dashboard {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            min-height: 100vh;
        }

        .dashboard-app {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-box-flex: 2;
            -webkit-flex-grow: 2;
            -ms-flex-positive: 2;
            flex-grow: 2;
            margin-top: 84px;
        }

        .dashboard-content {
            -webkit-box-flex: 2;
            -webkit-flex-grow: 2;
            -ms-flex-positive: 2;
            flex-grow: 2;
            padding: 25px;
        }

        .dashboard-nav {
            min-width: 238px;
            position: fixed;
            left: 0;
            top: 0;
            bottom: 0;
            overflow: auto;
            background-color: #166088;
        }

        .dashboard-compact .dashboard-nav {
            display: none;
        }

        .dashboard-nav header {
            min-height: 84px;
            padding: 8px 27px;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .dashboard-nav header .menu-toggle {
            display: none;
            margin-right: auto;
        }

        .dashboard-nav a {
            color: #DBE9EE;
        }

        .dashboard-nav a:hover {
            text-decoration: none;
        }

        .dashboard-nav {
            background-color: #166088;
        }

        .dashboard-nav a {
            color: #fff;
        }

        .brand-logo {
            font-family: "Nunito", sans-serif;
            font-weight: bold;
            font-size: 20px;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            color: #515151;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .brand-logo:focus,
        .brand-logo:active,
        .brand-logo:hover {
            color: #dbdbdb;
            text-decoration: none;
        }

        .brand-logo i {
            color: #d2d1d1;
            font-size: 27px;
            margin-right: 10px;
        }

        .dashboard-nav-list {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
        }

        .dashboard-nav-item {
            min-height: 56px;
            padding: 8px 20px 8px 70px;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            letter-spacing: 0.02em;
            transition: ease-out 0.5s;
        }

        .dashboard-nav-item i {
            width: 36px;
            font-size: 19px;
            margin-left: -40px;
        }

        .dashboard-nav-item:hover {
            background: rgba(255, 255, 255, 0.04);
        }

        .active {
            background: rgba(0, 0, 0, 0.1);
        }

        .dashboard-nav-dropdown {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
        }

        .dashboard-nav-dropdown.show {
            background: rgba(255, 255, 255, 0.04);
        }

        .dashboard-nav-dropdown.show>.dashboard-nav-dropdown-toggle {
            font-weight: bold;
        }

        .dashboard-nav-dropdown.show>.dashboard-nav-dropdown-toggle:after {
            -webkit-transform: none;
            -o-transform: none;
            transform: none;
        }

        .dashboard-nav-dropdown.show>.dashboard-nav-dropdown-menu {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
        }

        .dashboard-nav-dropdown-toggle:after {
            content: "";
            margin-left: auto;
            display: inline-block;
            width: 0;
            height: 0;
            border-left: 5px solid transparent;
            border-right: 5px solid transparent;
            border-top: 5px solid rgba(81, 81, 81, 0.8);
            -webkit-transform: rotate(90deg);
            -o-transform: rotate(90deg);
            transform: rotate(90deg);
        }

        .dashboard-nav .dashboard-nav-dropdown-toggle:after {
            border-top-color: #DBE9EE;
        }

        .dashboard-nav-dropdown-menu {
            display: none;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
        }

        .dashboard-nav-dropdown-item {
            min-height: 40px;
            padding: 8px 20px 8px 70px;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            transition: ease-out 0.5s;
        }

        .dashboard-nav-dropdown-item:hover {
            background: rgba(255, 255, 255, 0.04);
        }

        .menu-toggle {
            position: relative;
            width: 42px;
            height: 42px;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
            color: #166088;
        }

        .menu-toggle:hover,
        .menu-toggle:active,
        .menu-toggle:focus {
            text-decoration: none;
            color: #1D3461;
        }

        .menu-toggle i {
            font-size: 20px;
        }

        .dashboard-toolbar {
            min-height: 84px;
            background-color: #D8DDEF;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            padding: 8px 27px;
            position: fixed;
            top: 0;
            right: 0;
            left: 0;
            z-index: 1000;
        }

        .nav-item-divider {
            height: 1px;
            margin: 1rem 0;
            overflow: hidden;
            background-color: rgba(236, 238, 239, 0.3);
        }

        @media (min-width: 992px) {
            .dashboard-app {
                margin-left: 238px;
            }

            .dashboard-compact .dashboard-app {
                margin-left: 0;
            }
        }


        @media (max-width: 768px) {
            .dashboard-content {
                padding: 15px 0px;
            }
        }

        @media (max-width: 992px) {
            .dashboard-nav {
                display: none;
                position: fixed;
                top: 0;
                right: 0;
                left: 0;
                bottom: 0;
                z-index: 1070;
            }

            .dashboard-nav.mobile-show {
                display: block;
            }
        }

        @media (max-width: 992px) {
            .dashboard-nav header .menu-toggle {
                display: -webkit-box;
                display: -webkit-flex;
                display: -ms-flexbox;
                display: flex;
            }
        }

        @media (min-width: 992px) {
            .dashboard-toolbar {
                left: 238px;
            }

            .dashboard-compact .dashboard-toolbar {
                left: 0;
            }
        }

    </style>




</body>

</html>
