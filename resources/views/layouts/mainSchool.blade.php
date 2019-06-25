<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dashboard v.2.0 | Adminpro - Admin Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i,800" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('schoolWeb/css/bootstrap.min.css')}}">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('schoolWeb/css/font-awesome.min.css')}}">
    <!-- adminpro icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('schoolWeb/css/adminpro-custon-icon.css')}}">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('schoolWeb/css/meanmenu.min.css')}}">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('schoolWeb/css/jquery.mCustomScrollbar.min.css')}}">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('schoolWeb/css/animate.css')}}">
    <!-- jvectormap CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('schoolWeb/css/jvectormap/jquery-jvectormap-2.0.3.css')}}">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('schoolWeb/css/data-table/bootstrap-table.css')}}">
    <link rel="stylesheet" href="{{asset('schoolWeb/css/data-table/bootstrap-editable.css')}}">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('schoolWeb/css/normalize.css')}}">
    <!-- charts CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('schoolWeb/css/c3.min.css')}}">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('schoolWeb/css/style.css')}}">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('schoolWeb/css/responsive.css')}}">
    <!-- modernizr JS
		============================================ -->
    <script src="{{ asset('schoolWeb/js/vendor/modernizr-2.8.3.min.js') }}"></script>
</head>

<body class="materialdesign">
<!-- Header top area start-->
<div class="wrapper-pro">
    @include('school._menu')
<!-- Header top area start-->
            @include('school._header')
            <!-- Header top area end-->
            <!-- Mobile Menu start -->
            @include('school._menuMobile')
            <!-- Mobile Menu end -->
        <div class="content-inner-all">
            <br>
            @yield('content')
        </div>
</div>
<!-- Footer Start-->
<div class="footer-copyright-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="footer-copy-right">
                    <p>Copyright &#169; 2018 Colorlib All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End-->
<!-- Chat Box End-->
<!-- jquery
    ============================================ -->
<script src="{{asset('schoolWeb/js/vendor/jquery-1.11.3.min.js')}}"></script>
<!-- bootstrap JS
    ============================================ -->
<script src="{{asset('schoolWeb/js/bootstrap.min.js')}}"></script>
<!-- meanmenu JS
    ============================================ -->
<script src="{{asset('schoolWeb/js/jquery.meanmenu.js')}}"></script>
<!-- mCustomScrollbar JS
    ============================================ -->
<script src="{{asset('schoolWeb/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<!-- sticky JS
    ============================================ -->
<script src="{{asset('schoolWeb/js/jquery.sticky.js')}}"></script>
<!-- scrollUp JS
    ============================================ -->
<script src="{{asset('schoolWeb/js/jquery.scrollUp.min.js')}}"></script>
<!-- scrollUp JS
    ============================================ -->
<script src="{{asset('schoolWeb/js/wow/wow.min.js')}}"></script>
<!-- counterup JS
    ============================================ -->
<script src="{{asset('schoolWeb/js/counterup/jquery.counterup.min.js')}}"></script>
<script src="{{asset('schoolWeb/js/counterup/waypoints.min.js')}}"></script>
<script src="{{asset('schoolWeb/js/counterup/counterup-active.js')}}"></script>
<!-- jvectormap JS
    ============================================ -->
<script src="{{asset('schoolWeb/js/jvectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
<script src="{{asset('schoolWeb/js/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<script src="{{asset('schoolWeb/js/jvectormap/jvectormap-active.js')}}"></script>
<!-- peity JS
    ============================================ -->
<script src="{{asset('schoolWeb/js/peity/jquery.peity.min.js')}}"></script>
<script src="{{asset('schoolWeb/js/peity/peity-active.js')}}"></script>
<!-- sparkline JS
    ============================================ -->
<script src="{{asset('schoolWeb/js/sparkline/jquery.sparkline.min.js')}}"></script>
<script src="{{asset('schoolWeb/js/sparkline/sparkline-active.js')}}"></script>
<!-- flot JS
    ============================================ -->
<script src="{{asset('schoolWeb/js/flot/Chart.min.js')}}"></script>
<script src="{{asset('schoolWeb/js/flot/dashtwo-flot-active.js')}}"></script>
<!-- data table JS
    ============================================ -->
<script src="{{asset('schoolWeb/js/data-table/bootstrap-table.js')}}"></script>
<script src="{{asset('schoolWeb/js/data-table/tableExport.js')}}"></script>
<script src="{{asset('schoolWeb/js/data-table/data-table-active.js')}}"></script>
<script src="{{asset('schoolWeb/js/data-table/bootstrap-table-editable.js')}}"></script>
<script src="{{asset('schoolWeb/js/data-table/bootstrap-editable.js')}}"></script>
<script src="{{asset('schoolWeb/js/data-table/bootstrap-table-resizable.js')}}"></script>
<script src="{{asset('schoolWeb/js/data-table/colResizable-1.5.source.js')}}"></script>
<script src="{{asset('schoolWeb/js/data-table/bootstrap-table-export.js')}}"></script>
<!-- main JS
    ============================================ -->
<script src="{{asset('schoolWeb/js/main.js')}}"></script>
</body>

</html>