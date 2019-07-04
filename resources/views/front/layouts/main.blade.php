<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>

    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
    <title>KinderGestion | Un software para tu guarderia</title>

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}" type="image/png">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="{{ asset('front/assets/css/bootstrap.min.css') }}">

    <!--====== Flaticon css ======-->
    <link rel="stylesheet" href="{{ asset('front/assets/css/flaticon.css') }}">

    <!--====== Fontawesome css ======-->
    <link rel="stylesheet" href="{{ asset('front/assets/css/font-awesome.min.css') }}">

    <!--====== Animate css ======-->
    <link rel="stylesheet" href="{{ asset('front/assets/css/animate.css') }}">

    <!--====== Slick css ======-->
    <link rel="stylesheet" href="{{ asset('front/assets/css/slick.css') }}">

    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="{{ asset('front/assets/css/magnific-popup.css') }}">

    <!--====== Nice Number css ======-->
    <link rel="stylesheet" href="{{ asset('front/assets/css/jquery.nice-number.min.css') }}">

    <!--====== Default css ======-->
    <link rel="stylesheet" href="{{ asset('front/assets/css/default.css') }}">

    <!--====== Style css ======-->
    <link rel="stylesheet" href="{{ asset('front/assets/css/style.css') }}">


</head>

<body>


<!--====== PRELOADER PART START ======-->

<div class="preloader">
    <div class="loader">
        <div class="sk-cube-grid">
            <div class="sk-cube sk-cube1"></div>
            <div class="sk-cube sk-cube2"></div>
            <div class="sk-cube sk-cube3"></div>
            <div class="sk-cube sk-cube4"></div>
            <div class="sk-cube sk-cube5"></div>
            <div class="sk-cube sk-cube6"></div>
            <div class="sk-cube sk-cube7"></div>
            <div class="sk-cube sk-cube8"></div>
            <div class="sk-cube sk-cube9"></div>
        </div>
    </div>
</div>

<!--====== PRELOADER PART START ======-->

<!--====== HEADER PART START ======-->

@include('front.parts.menu')

<!--====== HEADER PART ENDS ======-->


<!--====== SLIDER PART START ======-->

@include('front.parts.slider')

<!--====== SLIDER PART ENDS ======-->

<!--====== Login ======-->
@include('front.parts.login')

<!--====== Login ======-->

<!--====== FEATUERS PART START ======-->

<section id="features-part" class="featuera pt-45 pb-75"
         style="background-image: url({{ asset('front/assets/media/img/dots.jpg') }})">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="singel-features d-flex align-items-start mt-30 justify-content-center">
                    <div class="icon">
                        <img src="{{ asset('dist/icons/settings.png') }}">
                    </div>
                    <div class="content pl-20">
                        <h5>Fácil de usar</h5>
                        <p>El sistema para simplificar su trabajo como el de sus docentes.</p>
                    </div>
                </div> <!-- singel features -->
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="singel-features d-flex align-items-start mt-30 justify-content-center">
                    <div class="icon">
                        <img src="{{ asset('dist/icons/family.png') }}">
                    </div>
                    <div class="content pl-20">
                        <h5>Plataforma para padres</h5>
                        <p>Una plataforma para padres muy simple de utilizar.</p>
                    </div>
                </div> <!-- singel features -->
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="singel-features d-flex align-items-start mt-30 justify-content-center">
                    <div class="icon">
                        <img src="{{ asset('dist/icons/network.png') }}">
                    </div>
                    <div class="content pl-20">
                        <h5>Plataforma para jardín</h5>
                        <p>Plataforma dedicada a la guardería muy fácil de utilizar y realizar comunicaciones con los
                            padres.</p>
                    </div>
                </div> <!-- singel features -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== FEATUERS PART ENDS ======-->

<!--====== SERVICES PART START ======-->

