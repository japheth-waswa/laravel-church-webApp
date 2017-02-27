<!DOCTYPE html>
<html class=no-js> 

    <head>

        <?php
        $allSettings = Helpers::settingsVal(null, true);
        ?>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         @if($allSettings != false)
        <meta name="description" content="{{ $allSettings->theme_description }}" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <meta name="keywords" content="">
        @endif


        <title>@yield('title') | <?php echo $allSettings != false ? $allSettings->website_name : "";?></title> 

        <script>
            jsConfig = {};
            jsConfig.base = "<?php echo route('homepage'); ?>"
        </script>
        <script>
            window.Laravel = {!! json_encode([
                    'csrfToken' => csrf_token(),
            ]) !!};
        </script>
       
        @if($allSettings != false)
        @if(Helpers::fileExists($allSettings->fav_icon_url))
        <link rel="shortcut icon" href="{{ asset($allSettings->fav_icon_url) }}" /> 
        @endif
        @endif
        <script>
            jsConfig = {};
            jsConfig.base = "<?php echo route('homepage'); ?>"
        </script>

        @include('partials.main_styles')

    </head>

    