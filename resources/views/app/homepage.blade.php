@extends('partials.home')

@section('title')
Home Welcome
@endsection

@section('content')

@if(count($events)>0)
<section class="event-other event-multipage"> 
    <div class=container> 
        <div class=row> 
            <?php $firstEvent = $events->first(); ?>
            <aside class=counter-wrap> 
                <div class="figure" style="background-image:url({{ asset($firstEvent->image_url) }})"> 
                    <a class=item> <i class="fa fa-calendar"></i> <span>next upcoming event</span> </a>
                </div> 
                <div class=figcaption> 
                    <h4 class="headline-lato text-capitalize">{{ $firstEvent->title }}</h4> 
                    <p class=paragraph_opensans>{{ str_limit($firstEvent->brief_description,59) }}.</p> 
                    <ul class="jss-countdown clearfix"> 
                        <li class=days> <span class=count>0</span> <div>days</div> </li> 
                        <li class=hours> <span class=count>0</span> <div>Hours</div> </li> 
                        <li class=minutes> <span class=count>0</span> <div>min</div> </li> 
                        <li class=seconds> <span class=count>0</span> <div>sec</div> </li> 
                    </ul> 
                    <div class=footer-content> 
                        <div class="wrap clearfix"> <i class="fa fa-clock-o"></i> <span>{{ date("F d,Y", strtotime($firstEvent->event_date)) }} at {{ date("g:i a", strtotime($firstEvent->event_date)) }} </span> </div> 
                        <div class="wrap clearfix"> <i class="fa fa-map-marker text-capitalize"></i> <span>{{ $firstEvent->event_location }}</span> </div> 
                    </div> 
                    <a href="{{ route('events').'#event-item-'.$firstEvent->id }}" class="reg btn-Xsmall btn-darkRed">Register</a> 
                </div> 
            </aside> 
            <?php $chunkedEvents = $events->splice(0, 1); ?>
            @if(count($events) > 0)
            <aside class=Event-holder> 
                @foreach($events as $chunkedEvent)
                <div class=figure> 
                    <div class="item clearfix"> 
                        @if(Helpers::fileExists($chunkedEvent->image_url))
                        <a class=item-img href="{{ route('events').'#event-item-'.$chunkedEvent->id }}">
                            <img src="{{ asset($chunkedEvent->image_url) }}" alt=""> 
                        </a> 
                        @endif
                        <div class=item-content> 
                            <h5 class="text-capitalize">{{ $chunkedEvent->title }}</h5> 
                            <p>{{ str_limit($chunkedEvent->brief_description,43) }}</p> 
                            <div class="item-footer clearfix"> 
                                <div class=footer-content> 
                                    <div class="wrap clearfix"> <i class="fa fa-clock-o"></i> 
                                        <span>{{ date("F d,Y", strtotime($chunkedEvent->event_date)) }} at {{ date("g:i a", strtotime($chunkedEvent->event_date)) }}</span>
                                    </div> 
                                    <div class="wrap clearfix"> <i class="fa fa-map-marker text-capitalize"></i> <span>{{ $chunkedEvent->event_location }}</span> </div> 
                                </div> 
                            </div> 
                        </div> 
                    </div> 
                </div>
                @endforeach
            </aside> 
            @endif
        </div> 
    </div> 
</section> 
@endif

@if(count($galleries)>0)
<figure class=gallery> 
    <ul class="gallery-wrapper clearfix"> 
        @foreach($galleries as $gallery)
        @if(Helpers::fileExists($gallery->image_urls))
        <li class=items> 
            <a href="{{ $gallery->large_image }}" class=zoom> 
                @if(Helpers::fileExists($gallery->image_urls))
                <img src="{{ asset($gallery->image_urls) }}" alt=image> 
                @endif
                @if(Helpers::fileExists($gallery->large_image))
                <span class=h-effect> 
                    <img src="{{ asset('app/images/gallery_hover_icon.png') }}" class="item-container"> 
                </span> 
                @endif
            </a> 
        </li> 
        @endif
        @endforeach
    </ul> <!--398x274-->
</figure>
@endif

@if(count($blogs)>0)
<section class="sermons"> 
    <div class=container> 
        <div class=line-heading> 
            <h3>what's new?</h3>
        </div> 
        <div class="row"> 
            <div class="figure-wrapper">                 
                @foreach($blogs as $blog)
                <div class="figure clearfix">
                    <div class="item-figure">
                        <div class="image-wrapper"> 
                            @if(Helpers::fileExists($blog->image_url))
                            <img src="{{ asset($blog->image_url) }}" alt="{{ $blog->title }}"> 
                            @endif
                        </div> 
                    </div> 
                    <div class="item-content">
                        <h4>
                            <a href="{{route('singleblog',$blog->url_key)}}" class="headline-lato text-capitalize">
                                {{ $blog->title }}
                            </a>
                        </h4> 
                        <span>{{ date("d M,Y", strtotime($blog->publish_date)) }}</span> 
                        <span>By: {{ $blog->author_name }}</span> 
                        <!--<span>&nbsp;</span>--> 
                        <p>{{ str_limit($blog->brief_description,83) }}</p> 
                    </div> 
                </div>
                @endforeach
            </div> 
        </div> 
    </div> 
</section> 
@endif

@if(count($donation) == 1)
<section class="donation event-donation">
    <div class=container>

        <div class=line-heading> <h3>contributions</h3> </div> 
        <a class=prev-btn> <img src="{{ asset('app/images/left-arrow.jpg') }}" alt=image> </a> 
        <a class=next-btn> <img src="{{ asset('app/images/right_arrow.jpg') }}" alt=image> </a>

        <div class="slider-donation clearfix"> 
            <div class="figure-wrapper clearfix"> 
                <div class="item-holder clearfix"> 
                    <div class=item-fig> 
                        <img src="{{ asset($donation->image_url) }}" alt=image> 
                        <a  class="btn btn-white" data-toggle="modal" data-target="#donationModal">Donate now</a> 
                    </div>
                    <div class=item-content> 
                        <h4 class="text-capitalize">{{ $donation->title }}</h4> 
                        <p>{{ $donation->description }}</p> 
                        <span>Share this:</span> 
                        @if($donation->facebook_url != null || $donation->twitter_url != null || $donation->youtube_url != null)
                        <div class=social-wrapper> 
                            @if($donation->facebook_url != null)
                            <a href="{{ $donation->facebook_url }}"><i class="fa fa-facebook"></i></a>
                            @endif
                            @if($donation->twitter_url != null)
                            <a href="{{ $donation->twitter_url }}"><i class="fa fa-twitter"></i></a> 
                            @endif
                            @if($donation->youtube_url != null)
                            <a href="{{ $donation->youtube_url }}"><i class="fa fa-youtube"></i></a> 
                            @endif
                        </div> 
                        @endif
                    </div>  
                </div>  
            </div> 
        </div>

    </div>  
</section> 
<!-- Modal -->
<div class="modal fade" id="donationModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-capitalize" id="myModalLabel">{{ $donation->title }}</h4>
      </div>
      <div class="modal-body">
        {!! $donation->content !!}
      </div>
      <div class="modal-footer">
        
      </div>
    </div>
  </div>
</div>

@endif

@endsection

@section('scripts')
<script>
<?php if (isset($firstEvent)): ?>
        $(document).ready(function () {
            $(".jss-countdown").countdown(new Date(<?php echo date("Y,n-1,j,g,i,s", strtotime($firstEvent->event_date)); ?>));
       //$(".jss-countdown").countdown(new Date(2017,5-1,6,12,0,0));
        });
<?php endif; ?>
</script>
@endsection