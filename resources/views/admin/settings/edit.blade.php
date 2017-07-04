@extends('admin.partials.master')

@section('title')
Update Settings
@endsection



@section('stylespagelevel')
<!-- BEGIN PAGE LEVEL PLUGINS -->
<link href="{{ asset('adminassets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('adminassets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css') }}" rel="stylesheet" type="text/css" />
<!-- END PAGE LEVEL PLUGINS -->
@endsection

@section('content')

<?php $settings = isset($settings) ? $settings : null; ?>
<!-- BEGIN CONTENT BODY -->
<div class="page-content">
    <!-- BEGIN PAGE HEADER-->

    @if(Route::currentRouteName() == 'settings.edit')
    <h1 class="page-website_name"> Edit Settings
        <small>edit settings</small>
    </h1>
    @else
    <h1 class="page-website_name"> Add Settings
        <small>add new settings</small>
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
                @if(Route::currentRouteName() == 'settings.edit')
                <span>Edit Settings</span>
                @else
                <span>Add Settings</span>
                @endif

            </li>
        </ul>

    </div>
    <!-- END PAGE HEADER-->


    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet light ">
                <div class="portlet-website_name">
                    <div class="caption font-dark">
                        <i class="icon-pencil font-dark"></i>
                        @if(Route::currentRouteName() == 'settings.edit')
                        <span class="caption-subject bold uppercase">Edit Settings</span>
                        @else
                        <span class="caption-subject bold uppercase">Add Settings</span>
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
                    @if(Session::has('successCustom'))
                    <div class="alert alert-success alert-dismissible" role='alert'>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <p>{{Session::get('successCustom')}}</p>
                    </div>
                    @endif
                    <form role="form" action="{{ route('settings.update',1) }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        @if(Route::currentRouteName() == 'settings.edit')
                        {{ method_field('PATCH') }}
                        @endif

                        <div class="form-body">
                            <div class="form-group form-md-line-input form-md-floating-label">
                                <input type="text" class="form-control" id="form_control_1" name="website_name" required="" 
                                       value="<?php echo null !== old('website_name') ? old('website_name') : (null !== ($settings) ? $settings->website_name : null); ?>">
                                <label for="form_control_1">Website Name</label>
                            </div>
                            <div class="form-group form-md-line-input form-md-floating-label">
                                <input type="text" class="form-control" id="form_control_1" name="theme_title" required=""
                                       value="<?php echo null !== old('theme_title') ? old('theme_title') : (null !== ($settings) ? $settings->theme_title : null); ?>">
                                <label for="form_control_1">Theme Title</label>
                            </div>
                            <div class="form-group form-md-line-input form-md-floating-label">
                                <input type="text" class="form-control" id="form_control_1" name="physical_address" required=""
                                       value="<?php echo null !== old('physical_address') ? old('physical_address') : (null !== ($settings) ? $settings->physical_address : null); ?>">
                                <label for="form_control_1">Physical Address</label>
                            </div>
                            <div class="form-group form-md-line-input form-md-floating-label">
                                <input type="email" class="form-control" id="form_control_1" name="primary_email" required=""
                                       value="<?php echo null !== old('primary_email') ? old('primary_email') : (null !== ($settings) ? $settings->primary_email : null); ?>">
                                <label for="form_control_1">Primary Email</label>
                            </div>
                            <div class="form-group form-md-line-input form-md-floating-label">
                                <input type="text" class="form-control" id="form_control_1" name="secondary_email"
                                       value="<?php echo null !== old('secondary_email') ? old('secondary_email') : (null !== ($settings) ? $settings->secondary_email : null); ?>">
                                <label for="form_control_1">Secondary Email</label>
                            </div>
                            <div class="form-group form-md-line-input form-md-floating-label">
                                <input type="text" class="form-control" id="form_control_1" name="primary_phone" required=""
                                       value="<?php echo null !== old('primary_phone') ? old('primary_phone') : (null !== ($settings) ? $settings->primary_phone : null); ?>">
                                <label for="form_control_1">Primary Phone</label>
                            </div>
                            <div class="form-group form-md-line-input form-md-floating-label">
                                <input type="text" class="form-control" id="form_control_1" name="secondary_phone"
                                       value="<?php echo null !== old('secondary_phone') ? old('secondary_phone') : (null !== ($settings) ? $settings->secondary_phone : null); ?>">
                                <label for="form_control_1">Secondary Phone</label>
                            </div>
                            <div class="form-group form-md-line-input form-md-floating-label">
                                <input type="text" class="form-control" id="form_control_1" name="facebook_url"
                                       value="<?php echo null !== old('facebook_url') ? old('facebook_url') : (null !== ($settings) ? $settings->facebook_url : null); ?>">
                                <label for="form_control_1">Facebook Url</label>
                            </div>
                            <div class="form-group form-md-line-input form-md-floating-label">
                                <input type="text" class="form-control" id="form_control_1" name="twitter_url"
                                       value="<?php echo null !== old('twitter_url') ? old('twitter_url') : (null !== ($settings) ? $settings->twitter_url : null); ?>">
                                <label for="form_control_1">Twitter Url</label>
                            </div>
                            <div class="form-group form-md-line-input form-md-floating-label">
                                <input type="text" class="form-control" id="form_control_1" name="youtube_url"
                                       value="<?php echo null !== old('youtube_url') ? old('youtube_url') : (null !== ($settings) ? $settings->youtube_url : null); ?>">
                                <label for="form_control_1">Youtube Url</label>
                            </div>
                            <div class="form-group form-md-line-input form-md-floating-label">
                                <textarea class="form-control" rows="3" name="theme_description" required="" 
                                          style="margin: 0px -1px 0px 0px; height: 126px; width: 502px;">
                                              <?php echo null !== old('theme_description') ? old('theme_description') : (null !== ($settings) ? $settings->theme_description : null); ?>
                                </textarea>
                                <label for="form_control_1">Theme Description</label>
                            </div>
                            <div class="form-group form-md-line-input form-md-floating-label">
                                <textarea class="form-control" rows="3" name="about_us" id="content" required="" 
                                          style="margin: 0px -1px 0px 0px; height: 126px; width: 502px;">
                                              <?php echo null !== old('about_us') ? old('about_us') : (null !== ($settings) ? $settings->about_us : null); ?>
                                </textarea>
                                <label for="form_control_1">About Us</label>
                            </div>
                            <div class="form-group form-md-line-input form-md-floating-label">
                                <textarea class="form-control" rows="3" name="quotation" required="" 
                                          style="margin: 0px -1px 0px 0px; height: 126px; width: 502px;">
                                              <?php echo null !== old('quotation') ? old('quotation') : (null !== ($settings) ? $settings->quotation : null); ?>
                                </textarea>
                                <label for="form_control_1">Quotation</label>
                            </div>
                            <div class="form-group form-md-line-input form-md-floating-label">
                                <input type="text" class="form-control" id="form_control_1" name="quotation_origin"
                                       value="<?php echo null !== old('quotation_origin') ? old('quotation_origin') : (null !== ($settings) ? $settings->quotation_origin : null); ?>">
                                <label for="form_control_1">Quotation Origin</label>
                            </div>

                            @if(Route::currentRouteName() == 'settings.edit' && null !== ($settings))
                            @if(Helpers::fileExists($settings->logo_url))
                            <div class="form-group">
                                <h4>Current Logo:</h4>
                                <img src="{{ asset($settings->logo_url) }}" class="img-responsive img-thumbnail"  width="200px" height='200px'>
                            </div>
                            @endif
                            @endif
                            <div class="fileinput fileinput-exists margin-bottom-25" data-provides="fileinput">
                                <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px; line-height: 150px;">
                                    <img >
                                </div>
                                <div>
                                    <span class="btn red btn-outline btn-file">
                                        <span class="fileinput-new"> Select Logo image(132x61) </span>
                                        <span class="fileinput-exists"> Change Logo(132x61)</span>
                                        <input type="hidden" value="" name=""><input type="file" name="file"> </span>
                                    <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> Remove Logo</a>
                                </div>
                            </div>

                            @if(Route::currentRouteName() == 'settings.edit' && null !== ($settings))
                            @if(Helpers::fileExists($settings->login_logo_url))
                            <div class="form-group">
                                <h4>Current Login Image:</h4>
                                <img src="{{ asset($settings->login_logo_url) }}" class="img-responsive img-thumbnail"  width="200px" height='200px'>
                            </div>
                            @endif
                            @endif
                            <div class="fileinput fileinput-exists margin-bottom-25" data-provides="fileinput">
                                <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px; line-height: 150px;">
                                    <img >
                                </div>
                                <div>
                                    <span class="btn red btn-outline btn-file">
                                        <span class="fileinput-new"> Select login image(1200x1080) </span>
                                        <span class="fileinput-exists"> Change login image(1200x1080)</span>
                                        <input type="hidden" value="" name=""><input type="file" name="login_image"> </span>
                                    <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> Remove Login Image</a>
                                </div>
                            </div>

                            @if(Route::currentRouteName() == 'settings.edit' && null !== ($settings))
                            @if(Helpers::fileExists($settings->page_menu_url))
                            <div class="form-group">
                                <h4>Current Page Menu Image:</h4>
                                <img src="{{ asset($settings->page_menu_url) }}" class="img-responsive img-thumbnail"  width="200px" height='200px'>
                            </div>
                            @endif
                            @endif
                            <div class="fileinput fileinput-exists margin-bottom-25" data-provides="fileinput">
                                <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px; line-height: 150px;">
                                    <img >
                                </div>
                                <div>
                                    <span class="btn red btn-outline btn-file">
                                        <span class="fileinput-new"> Select Page Menu Image(1920x1077) </span>
                                        <span class="fileinput-exists"> Change Page Menu Image(1920x1077)</span>
                                        <input type="hidden" value="" name=""><input type="file" name="page_menu_image"> </span>
                                    <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> Remove Page Menu Image</a>
                                </div>
                            </div>

                            @if(Route::currentRouteName() == 'settings.edit' && null !== ($settings))
                            @if(Helpers::fileExists($settings->fav_icon_url))
                            <div class="form-group">
                                <h4>Current Favicon:</h4>
                                <img src="{{ asset($settings->fav_icon_url) }}" class="img-responsive img-thumbnail"  width="24px" height='24px'>
                            </div>
                            @endif
                            @endif
                            <div class="fileinput fileinput-exists margin-bottom-25" data-provides="fileinput">
                                <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 50px; height: 70px; line-height: 70px;">
                                    <img >
                                </div>
                                <div>
                                    <span class="btn red btn-outline btn-file">
                                        <span class="fileinput-new"> Select Favicon Image(32x32) & .ico </span>
                                        <span class="fileinput-exists"> Change Favicon Image(32x32) & .ico</span>
                                        <input type="hidden" value="" name=""><input type="file" name="favicon_image"> </span>
                                    <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> Remove Favicon Image</a>
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

@section('scripts')
<script src="{{ asset('assets/filesManagement/ckeditor/ckeditor.js') }}" type="text/javascript"></script>
<script>
$(document).ready(function () {
    var txtContent = document.getElementById("content");
    CKEDITOR.replace(txtContent);
});
</script>
@endsection


