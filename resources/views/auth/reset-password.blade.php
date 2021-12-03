<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
-->
<!DOCTYPE html>
<html lang="zxx">

<!-- Head -->

<head>

    <title>Civilibus</title>

    <!-- Meta-Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<!-- CSS only -->
<link rel="shortcut icon" href="{{ asset('/img/Recurso 10.png') }}">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Oswald:400,700">
    <link rel="stylesheet" href="{{asset('/fonts/icomoon/style.css')}}">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('/css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('/css/mediaelementplayer.css')}}">
    <link rel="stylesheet" href="{{asset('/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('/fonts/flaticon/font/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('/css/fl-bigmug-line.css')}}">


    <link rel="stylesheet" href="{{asset('/css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('/css/login.css')}}">
    <!-- style CSS -->
    <link rel="stylesheet" href="{{asset('/css/login2.css')}}" type="text/css" media="all">

    <!-- fontawesome -->
    <link rel="stylesheet" href="{{asset('/css/font-awesome.min.css')}}" type="text/css" media="all">

    <!-- google fonts -->
    <link href="//fonts.googleapis.com/css?family=Mukta:300,400,500" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>




</head>
<!-- //Head -->

<!-- Body -->

<body>

<style>
    .mycheckbox input:checked ~ span::after{
  background: rgba(101,166,212,255);
  transform: scale(0.85) translate(35px);
}
.mycheckbox input:checked ~ span .on{
  transform: translate(30px);
  opacity: 1;
}

.mycheckbox input:checked ~ span .off{
  transform: translate(30px);
  opacity: 0;
}

.mycheckbox input:checked ~ span .on-bell{
  transform: translate(31px);
}

.mycheckbox input {
  display: none;
}

.mycheckbox span {
  display: inline-block;
  width: 60px;
  height: 30px;
  border-radius: 30px;
  background: rgb(231, 240, 249);
  cursor: pointer;
  box-shadow: inset 0px 0px 2px rgb(15, 15, 15);

  position: relative;
}

.mycheckbox span::after {
  content: "";
  display: block;
  width: 30px;
  height: 30px;
  transform: scale(0.85);
  border-radius: 30px;
  background: rgb(132,168,210);
  transition: 0.5s;
  box-shadow: inset 0px 0px 2px rgb(37, 37, 37);
}

.mycheckbox i {
  position: absolute;
  left: 7px;
  top: 7px;
  z-index: 1;
  color: white;
  transition: 0.5s;
}

.mycheckbox .on {
  opacity: 0;
  left: 7px;
  top: 7px;
}

.mycheckbox .off {
  left: 9px;
  top: 7px;
}

.mycheckbox .off-bell {
  left: 5px;
}
</style>
    <div class="site-wrap">

        <div class="site-navbar mt-4">
            <div class="container py-1">
                <div class="row align-items-center">
                    <div class="col-8 col-md-8 col-lg-4">

                    </div>
                    <div class="col-4 col-md-4 col-lg-8">
                        <nav class="site-navigation text-right text-md-right" role="navigation">

                            <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span
                                        class="icon-menu h3"></span></a></div>

                            <ul class="site-menu js-clone-nav d-none d-lg-block">
                                <li>
                                    <a href="index.html">Inicio</a>
                                </li>
                            </ul>
                        </nav>
                    </div>


                </div>
            </div>
        </div>
    </div>
    <section class="main">


        <div class="content-w3ls">
            <div class="text-center icon">
                <img src="{{asset('/img/Recurso Natalia.png')}}" alt="">
                <br>
                <br>
                <h2 style="color: aliceblue;font-size: 40px;">Recuperar Contraseña</h2>
            </div>

            <div class="content-bottom">
                @if (session("credenciales_invalidas"))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Credenciales Invalidas!</strong> Vuelva a ingresar credenciales.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
           @endif
                <form  method="POST" action="{{ url('reset-password')}}">
                    @csrf

                    <label style="color: aliceblue;" for="text1">Usuario</label><br>
                    @if ($errors->first('correoUsuario'))
                    <strong class="text-info">{{ ($errors->first('correoUsuario'))}}</strong>
                    @endif
                    <div class="field-group">

                        <span class="fa fa-user" aria-hidden="true"></span>

                        <div class="wthree-field">

                            <input value="{{ old('correoUsuario')}}" name="correoUsuario" id="correoUsuario"   placeholder="ejemplo: m@gmail.com" >

                        </div>

                    </div>
                    <label style="color: aliceblue;" for="password">Nueva Contraseña</label><br>
                    @if ($errors->first('password'))
                    <strong class="text-info">{{ ($errors->first('password'))}}</strong>
                    @endif
                    <div class="field-group">
                        <span class="fa fa-lock" aria-hidden="true"></span>
                        <div class="wthree-field">
                            <input name="password" id="password" type="Password" placeholder="Ingrese Contraseña">

                        </div>
                    </div>
                    <label style="color: aliceblue;" for="password">Confirmar Nueva Contraseña</label><br>
                    @if ($errors->first('password'))
                    <strong class="text-info">{{ ($errors->first('password'))}}</strong>
                    @endif
                    <div class="field-group">
                        <span class="fa fa-lock" aria-hidden="true"></span>
                        <div class="wthree-field">
                            <input name="password_confirmation" id="password_confirmation" type="Password" placeholder="Ingrese Contraseña">
                            <input type="hidden" name="token" value="{{$token}}">
                        </div>
                    </div>

                    <div class="wthree-field">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" onclick="myFunction()" class="custom-control-input" id="customCheck1">
                            <label class="custom-control-label" for="customCheck1" style="color: #ccc">Ver Password</label>
                          </div>
                        <button type="submit" class="btn">Cambiar Contraseña</button>
                    </div>


                </form>
            </div>
        </div>
        <div class="copyright">
            <p style="text-align: center;">© 2021 Civilibus </p>
        </div>
    </section>




            </div>
          </div>
        </div>

      </div>

</body>
<script>
    function myFunction() {
      var x = document.getElementById("password");
      if (x.type === "password") {
        x.type = "text";
      } else {
        x.type = "password";
      }
    }
    </script>
<!-- //Body -->
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>
