@extends('admin.partials.master')

@section('title')
Sunday Schedule
@endsection



@section('stylespagelevel')
<!-- BEGIN PAGE LEVEL PLUGINS -->
<!--<link href="{{ asset('adminassets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css') }}" rel="stylesheet" type="text/css" />-->
<link href="{{ asset('adminassets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css') }}" rel="stylesheet" type="text/css" />
<!--<link href="{{ asset('adminassets/global/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('adminassets/global/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet" type="text/css" />
<link href=".{{ asset('adminassets/global/plugins/clockface/css/clockface.css') }}" rel="stylesheet" type="text/css" />-->
<link href="{{ asset('adminassets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css') }}" rel="stylesheet" type="text/css" />
<!-- END PAGE LEVEL PLUGINS -->
@endsection

@section('content')

<?php $sundayschedule = isset($sundayschedule) ? $sundayschedule : null; ?>
<!-- BEGIN CONTENT BODY -->
<div class="page-content">
    <!-- BEGIN PAGE HEADER-->

    <h1 class="page-page_order"> Sunday Schedule
        <small>add sunday schedule details</small>
    </h1>

    <div class="page-bar">
        <ul class="page-breadcrumb">
            <li>
                <i class="icon-home"></i>
                <a href="{{route('dashboard')}}">Home</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <a href="{{route('sunday.list')}}">Sunday Schedule</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <span>Sunday Schedule</span>
            </li>
        </ul>

    </div>
    <!-- END PAGE HEADER-->


    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet light ">
                <div class="portlet-page_order">
                    <div class="caption font-dark">
                        <i class="icon-calendar font-dark"></i>
                        <span class="caption-subject uppercase">{{ Helpers::formatDateBasic($sundayschedule->sunday_date) }}</span><br>
                        <i class="icon-doc font-dark"></i>
                        <span class="caption-subject bold uppercase">{{ $sundayschedule->theme_title }}</span>
                        <br>
                        <a href="{{ route('sunday.edit',$sundayschedule->id) }}">
                            <i class="icon-pencil"></i> Edit
                        </a>
                    </div>
                </div>
            </div>
            <div class="portlet light ">
                <div class="portlet-page_order">
                    @if(Session::has('errorCustom'))
                    <div class="alert alert-danger alert-dismissible" role='alert'>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <p>{{Session::get('errorCustom')}}</p>
                    </div>
                    @endif
                    @if(Session::has('successCustom'))
                    <div class="alert alert-success alert-dismissible" role='alert'>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <p>{{Session::get('successCustom')}}</p>
                    </div>
                    @endif
                </div>
            </div>
            <div class="portlet light ">
                <div class="portlet-page_order">
                    <div class="caption font-dark">
                        <a href="{{route('sundaypage.create',$sundayschedule->id)}}">
                            <button id="sample_editable_1_new" class="btn sbold green"> Add New Page
                                <i class="fa fa-plus"></i>
                            </button>
                        </a>
                    </div>
                </div>
            </div>

            @if($pages->count() > 0)
            <form role="form" action="<?php echo route('sundaypage.orderpages', $sundayschedule->id); ?>" method="post">
                {{ csrf_field() }}
                {{ method_field('PATCH') }}
                <div class="row-fluid">
                    @foreach($pages as $page)
                    <!--start page-->
                    <div class="col-md-{{ $sundayschedule->column_count }}">
                        <div class="portlet light ">
                            <div class="portlet-title">
                                <div class="caption font-dark">
                                    <a href="{{route('sundaypage.edit',array($page->id,$sundayschedule->id))}}">
                                        <label id="sample_editable_1_new" class="btn sbold purple"> Edit
                                            <i class="fa fa-edit"></i>
                                        </label>
                                    </a>
                                    @if($page->visible == 1)
                                    <a href="{{ route('sundaypage.visibility',array($page->id,'0',$sundayschedule->id)) }}">
                                        <label id="sample_editable_1_new" class="btn sbold blue"> Hide
                                            <i class="fa fa-eye-slash"></i>
                                        </label>
                                    </a>
                                    @else
                                    <a href="{{ route('sundaypage.visibility',array($page->id,'1',$sundayschedule->id)) }}">
                                        <label id="sample_editable_1_new" class="btn sbold blue"> Unhide
                                            <i class="fa fa-eye"></i>
                                        </label>
                                    </a>
                                    @endif
                                    <a href="{{route('sundaypage.destroy',array($page->id,$sundayschedule->id))}}">
                                        <label id="sample_editable_1_new" class="btn sbold red"> Delete
                                            <i class="fa fa-trash"></i>
                                        </label>
                                    </a>
                                </div>
                            </div>
                            <div class="portlet-body">
                                <div class="form-body">
                                    <div class="form-group form-md-line-input form-md-floating-label">
                                        <input type="text" class="form-control" id="form_control_1" name="{{ $page->id }}" required="" 
                                               value="<?php echo null !== old('page_order') ? old('page_order') : (null !== ($page) ? $page->page_order : null); ?>">
                                        <label for="form_control_1">Page Number</label>
                                    </div>
                                    <div class="form-group form-md-line-input form-md-floating-label">
                                        {!! $page->page_content !!}
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                    <!--end page-->
                    @endforeach

                </div>
                <div class="form-actions noborder">
                    <button type="submit" class="btn blue">Update Page Numbering</button>
                </div>
            </form>
            @else
            <div class="alert alert-danger alert-dismissible" role='alert'>
                <p>Please add new page</p>
            </div>
            @endif
        </div>
    </div>

</div>
<!-- END CONTENT BODY -->

@endsection


@section('scriptspluginpagelevel')
<!-- BEGIN PAGE LEVEL PLUGINS -->
<!--<script src="{{ asset('adminassets/global/plugins/moment.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('adminassets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js') }}" type="text/javascript"></script>-->
<script src="{{ asset('adminassets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}" type="text/javascript"></script>
<!--<script src="{{ asset('adminassets/global/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('adminassets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('adminassets/global/plugins/clockface/js/clockface.js') }}" type="text/javascript"></script>-->
<script src="{{ asset('adminassets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js') }}" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
@endsection

@section('scriptspagelevel')
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="{{ asset('adminassets/pages/scripts/components-date-time-pickers.min.js') }}" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
@endsection