<section id="services-part" class="pt-120 pb-130">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4">
                <div class="section-title text-center pb-15">
                    <h3>Lo que ofrecemos</h3>
                    <div class="underline">
                        <span></span>
                        <span></span>
                    </div>
                </div> <!-- section title -->
            </div>
        </div> <!-- row -->
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 col-sm-8">
                <div class="singel-services text-center mt-45">
                    <div class="icon mb-30">
                        <img src="{{ asset('dist/icons/service.png') }}">
                    </div>
                    <div class="content">
                        <a href=""><h4>Soporte dedicado</h4></a>
                        <p class="mt-20">Ofrecemos un soporte a nuestros clientes dedicado para que puedan solucionar
                            sus eventuales problemas.</p>
                    </div>
                </div> <!-- singel services -->
            </div>
            <div class="col-lg-4 col-md-6 col-sm-8">
                <div class="singel-services text-center mt-45">
                    <div class="icon mb-30">
                        <img src="{{ asset('dist/icons/bell.png') }}">
                    </div>
                    <div class="content">
                        <a href=""><h4>Notificaciones</h4></a>
                        <p class="mt-20">Tanto los padres como los docentes o dueños de jardines tienen la posibilidad
                            de comunicarse en tiempo real.</p>
                    </div>
                </div> <!-- singel services -->
            </div>
            <div class="col-lg-4 col-md-6 col-sm-8">
                <div class="singel-services text-center mt-45">
                    <div class="icon mb-30">
                        <img src="{{ asset('dist/icons/calendar.png') }}">
                    </div>
                    <div class="content">
                        <a href=""><h4>Calendario</h4></a>
                        <p class="mt-20">El jardín y los padres podrán ver en un calendario los próximos eventos de la
                            guardería.</p>
                    </div>
                </div> <!-- singel services -->
            </div>
            <div class="col-lg-4 col-md-6 col-sm-8">
                <div class="singel-services text-center mt-45">
                    <div class="icon mb-30">
                        <img src="{{ asset('dist/icons/calendar.png') }}">
                    </div>
                    <div class="content">
                        <a href=""><h4>Gráficas</h4></a>
                        <p class="mt-20">Gráficas de alumnos inscriptos en el último tiempo, tendrá un panorama amplio
                            sobre la cantidad de alumnos inscriptos en su guardería.</p>
                    </div>
                </div> <!-- singel services -->
            </div>
            <div class="col-lg-4 col-md-6 col-sm-8">
                <div class="singel-services text-center mt-45">
                    <div class="icon mb-30">
                        <img src="{{ asset('dist/icons/conversation.png') }}">
                    </div>
                    <div class="content">
                        <a href=""><h4>Circulares</h4></a>
                        <p class="mt-20">Creación y difusión de circulares, para la comunicación de todos los padres del
                            jardín.</p>
                    </div>
                </div> <!-- singel services -->
            </div>
            <div class="col-lg-4 col-md-6 col-sm-8">
                <div class="singel-services text-center mt-45">
                    <div class="icon mb-30">
                        <img src="{{ asset('dist/icons/email.png') }}">
                    </div>
                    <div class="content">
                        <a href=""><h4>EMails</h4></a>
                        <p class="mt-20">Tanto padres como dueños y docentes podrán comunicarse entre ellos a través de
                            emails.</p>
                    </div>
                </div> <!-- singel services -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== SERVICES PART ENDS ======-->

<!--====== COMPANY ABOUT PART START ======-->

<section id="about" class="pt-80 pb-130 gray-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="company-about-cont pt-45">
                    <h5 class="mb-15">Sobre Nosotros</h5>
                    <h3 class="mb-15">Te contamos un poco sobre nosotros</h3>
                    <p>Somos una empresa dedicada al desarrollo de aplicaciones webs y soluciones empresariales. Vimos
                        la necesidad de que la comunicación
                        entre guarderías infantiles y padres sigue siendo muy precaria.
                        <br>
                        <br>
                        Trabajamos día a día para poder cumplir los sueños y metas de nuestros clientes y nos enfocamos
                        para que se puedan cumplir.
                    </p>
                </div> <!-- company about cont -->
            </div>
            <div class="col-lg-6 pt-50">
                <div class="company-about-image">
                    <img src="{{ asset('dist/img/about.jpg') }}" alt="About">
                </div> <!-- company about image -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== COMPANY ABOUT PART ENDS ======-->

