<?php
$previousEvents = Helpers::previousEvents();
$imageSidebars = Helpers::imageSidebar();
?>
<aside class=sidebar> 
<!--    <div class=item-menu>
        <div class=search_box> 
            <input type=text placeholder=search class=searchinput> 
            <a href=# class=search-btn><i class="fa fa-search"></i></a>
        </div>
    </div>-->

    @if(count($previousEvents)>0)
    <div class=item-menu> 
        <div class=item-menu-wrap> 
            <h5>Past event</h5> 
            
            @foreach($previousEvents as $previousEvent)
            <div class="item-wrap clearfix"> 
                <div class=item-fig> 
                    @if(Helpers::fileExists($previousEvent->image_url))
                    <img src="{{ asset($previousEvent->image_url) }}" alt="{{ $previousEvent->title }}">
                    @endif
                </div> 
                <div class=item-content> 
                    <h6 class="text-capitalize"><a href="{{ route('events').'#event-item-'.$previousEvent->id }}">{{ $previousEvent->title }}</a></h6> 
                    <p>{{ date("F d,Y", strtotime($previousEvent->event_date)) }}</p>
                </div> 
            </div> 
            @endforeach
            
        </div> 
    </div> 
    @endif
    
    @if(count($imageSidebars)>0)
    <div class=item-menu> 
        <div class=item-menu-wrap>
            <h5>photo</h5> 
            <ul class="item-photo clearfix"> 
                
                @foreach($imageSidebars as $imageSidebar)
                <li>
                    <a>
                        @if(Helpers::fileExists($imageSidebar->image_urls))
                    <img src="{{ asset($imageSidebar->image_urls) }}" alt="{{ $imageSidebar->title }}">
                    @endif
                    </a>
                </li> 
                @endforeach
                
            </ul> 
        </div>
    </div> 
    @endif
</aside> 