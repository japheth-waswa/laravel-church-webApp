@extends('admin.partials.master')

@section('title')
@if(Route::currentRouteName() == 'sermon.edit')
Edit Sermon
@else
Add Sermon
@endif

@endsection



@section('stylespagelevel')
<!-- BEGIN PAGE LEVEL PLUGINS -->
<link href="{{ asset('adminassets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('adminassets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css') }}" rel="stylesheet" type="text/css" />
<!-- END PAGE LEVEL PLUGINS -->
@endsection

@section('content')

<?php $sermon = isset($sermon) ? $sermon : null;?>
<!-- BEGIN CONTENT BODY -->
<div class="page-content">
    <!-- BEGIN PAGE HEADER-->

    @if(Route::currentRouteName() == 'sermon.edit')
    <h1 class="page-title"> Edit Sermon
        <small>edit sermon</small>
    </h1>
    @else
    <h1 class="page-title"> Add Sermon
        <small>add new sermon</small>
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
                <a href="{{route('sermon.list')}}">Sermons</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                @if(Route::currentRouteName() == 'sermon.edit')
                <span>Edit Sermon</span>
                @else
                <span>Add Sermon</span>
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
                        @if(Route::currentRouteName() == 'sermon.edit')
                        <span class="caption-subject bold uppercase">Edit Sermon</span>
                        @else
                        <span class="caption-subject bold uppercase">Add Sermon</span>
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

                    <form role="form" action="<?php echo (Route::currentRouteName() == 'sermon.edit' ? route('sermon.update', $sermon->id) : route('sermon.store')); ?>" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        @if(Route::currentRouteName() == 'sermon.edit')
                        {{ method_field('PATCH') }}
                        @endif

                        <div class="form-body">
                            <div class="form-group form-md-line-input form-md-floating-label">
                                <input type="text" class="form-control" id="form_control_1" name="title" required="" 
                                       value="<?php echo null !== old('title') ? old('title') : (null !== ($sermon) ? $sermon->title : null);?>">
                                <label for="form_control_1">Title</label>
                                <span class="help-block">Title of sermon</span>
                            </div>
                            <div class="form-group form-md-line-input form-md-floating-label">
                                <input type="text" class="form-control" id="form_control_1" name="audio_url" 
                                       value="<?php echo null !== old('audio_url') ? old('audio_url') : (null !== ($sermon) ? $sermon->audio_url : null);?>">
                                <label for="form_control_1">Audio Url</label>
                            </div>
                            <div class="form-group form-md-line-input form-md-floating-label">
                                <input type="text" class="form-control" id="form_control_1" name="video_url" 
                                       value="<?php echo null !== old('video_url') ? old('video_url') : (null !== ($sermon) ? $sermon->video_url : null);?>">
                                <label for="form_control_1">Video Url</label>
                            </div>
                            <div class="form-group form-md-line-input form-md-floating-label">
                                <input type="text" class="form-control" id="form_control_1" name="pdf_url" 
                                       value="<?php echo null !== old('pdf_url') ? old('pdf_url') : (null !== ($sermon) ? $sermon->pdf_url : null);?>">
                                <label for="form_control_1">Pdf Url</label>
                            </div>
                             <div class="form-group form-md-line-input form-md-floating-label">
                                <input type="text" class="form-control input-medium date-picker" id="form_control_1" name="sermon_date" required="" 
                                       value="<?php echo null !== old('sermon_date') ? old('sermon_date') : (null !== ($sermon) ? date("m/d/Y", strtotime($sermon->sermon_date)) : null);?>">
                                <label for="form_control_1">Sermon Date</label>
                                <span class="help-block">Date when the summon was or will be.</span>
                            </div>
                                
                            <div class="form-group form-md-line-input form-md-floating-label">
                                <textarea class="form-control" rows="3" name="brief_description" required="" 
                                          style="margin: 0px -1px 0px 0px; height: 126px; width: 502px;">
                                <?php echo null !== old('brief_description') ? old('brief_description') : (null !== ($sermon) ? $sermon->brief_description : null);?>
                                </textarea>
                                <label for="form_control_1">Brief Description</label>
                                <span class="help-block">Brief description about the sermon.</span>
                            </div>
                             @if(Route::currentRouteName() == 'sermon.edit')
                            <div class="form-group">
                                <h4>Current Image:</h4>
                                <img src="{{ asset($sermon->image_url) }}" class="img-responsive img-thumbnail"  width="200px" height='200px'>
                            </div>
                            @endif
                            <div class="fileinput fileinput-exists margin-bottom-25" data-provides="fileinput">
                                <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px; line-height: 150px;">
                                    <img></div>
                                    <div>
                                    <span class="btn red btn-outline btn-file">
                                        <span class="fileinput-new"> Select image(263x165) </span>
                                        <span class="fileinput-exists"> Change(263x165) </span>
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


