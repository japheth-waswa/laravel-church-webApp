@extends('admin.partials.master')

@section('title')
Dashboard
@endsection

@section('stylespagelevel')
 <!-- BEGIN PAGE LEVEL PLUGINS -->
<!--            <link href="{{ asset('adminassets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('adminassets/global/plugins/morris/morris.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('adminassets/global/plugins/fullcalendar/fullcalendar.min.css') }}" rel="stylesheet" type="text/css" />-->
        <!--<link href="{{ asset('adminassets/global/plugins/jqvmap/jqvmap/jqvmap.css') }}" rel="stylesheet" type="text/css" />-->
        <!-- END PAGE LEVEL PLUGINS -->
@endsection

@section('content')

<!-- BEGIN CONTENT BODY -->
<div class="page-content">
    <!-- BEGIN PAGE HEADER-->
    
    <h1 class="page-title"> Dashboard
        <small>summary</small>
    </h1>
    <div class="page-bar">
        <ul class="page-breadcrumb">
            <li>
                <span><i class="icon-home"></i> Dashboard</span>
            </li>
        </ul>
    </div>
    <!-- END PAGE HEADER-->
    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="dashboard-stat2 ">
                <div class="display">
                    <div class="number">
                        <h3 class="font-green-sharp">
                            <span data-counter="counterup" data-value="7800">{{ $sermoncount }}</span>
                        </h3>
                        <small>SERMONS</small>
                    </div>
                    <div class="icon">
                        <i class="icon-earphones"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="dashboard-stat2 ">
                <div class="display">
                    <div class="number">
                        <h3 class="font-red-haze">
                            <span data-counter="counterup" data-value="1349">{{ $sundayschedulecount }}</span>
                        </h3>
                        <small>SUNDAYS</small>
                    </div>
                    <div class="icon">
                        <i class="icon-home"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="dashboard-stat2 ">
                <div class="display">
                    <div class="number">
                        <h3 class="font-blue-sharp">
                            <span data-counter="counterup" data-value="567">{{ $eventcount }}</span>
                        </h3>
                        <small>EVENTS</small>
                    </div>
                    <div class="icon">
                        <i class="icon-music-tone"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="dashboard-stat2 ">
                <div class="display">
                    <div class="number">
                        <h3 class="font-purple-soft">
                            <span data-counter="counterup" data-value="276">{{ $gallerycount }}</span>
                        </h3>
                        <small>GALLERY</small>
                    </div>
                    <div class="icon">
                        <i class="icon-camera"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END CONTENT BODY -->

@endsection

@section('scriptspluginpagelevel')
 <!-- BEGIN PAGE LEVEL PLUGINS-->
<!--            <script src="{{ asset('adminassets/global/plugins/moment.min.js') }}" type="text/javascript"></script>
            <script src="{{ asset('adminassets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js') }}" type="text/javascript"></script>
            <script src="{{ asset('adminassets/global/plugins/morris/morris.min.js') }}" type="text/javascript"></script>
            <script src="{{ asset('adminassets/global/plugins/morris/raphael-min.js') }}" type="text/javascript"></script>
            <script src="{{ asset('adminassets/global/plugins/counterup/jquery.waypoints.min.js') }}" type="text/javascript"></script>
            <script src="{{ asset('adminassets/global/plugins/counterup/jquery.counterup.min.js') }}" type="text/javascript"></script>
            <script src="{{ asset('adminassets/global/plugins/amcharts/amcharts/amcharts.js') }}" type="text/javascript"></script>
            <script src="{{ asset('adminassets/global/plugins/amcharts/amcharts/serial.js') }}" type="text/javascript"></script>
            <script src="{{ asset('adminassets/global/plugins/amcharts/amcharts/pie.js') }}" type="text/javascript"></script>
            <script src="{{ asset('adminassets/global/plugins/amcharts/amcharts/radar.js') }}" type="text/javascript"></script>
            <script src="{{ asset('adminassets/global/plugins/amcharts/amcharts/themes/light.js') }}" type="text/javascript"></script>
            <script src="{{ asset('adminassets/global/plugins/amcharts/amcharts/themes/patterns.js') }}" type="text/javascript"></script>
            <script src="{{ asset('adminassets/global/plugins/amcharts/amcharts/themes/chalk.js') }}" type="text/javascript"></script>
            <script src="{{ asset('adminassets/global/plugins/amcharts/ammap/ammap.js') }}" type="text/javascript"></script>
            <script src="{{ asset('adminassets/global/plugins/amcharts/ammap/maps/js/worldLow.js') }}" type="text/javascript"></script>
            <script src="{{ asset('adminassets/global/plugins/amcharts/amstockcharts/amstock.js') }}" type="text/javascript"></script>
            <script src="{{ asset('adminassets/global/plugins/fullcalendar/fullcalendar.min.js') }}" type="text/javascript"></script>
            <script src="{{ asset('adminassets/global/plugins/horizontal-timeline/horizontal-timeline.js') }}" type="text/javascript"></script>
            <script src="{{ asset('adminassets/global/plugins/flot/jquery.flot.min.js') }}" type="text/javascript"></script>
            <script src="{{ asset('adminassets/global/plugins/flot/jquery.flot.resize.min.js') }}" type="text/javascript"></script>
            <script src="{{ asset('adminassets/global/plugins/flot/jquery.flot.categories.min.js') }}" type="text/javascript"></script>
            <script src="{{ asset('adminassets/global/plugins/jquery-easypiechart/jquery.easypiechart.min.js') }}" type="text/javascript"></script>
            <script src="{{ asset('adminassets/global/plugins/jquery.sparkline.min.js') }}" type="text/javascript"></script>
            <script src="{{ asset('adminassets/global/plugins/jqvmap/jqvmap/jquery.vmap.js') }}" type="text/javascript"></script>
            <script src="{{ asset('adminassets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js') }}" type="text/javascript"></script>
            <script src="{{ asset('adminassets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js') }}" type="text/javascript"></script>
            <script src="{{ asset('adminassets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js') }}" type="text/javascript"></script>
            <script src="{{ asset('adminassets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js') }}" type="text/javascript"></script>
            <script src="{{ asset('adminassets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js') }}" type="text/javascript"></script>
            <script src="{{ asset('adminassets/global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js') }}" type="text/javascript"></script>-->
             <!--END PAGE LEVEL PLUGINS--> 
@endsection


@section('scriptspagelevel')
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<!--<script src="{{ asset('adminassets/pages/scripts/dashboard.min.js') }}" type="text/javascript"></script>-->
<!-- END PAGE LEVEL SCRIPTS -->
@endsection