<!--====== Prices ======-->

{{--@include('front.parts.prices')--}}

<!--====== Prices END ======-->

<!--====== COUNTER PART START ======-->

<section id="counter-part" class="counter-part pt-80 pb-130">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="counter-area">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="singel-counter text-center mt-40">
                                <span><span class="counter">40</span>+</span>
                                <p>Guarderías</p>
                            </div> <!-- singel counter -->
                        </div>
                        <div class="col-sm-6">
                            <div class="singel-counter text-center mt-40">
                                <span class="counter">1259</span>
                                <p>Alumnos</p>
                            </div> <!-- singel counter -->
                        </div>
                        <div class="col-sm-6">
                            <div class="singel-counter text-center mt-40">
                                <span class="counter">14</span>
                                <p>Provincias</p>
                            </div> <!-- singel counter -->
                        </div>
                        <div class="col-sm-6">
                            <div class="singel-counter text-center mt-40">
                                <span class="counter">186</span>
                                <p>Educadores</p>
                            </div> <!-- singel counter -->
                        </div>
                    </div> <!-- row -->
                </div>
            </div>
            <div class="col-lg-6">
                <div class="counter-call-to-action mt-120">
                    <h3 class="mb-20">Nos esforzamos por seguir creciendo</h3>
                    <p class="mb-25">Utilizan nuestra plataforma centros educativos en Chile y Argentina. Muchos de los
                        nuevos usuarios de la plataforma han sido recomendados de otras guarderías.
                        <br>
                        Queremos que nos sigan recomendando, por eso trabajamos duro diariamente, para que KinderGestión
                        crezca y tenga más funcionalidades.
                        <br>
                        Actualizamos constantemente la plataforma para un mejor funcionamiento y sumando nuevas
                        funcionalidades
                        para que padres y educadores tengan una mejor experiencia sobre el sistema.</p>
                    <a href="{{ url('#contact') }}" class="main-btn main-btn-2">Contacto</a>
                </div>
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
    <div class="counter-bg bg_cover" data-overlay="6" style="background-image: url(assets/images/bg-2.jpg)"></div>
    <!-- counter bg -->
</section>

<!--====== COUNTER PART ENDS ======-->

<!--====== JOIN OUR TEAM PART START ======-->

<section id="whats" class="pt-120 pb-130">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="join-team-content text-center">
                    <h2 class="mb-15">¿Qué es KinderGestion?</h2>
                    <p>KinderGestion es una aplicación de comunicación diseñada para Jardines de infantes y padres,
                        utilizamos una aplicación web
                        de interacción muy intuitiva y de fácil uso, limpia de publicidad y totalmente segura.</p>
                    <p>Con nuestra aplicación ya los padres no esperan el tan viejo y querido cuaderno de
                        comunicaciones, como también se evitan los
                        olvidos y pérdidas.</p>
                    <p>KinderGestion le ayudará a la guardería a enviar comunicaciones a toda una sala o a ciertos
                        padres especificamente
                        escribiendo solo una vez y evitando la repetición de la misma nota.</p>
                    <p>Tiene un sistema intuitivo para la registración de alumnos, padres y docentes, asignando a cada
                        uno un perfil
                        detallado.</p>
                    <p>Posee un completo panel administrativo para directivos y docentes del jardín, creado para
                        simplificar
                        el día a día.</p>
                    <p>Calendario con todas las actividades que realizó y realizará el jardín. De un solo vistazo se
                        podrá observar todas las actividades que posee el centro en el mes actual.</p>
                    <p>Esta aplicación dará un plus de modernidad y facilidad al jardín y la posibilidad de destacarse
                        sobre otros
                        centros educativos.</p>
                    <h6>Registra tu centro educativo totalmente gratis y probalo por 30 días sin cargo.</h6>
                    {{--<ul class="mt-10">
                        <li><a href="team-details.html#" class="main-btn">Apply now</a></li>
                        <li><a href="team-details.html#" class="main-btn main-btn-2">Your Career</a></li>
                    </ul>--}}
                </div>
            </div>
        </div>
    </div>
