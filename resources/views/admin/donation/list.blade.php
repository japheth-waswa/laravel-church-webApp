@extends('admin.partials.master')

@section('title')
Donation List
@endsection

@section('stylespagelevel')
<!-- BEGIN PAGE LEVEL PLUGINS -->
<link href="{{ asset('adminassets/global/plugins/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('adminassets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css') }}" rel="stylesheet" type="text/css" />
<!-- END PAGE LEVEL PLUGINS -->
@endsection

@section('content')

<!-- BEGIN CONTENT BODY -->
<div class="page-content">
    <!-- BEGIN PAGE HEADER-->

    <h1 class="page-title"> Donation List
        <small>all donation listing</small>
    </h1>
    <div class="page-bar">
        <ul class="page-breadcrumb">
            <li>
                <i class="icon-home"></i>
                <a href="{{route('dashboard')}}">Home</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <span>Donations</span>
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
                        <i class="icon-list font-dark"></i>
                        <span class="caption-subject bold uppercase"> Donations</span>
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="table-toolbar">
                        <div class="row">

                            <div class="col-md-12">
                                <div class="btn-group">

                                    <a href="{{route('donation.create')}}">
                                        <button id="sample_editable_1_new" class="btn sbold green"> Add New Donation
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </a>

                                </div>
                            </div>

                        </div>
                        <!--notifications-->
                        <div class="row" style="margin-top:1%">
                            <div class="col-md-12">
                                @if(Session::has('errorCustom'))
                                <div class="alert alert-danger alert-dismissible" role='alert'>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
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
                            </div>
                        </div>

                    </div>
                    @if(count($donations)>0)
                    <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                        <thead>
                            <tr>
                                <th>  </th>
                                <th> Title </th>
                                <th> Status </th>
                                <th> Actions </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($donations as $donation)
                            <tr class="odd gradeX">

                                <td> 
                                    <div class="mt-img">
                                        <img src="{{ asset($donation->image_url) }}" class="img-responsive img-thumbnail"> 
                                    </div>
                                </td>
                                <td class="text-capitalize">
                                    {{ $donation->title }}
                                </td>
                                <td>
                                    @if($donation->visible == 1)
                                    <span class="label label-sm label-info">Visible </span>
                                    @else
                                    <span class="label label-sm label-warning"> Not Visible </span>
                                    @endif

                                </td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                            <i class="fa fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu pull-left" role="menu">

                                            <li>
                                                @if($donation->visible == 1)
                                                <a href="{{ route('donation.visibility',array($donation->id,'0')) }}">
                                                    <i class="icon-eye"></i> Set Invisible
                                                </a>
                                                @else
                                                <a href="{{ route('donation.visibility',array($donation->id,'1')) }}">
                                                    <i class="icon-eye"></i> Set Visible
                                                </a>
                                                @endif
                                                
                                            </li>
                                            <li class="divider"> </li>
                                            <li>
                                                    <a href="{{ route('donation.edit',$donation->id) }}">
                                                    <i class="icon-pencil"></i> Edit
                                                </a>
                                            </li>

                                            <li class="divider"> </li>
                                            <li>
                                                 <form role="form" action="{{ route('donation.destroy',$donation->id) }}" method="post" >
                                                    {{ csrf_field() }}
                                                    {{ method_field('DELETE') }}
                                                    <button  class="btn btn-sm btn-danger margin-bottom-10"type="submit">
                                                    <i class="icon-trash"></i> Delete
                                                </button>
                                                </form>
                                                
                                            </li>

                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @else
                    <div class="alert alert-danger">
                        <p>Please add donations</p>
                    </div>
                    @endif
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
<script src="{{ asset('adminassets/global/scripts/datatable.js') }}" type="text/javascript"></script>
<script src="{{ asset('adminassets/global/plugins/datatables/datatables.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('adminassets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js') }}" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS --> 
@endsection

@section('scriptspagelevel')
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="{{ asset('adminassets/pages/scripts/table-datatables-managed.min.js') }}" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
@endsection

