@extends('admin.partials.master')

@section('title')
@if(Route::currentRouteName() == 'gallery.edit')
Edit Gallery
@else
Add Gallery
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

<?php $gallery = isset($gallery) ? $gallery : null; ?>
<!-- BEGIN CONTENT BODY -->
<div class="page-content">
    <!-- BEGIN PAGE HEADER-->

    @if(Route::currentRouteName() == 'gallery.edit')
    <h1 class="page-title"> Edit Gallery
        <small>edit gallery</small>
    </h1>
    @else
    <h1 class="page-title"> Add Gallery
        <small>add new gallery</small>
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
                <a href="{{route('gallery.list')}}">Galleries</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                @if(Route::currentRouteName() == 'gallery.edit')
                <span>Edit Gallery</span>
                @else
                <span>Add Gallery</span>
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
                        @if(Route::currentRouteName() == 'gallery.edit')
                        <span class="caption-subject bold uppercase">Edit Gallery</span>
                        @else
                        <span class="caption-subject bold uppercase">Add Gallery</span>
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

                    <form role="form" action="<?php echo (Route::currentRouteName() == 'gallery.edit' ? route('gallery.update', $gallery->id) : route('gallery.store')); ?>" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        @if(Route::currentRouteName() == 'gallery.edit')
                        {{ method_field('PATCH') }}
                        @endif

                        <div class="form-body">
                            <div class="form-group form-md-line-input form-md-floating-label">
                                <input type="text" class="form-control" id="form_control_1" name="title" required="" 
                                       value="<?php echo null !== old('title') ? old('title') : (null !== ($gallery) ? $gallery->title : null); ?>">
                                <label for="form_control_1">Title</label>
                            </div>
                            <div class="form-group form-md-line-input form-md-floating-label">
                                <input type="text" class="form-control" id="form_control_1" name="video_url" 
                                       value="<?php echo null !== old('video_url') ? old('video_url') : (null !== ($gallery) ? $gallery->video_url : null); ?>">
                                <label for="form_control_1">Video url</label>
                            </div>
                            <div class="form-group form-md-line-input form-md-floating-label">
                                <input type="text" class="form-control" id="form_control_1" name="link_url" 
                                       value="<?php echo null !== old('link_url') ? old('link_url') : (null !== ($gallery) ? $gallery->link_url : null); ?>">
                                <label for="form_control_1">Link Url</label>
                            </div>
                            <div class="form-group form-md-line-input form-md-floating-label has-info">
                                <?php $categoryVal = null !== old('gallery_category_id') ? old('gallery_category_id') : (null !== ($gallery) ? $gallery->gallery_category_id : null); ?>
                                <select class="form-control edited text-capitalize" id="form_control_1" name="gallery_category_id">
                                    @foreach($galleryCategories as $galleryCategory)
                                    <option value="{{ $galleryCategory->id }}" <?php echo $categoryVal == $galleryCategory->id ? "selected" : null; ?> >{{ $galleryCategory->title }}</option>
                                    @endforeach
                                </select>
                                <label for="form_control_1">Category</label>
                            </div>

                            <div class="form-group form-md-line-input form-md-floating-label">
                                <textarea class="form-control" rows="3" name="brief_description" required="" 
                                          style="margin: 0px -1px 0px 0px; height: 126px; width: 502px;">
                                              <?php echo null !== old('brief_description') ? old('brief_description') : (null !== ($gallery) ? $gallery->brief_description : null); ?>
                                </textarea>
                                <label for="form_control_1">Brief Description</label>
                                <span class="help-block">Brief description about the gallery.</span>
                            </div>

                            @if(Route::currentRouteName() == 'gallery.edit')
                            @if(Helpers::fileExists($gallery->image_urls))
                            <div class="form-group">
                                <h4>Current Image:</h4>
                                <img src="{{ asset($gallery->image_urls) }}" class="img-responsive img-thumbnail"  width="200px" height='200px'>
                            </div>
                            @endif
                            @endif
                            
                            @if(false == (isset($gallery) && $gallery->gallerycategory->url_key == 'slideshow'))
                            <div class="fileinput fileinput-exists margin-bottom-25" data-provides="fileinput">
                                <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px; line-height: 150px;">
                                    <img>
                                </div>
                                <div>
                                    <span class="btn red btn-outline btn-file">
                                        <span class="fileinput-new"> Select image(398x274) </span>
                                        <span class="fileinput-exists"> Change(398x274) </span>
                                        <input type="hidden" value="" name=""><input type="file" name="file"> </span>
                                    <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> Remove </a>
                                </div>
                            </div>
                            @endif

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


