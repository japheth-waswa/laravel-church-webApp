@extends('admin.partials.master')

@section('title')
Edit Profile
@endsection



@section('stylespagelevel')
<!-- BEGIN PAGE LEVEL PLUGINS -->
<link href="{{ asset('adminassets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('adminassets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css') }}" rel="stylesheet" type="text/css" />
<!-- END PAGE LEVEL PLUGINS -->
@endsection

@section('content')

<?php $user = isset($user) ? $user : null; ?>
<!-- BEGIN CONTENT BODY -->
<div class="page-content">
    <!-- BEGIN PAGE HEADER-->

</h1>

<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="{{route('dashboard')}}">Home</a>
            <i class="fa fa-angle-right"></i>
        </li>
        <li>
            <span>Edit Profile</span>

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
                    <span class="caption-subject bold uppercase">Edit Profile</span>
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
                @if(Session::has('successCustom'))
                <div class="alert alert-success alert-dismissible" role='alert'>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <p>{{Session::get('successCustom')}}</p>
                </div>
                @endif

                <form role="form" action="<?php echo route('profile.update', $user->id); ?>" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('PATCH') }}

                    <div class="form-body">
                        <div class="form-group form-md-line-input form-md-floating-label">
                            <input type="text" class="form-control" id="form_control_1" name="name" required="" 
                                   value="<?php echo null !== old('name') ? old('name') : (null !== ($user) ? $user->name : null); ?>">
                            <label for="form_control_1">Names</label>
                        </div>
                        <div class="form-group form-md-line-input form-md-floating-label">
                            <input type="email" class="form-control" id="form_control_1" name="email" required=""
                                   value="<?php echo null !== old('email') ? old('email') : (null !== ($user) ? $user->email : null); ?>">
                            <label for="form_control_1">Email</label>
                        </div>
                        <div class="form-group form-md-line-input form-md-floating-label">
                            <input type="password" class="form-control" id="form_control_1" name="password">
                            <label for="form_control_1">Password</label>
                        </div>
                        @if(Helpers::fileExists($user->image_url))
                        <div class="form-group">
                            <h4>Current Profile Image:</h4>
                            <img src="{{ asset($user->image_url) }}" class="img-responsive img-thumbnail"  width="200px" height='200px'>
                        </div>
                        @endif
                        <div class="fileinput fileinput-exists margin-bottom-25" data-provides="fileinput">
                            <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px; line-height: 150px;">
                                <img></div>
                            <div>
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
<script src="{{ asset('adminassets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('adminassets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js') }}" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
@endsection

@section('scriptspagelevel')
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="{{ asset('adminassets/pages/scripts/components-date-time-pickers.min.js') }}" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
@endsection