</section>

<!--====== JOIN OUR TEAM PART ENDS ======-->

<!--====== TESTIMONIAL PART START ======-->

<section id="testimonial-part" class="pt-120 pb-130 gray-bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-title text-center pb-20">
                    <h3>Lo que dicen algunos clientes</h3>
                    <div class="underline">
                        <span></span>
                        <span></span>
                    </div>
                </div> <!-- section title -->
            </div>
        </div> <!-- row -->
        <div class="row testimonial-slide">
            <div class="col-lg-6">
                <div class="singel-testimonial text-center mt-30">
                    <div class="testimonial-conent">
                        <p>Pudimos modernizar nuestra guardería y los padres aceptaron el sistema muy bien. La verdad que ahorramos mucho tiempo
                        en la comunicación.</p>
                    </div>
                    <div class="author-name mt-20">
                        <h6>María Laura</h6>
                        <p>- Centro Educativo Bosque del Plata</p>
                        <i class="flaticon-quote"></i>
                    </div>
                </div> <!-- singel testimonial -->
            </div>
            <div class="col-lg-6">
                <div class="singel-testimonial text-center mt-30">
                    <div class="testimonial-conent">
                        <p>La aplicación cumple con lo que promete y constantemente están agregando nuevas funcionalidades. La verdad que felicitamos
                        a kinder gestión por lo realizado.</p>
                    </div>
                    <div class="author-name mt-20">
                        <h6>Mirna</h6>
                        <p>- Colegio San Andrés</p>
                        <i class="flaticon-quote"></i>
                    </div>
                </div> <!-- singel testimonial -->
            </div>
            <div class="col-lg-6">
                <div class="singel-testimonial text-center mt-30">
                    <div class="testimonial-conent">
                        <p>Siempre pendientes por nosotros y constantemente preguntando sobre como estamos con el sistema y si necesitamos alguna ayuda.
                        La verdad que el servicio de PostVenta es lo mejor que tienen. Muchas gracias!!!</p>
                    </div>
                    <div class="author-name mt-20">
                        <h6>Dora y Pablo</h6>
                        <p>- Jardín Creciendo</p>
                        <i class="flaticon-quote"></i>
                    </div>
                </div> <!-- singel testimonial -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== TESTIMONIAL PART ENDS ======-->

<!--====== LATEST NEWS PART START ======-->

@include('front.parts.lastnews')

<!--====== LATEST NEWS PART ENDS ======-->

<!--====== CONTACT PART START ======-->

