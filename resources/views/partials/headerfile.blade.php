

@include('partials.headmeta')
<?php
$allSettings = Helpers::settingsVal(null, true);
?>
<body> 

    <div class=page_overlay> 
        <div class="loader-inner ball-scale-multiple"> 
            <div></div>
            <div></div>
            <div></div> 
        </div> 
    </div>
    <div class=wrapper-body>

        @if(count($sliders)>0)
        <!--slider header-->
        <div class=slider> 
            @foreach($sliders as $slider)
            <div class=image-slider><img src="{{ asset($slider->image_url) }}" alt="{{ $slider->title }}"></div> 
            @endforeach
        </div> 
        <!--end slider header-->
        @endif


        <header> 

            @include('partials.menulinks')
<style>
            .cust-slider-text{
                color:#ffffff !important;
            }
                @media screen and (max-width: 768px){
.cust-slider-text{
                color:#000000 !important;
            }
                }
            </style> 
            <div class=content> 
                <div class=container> 
                    <div class=row> 
                        <div class=header-top-left></div> 
                        <div class=header-top-right> 
                            @if($allSettings != false)
                            @if($allSettings->theme_title != false)
                            <h2 class="text-capitalize cust-slider-text">{{ $allSettings->theme_title }}</h2> 
                            @endif
                            @if($allSettings->theme_description != false)
                            <p class="cust-slider-text">{{ $allSettings->theme_description }}</p> 
                            @endif
                            <!--<a href="" class="btn red-btn">join us</a>-->
                            @endif
                        </div> 
                    </div> 
                </div> 
            </div> 
            
        </header>  