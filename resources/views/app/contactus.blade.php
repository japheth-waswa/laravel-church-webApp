
@extends('partials.master')

@section('title')
Contact Us
@endsection


@section('content')
<?php
$allSettings = Helpers::settingsVal(null, true);
?>
<section class=store> 
    <div class=container> 
        <div class=row> 
            <div class="wrapper clearfix"> 
                <aside class="content contact-wrap"> 
                    <!--<div id=map-wrapper>  </div>--> 
                    <div class="contact-form clearfix"> 
                        <form method=post name=contact id=contact> 
                            <div class=form-group> <input type=text class="form-control text" id="names" name="names" placeholder="Your names" required=""> </div> 
                            <div class=form-group> <input type=email class="form-control text" id="email" name="email" placeholder="Your E-mail" required=""> </div> 
                            <div class=form-group> <input type=text class="form-control text" id="phone" name="phone" placeholder=Phone> </div> 
                            <div class=form-group1> <textarea class="form-control texta" id="message" name="message" placeholder=Message required=""></textarea> </div> 
                            <button class=submit>send message</button> 
                            <div class="contact-page-form form-message contactpage"> 
                                <div>
                                    <div class=loader>Loading...</div> 
                                </div> 
                            </div> 
                        </form> 
                    </div> 
                    @if($allSettings != false)
                    <div class=contact-address>
                        @if($allSettings->primary_phone != null)
                        <div class="fig-addrs clearfix"> 
                            <p>Phone:</p> 
                            <div class=address-cont> <i class="fa fa-phone"></i> 
                                <span>{{ $allSettings->primary_phone }} <br>{{ $allSettings->secondary_phone }}</span> 
                            </div> 
                        </div>
                        @endif
                        @if($allSettings->primary_email != null)
                        <div class="fig-addrs clearfix"> 
                            <p>Email:</p> 
                            <div class=address-cont> <i class="fa fa-envelope"></i> <span>{{ $allSettings->primary_email }}</span> </div> 
                        </div> 
                        @endif

                        <div class="fig-addrs clearfix"> 
                            <p>address:</p> 
                            <div class="address-cont text-capitalize"> <i class="fa fa-map-marker"></i> <span>{{ $allSettings->physical_address }}</span> </div> 
                        </div>  
                    </div> 
                    @endif
                </aside> 

                @include('partials.blogsidebar')

            </div>
        </div> 
    </div>
</section> 



@endsection


@section('scripts')
<script type=text/javascript>
    jQuery(document).ready(function ($) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        /*  FORM VALIDATION
         /*----------------------------------------------------*/
        $("#contact").validate({
            rules: {
                name: {required: true},
                email: {required: true, email: true},
                message: {required: true}
            },
            submitHandler: function (form) {
                var suburl = '<?php echo route('postContacts'); ?>',
                        names = $("#names").val(),
                        email = $("#email").val(),
                        phone = $("#phone").val(),
                        message = $("#message").val();

                $('#contact .form-message').show();


                var data = {'names': names, 'email': email, 'phone': phone, 'message': message};

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

@endsection