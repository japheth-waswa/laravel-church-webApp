
@extends('partials.master')

@section('title')
Sermons
@endsection


@section('content')

<section class=sermons> 
    <div class=container> 
        <div class=row> 
            <div class=figure-wrapper> 
                
                @if(count($sermons)>0)
                @foreach($sermons as $sermon)
                <div class="figure clearfix" id="semon-item-{{ $sermon->id }}"> 
                    <div class=item-figure> 
                        @if(Helpers::fileExists($sermon->image_url))
                        <div class=image-wrapper> <img src="{{ asset($sermon->image_url) }}" > </div> 
                        @endif
                    </div> 
                    <div class=item-content> 
                        <h4><a href=# class="headline-lato text-capitalize">{{ $sermon->title }}</a></h4> 
                        <span>{{ date("d M,Y", strtotime($sermon->sermon_date)) }}</span> 
                        <span>&nbsp;</span> 
                        <ul class=clearfix> 
                            @if($sermon->video_url != null)
                            <li>
                                <a href="{{ $sermon->video_url }}" class=zoom title=video>
                                    <i class="fa fa-play"></i>
                                </a>
                            </li> 
                            @endif
                            @if($sermon->audio_url != null)
                            <li>
                                <a href="{{ $sermon->audio_url }}" class=zoom>
                                    <i class="fa fa-headphones"></i>
                                </a>
                            </li> 
                            @endif
                            @if($sermon->pdf_url != null)
                            <li>
                                <a href="{{ $sermon->pdf_url }}" target=_blank><i class="fa fa-file-pdf-o"></i></a>
                            </li> 
                            @endif
                        </ul> 
                    </div> 
                </div> 
                @endforeach
                @endif
                
<!--                <div class=btn-load>
                    <a class="btn btn-grey">load more</a>
                </div>-->
            </div> 
        </div>
    </div>
</section> 
        
@endsection