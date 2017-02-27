<!DOCTYPE html>

<?php
//$loginImage = Helpers::settingsVal('login_logo_url');
//$logo = Helpers::settingsVal('logo_url');
//$favicon = Helpers::settingsVal('fav_icon_url');
?>
<?php
$allSettings = Helpers::settingsVal(null, true);
?>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title class="text-capitalize">@yield('title') | <?php echo $allSettings != false ? $allSettings->website_name : ""; ?></title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="Admin Section" name="description" />
        <meta content="Japheth Waswa" name="author" />
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=all" rel="stylesheet" type="text/css" />
        <link href="{{ asset('adminassets/global/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('adminassets/global/plugins/simple-line-icons/simple-line-icons.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('adminassets/global/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('adminassets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('adminassets/global/plugins/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('adminassets/global/plugins/select2/css/select2-bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('adminassets/global/css/components.min.css') }}" rel="stylesheet" id="style_components" type="text/css" />
        <link href="{{ asset('adminassets/global/css/plugins.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('adminassets/pages/css/login-5.min.css') }}" rel="stylesheet" type="text/css" />

        @if($allSettings != false)
        @if(Helpers::fileExists($allSettings->fav_icon_url))
        <link rel="shortcut icon" href="{{ asset($allSettings->fav_icon_url) }}" /> 
        @endif
        @endif
        <script>
            jsConfig = {};
            jsConfig.base = "<?php echo route('homepage'); ?>"
        </script>
    </head>
    <!-- END HEAD -->

    <body class=" login">

        <div class="user-login-5">
            <div class="row bs-reset">
                <div class="col-md-6 bs-reset mt-login-5-bsfix">

                    <script>
                        jsConfig.loginImage = null;
                    </script>
                    @if($allSettings != false)
                    @if(Helpers::fileExists($allSettings->login_logo_url))
                    <script>
                        jsConfig.loginImage = "<?php echo asset($allSettings->login_logo_url); ?>"
                    </script>
                    <div class="login-bg" style="background-image:url({{ asset($allSettings->login_logo_url) }})">
                        <!--<div class="login-bg" style="background-image:url(../assets/pages/img/login/bg1.jpg)">-->
                        @if(Helpers::fileExists($allSettings->logo_url))
                        <img class="login-logo" src="{{ asset($allSettings->logo_url) }}" /> 
                        @endif
                    </div>
                    @endif
                    @endif
                </div>
                <div class="col-md-6 login-container bs-reset mt-login-5-bsfix">