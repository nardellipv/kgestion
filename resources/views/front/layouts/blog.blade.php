<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>

    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
    <title>Kinder Gestión | @yield('title','Lleva tu jardín al siglo XXI')</title>

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{ asset('front/assets/images/favicon.png') }}" type="image/png">

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

<!--====== PAGE BANNER PART START ======-->

<section id="page-banner" class="bg_cover" style="background-image: url({{ asset('front/assets/images/page-banner.jpg') }})" data-overlay="6">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-banner-content text-center">
                    <h2>Blog KinderGestión</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ url('blog') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">blog</li>
                        </ol>
                    </nav>
                </div> <!-- page banner content -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== PAGE BANNER PART ENDS ======-->

<!--====== BLOG GRID PART START ======-->

@yield('content')
<!--====== BLOG GRID PART ENDS ======-->

<!--====== FOOTER PART START ======-->

<section id="footer-part" class="footer-part pt-70 pb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="footer-description pt-50">
                    <div class="logo mb-20">
                        <a href="blog-grid-sidebar.html#">
                            <img src="{{ asset('front/assets/images/logo-2.png') }}" alt="Logo">
                        </a>
                    </div>
                    <p class="mb-15">ur clients range from FTSE comp anies, to large organisations and some small local businesses who are striving to expand.</p>
                    <ul>
                        <li><a href="blog-grid-sidebar.html#"><i class="flaticon-facebook"></i></a></li>
                        <li><a href="blog-grid-sidebar.html#"><i class="flaticon-twitter-logo-silhouette"></i></a></li>
                        <li><a href="blog-grid-sidebar.html#"><i class="flaticon-google-plus"></i></a></li>
                        <li><a href="blog-grid-sidebar.html#"><i class="flaticon-linkedin-logo"></i></a></li>
                        <li><a href="blog-grid-sidebar.html#"><i class="flaticon-instagram-social-network-logo-of-photo-camera"></i></a></li>
                    </ul>
                </div> <!-- footer description -->
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="footer-link pt-45 pl-50">
                    <div class="title mb-30">
                        <h4>Usefull Links</h4>
                    </div>
                    <ul>
                        <li><a href="about.html"><i class="fa fa-angle-right"></i> About Us</a></li>
                        <li><a href="blog-grid.html"><i class="fa fa-angle-right"></i> Company News</a></li>
                        <li><a href="blog-list-sidebar.html"><i class="fa fa-angle-right"></i> Our Blog</a></li>
                        <li><a href="company-history.html"><i class="fa fa-angle-right"></i> About Career</a></li>
                        <li><a href="testimonials.html"><i class="fa fa-angle-right"></i> Clients</a></li>
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
                            <p>+12 345 678 9008 </p>
                            <p>+12 987 654 7566</p>
                        </li>
                        <li>
                            <p>contactus@buildetic.com</p>
                            <p>info@support.com</p>
                        </li>
                        <li>
                            <p>721/A Central Street, New York. South East Addril, CEO 12309</p>
                        </li>
                    </ul>
                </div> <!-- footer contact -->
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="footer-subscribe pt-45">
                    <div class="title mb-35">
                        <h4>Subscribe Us</h4>
                    </div>
                    <p>Join 90,000+ awesome subscribers and update yourself with our exclusive offers.</p>
                    <div class="subscribe-form mt-25">
                        <form action="blog-grid-sidebar.html#">
                            <input type="text" placeholder="Enter your Email">
                            <button type="button"><i class="flaticon-send"></i></button>
                        </form>
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
                    <p>&copy; 2019 All Rights Reserved. Designed By NIKNA</p>
                </div> <!-- copyright content -->
            </div>
            <div class="col-lg-6">
                <div class="copyright-policy text-center text-lg-right pt-10">
                    <ul>
                        <li><a href="blog-grid-sidebar.html#">Terms & Condition</a></li>
                        <li><a href="blog-grid-sidebar.html#">Privacy Policy</a></li>
                        <li><a href="blog-grid-sidebar.html#">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== COPYRIGHT PART ENDS ======-->

<!--====== BACK TO TOP PART START ======-->

<a href="blog-grid-sidebar.html#" class="back-to-top">
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
