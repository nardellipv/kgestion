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


@yield('content')
<!--====== HEADER PART ENDS ======-->

<!--====== FOOTER PART START ======-->

@include('front.layouts.footer')

<!--====== FOOTER PART ENDS ======-->

<!--====== COPYRIGHT PART ENDS ======-->

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