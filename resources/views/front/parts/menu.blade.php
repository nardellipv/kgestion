<header id="header-part">
    <!--====== header top PART START ======-->
    <div class="header-top pb-15">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-9">
                    <div class="meta pt-15 text-center text-lg-left">
                        <ul>
                            <li><i class="fa fa-envelope"></i> support@contact.com</li>
                            <li><i class="fa fa-phone"></i> +880 17162 48413</li>
                            <li><i class="fa fa-clock-o"></i> Sun - Fri : 9.00 am to 18.pm (Sat Weekend)</li>
                        </ul>
                    </div> <!-- meta -->
                </div>
                <div class="col-lg-3">
                    <div class="social-icon text-center text-lg-right pt-15">
                        <ul>
                            <li><a href="index.html#"><i class="flaticon-facebook"></i></a></li>
                            <li><a href="index.html#"><i class="flaticon-twitter-logo-silhouette"></i></a></li>
                            <li><a href="index.html#"><i class="flaticon-google-plus"></i></a></li>
                            <li><a href="index.html#"><i class="flaticon-linkedin-logo"></i></a></li>
                            <li><a href="index.html#"><i
                                            class="flaticon-instagram-social-network-logo-of-photo-camera"></i></a></li>
                        </ul>
                    </div> <!-- social icon -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div>
    <!--====== header top PART ENDS ======-->

    <!--====== HEADER MENU PART START ======-->

    <div class="header-nemu">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-11 order-last order-lg-first">
                    <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand" href="{{ url('/') }}">
                            <img src="{{ asset('front/assets/images/logo.png') }}" alt=Logo"">
                        </a> <!-- logo -->
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                            @if(request()->is('blog') OR request()->is('/'))
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item">
                                        <a class="{{ request()->is('/') ? 'active' : '' }}"
                                           href="{{ url('/') }}">Inicio</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ request()->is('blog') ? url('/').'/#about' : '#about' }}">Sobre
                                            Nosotros</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ request()->is('blog') ? url('/').'/#features-part' : '#features-part' }}">Servicios</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ request()->is('blog') ? url('/').'/#whats' : '#whats' }}">¿Que es
                                            kinderGestion?</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="{{ request()->is('blog') ? 'active' : '' }}"
                                           href="#latest-news">blog</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ request()->is('blog') ? url('/').'/#contact' : '#contact' }}">contacto</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ request()->is('blog') ? url('/').'/#login' : '#login' }}">Login</a>
                                    </li>
                                </ul>

                            @endif
                            @if(request()->is('blog/*'))
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item">
                                        <a class="{{ request()->is('/') ? 'active' : '' }}"
                                           href="{{ url('/') }}">Inicio</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ request()->is('blog/*') ? url('/').'/#about' : '#about' }}">Sobre
                                            Nosotros</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ request()->is('blog/*') ? url('/').'/#features-part' : '#features-part' }}">Servicios</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ request()->is('blog/*') ? url('/').'/#whats' : '#whats' }}">¿Que es
                                            kinderGestion?</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="{{ request()->is('blog/*') ? 'active' : '' }}"
                                           href="#latest-news">blog</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ request()->is('blog/*') ? url('/').'/#contact' : '#contact' }}">contacto</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ request()->is('blog/*') ? url('/').'/#login' : '#login' }}">login</a>
                                    </li>
                                </ul>
                            @endif
                        </div>
                    </nav> <!-- nav -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div>
</header>