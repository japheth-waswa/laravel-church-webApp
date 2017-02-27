@extends('admin.partials.master')

@section('title')
Manage Slideshow Imaeges
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

    <h1 class="page-title">
        <small>Manage Slideshow Images</small>
    </h1>

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
                <span>Manage Slideshow Images</span>

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
                        <span class="caption-subject bold uppercase">Manage Slideshow Images</span>
                    </div>
                </div>
                <div class="portlet-body">
                    @if (Session::has('errorCustom'))
                    <div class="alert alert-danger">
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

                    @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <div class="row">
                        <?php $imageUrlsArray = explode(',', $gallery->image_urls); ?>
                        @if($imageUrlsArray != null)
                        <h4>Current Images:</h4>
                        @foreach($imageUrlsArray as $imageLink)
                        @if(Helpers::fileExists($imageLink))
                        <form role="form" action="{{ route('gallery.deletemanagedimages', $gallery->id) }}" method="post">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <input type="hidden" name="file_link" value="{{ $imageLink }}">
                            <div class="col-md-2 margin-bottom-10">
                                <img src="{{ asset($imageLink) }}" class="img-responsive img-thumbnail"  width="128px" height='128px'>
                                <button class="btn btn-danger btn-sm"><i class="icon-trash"></i></button>
                            </div>
                        </form>
                        @endif
                        @endforeach
                        @endif
                    </div>


                    <form role="form" action="{{ route('gallery.storemanagedimages', $gallery->id) }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{ method_field('PATCH') }}

                        <input type="hidden" name="idsHolder">

                        <div id="imageUploadContainerJefflilcot">

                        </div>
                        <label class="btn btn-warning margin-bottom-10" onclick="addImageHolder()">Add Image</label>
                        <div class="form-actions noborder">
                            <button type="submit" class="btn blue">Update</button>
                        </div>
                    </form>
                </div>


            </div>
        </div>
        <!-- END EXAMPLE TABLE PORTLET-->
    </div>
</div>

</div>
<!-- END CONTENT BODY -->

<!--===start image holder==-->
<div id="imageUploadElementJefflilcot" class="fileinput fileinput-exists margin-bottom-25" data-provides="fileinput" style="display: none;">
    <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px; line-height: 150px;">
        <img>
    </div>
    <div class="jefflilcot-image-holder">
        <span class="btn red btn-outline btn-file">
            <span class="fileinput-new"> Select image(398x274) </span>
            <span class="fileinput-exists"> Change(398x274) </span>
            <input type="hidden" value="" name="">
            <input type="file" name="file"> 
        </span>
        <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> Remove </a>
    </div>
</div>
<!--===end image holder==-->

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

@section('scripts')
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="{{ asset('adminassets/apppage.js') }}" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
@endsection


