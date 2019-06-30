<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Tildi - Responsive Admin Template">
    <meta name="author" content="Agahelp">
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}">
    <title>SuperAdmin KinderGestion </title>

    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="{{ asset('styleRoot/assets/plugins/morris/morris.css') }}">
    @yield('style')

    <!-- App css -->
    <link href="{{ asset('styleRoot/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('styleRoot/assets/css/icons.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('styleRoot/assets/css/style.css') }}" rel="stylesheet" type="text/css" />

    <script src="{{ asset('styleRoot/assets/js/modernizr.min.js') }}"></script>
</head>

<body class="fixed-left">
<!-- Begin page -->
<div id="wrapper">

    <!-- Top Bar Start -->
    @include('root.parts.navbar')
    <!-- Top Bar End -->


    <!-- ========== Left Sidebar Start ========== -->
    @include('root.parts.menu')
    <!-- Left Sidebar End -->


    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            @yield('content')
        </div> <!-- content -->

        <footer class="footer text-right">
            2019 © DenarMA
        </footer>

    </div>

</div>
<!-- END wrapper -->


<!-- jQuery  -->
<script src="{{ asset('styleRoot/assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('styleRoot/assets/js/popper.min.js') }}"></script>
<script src="{{ asset('styleRoot/assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('styleRoot/assets/js/detect.js') }}"></script>
<script src="{{ asset('styleRoot/assets/js/fastclick.js') }}"></script>
<script src="{{ asset('styleRoot/assets/js/jquery.blockUI.js') }}"></script>
<script src="{{ asset('styleRoot/assets/js/waves.js') }}"></script>
<script src="{{ asset('styleRoot/assets/js/jquery.nicescroll.js') }}"></script>
<script src="{{ asset('styleRoot/assets/js/jquery.slimscroll.js') }}"></script>
<script src="{{ asset('styleRoot/assets/js/jquery.scrollTo.min.js') }}"></script>

@yield('script')
<!--Morris Chart-->
<script src="{{ asset('styleRoot/assets/plugins/morris/morris.min.js') }}"></script>
<script src="{{ asset('styleRoot/assets/plugins/raphael/raphael-min.js') }}"></script>

<!-- App js -->
<script src="{{ asset('styleRoot/assets/js/jquery.core.js') }}"></script>
<script src="{{ asset('styleRoot/assets/js/jquery.app.js') }}"></script>

<script>
    !function($) {
        "use strict";
        var MorrisCharts = function() {};
        //creates line chart
        MorrisCharts.prototype.createLineChart = function(element, data, xkey, ykeys, labels, opacity, Pfillcolor, Pstockcolor, lineColors) {
            Morris.Line({
                element: element,
                data: data,
                xkey: xkey,
                ykeys: ykeys,
                labels: labels,
                fillOpacity: opacity,
                pointFillColors: Pfillcolor,
                pointStrokeColors: Pstockcolor,
                behaveLikeLine: true,
                gridLineColor: '#2f3e47',
                gridTextColor: '#98a6ad',
                hideHover: 'auto',
                lineWidth: '3px',
                pointSize: 0,
                preUnits: '$ ',
                resize: true, //defaulted to true
                lineColors: lineColors
            });
        },
            //creates area chart
            MorrisCharts.prototype.createAreaChart = function(element, pointSize, lineWidth, data, xkey, ykeys, labels, lineColors) {
                Morris.Area({
                    element: element,
                    pointSize: 0,
                    lineWidth: 0,
                    data: data,
                    xkey: xkey,
                    ykeys: ykeys,
                    labels: labels,
                    hideHover: 'auto',
                    resize: true,
                    gridLineColor: '#2f3e47',
                    gridTextColor: '#98a6ad',
                    lineColors: lineColors
                });
            },
            MorrisCharts.prototype.init = function() {
                //create line chart
                var $data  = [
                    { y: '2012', a: 50, b: 0 },
                    { y: '2013', a: 75, b: 50 },
                    { y: '2014', a: 30, b: 80 },
                    { y: '2015', a: 50, b: 50 },
                    { y: '2016', a: 75, b: 10 },
                    { y: '2017', a: 50, b: 40 },
                    { y: '2018', a: 75, b: 50 },
                    { y: '2019', a: 100, b: 70 }
                ];
                this.createLineChart('morris-line-example', $data, 'y', ['a', 'b'], ['Bitcoin', 'Ethereum'],['0.1'],['#ffffff'],['#999999'], ['#35b8e0', '#949cc7']);
                //creating area chart
                var $areaData = [
                    { y: '2013', a: 10, b: 20 },
                    { y: '2014', a: 75,  b: 65 },
                    { y: '2015', a: 50,  b: 40 },
                    { y: '2016', a: 75,  b: 65 },
                    { y: '2017', a: 50,  b: 40 },
                    { y: '2018', a: 75,  b: 65 },
                    { y: '2019', a: 90, b: 60 }
                ];
                this.createAreaChart('morris-area-example', 0, 0, $areaData, 'y', ['a', 'b'], ['Bitcoin', 'Ethereum'], ['#5b69bc', "#35b8e0"]);
            },
            //init
            $.MorrisCharts = new MorrisCharts, $.MorrisCharts.Constructor = MorrisCharts
    }(window.jQuery),
        //initializing
        function($) {
            "use strict";
            $.MorrisCharts.init();
        }(window.jQuery);
</script>

</body>
</html>
