@extends('admin.partials.master')

@section('title')
View Comment
@endsection



@section('stylescommentlevel')
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


<!-- BEGIN CONTENT BODY -->
<div class="page-content">
    <!-- BEGIN PAGE HEADER-->

    <h1 class="page-title">
        <small>View Comment</small>
    </h1>

    <div class="page-bar">
        <ul class="page-breadcrumb">
            <li>
                <i class="icon-home"></i>
                <a href="{{route('dashboard')}}">Home</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <a href="{{route('comment.list')}}">Comments</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <span>view comment</span>

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
                        @if($comment->visible == 1)
                        <a href="{{ route('comment.visibility',array($comment->id,'0')) }}">
                            <label id="sample_editable_1_new" class="btn sbold blue"> Hide
                                <i class="fa fa-eye-slash"></i>
                            </label>
                        </a>
                        @else
                        <a href="{{ route('comment.visibility',array($comment->id,'1')) }}">
                            <label id="sample_editable_1_new" class="btn sbold blue"> Unhide
                                <i class="fa fa-eye"></i>
                            </label>
                        </a>
                        @endif
                        <a href="{{route('comment.destroy',$comment->id) }}">
                            <label id="sample_editable_1_new" class="btn sbold red"> Delete
                                <i class="fa fa-trash"></i>
                            </label>
                        </a>
                    </div>
                </div>
                <div class="portlet-body">
                    @if(Session::has('errorCustom'))
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
                        <h4 class="text-capitalize">{{ $comment->names }}</h4>
                        <h4 class="text-capitalize">{{ $comment->email }}</h4>
                        <h4 class="text-capitalize">{{ $comment->phone }}</h4>
                        <p class="text-capitalize">{{ $comment->message }}</p>
                    </div>

                </div>


            </div>
        </div>
        <!-- END EXAMPLE TABLE PORTLET-->
    </div>
</div>

<!-- END CONTENT BODY -->


@endsection


@section('scriptsplugincommentlevel')
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

@section('scriptscommentlevel')
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="{{ asset('adminassets/comments/scripts/components-date-time-pickers.min.js') }}" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
@endsection
