<?php 
$sundayData = Helpers::sundaySchedule();?>

@extends('partials.master')

@section('title')

@if($sundayData['status'] == 200)
@if($sundayData['today'] == true)
{{ $sundayschedule->theme_title }}
@else
{{ $sundayschedule->theme_title }}
<br>
{{ date("F d,Y", strtotime($sundayschedule->sunday_date)) }}
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
        <?php 
        $sortedPage = $sundayschedule->sundaypages->sortBy('page_order'); 
        $sortedPageArray = $sortedPage->toArray();
        $columnCount = $sundayschedule->column_count; 
        $columnBootstrap = $columnCount == 1 ?"12":($columnCount == 2 ? "6": ($columnCount == 3 ? "4" :($columnCount ==4 ? "3":"12")));
        ?>
        <?php foreach(array_chunk($sortedPageArray, $columnCount) as $chunkedPages):?>
        <div class="row"> 
            
            @foreach($chunkedPages as $sundayPage)
            <div class="col-md-{{ $columnBootstrap }}">
                <div class="panel panel-default">
                    <div class="ppanel-heading text-bold text-warning">
                    <h3 style="margin:3%;">Page: {{ $sundayPage['page_order'] }}</h3></div>
                    <div class="panel-body">
                        {!! $sundayPage['page_content'] !!}
                    </div>
                </div>

            </div>
            @endforeach
        </div>
        <?php endforeach;?>
        
    </div>
</section> 
<hr>

@endsection