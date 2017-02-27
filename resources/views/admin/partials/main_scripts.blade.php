    <!-- END QUICK NAV -->
    <!--[if lt IE 9]>
<script src="{{ asset('adminassets/global/plugins/respond.min.js') }}"></script>
<script src="{{ asset('adminassets/global/plugins/excanvas.min.js') }}"></script> 
<script src="{{ asset('adminassets/global/plugins/ie8.fix.min.js') }}"></script> 
<![endif]-->

<!-- BEGIN CORE PLUGINS -->
<script src="{{ asset('adminassets/global/plugins/jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('adminassets/global/plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('adminassets/global/plugins/js.cookie.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('adminassets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('adminassets/global/plugins/jquery.blockui.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('adminassets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}" type="text/javascript"></script>
<!-- END CORE PLUGINS -->

@yield('scriptspluginpagelevel')

<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src="{{ asset('adminassets/global/scripts/app.min.js') }}" type="text/javascript"></script>
<!-- END THEME GLOBAL SCRIPTS -->

@yield('scriptspagelevel')

<!-- BEGIN THEME LAYOUT SCRIPTS -->
<script src="{{ asset('adminassets/layouts/layout2/scripts/layout.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('adminassets/layouts/layout2/scripts/demo.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('adminassets/layouts/global/scripts/quick-sidebar.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('adminassets/layouts/global/scripts/quick-nav.min.js') }}" type="text/javascript"></script>
<!-- END THEME LAYOUT SCRIPTS -->



@yield('scripts')