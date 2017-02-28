@extends('admin.partials.master')

@section('title')
@if(Route::currentRouteName() == 'staff.edit')
Edit Staff
@else
Add Staff
@endif

@endsection



@section('stylespagelevel')
<!-- BEGIN PAGE LEVEL PLUGINS -->
<link href="{{ asset('adminassets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('adminassets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css') }}" rel="stylesheet" type="text/css" />
<!-- END PAGE LEVEL PLUGINS -->
@endsection

@section('content')

<?php $staff = isset($staff) ? $staff : null; ?>
<!-- BEGIN CONTENT BODY -->
<div class="page-content">
    <!-- BEGIN PAGE HEADER-->

    @if(Route::currentRouteName() == 'staff.edit')
    <h1 class="page-title"> Edit Staff
        <small>edit staff</small>
    </h1>
    @else
    <h1 class="page-title"> Add Staff
        <small>add new staff</small>
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
                <a href="{{route('staff.list')}}">Staffs</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                @if(Route::currentRouteName() == 'staff.edit')
                <span>Edit Staff</span>
                @else
                <span>Add Staff</span>
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
                        @if(Route::currentRouteName() == 'staff.edit')
                        <span class="caption-subject bold uppercase">Edit Staff</span>
                        @else
                        <span class="caption-subject bold uppercase">Add Staff</span>
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

                    <form role="form" action="<?php echo (Route::currentRouteName() == 'staff.edit' ? route('staff.update', $staff->id) : route('staff.store')); ?>" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        @if(Route::currentRouteName() == 'staff.edit')
                        {{ method_field('PATCH') }}
                        @endif

                        <div class="form-body">
                            <div class="form-group form-md-line-input form-md-floating-label">
                                <input type="text" class="form-control" id="form_control_1" name="title" required="" 
                                       value="<?php echo null !== old('title') ? old('title') : (null !== ($staff) ? $staff->title : null); ?>">
                                <label for="form_control_1">Title</label>
                            </div>
                            <div class="form-group form-md-line-input form-md-floating-label">
                                <input type="text" class="form-control" id="form_control_1" name="names" required="" 
                                       value="<?php echo null !== old('names') ? old('names') : (null !== ($staff) ? $staff->names : null); ?>">
                                <label for="form_control_1">Names</label>
                            </div>
                            <div class="form-group form-md-line-input form-md-floating-label">
                                <input type="text" class="form-control" id="form_control_1" name="phone" required="" 
                                       value="<?php echo null !== old('phone') ? old('phone') : (null !== ($staff) ? $staff->phone : null); ?>">
                                <label for="form_control_1">Phone Number</label>
                            </div>
                            <div class="form-group form-md-line-input form-md-floating-label">
                                <input type="email" class="form-control" id="form_control_1" name="email"
                                       value="<?php echo null !== old('email') ? old('email') : (null !== ($staff) ? $staff->email : null); ?>">
                                <label for="form_control_1">Email</label>
                            </div>
                            <div class="form-group form-md-line-input form-md-floating-label">
                                <input type="text" class="form-control" id="form_control_1" name="facebook_url" 
                                       value="<?php echo null !== old('facebook_url') ? old('facebook_url') : (null !== ($staff) ? $staff->facebook_url : null); ?>">
                                <label for="form_control_1">Facebook Url</label>
                            </div>
                            <div class="form-group form-md-line-input form-md-floating-label">
                                <input type="text" class="form-control" id="form_control_1" name="twitter_url" 
                                       value="<?php echo null !== old('twitter_url') ? old('twitter_url') : (null !== ($staff) ? $staff->twitter_url : null); ?>">
                                <label for="form_control_1">Twitter Url</label>
                            </div>
                            <div class="form-group form-md-line-input form-md-floating-label">
                                <input type="text" class="form-control" id="form_control_1" name="youtube_url" 
                                       value="<?php echo null !== old('youtube_url') ? old('youtube_url') : (null !== ($staff) ? $staff->youtube_url : null); ?>">
                                <label for="form_control_1">Youtube Url</label>
                            </div>
                            <div class="form-group form-md-line-input form-md-floating-label has-info">
                                <?php $priorityVal = null !== old('priority') ? old('priority') : (null !== ($staff) ? $staff->priority : null); ?>
                                <select class="form-control edited" id="form_control_1" name="priority">
                                    <option value="1" <?php echo $priorityVal == 1 ? "selected" : null; ?> >1</option>
                                    <option value="3" <?php echo $priorityVal == 3 ? "selected" : null; ?> >3</option>
                                    <option value="5" <?php echo $priorityVal == 5 ? "selected" : null; ?> >5</option>
                                    <option value="7" <?php echo $priorityVal == 7 ? "selected" : null; ?> >7</option>
                                </select>
                                <label for="form_control_1">Priority</label>
                            </div>

                            <div class="form-group form-md-line-input form-md-floating-label">
                                <textarea class="form-control" rows="3" name="brief_description" required="" 
                                          style="margin: 0px -1px 0px 0px; height: 126px; width: 502px;">
                                              <?php echo null !== old('brief_description') ? old('brief_description') : (null !== ($staff) ? $staff->brief_description : null); ?>
                                </textarea>
                                <label for="form_control_1">Brief Description</label>
                                <span class="help-block">Brief description about the staff.</span>
                            </div>
                            @if(Route::currentRouteName() == 'staff.edit')
                            <div class="form-group">
                                <h4>Current Image:</h4>
                                <img src="{{ asset($staff->image_url) }}" class="img-responsive img-thumbnail"  width="200px" height='200px'>
                            </div>
                            @endif
                            <div class="fileinput fileinput-exists margin-bottom-25" data-provides="fileinput">
                                <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px; line-height: 150px;">
                                    <img>
                                </div>                                <div>
                                    <span class="btn red btn-outline btn-file">
                                        <span class="fileinput-new"> Select image(359x244) </span>
                                        <span class="fileinput-exists"> Change(359x244) </span>
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
<script src="{{ asset('adminassets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('adminassets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js') }}" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
@endsection

@section('scriptspagelevel')
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="{{ asset('adminassets/pages/scripts/components-date-time-pickers.min.js') }}" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
@endsection


