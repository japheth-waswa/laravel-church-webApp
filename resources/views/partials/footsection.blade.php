<?php
$allSettings = Helpers::settingsVal(null, true);
$recentSermons = Helpers::recentSermons();
?>

<!--start footer-->
<footer> 
    <div class=container>
        <div class=row>
            <div class="row left"> 
                @if($allSettings != false)
                <div class=why>
                    @if($allSettings->theme_title != null)
                    <h4 class="text-capitalize">{{ $allSettings->theme_title }}</h4> 
                    @endif
                    @if($allSettings->primary_email != null)
                    <p>
                        {{ str_limit($allSettings->theme_description,100) }}
                    </p>
                    @endif
                </div> 
                @endif
                <div class=pages> 
                    <h4>Pages</h4> 
                    <ul> 
                        <li>
                            <a href="{{ route('about')}}">About Church</a>
                        </li> 
                        <li>
                            <a href="{{ route('sermons')}}">Sermons</a>
                        </li>
                        <li>
                            <a href="{{ route('events')}}">Events</a>
                        </li>
                        <li>
                            <a href="{{ route('login')}}">Login</a>
                        </li>
                    </ul> 
                </div> 
            </div> 
            <div class="row right"> 
                <div class=contact>
                    <h4>Contact us</h4> 
                    @if($allSettings != false)
                    <p>{{ $allSettings->physical_address }}</p> 
                    <p>
                        @if($allSettings->primary_phone != null)
                        Phone: {{ $allSettings->primary_phone }}
                        @endif
                        <br>
                        @if($allSettings->primary_email != null)
                        Mail: {{ $allSettings->primary_email }}
                        @endif
                    </p>
                    @endif
                </div> 
                @if(count($recentSermons)>0)
                <div class=recent> 
                    <h4>Recent Sermons</h4> 
                    @foreach($recentSermons as $recentSermon)
                    <div class="figure row"> 
                        <div> 
                            @if(Helpers::fileExists($recentSermon->image_url))
                            <img src="{{ asset($recentSermon->image_url) }}" alt=image> 
                            @endif
                        </div> 
                        <div class=figcaption> 
                            <h5 class="heading text-capitalize">
                                <a href="{{ route('sermons').'#sermon-item-'.$recentSermon->id }}">{{ $recentSermon->title }}</a>
                            </h5> 
                            <h5 class="date">{{ date("F d, Y", strtotime($recentSermon->sermon_date)) }}</h5>
                            <p>{{ str_limit($recentSermon->brief_description,23) }}</p> 
                        </div> 
                    </div>
                    @endforeach
                </div>
                @endif
            </div>
        </div> 
        <!--<h6 class="text-capitalize">&copy; {{ date('Y') }} {{ Helpers::settingsVal('website_name') }} .Powered by <a href="http://jemslab.com/" target=_blank><span>Jemslab</span></a></h6>-->
        <h6 class="text-capitalize">&copy; {{ date('Y') }} {{ Helpers::settingsVal('website_name') }} . <a data-toggle="modal" data-target="#event-modal-developer"><span>Developed by Elijah</span></a></h6>
    </div> 
</footer> 
<!--end footer-->

<!-- Modal -->
<div class="modal fade" id="event-modal-developer" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Hire software developer</h4>
            </div>
            <div class="modal-body">
                Email:<b>japhethwaswa@gmail.com</b><br>
                Phone: <b>+254719726698</b><br>
                LinkedIn: <b>https://ke.linkedin.com/in/japhethwaswa</b>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>