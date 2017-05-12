<?php
$allSettings = Helpers::settingsVal(null,true);
?>

<div class=header-top>
    <div class=container> 
        <div class=row>
            @if($allSettings != false)
            <div class=header-top-left> 
                @if($allSettings->facebook_url != null)
                <a href="{{ $allSettings->facebook_url }}"><i class="fa fa-facebook"></i></a>
                @endif
                @if($allSettings->twitter_url != null)
                <a href="{{ $allSettings->twitter_url }}"><i class="fa fa-twitter"></i></a>
                @endif
                @if($allSettings->youtube_url != null)
                <a href="{{ $allSettings->youtube_url }}"><i class="fa fa-youtube"></i></a>
                @endif
            </div> 
            <div class=header-top-right> 
                <a href="#" class=top-wrap>
                @if($allSettings->primary_phone != null)
                {{ $allSettings->primary_phone }}
                @endif
                @if($allSettings->secondary_phone != null)
                {{ '/'.$allSettings->secondary_phone }}
                @endif
               
                </a>  
            </div>
             @endif
        </div> 
    </div> 
</div> 
<div class=menu> 
    <div class=container>
        <div class=row> 
            <div class=header-top-left> 
                @if($allSettings != false)
                @if(Helpers::fileExists($allSettings->logo_url))
                <a href="{{route('homepage')}}" class=logo> <img src="{{ asset($allSettings->logo_url) }}"> </a> 
                @endif
                @endif
            </div> 
            <div class=header-top-right> 
                <nav class=navbar> 
                    <div class=nav-wrapper> 
                        <div class=navbar-header>
                            <button type=button class=navbar-toggle> 
                                <span class=sr-only>Toggle navigation</span> 
                                <span class=icon-bar></span> 
                                <span class=icon-bar></span> 
                                <span class=icon-bar></span>
                            </button> 
                        </div> 
                        <div class=overlay></div> 
                        <div class=nav-menu> 
                            <a href=# class=close> <i class="fa fa-times"></i> </a> 
                            <ul class="nav navbar-nav menu-bar"> 
                                <li>
                                    <a href="{{route('homepage')}}" class="{{ Route::currentRouteName() == 'homepage' ? 'active' : '' }}">
                                        Home
                                    </a>
                                </li> 
                                <?php $sundayData = Helpers::sundaySchedule() ?>
                                @if($sundayData['status'] == 200)
                                <li>
                                    <a href="{{route('sundaySchedule')}}"  class="{{ Route::currentRouteName() == 'sundaySchedule' ? 'active' : '' }}">
                                        @if($sundayData['today'] == true)
                                        Today's Schedule
                                        @else
                                        Upcoming Schedule
                                        @endif
                                        
                                    </a>
                                </li> 
                                @endif
                                <li>
                                    <a href="{{route('about')}}"  class="{{ Route::currentRouteName() == 'about' ? 'active' : '' }}">
                                        about us
                                    </a>
                                </li> 
                                <li>
                                    <a href="{{route('sermons')}}"  class="{{ Route::currentRouteName() == 'sermons' ? 'active' : '' }}">
                                        sermons
                                    </a>
                                </li>  
                                <li>
                                    <a href="{{route('events')}}"  class="{{ Route::currentRouteName() == 'events' ? 'active' : '' }}">
                                        events
                                    </a>
                                </li> 
                                <li>
                                    <a href="{{route('gallery')}}"  class="{{ Route::currentRouteName() == 'gallery' ? 'active' : '' }}">
                                        gallery
                                    </a>
                                </li>  
                                <li>
                                    <a href="{{route('blog')}}"  class="{{ Route::currentRouteName() == 'blog' ? 'active' : '' }}">
                                        blog
                                    </a>
                                </li> 
                                <li>
                                    <a href="{{route('contacts')}}"  class="{{ Route::currentRouteName() == 'contacts' ? 'active' : '' }}">
                                        contact us
                                    </a>
                                </li>  
<!--                                <li> 
                                    <a href="#" class="search-box-tablet"><i class="fa fa-search"></i></a> 
                                    <input type='text' placeholder="search" class="search-box-top"> 
                                </li> -->
                            </ul> 
                        </div> 
                    </div> 
                </nav> 
            </div>  
        </div> 
    </div> 
</div> 
