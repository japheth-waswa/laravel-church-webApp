@section('title')
Events
@endsection


@include('partials.headmeta')

<?php
$allSettings = Helpers::settingsVal(null, true);
?>

<body> 
    <div class=page_overlay> 
        <div class="loader-inner ball-scale-multiple"> 
            <div>

            </div>
            <div>

            </div> 
            <div>

            </div>
        </div>
    </div>

    <div class="wrapper-body event-pg"> 
        <div class=overlay-event>
            <div class="modal-event clearfix">
                <h1 class=logo> 
                    @if($allSettings != false)
                    @if(Helpers::fileExists($allSettings->logo_url))
                    <a href="{{ route('homepage') }}">
                        <img src="{{ $allSettings->logo_url }}" alt="{{ $allSettings->website_name }}">
                    </a> 
                    @endif
                    @endif
                    <a class=close-event><i class="fa fa-close"></i></a> 
                </h1> 
                <h3>Reserve</h3>
                <p class=paragraph_opensans>
                    Please reserve for<br>
                    <i class="fa fa-music"></i> <span id="event-title-custom" class="text-capitalize"></span>
                    <a class=close-event><i class="fa fa-close"></i></a>
                </p> 
                <form method=post name=contact id=contact> 
                    <input id="event_id" type="hidden" name="event_id" value="">
                    <div class="form-group"> 
                        <input type="text" class="form-control text" name="firstname" id="firstname" placeholder="first name (required)" required="">
                    </div> 
                    <div class="form-group"> 
                        <input type="text" class="form-control text" name="lastname" id="lastname" placeholder="last name (required)" required="">
                    </div> <div class="form-group">
                        <input type="text" class="form-control text" name="phone" id="phone" placeholder="phone number (required)" required=""> 
                    </div> 
                    <div class="form-group"> 
                        <input type="email" class="form-control text" name="email" id="email" placeholder="email (required)" required="">
                    </div>
                    <div class="button-register">
                        <button type="submit" class="submit">Register</button>
                    </div> 
                    <div class="contact-page-form form-message contactpage"> 
                        <div>
                            <div class=loader>Loading...</div> 
                        </div> 
                    </div> 
                </form>
            </div> 
        </div> 


        @include('partials.menu')

        @if(count($events)>0)
        <section class="gallery-page-wrapper events"> 
            <div class=container> 
                <ul class=menu-wrapper id=menu> 
                    <li><a href=#menu data-filter="*" class="headline-lato selected">select all</a></li> 
                    @if(count($eventcategories)>0)
                    @foreach($eventcategories as $eventCategory)
                    @if(count($eventCategory->events)>0)
                    <li><a href=#menu data-filter=".{{ $eventCategory->url_key }}" class="headline-lato text-capitalize">{{ $eventCategory->title }}</a></li>
                    @endif
                    @endforeach
                    @endif
                </ul> 
                <div class=row> 
                    <div class="wrapper isp-wrap"> 
                        <div class=clearfix id=list-item> 

                            @foreach($events as $event)
                            <div class="figure <?php echo count($event->eventcategory) > 0 ? $event->eventcategory->url_key : ""; ?>" id="event-item-{{ $event->id }}"> 
                                <div class="item clearfix"> 
                                    <a class=item-img href="event_details.html"> 
                                        @if(Helpers::fileExists($event->image_url))
                                        <img src="{{ asset($event->image_url) }}" > 
                                        @endif
                                    </a> 
                                    <div class=item-content> 
                                        <h4 class="headline-lato text-capitalize">{{ $event->title }}</h4> 
                                        <p>{{ str_limit($event->brief_description,500) }}</p> 
                                        <div class="item-footer clearfix"> 
                                            <div class=footer-content>
                                                <div class="wrap clearfix"> 
                                                    <i class="fa fa-clock-o"></i> 
                                                    <span>{{ date("F d,Y", strtotime($event->event_date)) }} at {{ date("g:i a", strtotime($event->event_date)) }}</span> 
                                                </div> 
                                                <div class="wrap clearfix"> 
                                                    <i class="fa fa-map-marker text-capitalize"></i> 
                                                    <span>{{ $event->event_location }}</span>
                                                </div> 
                                            </div>
                                            <div class=footer-button> 
                                                <a class="btn-middle btn-lightGrey open-registered" eventid="{{ $event->id }}" eventitle="{{ $event->title }}">register</a> 
                                            </div> 
                                        </div> 
                                    </div> 
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
        @include('partials.footsection')
    </div>
    @include('partials.main_scripts')

    <script>
        //$(".open-registered").on("click",function(){
        //    var eventId =  $(this).attr('eventid');
        //    var eventTitlte =  $(this).attr('eventitle');
        //    $('#event_id').val(eventId);
        //    $('#event-title-custom').html(eventTitlte);
        //    var e=$(window).height();
        //    $(".wrapper-body").css("max-height",e),$(".overlay-event ").addClass("event-open");
        //    });
    </script>


    <script type=text/javascript>
        jQuery(document).ready(function ($) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $(".open-registered").on("click", function () {
                var eventId = $(this).attr('eventid');
                var eventTitlte = $(this).attr('eventitle');
                $('#event_id').val(eventId);
                $('#event-title-custom').html(eventTitlte);
                var e = $(window).height();
                $(".wrapper-body").css("max-height", e), $(".overlay-event ").addClass("event-open");
            });
            /*  FORM VALIDATION
             /*----------------------------------------------------*/
            $("#contact").validate({
                rules: {
                    firstname: {required: true},
                    email: {required: true, email: true},
                    lastname: {required: true},
                    phone: {required: true}
                },
                submitHandler: function (form) {
                    var suburl = '<?php echo route('postEventRegister'); ?>',
                            firstname = $("#firstname").val(),
                            lastname = $("#lastname").val(),
                            phone = $("#phone").val(),
                            email = $("#email").val();
                    event_id = $("#event_id").val();

                    $('#contact .form-message').show();


                    var data = {'firstname': firstname, 'lastname': lastname, 'phone': phone, 'email': email, 'event_id': event_id};

                    $.post(suburl, data, function (response) {
                        var data = JSON.parse(response);
                        var message = data.message;
                        $('.contact-page-form').html(message);
                        $('.contact-page-form').show();
                        $('#contact').each(function () {
                            this.reset(); //CLEARS THE FORM AFTER SUBMISSION
                        });
                    });

                    return false;
                }
            });
        });
    </script>


</body> 
</html> 
