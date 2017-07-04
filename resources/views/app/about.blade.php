
@extends('partials.master')

@section('title')
About Us
@endsection


@section('content')
<?php
$allSettings = Helpers::settingsVal(null, true);
?>
@if($allSettings != false)
<section class=aboutus> 
    <div class="container">
        <div class="row-fluid"> 
            {!! $allSettings->about_us !!}
        </div> 
    </div>
</section>

@endif

@if(count($staffs)>0)
<section class=staff> 
    <div class=container> 
        <div class=row> 
            <div class=line-heading> 
                <h3>our staff</h3>
                <div>

                    @foreach($staffs as $staff)
                    <div class=figure>
                        <div class=fig> 
                            @if(Helpers::fileExists($staff->image_url))
                            <img src="{{ asset($staff->image_url) }}" > 
                            @endif
                        </div> 
                        <div class=figcaption> 
                            <div class="header clearfix">
                                <div class=heading> 
                                    <h4>
                                        <a href=# class="headline-lato text-capitalize">{{ $staff->names }}</a>
                                    </h4> 
                                    <span class="text-capitalize">{{ $staff->title }}</span> 
                                </div> 
                                <div class=heading> 
                                    @if($staff->facebook_url != null)
                                    <a href="{{ $staff->facebook_url }}"><i class="fa fa-facebook"></i></a>
                                    @endif
                                    @if($staff->twitter_url != null)
                                    <a href="{{ $staff->twitter_url }}"><i class="fa fa-twitter"></i></a> 
                                    @endif
                                    @if($staff->youtube_url != null)
                                    <a href="{{ $staff->youtube_url }}"><i class="fa fa-youtube"></i></a> 
                                    @endif
                                </div> 
                            </div> 
                            <p class=paragraph_opensans>{{ $staff->brief_description }}</p> 
                        </div> 
                    </div> 
                    @endforeach

                </div>
            </div> 
        </div> 
    </div>
</section> 
@endif

@if($allSettings != false)
<section class=quotation> 
    <div class=container> 
        <div class=row>
            <h5>{{ $allSettings->quotation }}</h5>
            <p>- {{ $allSettings->quotation_origin }}</p>
        </div> 
    </div> 
</section> 
@endif

@endsection