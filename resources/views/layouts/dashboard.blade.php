<!DOCTYPE html>
<html lang="en">

<head>
    <title>Civilibus</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Oswald:400,700">
    <link rel="stylesheet" href="{{asset('fonts/icomoon/style.css')}}">

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('css/mediaelementplayer.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('fonts/flaticon/font/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('css/fl-bigmug-line.css')}}">


    <link rel="stylesheet" href="{{asset('css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('css/style.css')}}">

</head>

<body>



    <div class="site-wrap">

        <div class="site-navbar mt-4">
            <div class="container py-1">
                <div class="row align-items-center">
                    <div class="col-8 col-md-8 col-lg-4">
                        <a href="index.html" class="navbar-brand"><img src="{{asset('img/Recurso 1.png')}}" alt=""></a>
                    </div>
                    <div class="col-4 col-md-4 col-lg-8">
                        <nav class="site-navigation text-right text-md-right" role="navigation">

                            <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span
                                        class="icon-menu h3"></span></a></div>

                            <ul class="site-menu js-clone-nav d-none d-lg-block">
                                <li class="active">
                                    <a href="index.html">Inicio</a>
                                </li>

                                <li><a href="#modulos">Módulos</a></li>
                                <li><a href="#funcionalidades">Funcionalidades</a></li>
                                <li><a href="#ventajas">Ventajas</a></li>

                                <li><a class="btn btn-primary py-3 px-4" style="background-color: #449bc9;border: #449bc9;border-radius: 35px;" href="{{url('login')}}">Iniciar
                                        Sesión</a></li>
                            </ul>
                        </nav>
                    </div>


                </div>
            </div>
        </div>
    </div>

    <div class="site-mobile-menu">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>
    <!-- .site-mobile-menu -->

    <div id="palace" class="site-blocks-cover overlay" style="background-image: url('.../public/img/palace_justice.jpeg');" data-aos="fade"  data-stellar-background-ratio="0.5" >
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-8 text-center" data-aos="fade-up" data-aos-delay="400">
                    <h1 class="mb-4">Asignación de Salas de Audiencia</h1>
                    <p class="mb-5">Sistema para el manejo de solicitudes y asignación a los espacios de las audiencias
                        <br> del complejo judicial de Paloquemao en Bogotá.
                    </p>
                    <p></p>
                </div>
            </div>
        </div>
    </div>


    <div id="descripcion" class="site-section section-1">
        <div style="align-content: center;" class="container">
            <div style="align-content: center;" class="row">
                <div class="col-lg-7 mb-md-4">
                    <img src="{{asset('img/funcionalidades.jpeg')}}" style="max-width: 60%;
            height: auto;" alt="Image">
                </div>
                <div class="col-lg-5">
                    <h3 style="color: #449bc9;">¿Qué es Civilibus?</h3>
                    <div>
                        <p style="font-size:25px;">Civilibus es un software que apoya la asignación de salas de audiencia, para los complejos judiciales. Como solución integral genera un impacto positivo ya que permite realizar gran cantidad de audiencias.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <div id="modulos" class="section-2">
        <div class="container">
            <div class="row no-gutters align-items-stretch align-items-center">
                <div class="col-lg-3 section-title">
                    <div class="service-1-title h-100">
                        <h2 class="text-white">MÓDULOS</h2>

                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="service-1 first h-100" style="background-image: url('img/img_1.jpg')">
                        <div class="service-1-contents">
                            <span class="wrap-icon">
                                <span class="flaticon-balance"></span>
                            </span>
                            <h2>Usuarios</h2>
                            <ul>
                                <li>Gestión de Roles</li>
                                <li>Accseso de Despacho</li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="service-1 h-100" style="background-image: url('img/img_2.jpg')">
                        <div class="service-1-contents">
                            <span class="wrap-icon">
                                <span class="flaticon-law"></span>
                            </span>
                            <h2>Salas</h2>
                            <ul>
                                <li>Solicitud y Asignación de Salas</li>
                                <li>Notifiación de Asignación</li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="service-1 h-100" style="background-image: url('img/img_3.jpg')">
                        <div class="service-1-contents">
                            <span class="wrap-icon">
                                <span class="flaticon-courthouse"></span>
                            </span>
                            <h2>Informes</h2>
                            <ul>
                                <li>Informes de Asignación y Asistencia </li>
                                <li>Informes de Estadísticas</li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="funcionalidades" class="site-section section-3">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-6 section-title text-center">
                    <h2>Funcionalidades</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6 col-md-6 mb-4">
                    <div class="services-item wow fadeInDown">
                        <div style="border-color:#449bc9 ;" class="service-2 d-flex">
                            <div class="service-2-icon mr-3"><span class="flaticon-law"></span></div>
                            <div class="service-2-contents">
                                <h3>Informes</h3>
                                <p>Permite generar informes de las salas de audiencia y estadísticas sobres audiencias.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 mb-4">
                    <div class="services-item wow fadeInDown">
                        <div style="border-color:#449bc9 ;" class="service-2 d-flex">
                            <div class="service-2-icon mr-3"><span class="flaticon-balance"></span></div>
                            <div class="service-2-contents">
                                <h3>Documentación de Audiencias</h3>
                                <p>Permite almacenar información de las audiencias, de sus involucrados y de las observaciones.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 mb-4">
                    <div class="services-item wow fadeInDown">
                        <div style="border-color:#449bc9 ;" class="service-2 d-flex">
                            <div class="service-2-icon mr-3"><span class="flaticon-auction"></span></div>
                            <div class="service-2-contents">
                                <h3></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime harum optio doloribus error dolor.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 mb-4">
                    <div class="services-item wow fadeInDown">
                        <div style="border-color:#449bc9 ;" class="service-2 d-flex">
                            <div class="service-2-icon mr-3"><span class="flaticon-courthouse"></span></div>
                            <div class="service-2-contents">
                                <h3>Eficiencia</h3>
                                <p>Acelera la gestión de solicitudes para audiencias y su asignación.</p>
                            </div>
                        </div>
                    </div>
                </div>






            </div>
        </div>
    </div>

    <div id="ventajas" class="site-section section-4" style="background-image: url('img/Rama-Judicial.jpeg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 mr-auto mb-5">
                    <h2 class="mb-3">¿Qué Ventajas Ofrece Civilibus?</h2>

                </div>
                <div class="col-lg-6">
                    <div class="row">

                        <div class="col-md-6 mb-4">
                            <div class="feature-1 d-flex">
                                <span class="feature-1-icon mr-3">
                                    <span class="flaticon-courthouse"></span>
                                </span>
                                <div class="feature-1-contents">
                                    <strong class="number">+++</strong>
                                    <span class="caption">Audiencias Diarias</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="feature-1 d-flex">
                                <span class="feature-1-icon mr-3">
                                    <span class="flaticon-auction"></span>
                                </span>
                                <div class="feature-1-contents">
                                    <strong class="number">--</strong>
                                    <span class="caption">Reducción de Tiempo de Asignación</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 mb-4">
                            <div class="feature-1 d-flex">
                                <span class="feature-1-icon mr-3">
                                    <span class="flaticon-balance"></span>
                                </span>
                                <div class="feature-1-contents">
                                    <strong class="number">+430</strong>
                                    <span class="caption">Usuarios</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="feature-1 d-flex">
                                <span class="feature-1-icon mr-3">
                                    <span class="flaticon-law"></span>
                                </span>
                                <div class="feature-1-contents">
                                    <strong class="number">+</strong>
                                    <span class="caption">Enfoque en Procesos Judiciales</span>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>





    <div id="descripcion" class="site-section section-1">
        <div style="align-content: center;" class="container">
            <div style="align-content: center;" class="row">
                <div class="col-lg-6 mb-md-4">
                    <img src="{{asset('img/vinilos-estatua-de-la-senora-justicia.jpg.jpg')}}" style="max-width: 100%;
            height: auto;" alt="Image">
                </div>
                <div class="col-lg-5">

                    <div>
                        <form action="#" class="contact-form">
                            <div class="col-lg-5 mr-auto mb-5">
                                <h2 style="text-align: center;" class="mb-3">Contáctenos</h2>

                            </div>
                            <div class="row form-group">
                                <div class="col-md-12 mb-3 mb-md-0">
                                    <label class="font-weight-bold" for="fullname">Nombre</label>
                                    <input type="text" id="fullname" class="form-control" placeholder="Nombre">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label class="font-weight-bold" for="email">Correo</label>
                                    <input type="email" id="email" class="form-control" placeholder="Correo">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label class="font-weight-bold" for="email">Asunto</label>
                                    <input type="text" id="subject" class="form-control" placeholder="Asunto">
                                </div>
                            </div>


                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label class="font-weight-bold" for="message">Mensaje</label>
                                    <textarea name="message" id="message" cols="30" rows="5" class="form-control" placeholder="Estoy interesado"></textarea>
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-12">
                                    <input style="background-color: #449bc9;border: #449bc9;" type="submit" value="Enviar Mensaje" class="btn btn-primary py-3 px-4">
                                </div>
                            </div>


                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>














    <footer class="site-footer">

        </div>

        <div style="margin: auto;" class="col-md-10"></div>
        <p style="text-align: center;color: aliceblue;"><img src="{{asset('img/Recurso 15.png')}}" alt=""> ©copyright Civilibus 2021
        </p>
        </div>


        </div>
    </footer>

    </div>
    <script src="{{asset('js/main.js')}}"></script>

    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('js/jquery-migrate-3.0.1.min.js')}}"></script>
    <script src="{{asset('js/jquery-ui.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/mediaelement-and-player.min.js')}}"></script>
    <script src="{{asset('js/jquery.stellar.min.js')}}"></script>
    <script src="{{asset('js/jquery.countdown.min.js')}}"></script>
    <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('js/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{asset('js/aos.js')}}"></script>
    <!-- <script src="js/circleaudioplayer.js"></script> -->



</body>

</html>
