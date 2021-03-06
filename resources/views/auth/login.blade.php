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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
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
                <h2 style="color: aliceblue;font-size: 40px;">Iniciar Sesi??n</h2>
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
                <form  method="POST" action="{{ url('login') }}">
                    @csrf
                    @if ($errors->first('mensaje_enviado'))

                    <div class="alert alert-info" role="alert">
                       <strong >Mensaje Enviado,{{ ($errors->first('mensaje_enviado'))}}</strong>
                      </div>
                   @endif
                   @if ($errors->first('terminos'))

                   <div class="alert alert-info" role="alert">
                      <strong >{{ ($errors->first('terminos'))}}</strong>
                     </div>
                  @endif
                     @if (session("cerrar_sesion"))

                     <div class="alert alert-info" role="alert">
                        <strong >{{ (session("cerrar_sesion"))}}</strong>
                       </div>
                    @endif
                    @if (session("credenciales_cambiadas"))

                    <div class="alert alert-info" role="alert">
                       <strong >{{ (session("credenciales_cambiadas"))}}</strong>
                      </div>
                   @endif
                    <label style="color: aliceblue;" for="text1">Usuario</label><br>
                    @if ($errors->first('correoUsuario'))
                    <strong class="text-info">{{ ($errors->first('correoUsuario'))}}</strong>
                    @endif
                    <div class="field-group">

                        <span class="fa fa-user" aria-hidden="true"></span>

                        <div class="wthree-field">

                            <input value="{{ old('correoUsuario')}}" name="correoUsuario" id="correoUsuario" type="email"  placeholder="ejemplo: m@gmail.com" >

                        </div>

                    </div>
                    <label style="color: aliceblue;" for="password">Contrase??a</label><br>
                    @if ($errors->first('password'))
                    <strong class="text-info">{{ ($errors->first('password'))}}</strong>
                    @endif
                    <div class="field-group">
                        <span class="fa fa-lock" aria-hidden="true"></span>
                        <div class="wthree-field">
                            <input name="password" id="password" type="Password" placeholder="Ingrese Contrase??a">

                        </div>
                    </div>
                    <div class="wthree-field">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" onclick="myFunction()" class="custom-control-input" id="customCheck1">
                            <label class="custom-control-label" for="customCheck1" style="color: #ccc">Ver Password</label>
                          </div>
                        <button type="submit" class="btn">Ingresar</button>
                    </div>
                    <ul class="list-login">
                        <label class="mycheckbox ">
                            <input value="yes" type="checkbox" name="terminos">
                            <span>
                              <i class="fas fa-check on"></i>

                            </span>

                          </label>



                        <li>
                            <a style="color: #ccc" class="text-right" data-toggle="modal" data-target="#myModal">Acepta T??rminos y Condiciones -</a>
                            <a href="{{url('recuperar-password')}}" class="text-right"> Olvid?? la Contrase??a?</a><br>



                        </li>
                        <li class="clearfix"></li>
                    </ul>

                </form>
            </div>
        </div>
        <div class="copyright">
            <p style="text-align: center;">?? 2021 Civilibus </p>
        </div>
    </section>

    <div class="container">



        <!-- The Modal -->
        <div class="modal" id="myModal">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">

              <!-- Modal Header -->
              <div class="modal-header">
                <h1 class="modal-title">LEY ESTATUTARIA 1581 DE 2012
                    (Octubre 17)</h1>
                <button type="button" class="close" data-dismiss="modal">??</button>
              </div>

              <!-- Modal body -->
              <div class="modal-body">
                <h3>
                    Reglamentada parcialmente por el Decreto Nacional 1377 de 2013.
                    Por la cual se dictan disposiciones generales para la protecci??n de datos
                    personales.</h3>

                <p>EL CONGRESO DE COLOMBIA
                    DECRETA:
                    T??TULO I
                    OBJETO, ??MBITO DE APLICACI??N Y DEFINICIONES
                    Art??culo 1??. Objeto. La presente ley tiene por objeto desarrollar el derecho
                    constitucional que tienen todas las personas a conocer, actualizar y rectificar las
                    informaciones que se hayan recogido sobre ellas en bases de datos o archivos,
                    y los dem??s derechos, libertades y garant??as constitucionales a que se refiere el
                    art??culo 15 de la Constituci??n Pol??tica; as?? como el derecho a la informaci??n
                    consagrado en el art??culo 20 de la misma.
                    Art??culo 2??. ??mbito de aplicaci??n. Los principios y disposiciones contenidas
                    en la presente ley ser??n aplicables a los datos personales registrados en
                    cualquier base de datos que los haga susceptibles de tratamiento por entidades
                    de naturaleza p??blica o privada.
                    La presente ley aplicar?? al tratamiento de datos personales efectuado en
                    territorio colombiano o cuando al Responsable del Tratamiento o Encargado del
                    Tratamiento no establecido en territorio nacional le sea aplicable la legislaci??n
                    colombiana en virtud de normas y tratados internacionales.
                    El r??gimen de protecci??n de datos personales que se establece en la presente
                    ley no ser?? de aplicaci??n:
                    a) A las bases de datos o archivos mantenidos en un ??mbito exclusivamente
                    personal o dom??stico.
                    Cuando estas bases de datos o archivos vayan a ser suministrados a terceros
                    se deber??, de manera previa, informar al Titular y solicitar su autorizaci??n. En
                    este caso los Responsables y Encargados de las bases de datos y archivos
                    quedar??n sujetos a las disposiciones contenidas en la presente ley;
                    b) A las bases de datos y archivos que tengan por finalidad la seguridad y
                    defensa nacional, as?? como la prevenci??n, detecci??n, monitoreo y control del
                    lavado de activos y el financiamiento del terrorismo;
                    c) A las Bases de datos que tengan como fin y contengan informaci??n de
                    inteligencia y contrainteligencia;
                    d) A las bases de datos y archivos de informaci??n period??stica y otros
                    contenidos editoriales;
                    e) A las bases de datos y archivos regulados por la Ley 1266 de 2008;
                    f) A las bases de datos y archivos regulados por la Ley 79 de 1993.
                    Par??grafo. Los principios sobre protecci??n de datos ser??n aplicables a todas las
                    bases de datos, incluidas las exceptuadas en el presente art??culo, con los
                    l??mites dispuestos en la presente ley y sin re??ir con los datos que tienen
                    caracter??sticas de estar amparados por la reserva legal. En el evento que la
                    normatividad especial que regule las bases de datos exceptuadas prevea
                    principios que tengan en consideraci??n la naturaleza especial de datos, los
                    mismos aplicar??n de manera concurrente a los previstos en la presente ley.
                    Art??culo 3??. Definiciones. Para los efectos de la presente ley, se entiende por:
                    a) Autorizaci??n: Consentimiento previo, expreso e informado del Titular para
                    llevar a cabo el Tratamiento de datos personales;
                    b) Base de Datos: Conjunto organizado de datos personales que sea objeto de
                    Tratamiento;
                    c) Dato personal: Cualquier informaci??n vinculada o que pueda asociarse a
                    una o varias personas naturales determinadas o determinables;
                    d) Encargado del Tratamiento: Persona natural o jur??dica, p??blica o privada,
                    que por s?? misma o en asocio con otros, realice el Tratamiento de datos
                    personales por cuenta del Responsable del Tratamiento;
                    e) Responsable del Tratamiento: Persona natural o jur??dica, p??blica o privada,
                    que por s?? misma o en asocio con otros, decida sobre la base de datos y/o el
                    Tratamiento de los datos;
                    f) Titular: Persona natural cuyos datos personales sean objeto de Tratamiento;
                    g) Tratamiento: Cualquier operaci??n o conjunto de operaciones sobre datos
                    personales, tales como la recolecci??n, almacenamiento, uso, circulaci??n o
                    supresi??n.
                    T??TULO II
                    PRINCIPIOS RECTORES
                    Art??culo 4??. Principios para el Tratamiento de datos personales. En el
                    desarrollo, interpretaci??n y aplicaci??n de la presente ley, se aplicar??n, de
                    manera arm??nica e integral, los siguientes principios:
                    a) Principio de legalidad en materia de Tratamiento de datos: El
                    Tratamiento a que se refiere la presente ley es una actividad reglada que debe
                    sujetarse a lo establecido en ella y en las dem??s disposiciones que la
                    desarrollen;
                    b) Principio de finalidad: El Tratamiento debe obedecer a una finalidad
                    leg??tima de acuerdo con la Constituci??n y la Ley, la cual debe ser informada al
                    Titular;
                    c) Principio de libertad: El Tratamiento s??lo puede ejercerse con el
                    consentimiento, previo, expreso e informado del Titular. Los datos personales
                    no podr??n ser obtenidos o divulgados sin previa autorizaci??n, o en ausencia de
                    mandato legal o judicial que releve el consentimiento;
                    d) Principio de veracidad o calidad: La informaci??n sujeta a Tratamiento debe
                    ser veraz, completa, exacta, actualizada, comprobable y comprensible. Se
                    proh??be el Tratamiento de datos parciales, incompletos, fraccionados o que
                    induzcan a error;
                    e) Principio de transparencia: En el Tratamiento debe garantizarse el derecho
                    del Titular a obtener del Responsable del Tratamiento o del Encargado del
                    Tratamiento, en cualquier momento y sin restricciones, informaci??n acerca de la
                    existencia de datos que le conciernan;
                    f) Principio de acceso y circulaci??n restringida: El Tratamiento se sujeta a
                    los l??mites que se derivan de la naturaleza de los datos personales, de las
                    disposiciones de la presente ley y la Constituci??n. En este sentido, el
                    Tratamiento s??lo podr?? hacerse por personas autorizadas por el Titular y/o por
                    las personas previstas en la presente ley;
                    Los datos personales, salvo la informaci??n p??blica, no podr??n estar disponibles
                    en Internet u otros medios de divulgaci??n o comunicaci??n masiva, salvo que el
                    acceso sea t??cnicamente controlable para brindar un conocimiento restringido
                    s??lo a los Titulares o terceros autorizados conforme a la presente ley;
                    g) Principio de seguridad: La informaci??n sujeta a Tratamiento por el
                    Responsable del Tratamiento o Encargado del Tratamiento a que se refiere la
                    presente ley, se deber?? manejar con las medidas t??cnicas, humanas y
                    administrativas que sean necesarias para otorgar seguridad a los registros
                    evitando su adulteraci??n, p??rdida, consulta, uso o acceso no autorizado o
                    fraudulento;
                    h) Principio de confidencialidad: Todas las personas que intervengan en el
                    Tratamiento de datos personales que no tengan la naturaleza de p??blicos est??n
                    obligadas a garantizar la reserva de la informaci??n, inclusive despu??s de
                    finalizada su relaci??n con alguna de las labores que comprende el Tratamiento,
                    pudiendo s??lo realizar suministro o comunicaci??n de datos personales cuando
                    ello corresponda al desarrollo de las actividades autorizadas en la presente ley
                    y en los t??rminos de la misma.
                    T??TULO III
                    CATEGOR??AS ESPECIALES DE DATOS
                    Art??culo 5??. Datos sensibles. Para los prop??sitos de la presente ley, se
                    entiende por datos sensibles aquellos que afectan la intimidad del Titular o cuyo
                    uso indebido puede generar su discriminaci??n, tales como aquellos que revelen
                    el origen racial o ??tnico, la orientaci??n pol??tica, las convicciones religiosas o
                    filos??ficas, la pertenencia a sindicatos, organizaciones sociales, de derechos
                    humanos o que promueva intereses de cualquier partido pol??tico o que
                    garanticen los derechos y garant??as de partidos pol??ticos de oposici??n as?? como
                    los datos relativos a la salud, a la vida sexual y los datos biom??tricos.
                    Art??culo 6??. Tratamiento de datos sensibles. Se proh??be el Tratamiento de
                    datos sensibles, excepto cuando:
                    a) El Titular haya dado su autorizaci??n expl??cita a dicho Tratamiento, salvo en
                    los casos que por ley no sea requerido el otorgamiento de dicha autorizaci??n;
                    b) El Tratamiento sea necesario para salvaguardar el inter??s vital del Titular y
                    este se encuentre f??sica o jur??dicamente incapacitado. En estos eventos, los
                    representantes legales deber??n otorgar su autorizaci??n;
                    c) El Tratamiento sea efectuado en el curso de las actividades leg??timas y con
                    las debidas garant??as por parte de una fundaci??n, ONG, asociaci??n o cualquier
                    otro organismo sin ??nimo de lucro, cuya finalidad sea pol??tica, filos??fica,
                    religiosa o sindical, siempre que se refieran exclusivamente a sus miembros o a
                    las personas que mantengan contactos regulares por raz??n de su finalidad. En
                    estos eventos, los datos no se podr??n suministrar a terceros sin la autorizaci??n
                    del Titular;
                    d) El Tratamiento se refiera a datos que sean necesarios para el
                    reconocimiento, ejercicio o defensa de un derecho en un proceso judicial;
                    e) El Tratamiento tenga una finalidad hist??rica, estad??stica o cient??fica. En este
                    evento deber??n adoptarse las medidas conducentes a la supresi??n de identidad
                    de los Titulares.
                    Art??culo 7??. Derechos de los ni??os, ni??as y adolescentes. En el Tratamiento
                    se asegurar?? el respeto a los derechos prevalentes de los ni??os, ni??as y
                    adolescentes.
                    Queda proscrito el Tratamiento de datos personales de ni??os, ni??as y
                    adolescentes, salvo aquellos datos que sean de naturaleza p??blica.
                    Es tarea del Estado y las entidades educativas de todo tipo proveer informaci??n
                    y capacitar a los representantes legales y tutores sobre los eventuales riesgos a
                    los que se enfrentan los ni??os, ni??as y adolescentes respecto del Tratamiento
                    indebido de sus datos personales, y proveer de conocimiento acerca del uso
                    responsable y seguro por parte de ni??os, ni??as y adolescentes de sus datos
                    personales, su derecho a la privacidad y protecci??n de su informaci??n personal
                    y la de los dem??s. El Gobierno Nacional reglamentar?? la materia, dentro de los
                    seis (6) meses siguientes a la promulgaci??n de esta ley.
                    T??TULO IV
                    DERECHOS Y CONDICIONES DE LEGALIDAD PARA EL TRATAMIENTO DE
                    DATOS
                    Art??culo 8??. Derechos de los Titulares. El Titular de los datos personales
                    tendr?? los siguientes derechos:
                    a) Conocer, actualizar y rectificar sus datos personales frente a los
                    Responsables del Tratamiento o Encargados del Tratamiento. Este derecho se
                    podr?? ejercer, entre otros frente a datos parciales, inexactos, incompletos,
                    fraccionados, que induzcan a error, o aquellos cuyo Tratamiento est??
                    expresamente prohibido o no haya sido autorizado;
                    b) Solicitar prueba de la autorizaci??n otorgada al Responsable del Tratamiento
                    salvo cuando expresamente se except??e como requisito para el Tratamiento, de
                    conformidad con lo previsto en el art??culo 10 de la presente ley;
                    c) Ser informado por el Responsable del Tratamiento o el Encargado del
                    Tratamiento, previa solicitud, respecto del uso que le ha dado a sus datos
                    personales;
                    d) Presentar ante la Superintendencia de Industria y Comercio quejas por
                    infracciones a lo dispuesto en la presente ley y las dem??s normas que la
                    modifiquen, adicionen o complementen;
                    e) Revocar la autorizaci??n y/o solicitar la supresi??n del dato cuando en el
                    Tratamiento no se respeten los principios, derechos y garant??as constitucionales
                    y legales. La revocatoria y/o supresi??n proceder?? cuando la Superintendencia
                    de Industria y Comercio haya determinado que en el Tratamiento el
                    Responsable o Encargado han incurrido en conductas contrarias a esta ley y a
                    la Constituci??n;
                    f) Acceder en forma gratuita a sus datos personales que hayan sido objeto de
                    Tratamiento.
                    Art??culo 9??. Autorizaci??n del Titular. Sin perjuicio de las excepciones
                    previstas en la ley, en el Tratamiento se requiere la autorizaci??n previa e
                    informada del Titular, la cual deber?? ser obtenida por cualquier medio que
                    pueda ser objeto de consulta posterior.
                    Art??culo 10. Casos en que no es necesaria la autorizaci??n. La autorizaci??n
                    del Titular no ser?? necesaria cuando se trate de:
                    a) Informaci??n requerida por una entidad p??blica o administrativa en ejercicio de
                    sus funciones legales o por orden judicial;
                    b) Datos de naturaleza p??blica;
                    c) Casos de urgencia m??dica o sanitaria;
                    d) Tratamiento de informaci??n autorizado por la ley para fines hist??ricos,
                    estad??sticos o cient??ficos;
                    e) Datos relacionados con el Registro Civil de las Personas.
                    Quien acceda a los datos personales sin que medie autorizaci??n previa deber??
                    en todo caso cumplir con las disposiciones contenidas en la presente ley.
                    Art??culo 11. Suministro de la informaci??n. La informaci??n solicitada podr?? ser
                    suministrada por cualquier medio, incluyendo los electr??nicos, seg??n lo requiera
                    el Titular. La informaci??n deber?? ser de f??cil lectura, sin barreras t??cnicas que
                    impidan su acceso y deber?? corresponder en un todo a aquella que repose en
                    la base de datos.
                    El Gobierno Nacional establecer?? la forma en la cual los Responsables del
                    Tratamiento y Encargados del Tratamiento deber??n suministrar la informaci??n
                    del Titular, atendiendo a la naturaleza del dato personal, Esta reglamentaci??n
                    deber?? darse a m??s tardar dentro del a??o siguiente a la promulgaci??n de la
                    presente ley.
                    Art??culo 12. Deber de informar al Titular. El Responsable del Tratamiento, al
                    momento de solicitar al Titular la autorizaci??n, deber?? informarle de manera
                    clara y expresa lo siguiente:
                    a) El Tratamiento al cual ser??n sometidos sus datos personales y la finalidad del
                    mismo;
                    b) El car??cter facultativo de la respuesta a las preguntas que le sean hechas,
                    cuando estas versen sobre datos sensibles o sobre los datos de las ni??as,
                    ni??os y adolescentes;
                    c) Los derechos que le asisten como Titular;
                    d) La identificaci??n, direcci??n f??sica o electr??nica y tel??fono del Responsable del
                    Tratamiento.
                    Par??grafo. El Responsable del Tratamiento deber?? conservar prueba del
                    cumplimiento de lo previsto en el presente art??culo y, cuando el Titular lo solicite,
                    entregarle copia de esta.
                    Art??culo 13. Personas a quienes se les puede suministrar la informaci??n.
                    La informaci??n que re??na las condiciones establecidas en la presente ley podr??
                    suministrarse a las siguientes personas:
                    a) A los Titulares, sus causahabientes o sus representantes legales;
                    b) A las entidades p??blicas o administrativas en ejercicio de sus funciones
                    legales o por orden judicial;
                    c) A los terceros autorizados por el Titular o por la ley.
                    T??TULO V
                    PROCEDIMIENTOS
                    Art??culo 14. Consultas. Los Titulares o sus causahabientes podr??n consultar la
                    informaci??n personal del Titular que repose en cualquier base de datos, sea
                    esta del sector p??blico o privado. El Responsable del Tratamiento o Encargado
                    del Tratamiento deber??n suministrar a estos toda la informaci??n contenida en el
                    registro individual o que est?? vinculada con la identificaci??n del Titular.
                    La consulta se formular?? por el medio habilitado por el Responsable del
                    Tratamiento o Encargado del Tratamiento, siempre y cuando se pueda
                    mantener prueba de esta.
                    La consulta ser?? atendida en un t??rmino m??ximo de diez (10) d??as h??biles
                    contados a partir de la fecha de recibo de la misma. Cuando no fuere posible
                    atender la consulta dentro de dicho t??rmino, se informar?? al interesado,
                    expresando los motivos de la demora y se??alando la fecha en que se atender??
                    su consulta, la cual en ning??n caso podr?? superar los cinco (5) d??as h??biles
                    siguientes al vencimiento del primer t??rmino.
                    Par??grafo. Las disposiciones contenidas en leyes especiales o los reglamentos
                    expedidos por el Gobierno Nacional podr??n establecer t??rminos inferiores,
                    atendiendo a la naturaleza del dato personal.
                    Art??culo 15. Reclamos. El Titular o sus causahabientes que consideren que la
                    informaci??n contenida en una base de datos debe ser objeto de correcci??n,
                    actualizaci??n o supresi??n, o cuando adviertan el presunto incumplimiento de
                    cualquiera de los deberes contenidos en esta ley, podr??n presentar un reclamo
                    ante el Responsable del Tratamiento o el Encargado del Tratamiento el cual
                    ser?? tramitado bajo las siguientes reglas:
                    1. El reclamo se formular?? mediante solicitud dirigida al Responsable del
                    Tratamiento o al Encargado del Tratamiento, con la identificaci??n del Titular, la
                    descripci??n de los hechos que dan lugar al reclamo, la direcci??n, y
                    acompa??ando los documentos que se quiera hacer valer. Si el reclamo resulta
                    incompleto, se requerir?? al interesado dentro de los cinco (5) d??as siguientes a
                    la recepci??n del reclamo para que subsane las fallas. Transcurridos dos (2)
                    meses desde la fecha del requerimiento, sin que el solicitante presente la
                    informaci??n requerida, se entender?? que ha desistido del reclamo.
                    En caso de que quien reciba el reclamo no sea competente para resolverlo,
                    dar?? traslado a quien corresponda en un t??rmino m??ximo de dos (2) d??as
                    h??biles e informar?? de la situaci??n al interesado.
                    2. Una vez recibido el reclamo completo, se incluir?? en la base de datos una
                    leyenda que diga "reclamo en tr??mite" y el motivo del mismo, en un t??rmino no
                    mayor a dos (2) d??as h??biles. Dicha leyenda deber?? mantenerse hasta que el
                    reclamo sea decidido.
                    3. El t??rmino m??ximo para atender el reclamo ser?? de quince (15) d??as h??biles
                    contados a partir del d??a siguiente a la fecha de su recibo. Cuando no fuere
                    posible atender el reclamo dentro de dicho t??rmino, se informar?? al interesado
                    los motivos de la demora y la fecha en que se atender?? su reclamo, la cual en
                    ning??n caso podr?? superar los ocho (8) d??as h??biles siguientes al vencimiento
                    del primer t??rmino.
                    Art??culo 16. Requisito de procedibilidad. El Titular o causahabiente s??lo
                    podr?? elevar queja ante la Superintendencia de Industria y Comercio una vez
                    haya agotado el tr??mite de consulta o reclamo ante el Responsable del
                    Tratamiento o Encargado del Tratamiento.
                    T??TULO VI
                    DEBERES DE LOS RESPONSABLES DEL TRATAMIENTO Y ENCARGADOS
                    DEL TRATAMIENTO
                    Art??culo 17. Deberes de los Responsables del Tratamiento. Los
                    Responsables del Tratamiento deber??n cumplir los siguientes deberes, sin
                    perjuicio de las dem??s disposiciones previstas en la presente ley y en otras que
                    rijan su actividad:
                    a) Garantizar al Titular, en todo tiempo, el pleno y efectivo ejercicio del derecho
                    de h??beas data;
                    b) Solicitar y conservar, en las condiciones previstas en la presente ley, copia de
                    la respectiva autorizaci??n otorgada por el Titular;
                    c) Informar debidamente al Titular sobre la finalidad de la recolecci??n y los
                    derechos que le asisten por virtud de la autorizaci??n otorgada;
                    d) Conservar la informaci??n bajo las condiciones de seguridad necesarias para
                    impedir su adulteraci??n, p??rdida, consulta, uso o acceso no autorizado o
                    fraudulento;
                    e) Garantizar que la informaci??n que se suministre al Encargado del
                    Tratamiento sea veraz, completa, exacta, actualizada, comprobable y
                    comprensible;
                    f) Actualizar la informaci??n, comunicando de forma oportuna al Encargado del
                    Tratamiento, todas las novedades respecto de los datos que previamente le
                    haya suministrado y adoptar las dem??s medidas necesarias para que la
                    informaci??n suministrada a este se mantenga actualizada;
                    g) Rectificar la informaci??n cuando sea incorrecta y comunicar lo pertinente al
                    Encargado del Tratamiento;
                    h) Suministrar al Encargado del Tratamiento, seg??n el caso, ??nicamente datos
                    cuyo Tratamiento est?? previamente autorizado de conformidad con lo previsto
                    en la presente ley;
                    i) Exigir al Encargado del Tratamiento en todo momento, el respeto a las
                    condiciones de seguridad y privacidad de la informaci??n del Titular;
                    j) Tramitar las consultas y reclamos formulados en los t??rminos se??alados en la
                    presente ley;
                    k) Adoptar un manual interno de pol??ticas y procedimientos para garantizar el
                    adecuado cumplimiento de la presente ley y en especial, para la atenci??n de
                    consultas y reclamos;
                    l) Informar al Encargado del Tratamiento cuando determinada informaci??n se
                    encuentra en discusi??n por parte del Titular, una vez se haya presentado la
                    reclamaci??n y no haya finalizado el tr??mite respectivo;
                    m) Informar a solicitud del Titular sobre el uso dado a sus datos;
                    n) Informar a la autoridad de protecci??n de datos cuando se presenten
                    violaciones a los c??digos de seguridad y existan riesgos en la administraci??n de
                    la informaci??n de los Titulares.
                    o) Cumplir las instrucciones y requerimientos que imparta la Superintendencia
                    de Industria y Comercio.
                    Art??culo 18. Deberes de los Encargados del Tratamiento. Los Encargados
                    del Tratamiento deber??n cumplir los siguientes deberes, sin perjuicio de las
                    dem??s disposiciones previstas en la presente ley y en otras que rijan su
                    actividad:
                    a) Garantizar al Titular, en todo tiempo, el pleno y efectivo ejercicio del derecho
                    de h??beas data;
                    b) Conservar la informaci??n bajo las condiciones de seguridad necesarias para
                    impedir su adulteraci??n, p??rdida, consulta, uso o acceso no autorizado o
                    fraudulento;
                    c) Realizar oportunamente la actualizaci??n, rectificaci??n o supresi??n de los
                    datos en los t??rminos de la presente ley;
                    d) Actualizar la informaci??n reportada por los Responsables del Tratamiento
                    dentro de los cinco (5) d??as h??biles contados a partir de su recibo;
                    e) Tramitar las consultas y los reclamos formulados por los Titulares en los
                    t??rminos se??alados en la presente ley;
                    f) Adoptar un manual interno de pol??ticas y procedimientos para garantizar el
                    adecuado cumplimiento de la presente ley y, en especial, para la atenci??n de
                    consultas y reclamos por parte de los Titulares;
                    g) Registrar en la base de datos las leyenda "reclamo en tr??mite" en la forma en
                    que se regula en la presente ley;
                    h) Insertar en la base de datos la leyenda "informaci??n en discusi??n judicial"
                    una vez notificado por parte de la autoridad competente sobre procesos
                    judiciales relacionados con la calidad del dato personal;
                    i) Abstenerse de circular informaci??n que est?? siendo controvertida por el Titular
                    y cuyo bloqueo haya sido ordenado por la Superintendencia de Industria y
                    Comercio;
                    j) Permitir el acceso a la informaci??n ??nicamente a las personas que pueden
                    tener acceso a ella;
                    k) Informar a la Superintendencia de Industria y Comercio cuando se presenten
                    violaciones a los c??digos de seguridad y existan riesgos en la administraci??n de
                    la informaci??n de los Titulares;
                    l) Cumplir las instrucciones y requerimientos que imparta la Superintendencia
                    de Industria y Comercio.
                    Par??grafo. En el evento en que concurran las calidades de Responsable del
                    Tratamiento y Encargado del Tratamiento en la misma persona, le ser?? exigible
                    el cumplimiento de los deberes previstos para cada uno.
                    T??TULO VII
                    DE LOS MECANISMOS DE VIGILANCIA Y SANCI??N
                    CAP??TULO I
                    De la autoridad de protecci??n de datos
                    Art??culo 19. Autoridad de Protecci??n de Datos. La Superintendencia de
                    Industria y Comercio, a trav??s de una Delegatura para la Protecci??n de Datos
                    Personales, ejercer?? la vigilancia para garantizar que en el Tratamiento de
                    datos personales se respeten los principios, derechos, garant??as y
                    procedimientos previstos en la presente ley.
                    Par??grafo 1??. El Gobierno Nacional en el plazo de seis (6) meses contados a
                    partir de la fecha de entrada en vigencia de la presente ley incorporar?? dentro
                    de la estructura de la Superintendencia de Industria y Comercio un despacho
                    de Superintendente Delegado para ejercer las funciones de Autoridad de
                    Protecci??n de Datos.
                    Par??grafo 2??. La vigilancia del tratamiento de los datos personales regulados
                    en la Ley 1266 de 2008 se sujetar?? a lo previsto en dicha norma.
                    Art??culo 20. Recursos para el ejercicio de sus funciones. La
                    Superintendencia de Industria y Comercio contar?? con los siguientes recursos
                    para ejercer las funciones que le son atribuidas por la presente ley:
                    a) Los recursos que le sean destinados en el Presupuesto General de la
                    Naci??n.
                    Art??culo 21. Funciones. La Superintendencia de Industria y Comercio ejercer??
                    las siguientes funciones:
                    a) Velar por el cumplimiento de la legislaci??n en materia de protecci??n de datos
                    personales;
                    b) Adelantar las investigaciones del caso, de oficio o a petici??n de parte y, como
                    resultado de ellas, ordenar las medidas que sean necesarias para hacer
                    efectivo el derecho de h??beas data. Para el efecto, siempre que se desconozca
                    el derecho, podr?? disponer que se conceda el acceso y suministro de los datos,
                    la rectificaci??n, actualizaci??n o supresi??n de los mismos;
                    c) Disponer el bloqueo temporal de los datos cuando, de la solicitud y de las
                    pruebas aportadas por el Titular, se identifique un riesgo cierto de vulneraci??n
                    de sus derechos fundamentales, y dicho bloqueo sea necesario para
                    protegerlos mientras se adopta una decisi??n definitiva;
                    d) Promover y divulgar los derechos de las personas en relaci??n con el
                    Tratamiento de datos personales e implementar?? campa??as pedag??gicas para
                    capacitar e informar a los ciudadanos acerca del ejercicio y garant??a del
                    derecho fundamental a la protecci??n de datos;
                    e) Impartir instrucciones sobre las medidas y procedimientos necesarios para la
                    adecuaci??n de las operaciones de los Responsables del Tratamiento y
                    Encargados del Tratamiento a las disposiciones previstas en la presente ley;
                    f) Solicitar a los Responsables del Tratamiento y Encargados del Tratamiento la
                    informaci??n que sea necesaria para el ejercicio efectivo de sus funciones.
                    g) Proferir las declaraciones de conformidad sobre las transferencias
                    internacionales de datos;
                    h) Administrar el Registro Nacional P??blico de Bases de Datos y emitir las
                    ??rdenes y los actos necesarios para su administraci??n y funcionamiento;
                    i) Sugerir o recomendar los ajustes, correctivos o adecuaciones a la
                    normatividad que resulten acordes con la evoluci??n tecnol??gica, inform??tica o
                    comunicacional;
                    j) Requerir la colaboraci??n de entidades internacionales o extranjeras cuando
                    se afecten los derechos de los Titulares fuera del territorio colombiano con
                    ocasi??n, entre otras, de la recolecci??n internacional de datos personajes;
                    k) Las dem??s que le sean asignadas por ley.
                    CAP??TULO II
                    Procedimiento y sanciones
                    Art??culo 22. Tr??mite. La Superintendencia de Industria y Comercio, una vez
                    establecido el incumplimiento de las disposiciones de la presente ley por parte
                    del Responsable del Tratamiento o el Encargado del Tratamiento, adoptar?? las
                    medidas o impondr?? las sanciones correspondientes.
                    En lo no reglado por la presente ley y los procedimientos correspondientes se
                    seguir??n las normas pertinentes del C??digo Contencioso Administrativo.
                    Art??culo 23. Sanciones. La Superintendencia de Industria y Comercio podr??
                    imponer a los Responsables del Tratamiento y Encargados del Tratamiento las
                    siguientes sanciones:
                    a) Multas de car??cter personal e institucional hasta por el equivalente de dos mil
                    (2.000) salarios m??nimos mensuales legales vigentes al momento de la
                    imposici??n de la sanci??n. Las multas podr??n ser sucesivas mientras subsista el
                    incumplimiento que las origin??;
                    b) Suspensi??n de las actividades relacionadas con el Tratamiento hasta por un
                    t??rmino de seis (6) meses. En el acto de suspensi??n se indicar??n los correctivos
                    que se deber??n adoptar;
                    c) Cierre temporal de las operaciones relacionadas con el Tratamiento una vez
                    transcurrido el t??rmino de suspensi??n sin que se hubieren adoptado los
                    correctivos ordenados por la Superintendencia de Industria y Comercio;
                    d) Cierre inmediato y definitivo de la operaci??n que involucre el Tratamiento de
                    datos sensibles;
                    Par??grafo. Las sanciones indicadas en el presente art??culo s??lo aplican para las
                    personas de naturaleza privada. En el evento en el cual la Superintendencia de
                    Industria y Comercio advierta un presunto incumplimiento de una autoridad
                    p??blica a las disposiciones de la presente ley, remitir?? la actuaci??n a la
                    Procuradur??a General de la Naci??n para que adelante la investigaci??n
                    respectiva.
                    Art??culo 24. Criterios para graduar las sanciones. Las sanciones por
                    infracciones a las que se refieren el art??culo anterior, se graduar??n atendiendo
                    los siguientes criterios, en cuanto resulten aplicables:
                    a) La dimensi??n del da??o o peligro a los intereses jur??dicos tutelados por la
                    presente ley;
                    b) El beneficio econ??mico obtenido por el infractor o terceros, en virtud de la
                    comisi??n de la infracci??n;
                    c) La reincidencia en la comisi??n de la infracci??n;
                    d) La resistencia, negativa u obstrucci??n a la acci??n investigadora o de
                    vigilancia de la Superintendencia de Industria y Comercio;
                    e) La renuencia o desacato a cumplir las ??rdenes impartidas por la
                    Superintendencia de Industria y Comercio;
                    f) El reconocimiento o aceptaci??n expresos que haga el investigado sobre la
                    comisi??n de la infracci??n antes de la imposici??n de la sanci??n a que hubiere
                    lugar.
                    CAP??TULO III
                    Del Registro Nacional de Bases de Datos
                    Art??culo 25. Definici??n. El Registro Nacional de Bases de Datos es el
                    directorio p??blico de las bases de datos sujetas a Tratamiento que operan en el
                    pa??s.
                    El registro ser?? administrado por la Superintendencia de Industria y Comercio y
                    ser?? de libre consulta para los ciudadanos.
                    Para realizar el registro de bases de datos, los interesados deber??n aportar a la
                    Superintendencia de Industria y Comercio las pol??ticas de tratamiento de la
                    informaci??n, las cuales obligar??n a los responsables y encargados del mismo, y
                    cuyo incumplimiento acarrear?? las sanciones correspondientes. Las pol??ticas de
                    Tratamiento en ning??n caso podr??n ser inferiores a los deberes contenidos en
                    la presente ley.
                    Par??grafo. El Gobierno Nacional reglamentar??, dentro del a??o siguiente a la
                    promulgaci??n de la presente ley, la informaci??n m??nima que debe contener el
                    Registro, y los t??rminos y condiciones bajo los cuales se deben inscribir en este
                    los Responsables del Tratamiento.
                    T??TULO VIII
                    TRANSFERENCIA DE DATOS A TERCEROS PA??SES
                    Art??culo 26. Prohibici??n. Se proh??be la transferencia de datos personales de
                    cualquier tipo a pa??ses que no proporcionen niveles adecuados de protecci??n
                    de datos. Se entiende que un pa??s ofrece un nivel adecuado de protecci??n de
                    datos cuando cumpla con los est??ndares fijados por la Superintendencia de
                    Industria y Comercio sobre la materia, los cuales en ning??n caso podr??n ser
                    inferiores a los que la presente ley exige a sus destinatarios.
                    Esta prohibici??n no regir?? cuando se trate de:
                    a) Informaci??n respecto de la cual el Titular haya otorgado su autorizaci??n
                    expresa e inequ??voca para la transferencia;
                    b) Intercambio de datos de car??cter m??dico, cuando as?? lo exija el Tratamiento
                    del Titular por razones de salud o higiene p??blica;
                    c) Transferencias bancarias o burs??tiles, conforme a la legislaci??n que les
                    resulte aplicable;
                    d) Transferencias acordadas en el marco de tratados internacionales en los
                    cuales la Rep??blica de Colombia sea parte, con fundamento en el principio de
                    reciprocidad;
                    e) Transferencias necesarias para la ejecuci??n de un contrato entre el Titular y
                    el Responsable del Tratamiento, o para la ejecuci??n de medidas
                    precontractuales siempre y cuando se cuente con la autorizaci??n del Titular;
                    f) Transferencias legalmente exigidas para la salvaguardia del inter??s p??blico, o
                    para el reconocimiento, ejercicio o defensa de un derecho en un proceso
                    judicial.
                    Par??grafo 1??. En los casos no contemplados como excepci??n en el presente
                    art??culo, corresponder?? a la Superintendencia de Industria y Comercio, proferir
                    la declaraci??n de conformidad relativa a la transferencia internacional de datos
                    personales. Para el efecto, el Superintendente queda facultado para requerir
                    informaci??n y adelantar las diligencias tendientes a establecer el cumplimiento
                    de los presupuestos que requiere la viabilidad de la operaci??n.
                    Par??grafo 2??. Las disposiciones contenidas en el presente art??culo ser??n
                    aplicables para todos los datos personales, incluyendo aquellos contemplados
                    en la Ley1266 de 2008.
                    T??TULO IX
                    OTRAS DISPOSICIONES
                    Art??culo 27. Normas Corporativas Vinculantes. El Gobierno Nacional
                    expedir?? la reglamentaci??n correspondiente sobre Normas Corporativas
                    Vinculantes para la certificaci??n de buenas pr??cticas en protecci??n de datos,
                    personales y su transferencia a terceros pa??ses.
                    Art??culo 28. R??gimen de transici??n. Las personas que a la fecha de entrada
                    en vigencia de la presente ley ejerzan alguna de las actividades ac?? reguladas
                    tendr??n un plazo de hasta seis (6) meses para adecuarse a las disposiciones
                    contempladas en esta ley.
                    Art??culo 29. Derogatorias. La presente ley deroga todas las disposiciones que
                    le sean contrarias a excepci??n de aquellas contempladas en el art??culo 2??.
                    Art??culo 30. Vigencia. La presente ley rige a partir de su promulgaci??n.
                    El Presidente del honorable Senado de la Rep??blica,
                    ROY LEONARDO BARRERAS MONTEALEGRE.
                    El Secretario General del honorable Senado de la Rep??blica,
                    GREGORIO ELJACH PACHECO.
                    El Presidente de la honorable C??mara de Representantes,
                    AUGUSTO POSADA S??NCHEZ.
                    La Secretaria General (E.) de la honorable C??mara de Representantes,
                    FLOR MARINA DAZA RAM??REZ.
                    REP??BLICA DE COLOMBIA ??? GOBIERNO NACIONAL
                    PUBL??QUESE Y C??MPLASE.
                    En cumplimiento de lo dispuesto en la Sentencia C-748 de 2011 proferida
                    por la Corte Constitucional, se procede a la sanci??n del proyecto de ley, la
                    cual ordena la remisi??n del expediente al Congreso de la Rep??blica, para
                    continuar el tr??mite de rigor y posterior env??o al Presidente de la
                    Rep??blica.
                    Dada en Bogot??, D. C., a 17 d??as del mes de octubre de 2012.
                    JUAN MANUEL SANTOS CALDER??N
                    La Ministra de Justicia y del Derecho,
                    RUTH STELLA CORREA PALACIO.
                    El Ministro de Hacienda y Cr??dito P??blico,
                    MAURICIO C??RDENAS SANTA MAR??A.
                    El Ministro de Comercio, Industria y Turismo,
                    SERGIO DIAZ-GRANADOS GUIDA.
                    El Ministro de Tecnolog??as, de la Informaci??n y las Comunicaciones,
                    DIEGO MOLANO VEGA.
                    NOTA: Publicada en el Diario Oficial 48587 de octubre 18 de 2012</p>
              </div>

              <!-- Modal footer -->
              <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
              </div>

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
