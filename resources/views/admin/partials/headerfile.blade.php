<!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="{{ config('app.locale') }}">
    <head>
        <?php
        $allSettings = Helpers::settingsVal(null, true);
        ?>
        <meta charset="utf-8" />
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('title') | <?php echo $allSettings != false ? $allSettings->website_name : "";?></title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="Admin Section" name="description" />
        <meta content="Japheth Waswa" name="author" />
        
        @if($allSettings != false)
        @if(Helpers::fileExists($allSettings->fav_icon_url))
        <link rel="shortcut icon" href="{{ asset($allSettings->fav_icon_url) }}" /> 
        @endif
        @endif

        <script>
            jsConfig = {};
            jsConfig.base = "<?php echo route('homepage').'/'; ?>"
        </script>
        <script>
            window.Laravel = {!! json_encode([
                    'csrfToken' => csrf_token(),
            ]) !!};
        </script>
        @include('admin.partials.main_styles')


    </head>
    <!-- END HEAD -->

    <body class="page-header-fixed page-sidebar-closed-hide-logo page-container-bg-solid">
        <!-- BEGIN HEADER -->
        <div class="page-header navbar navbar-fixed-top">
            <!-- BEGIN HEADER INNER -->
            <div class="page-header-inner ">
                <!-- BEGIN LOGO -->
                <div class="page-logo">
                    @if($allSettings != false)
                    @if(Helpers::fileExists($allSettings->logo_url))
                    <a href="{{ route('dashboard') }}">

                        <img src="{{ asset($allSettings->logo_url) }}" alt="logo" class="logo-default" width="94" height="14"/> </a>
                    @endif
                    @endif
                    <div class="menu-toggler sidebar-toggler">
                        <!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
                    </div>
                </div>
                <!-- END LOGO -->
                <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse"> </a>
                <!-- END RESPONSIVE MENU TOGGLER -->
                <!-- BEGIN PAGE ACTIONS -->
                <!-- DOC: Remove "hide" class to enable the page header actions -->
                <div class="page-actions">
                    <div class="btn-group">
                        <button type="button" class="btn btn-circle btn-outline red dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-plus"></i>&nbsp;
                            <span class="hidden-sm hidden-xs">New&nbsp;</span>&nbsp;
                            <i class="fa fa-angle-down"></i>
                        </button>
                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="{{ route('blog.create') }}">
                                    <i class="icon-docs"></i> New Blog </a>
                            </li>
                            <li>
                                <a href="{{ route('sermon.create') }}">
                                    <i class="icon-tag"></i> New Sermon </a>
                            </li>
                            <li>
                                <a href="{{ route('sunday.create') }}">
                                    <i class="icon-home"></i> New Sunday Schedule </a>
                            </li>
                            <li class="divider"> </li>
                            <li>
                                <a href="{{ route('comment.list') }}">
                                    <i class="icon-flag"></i> Comments
                                    <!--<span class="badge badge-success">4</span>-->
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('contact.list') }}">
                                    <i class="icon-users"></i> Contacts
                                    <!--<span class="badge badge-danger">2</span>-->
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- END PAGE ACTIONS -->
                <!-- BEGIN PAGE TOP -->
                <div class="page-top">
                    <!-- BEGIN HEADER SEARCH BOX -->
                    <!-- DOC: Apply "search-form-expanded" right after the "search-form" class to have half expanded search box -->
<!--                    <form class="search-form search-form-expanded" action="" method="GET">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search..." name="query">
                            <span class="input-group-btn">
                                <a href="javascript:;" class="btn submit">
                                    <i class="icon-magnifier"></i>
                                </a>
                            </span>
                        </div>
                    </form>-->
                    <!-- END HEADER SEARCH BOX -->
                    @include('admin.partials.topmenu')
                </div>
                <!-- END PAGE TOP -->
            </div>
            <!-- END HEADER INNER -->
        </div>
        <!-- END HEADER -->
        <!-- BEGIN HEADER & CONTENT DIVIDER -->
        <div class="clearfix"> </div>
        <!-- END HEADER & CONTENT DIVIDER -->
        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            @include('admin.partials.menulinks')
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">