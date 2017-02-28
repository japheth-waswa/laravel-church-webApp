@extends('admin.partials.master')

@section('title')
@if(Route::currentRouteName() == 'sundayschedule.edit')
Edit Sunday Schedule
@else
Add Sunday Schedule
@endif

@endsection



@section('stylespagelevel')
<!-- BEGIN PAGE LEVEL PLUGINS -->
<link href="{{ asset('adminassets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('adminassets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css') }}" rel="stylesheet" type="text/css" />
<!-- END PAGE LEVEL PLUGINS -->
@endsection

@section('content')

<?php $sundayschedule = isset($sundayschedule) ? $sundayschedule : null; ?>
<!-- BEGIN CONTENT BODY -->
<div class="page-content">
    <!-- BEGIN PAGE HEADER-->

    @if(Route::currentRouteName() == 'sunday.edit')
    <h1 class="page-theme_title"> Edit Sunday Schedule
        <small>edit sunday schedule</small>
    </h1>
    @else
    <h1 class="page-theme_title"> Add Sunday Schedule
        <small>add new sunday schedule</small>
    </h1>
    @endif

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
                @if(Route::currentRouteName() == 'sunday.edit')
                <span>Edit Sunday Schedule</span>
                @else
                <span>Add Sunday Schedule</span>
                @endif

            </li>
        </ul>

    </div>
    <!-- END PAGE HEADER-->


    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet light ">
                <div class="portlet-theme_title">
                    <div class="caption font-dark">
                        <i class="icon-pencil font-dark"></i>
                        @if(Route::currentRouteName() == 'sunday.edit')
                        <span class="caption-subject bold uppercase">Edit Sunday Schedule</span>
                        @else
                        <span class="caption-subject bold uppercase">Add Sunday Schedule</span>
                        @endif
                    </div>
                </div>
                <div class="portlet-body">
                    @if (Session::has('errorCustom'))
                    <div class="alert alert-danger">
                        <p>{{Session::get('errorCustom')}}</p>
                    </div>
                    @endif

                    @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <form role="form" action="<?php echo (Route::currentRouteName() == 'sunday.edit' ? route('sunday.update', $sundayschedule->id) : route('sunday.store')); ?>" method="post">
                        {{ csrf_field() }}
                        @if(Route::currentRouteName() == 'sunday.edit')
                        {{ method_field('PATCH') }}
                        @endif

                        <div class="form-body">
                            <div class="form-group form-md-line-input form-md-floating-label">
                                <input type="text" class="form-control" id="form_control_1" name="theme_title" required="" 
                                       value="<?php echo null !== old('theme_title') ? old('theme_title') : (null !== ($sundayschedule) ? $sundayschedule->theme_title : null); ?>">
                                <label for="form_control_1">Theme Title</label>
                            </div>
                            <div class="form-group form-md-line-input form-md-floating-label">
                                <input type="text" class="form-control input-medium date-picker" id="form_control_1" name="sunday_date" required="" 
                                       value="<?php echo null !== old('sunday_date') ? old('sunday_date') : (null !== ($sundayschedule) ? date("m/d/Y", strtotime($sundayschedule->sunday_date)) : null); ?>">
                                <label for="form_control_1">Sunday Date</label>
                            </div>
                            <div class="form-group form-md-radios">
                                <label>Page Column Count:</label>
                                <?php $colCountVal = null !== old('column_count') ? old('column_count') : (null !== ($sundayschedule) ? $sundayschedule->column_count : null); ?>
                                <div class="md-radio-inline">
                                    <div class="md-radio">
                                        <input type="radio" id="radio6" name="column_count" class="md-radiobtn" value="12" <?php echo $colCountVal == 12 ? "checked" : null; ?> >
                                        <label for="radio6">
                                            <span class="inc"></span>
                                            <span class="check"></span>
                                            <span class="box"></span> 1 Column </label>
                                    </div>
                                    <div class="md-radio">
                                        <input type="radio" id="radio7" name="column_count" class="md-radiobtn" value="6" <?php echo $colCountVal == 6 ? "checked" : null; ?> >
                                        <label for="radio7">
                                            <span class="inc"></span>
                                            <span class="check"></span>
                                            <span class="box"></span> 2 Columns </label>
                                    </div>
                                    <div class="md-radio">
                                        <input type="radio" id="radio8" name="column_count" class="md-radiobtn" value="4" <?php echo $colCountVal == 4 ? "checked" : null; ?> >
                                        <label for="radio8">
                                            <span class="inc"></span>
                                            <span class="check"></span>
                                            <span class="box"></span> 3 Columns </label>
                                    </div>
                                    <div class="md-radio">
                                        <input type="radio" id="radio9" name="column_count" class="md-radiobtn" value="3" <?php echo $colCountVal == 3 ? "checked" : null; ?> >
                                        <label for="radio9">
                                            <span class="inc"></span>
                                            <span class="check"></span>
                                            <span class="box"></span> 4 Columns </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group form-md-line-input form-md-floating-label">
                                <textarea class="form-control" rows="3" name="theme_description" required="" 
                                          style="margin: 0px -1px 0px 0px; height: 126px; width: 502px;">
                                              <?php echo null !== old('theme_description') ? old('theme_description') : (null !== ($sundayschedule) ? $sundayschedule->theme_description : null); ?>
                                </textarea>
                                <label for="form_control_1">Theme Description</label>
                            </div>

                        </div>
                        <div class="form-actions noborder">
                            <button type="submit" class="btn blue">Submit</button>
                        </div>
                    </form>

                </div>
            </div>
            <!-- END EXAMPLE TABLE PORTLET-->
        </div>
    </div>

</div>
<!-- END CONTENT BODY -->

@endsection


@section('scriptspluginpagelevel')
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="{{ asset('adminassets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('adminassets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js') }}" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
@endsection

@section('scriptspagelevel')
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="{{ asset('adminassets/pages/scripts/components-date-time-pickers.min.js') }}" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
@endsection


