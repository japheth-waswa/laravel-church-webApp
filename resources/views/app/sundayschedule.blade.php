<?php 
$sundayData = Helpers::sundaySchedule();?>

@extends('partials.master')

@section('title')

@if($sundayData['status'] == 200)
@if($sundayData['today'] == true)
Today's Schedule
@else
Upcoming Schedule
@endif
@endif

@endsection

@section('styles')
<style>
    .wrapper-body{
        background: whitesmoke !important;
    }
    .panel{
        border-radius: 0px !important;
    }
    .panel-default {
        border-color: #ffffff !important;
    }
</style>
@endsection

@section('content')

<section class=sermons> 
    <div class=container> 
        <div class="row"> 
            <?php $sortedPage = $sundayschedule->sundaypages->sortBy('page_order'); ?>
            @foreach($sortedPage as $sundayPage)
            <div class="col-md-{{ $sundayschedule->column_count }}">
                <div class="panel panel-default">
                    <div class="ppanel-heading text-center text-bold text-warning"><h3>Page: {{ $sundayPage->page_order }}</h3></div>
                    <div class="panel-body">
                        {!! $sundayPage->page_content !!}
                    </div>
                </div>

            </div>
            @endforeach
        </div>
    </div>
</section> 
<hr>

@endsection