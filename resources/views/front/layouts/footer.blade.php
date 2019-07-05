<!--====== FOOTER PART START ======-->

<section id="footer-part" class="footer-part pt-70 pb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="footer-description pt-50">
                    <div class="logo mb-20">
                        <a href="{{ url('/') }}">
                            <img src="{{ asset('dist/img/logo-footer.png') }}" alt="Logo">
                        </a>
                    </div>
                    <p class="mb-15">Trabajamos para hacer nuestros productos intuitivos y de fácil acceso. Nos esforzamos para
                        llevar a tu jardín al Siglo XXI.</p>
                    <ul>
                        <li><a href="https://www.facebook.com/KinderGestión-2412053092346019" target="_blank"><i class="flaticon-facebook"></i></a></li>
                        </li>
                    </ul>
                </div> <!-- footer description -->
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="footer-link pt-45 pl-50">
                    <div class="title mb-30">
                        <h4>Links Útiles</h4>
                    </div>
                    <ul>
                        <li><a href="{{ request()->is('blog') ? url('/').'/#about' : '#about' }}"><i class="fa fa-angle-right"></i> Sobre Nosotros</a></li>
                        <li><a href="{{ route('faq') }}"><i class="fa fa-angle-right"></i> Preguntas Frecuentes</a></li>
                        <li><a href="#latest-news"><i class="fa fa-angle-right"></i> Blog</a></li>
                        <li><a href="#login"><i class="fa fa-angle-right"></i> Registrarse</a></li>
{{--                        <li><a href="{{ request()->is('blog') ? url('/').'/#price' : '#price' }}"><i class="fa fa-angle-right"></i> Precios</a></li>--}}
                    </ul>
                </div> <!-- footer link -->
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="footer-contact pt-45">
                    <div class="title mb-35">
                        <h4>Contact Us</h4>
                    </div>
                    <ul>
                        <li>
                            <p>+54 9 261 5965966</p>
                        </li>
                        <li>
                            <p>info@kindergestion.com</p>
                        </li>
                    </ul>
                </div> <!-- footer contact -->
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="footer-subscribe pt-45">
                    <div class="title mb-35">
                        <h4>Suscribirse</h4>
                    </div>
                    <p>Recibe todas las novedades de KinderGestion en tu casilla de Mail</p>
                    <div class="subscribe-form mt-25">
                        {!! Form::open(['method' => 'POST','route' => ['newsLetter'],'style'=>'display:inline']) !!}
                        {{ csrf_field() }}
                        <input type="text" name="email" placeholder="Email">
                        <button type="submit"><i class="flaticon-send"></i></button>
                        {!! Form::Close() !!}
                    </div>
                </div>  <!-- footer subscribe -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== FOOTER PART ENDS ======-->

<!--====== COPYRIGHT PART START ======-->

<section id="copyright-part" class="copyright-part pt-15 pb-25">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="copyright-content text-center text-lg-left pt-10">
                    <p>&copy; 2019. Designed By DenarMA</p>
                </div> <!-- copyright content -->
            </div>
            <div class="col-lg-6">
                <div class="copyright-policy text-center text-lg-right pt-10">
                    <ul>
                        <li><a href="{{ route('term') }}">Términos y Condiciones</a></li>
                        <li><a href="{{ route('polity') }}">Política de Privacidad</a></li>
                        <li><a href="{{ url('#contact') }}">Contactenos</a></li>
                    </ul>
                </div>
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== COPYRIGHT PART ENDS ======-->
