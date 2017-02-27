
@extends('partials.master')

@section('title')
{{ $blog->title }}
@endsection


@section('content')

<section class=store> 
    <div class=container> 
        <div class=row> 
            <div class="wrapper clearfix">
                <aside class="content blog-details"> 
                    <div class=blog-image> 
<!--                        @if(Helpers::fileExists($blog->image_url))
                        <img src="{{ asset($blog->image_url) }}" alt="{{ $blog->title }}"> 
                        @endif-->
                    </div> 
                    <div class=about-god> 
                        <h4 class="headline-lato text-capitalize">{{ $blog->title }}</h4> 
                        {!! $blog->content !!}
                    </div> 
                    <div class="social-share clearfix"> 
<!--                        <div class=share-cont> <i class="fa fa-share-alt"></i> <span>share</span> </div> 
                        <div class="social-wraps clearfix"> 
                            <a><i class="fa fa-dribbble"></i></a> 
                            <a><i class="fa fa-facebook"></i></a> 
                            <a><i class="fa fa-twitter"></i></a> 
                            <a><i class="fa fa-behance"></i></a> 
                            <a><i class="fa fa-vine"></i></a> 
                        </div> -->
                        <div> 
                        </div> 
                    </div> 
                    <div class="contact-form clearfix"> 
                        <h6>leave a comment</h6> 
                        <form method=post name=contact id=contact> 
                            <input id="blog_id" type="hidden" name="blog_id" value="{{ $blog->id }}">
                            <div class=form-group> <input type=text class="form-control text" id="names" name="names" placeholder="Your names" required=""> </div> 
                            <div class=form-group> <input type=email class="form-control text" id="email" name="email" placeholder="Your E-mail" required=""> </div> 
                            <div class=form-group> <input type=text class="form-control text" id="phone" name="phone" placeholder=Phone> </div> 
                            <div class=form-group1> <textarea class="form-control texta" id="message" name="message" placeholder=Message required=""></textarea> </div> 
                            <button class="submit">post comment</button> 
                            <div class="contact-page-form form-message contactpage"> 
                                <div>
                                    <div class=loader>Loading...</div> 
                                </div> 
                            </div> 
                        </form> 
                    </div> 
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
                var suburl = '<?php echo route('postBlogComment'); ?>',
                        names = $("#names").val(),
                        email = $("#email").val(),
                        phone = $("#phone").val(),
                        message = $("#message").val();
                        blog_id = $("#blog_id").val();

                $('#contact .form-message').show();


                var data = {'blog_id':blog_id,'names': names, 'email': email, 'phone': phone, 'message': message};

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