<section id="contact" class="pt-80 pb-130 gray-bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-title text-center pb-20">
                    <h3>Contactenos</h3>
                    <div class="underline">
                        <span></span>
                        <span></span>
                    </div>
                </div> <!-- section title -->
            </div>
        </div> <!-- row -->
        <div class="row justify-content-center">
            <div class="col-lg-6" style="margin-top: -7%">
                <div class="contact-form contact-form-2 mt-100">
                        {!! Form::open(['method' => 'POST','route' => ['contactmail'],'style'=>'display:inline','data-toggle'=>'validator']) !!}
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="single-form form-group">
                                    <input name="name" type="text" placeholder="Nombre" data-error="Escriba un nombre"
                                           required="required">
                                    <div class="help-block with-errors"></div>
                                </div> <!-- single form -->
                            </div>
                            <div class="col-md-6">
                                <div class="single-form form-group">
                                    <input name="email" type="email" placeholder="Email"
                                           data-error="Escriba un email válido" required="required">
                                    <div class="help-block with-errors"></div>
                                </div> <!-- single form -->
                            </div>
                            <div class="col-md-6">
                                <div class="single-form form-group">
                                    <input name="subject" type="text" placeholder="Asunto"
                                           data-error="Escriba un asunto" required="required">
                                    <div class="help-block with-errors"></div>
                                </div> <!-- single form -->
                            </div>
                            <div class="col-md-6">
                                <div class="single-form form-group">
                                    <input name="phone" type="text" placeholder="Teléfono">
                                    <div class="help-block with-errors"></div>
                                </div> <!-- single form -->
                            </div>
                            <div class="col-md-12">
                                <div class="single-form form-group">
                                    <textarea name="messageClient" placeholder="Mensaje"
                                              data-error="Por favor escriba un mensaje." required="required"></textarea>
                                    <div class="help-block with-errors"></div>
                                </div> <!-- single form -->
                            </div>
                            <p class="form-message"></p>
                            <div class="col-md-12">
                                <div class="single-form">
                                    <button type="submit" class="main-btn">Enviar</button>
                                </div> <!-- single form -->
                            </div>
                        </div> <!-- row -->
                    {!! Form::Close() !!}
                </div> <!-- contact form -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== CONTACT PART ENDS ======-->

<!--====== CALL TO ACTION PART START ======-->

{{--<section id="submit-ticket" class="submit-ticket pt-20 pb-50">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <div class="submit-ticket-content pt-25 text-center text-lg-left">
                    <h3>Are you Looking for a Consultant?</h3>
                </div> <!-- submit ticket content -->
            </div>
            <div class="col-lg-4">
                <div class="submit-ticket-btn pt-30 text-center text-lg-left">
                    <a href="about.html#" class="main-btn">Submit a ticket</a>
                </div>
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>--}}

<!--====== CALL TO ACTION PART ENDS ======-->

<!--====== FOOTER PART START ======-->

@include('front.layouts.footer')

<!--====== FOOTER PART ENDS ======-->

<!--====== BACK TO TOP PART START ======-->

<a href="index.html#" class="back-to-top">
    <i class="flaticon-chevron-up"></i>
</a>

<!--====== BACK TO TOP PART ENDS ======-->

<!--====== jquery js ======-->
<script src="{{ asset('front/assets/js/vendor/modernizr-3.6.0.min.js') }}"></script>
<script src="{{ asset('front/assets/js/vendor/jquery-1.12.4.min.js') }}"></script>

<!--====== Bootstrap js ======-->
<script src="{{ asset('front/assets/js/bootstrap.min.js') }}"></script>

<!--====== Slick js ======-->
<script src="{{ asset('front/assets/js/slick.min.js') }}"></script>

<!--====== Magnific Popup js ======-->
<script src="{{ asset('front/assets/js/jquery.magnific-popup.min.js') }}"></script>

<!--====== Isotope js ======-->
<script src="{{ asset('front/assets/js/isotope.pkgd.min.js') }}"></script>

<!--====== Images Loaded js ======-->
<script src="{{ asset('front/assets/js/imagesloaded.pkgd.min.js') }}"></script>

<!--====== Counter Up js ======-->
<script src="{{ asset('front/assets/js/waypoints.min.js') }}"></script>
<script src="{{ asset('front/assets/js/jquery.counterup.min.js') }}"></script>

<!--====== Nice Number js ======-->
<script src="{{ asset('front/assets/js/jquery.nice-number.min.js') }}"></script>

<!--====== Validator js ======-->
<script src="{{ asset('front/assets/js/validator.min.js') }}"></script>

<!--====== Ajax Contact js ======-->
<script src="{{ asset('front/assets/js/ajax-contact.js') }}"></script>

<!--====== Main js ======-->
<script src="{{ asset('front/assets/js/main.js') }}"></script>

<!--====== Map js ======-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDC3Ip9iVC0nIxC6V14CKLQ1HZNF_65qEQ"></script>
<script src="{{ asset('front/assets/js/map-script.js') }}"></script>

</body>

</html>
