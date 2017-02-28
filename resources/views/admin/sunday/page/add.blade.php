@extends('admin.partials.master')

@section('title')
@if(Route::currentRouteName() == 'sundaypage.edit')
Edit Sunday Page
@else
Add Sunday Page
@endif

@endsection



@section('stylespagelevel')
<!-- BEGIN PAGE LEVEL PLUGINS -->
<link href="{{ asset('adminassets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('adminassets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css') }}" rel="stylesheet" type="text/css" />
<!-- END PAGE LEVEL PLUGINS -->
@endsection

@section('content')

<?php $sundayschedule = isset($sundayschedule) ? $sundayschedule : null;?>
<?php $sundayPage = isset($sundayPage) ? $sundayPage : null;?>
<!-- BEGIN CONTENT BODY -->
<div class="page-content">
    <!-- BEGIN PAGE HEADER-->

    @if(Route::currentRouteName() == 'sundaypage.edit')
    <h1 class="page-page_order"> Edit Sunday Page
        <small>edit sunday schedule</small>
    </h1>
    @else
    <h1 class="page-page_order"> Add Sunday Page
        <small>add new sunday page</small>
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
                <a href="{{route('sunday.show',$sundayschedule->id)}}">Sunday Page</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                @if(Route::currentRouteName() == 'sundaypage.edit')
                <span>Edit Sunday Page</span>
                @else
                <span>Add Sunday Page</span>
                @endif

            </li>
        </ul>

    </div>
    <!-- END PAGE HEADER-->


    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet light ">
                <div class="portlet-page_order">
                    <div class="caption font-dark">
                        <i class="icon-pencil font-dark"></i>
                        @if(Route::currentRouteName() == 'sundaypage.edit')
                        <span class="caption-subject bold uppercase">Edit Sunday Page</span>
                        @else
                        <span class="caption-subject bold uppercase">Add Sunday Page</span>
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

                    <form role="form" action="<?php echo (Route::currentRouteName() == 'sundaypage.edit' ? route('sundaypage.update', $sundayPage->id) : route('sundaypage.store')); ?>" method="post">
                        {{ csrf_field() }}
                        @if(Route::currentRouteName() == 'sundaypage.edit')
                        {{ method_field('PATCH') }}
                        @endif
                        <input type="hidden" name="sunday_schedule_id" value="{{ $sundayschedule->id }}">
                        <div class="form-body">
                            <div class="form-group form-md-line-input form-md-floating-label">
                                <input type="number" class="form-control" id="form_control_1" name="page_order" required="" 
                                       value="<?php echo null !== old('page_order') ? old('page_order') : (null !== ($sundayPage) ? $sundayPage->page_order : null);?>">
                                <label for="form_control_1">Page Order Number</label>
                            </div>
                            
                            <div class="form-group form-md-line-input form-md-floating-label">
                                <textarea class="form-control" rows="3" name="page_content" id="content" required="" 
                                          style="margin: 0px -1px 0px 0px; height: 126px; width: 502px;">
                                              <?php echo null !== old('page_content') ? old('page_content') : (null !== ($sundayPage) ? $sundayPage->page_content : null);?>
                                </textarea>
                                <label for="form_control_1">Page Content</label>
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