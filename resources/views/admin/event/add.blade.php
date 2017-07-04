@extends('admin.partials.master')

@section('title')
@if(Route::currentRouteName() == 'event.edit')
Edit Event
@else
Add Event
@endif

@endsection



@section('stylespagelevel')
<!-- BEGIN PAGE LEVEL PLUGINS -->
<!--<link href="{{ asset('adminassets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css') }}" rel="stylesheet" type="text/css" />-->
<link href="{{ asset('adminassets/global/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('adminassets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css') }}" rel="stylesheet" type="text/css" />
<!-- END PAGE LEVEL PLUGINS -->
@endsection

@section('content')

<?php $event = isset($event) ? $event : null; ?>
<!-- BEGIN CONTENT BODY -->
<div class="page-content">
    <!-- BEGIN PAGE HEADER-->

    @if(Route::currentRouteName() == 'event.edit')
    <h1 class="page-title"> Edit Event
        <small>edit event</small>
    </h1>
    @else
    <h1 class="page-title"> Add Event
        <small>add new event</small>
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
                <a href="{{route('event.list')}}">Events</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                @if(Route::currentRouteName() == 'event.edit')
                <span>Edit Event</span>
                @else
                <span>Add Event</span>
                @endif

            </li>
        </ul>

    </div>
    <!-- END PAGE HEADER-->


    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet light ">
                <div class="portlet-title">
                    <div class="caption font-dark">
                        <i class="icon-pencil font-dark"></i>
                        @if(Route::currentRouteName() == 'event.edit')
                        <span class="caption-subject bold uppercase">Edit Event</span>
                        @else
                        <span class="caption-subject bold uppercase">Add Event</span>
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

                    <form role="form" action="<?php echo (Route::currentRouteName() == 'event.edit' ? route('event.update', $event->id) : route('event.store')); ?>" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        @if(Route::currentRouteName() == 'event.edit')
                        {{ method_field('PATCH') }}
                        @endif

                        <div class="form-body">
                            <div class="form-group form-md-line-input form-md-floating-label">
                                <input type="text" class="form-control" id="form_control_1" name="title" required="" 
                                       value="<?php echo null !== old('title') ? old('title') : (null !== ($event) ? $event->title : null); ?>">
                                <label for="form_control_1">Title</label>
                            </div>
                            <div class="form-group form-md-line-input form-md-floating-label">
                                <input type="text" class="form-control" id="form_control_1" name="event_location" 
                                       value="<?php echo null !== old('event_location') ? old('event_location') : (null !== ($event) ? $event->event_location : null); ?>">
                                <label for="form_control_1">Event Location</label>
                            </div>
                            <div class="form-group form-md-line-input form-md-floating-label has-info">
                                <?php $categoryVal = null !== old('event_category_id') ? old('event_category_id') : (null !== ($event) ? $event->event_category_id : null); ?>
                                <select class="form-control edited text-capitalize" id="form_control_1" name="event_category_id">
                                    @foreach($eventCategories as $eventCategory)
                                    <option value="{{ $eventCategory->id }}" <?php echo $categoryVal == $eventCategory->id ? "selected" : null; ?> >{{ $eventCategory->title }}</option>
                                    @endforeach
                                </select>
                                <label for="form_control_1">Category</label>
                            </div>
                            <div class="form-group form-md-line-input form-md-floating-label">
                                <input type="text" class="form-control input-medium date cust_form_datetime" id="form_control_1" name="event_date" required="" data-date-format="yyyy-mm-dd hh:ii" 
                                       value="<?php echo null !== old('event_date') ? old('event_date') : (null !== ($event) ? date("Y-m-d H:i",strtotime($event->event_date)) : null); ?>">
                                <label for="form_control_1">Event Date</label>
                            </div>
                            <div class="form-group form-md-line-input form-md-floating-label">
                                <textarea class="form-control" rows="3" name="brief_description" required="" 
                                          style="margin: 0px -1px 0px 0px; height: 126px; width: 502px;">
                                              <?php echo null !== old('brief_description') ? old('brief_description') : (null !== ($event) ? $event->brief_description : null); ?>
                                </textarea>
                                <label for="form_control_1">Brief Description</label>
                                <span class="help-block">Brief description about the event.</span>
                            </div>

                            <div class="form-group form-md-line-input form-md-floating-label">
                                <textarea class="form-control" rows="3" name="content" id="content" required="" 
                                          style="margin: 0px -1px 0px 0px; height: 126px; width: 502px;">
                                              <?php echo null !== old('content') ? old('content') : (null !== ($event) ? $event->content : null); ?>
                                </textarea>
                                <label for="form_control_1">Content</label>
                            </div>

                            @if(Route::currentRouteName() == 'event.edit')
                            <div class="form-group">
                                <h4>Current Image:</h4>
                                <img src="{{ asset($event->image_url) }}" class="img-responsive img-thumbnail"  width="200px" height='200px'>
                            </div>
                            @endif
                            <div class="fileinput fileinput-exists margin-bottom-25" data-provides="fileinput">
                                <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px; line-height: 150px;">
                                    <img>
                                </div>                                <div>
                                    <span class="btn red btn-outline btn-file">
                                        <span class="fileinput-new"> Select image(358x246) </span>
                                        <span class="fileinput-exists"> Change(358x246) </span>
                                        <input type="hidden" value="" name=""><input type="file" name="file"> </span>
                                    <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> Remove </a>
                                </div>
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
<!--<script src="{{ asset('adminassets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}" type="text/javascript"></script>-->
<script src="{{ asset('adminassets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('adminassets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js') }}" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
@endsection

@section('scriptspagelevel')
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="{{ asset('adminassets/pages/scripts/components-date-time-pickers.min.js') }}" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
@endsection

@section('scripts')
<script src="{{ asset('assets/filesManagement/ckeditor/ckeditor.js') }}" type="text/javascript"></script>
<script>
$(document).ready(function () {
	
	$('.cust_form_datetime').datetimepicker({
    format: 'yyyy-mm-dd hh:ii'
});
	
    var txtContent = document.getElementById("content");
    CKEDITOR.replace(txtContent);
});
</script>
@endsection

