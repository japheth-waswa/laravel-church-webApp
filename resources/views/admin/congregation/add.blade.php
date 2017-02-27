@extends('admin.partials.master')

@section('title')
@if(Route::currentRouteName() == 'congregation.edit')
Edit Congregation
@else
Add Congregation
@endif

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

<?php $congregation = isset($congregation) ? $congregation : null; ?>
<!-- BEGIN CONTENT BODY -->
<div class="page-content">
    <!-- BEGIN PAGE HEADER-->

    @if(Route::currentRouteName() == 'congregation.edit')
    <h1 class="page-title"> Edit Congregation
        <small>edit congregation</small>
    </h1>
    @else
    <h1 class="page-title"> Add Congregation
        <small>add new congregation</small>
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
                <a href="{{route('congregation.list')}}">Congregations</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                @if(Route::currentRouteName() == 'congregation.edit')
                <span>Edit Congregation</span>
                @else
                <span>Add Congregation</span>
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
                        @if(Route::currentRouteName() == 'congregation.edit')
                        <span class="caption-subject bold uppercase">Edit Congregation</span>
                        @else
                        <span class="caption-subject bold uppercase">Add Congregation</span>
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

                    <form role="form" action="<?php echo (Route::currentRouteName() == 'congregation.edit' ? route('congregation.update', $congregation->id) : route('congregation.store')); ?>" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        @if(Route::currentRouteName() == 'congregation.edit')
                        {{ method_field('PATCH') }}
                        @endif

                        <div class="form-body">
                            <div class="form-group form-md-line-input form-md-floating-label">
                                <input type="text" class="form-control" id="form_control_1" name="firstname" required="" 
                                       value="<?php echo null !== old('firstname') ? old('firstname') : (null !== ($congregation) ? $congregation->firstname : null); ?>">
                                <label for="form_control_1">First Name</label>
                            </div>
                            <div class="form-group form-md-line-input form-md-floating-label">
                                <input type="text" class="form-control" id="form_control_1" name="lastname" required="" 
                                       value="<?php echo null !== old('lastname') ? old('lastname') : (null !== ($congregation) ? $congregation->lastname : null); ?>">
                                <label for="form_control_1">Last Name</label>
                            </div>
                            <div class="form-group form-md-line-input form-md-floating-label">
                                <input type="text" class="form-control" id="form_control_1" name="phone" 
                                       value="<?php echo null !== old('phone') ? old('phone') : (null !== ($congregation) ? $congregation->phone : null); ?>">
                                <label for="form_control_1">Phone Number</label>
                            </div>
                            <div class="form-group form-md-line-input form-md-floating-label">
                                <input type="email" class="form-control" id="form_control_1" name="email"
                                       value="<?php echo null !== old('email') ? old('email') : (null !== ($congregation) ? $congregation->email : null); ?>">
                                <label for="form_control_1">Email</label>
                            </div>
                            <div class="form-group form-md-line-input form-md-floating-label">
                                <input type="text" class="form-control" id="form_control_1" name="district" 
                                       value="<?php echo null !== old('district') ? old('district') : (null !== ($congregation) ? $congregation->district : null); ?>">
                                <label for="form_control_1">District</label>
                            </div>
                            <div class="form-group form-md-line-input form-md-floating-label">
                                <input type="text" class="form-control" id="form_control_1" name="place_of_stay" 
                                       value="<?php echo null !== old('place_of_stay') ? old('place_of_stay') : (null !== ($congregation) ? $congregation->place_of_stay : null); ?>">
                                <label for="form_control_1">Place of Stay</label>
                            </div>
                            <div class="form-group form-md-line-input form-md-floating-label">
                                <input type="text" class="form-control input-medium date-picker" id="form_control_1" name="date_of_birth" required="" 
                                       value="<?php echo null !== old('date_of_birth') ? old('date_of_birth') : (null !== ($congregation) ? date("m/d/Y", strtotime($congregation->date_of_birth)) : null); ?>">
                                <label for="form_control_1">Date of Birth</label>
                            </div>
                            <div class="form-group form-md-line-input form-md-floating-label has-info">
                                <?php $genderVal = null !== old('gender') ? old('gender') : (null !== ($congregation) ? $congregation->gender : null); ?>
                                <select class="form-control edited" id="form_control_1" name="gender">
                                    <option value="female" <?php echo $genderVal == 'female' ? "selected" : null; ?> >Female</option>
                                    <option value="male" <?php echo $genderVal == 'male' ? "selected" : null; ?> >Male</option>
                                </select>
                                <label for="form_control_1">Gender</label>
                            </div>
                            <div class="form-group form-md-line-input form-md-floating-label has-info">
                                <?php $typeVal = null !== old('type') ? old('type') : (null !== ($congregation) ? $congregation->type : null); ?>
                                <select class="form-control edited" id="form_control_1" name="type">
                                    <option value="adult" <?php echo $typeVal == 'adult' ? "selected" : null; ?> >Adult</option>
                                    <option value="child" <?php echo $typeVal == 'child' ? "selected" : null; ?> >Child</option>
                                </select>
                                <label for="form_control_1">Type</label>
                            </div>

                            @if(Route::currentRouteName() == 'congregation.edit')
                            <div class="form-group">
                                <h4>Current Image:</h4>
                                <img src="{{ asset($congregation->image_url) }}" class="img-responsive img-thumbnail"  width="200px" height='200px'>
                            </div>
                            @endif
                            <div class="fileinput fileinput-exists margin-bottom-25" data-provides="fileinput">
                                <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px; line-height: 150px;">
                                    <img>
                                </div>                                <div>
                                    <span class="btn red btn-outline btn-file">
                                        <span class="fileinput-new"> Select image </span>
                                        <span class="fileinput-exists"> Change </span>
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


