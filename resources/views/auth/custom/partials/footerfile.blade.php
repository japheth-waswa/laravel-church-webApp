 <div class="login-footer">
                        <div class="row bs-reset">
                            <div class="col-xs-5 bs-reset">
                                <ul class="login-social">
                                    <li>
                                        <a href="{{ route('homepage') }}">
                                            <i class="icon-home"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-xs-7 bs-reset">
                                <div class="login-copyright text-right">
                                    <p>Copyright &copy; {{ Helpers::settingsVal('website_name') }} {{ date('Y') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <script src="{{ asset('adminassets/global/plugins/jquery.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('adminassets/global/plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('adminassets/global/plugins/js.cookie.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('adminassets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('adminassets/global/plugins/jquery.blockui.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('adminassets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('adminassets/global/plugins/jquery-validation/js/jquery.validate.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('adminassets/global/plugins/jquery-validation/js/additional-methods.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('adminassets/global/plugins/select2/js/select2.full.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('adminassets/global/plugins/backstretch/jquery.backstretch.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('adminassets/global/scripts/app.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('adminassets/pages/scripts/login-5.min.js') }}" type="text/javascript"></script>
</body>

</html>