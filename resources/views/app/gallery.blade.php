
@extends('partials.master')

@section('title')
Gallery
@endsection


@section('content')

@if(count($galleries) > 0)
<section class=gallery-page-wrapper> 
    <div class=container> 
        <ul class=menu-wrapper id=menu> 
            <li><a href=#menu data-filter="*" class="headline-lato selected">show all</a></li> 
            @if(count($gallerycategories)>0)
            @foreach($gallerycategories as $galleryCategory)
            @if(count($galleryCategory->gallerys)>0)
            <li><a href=#menu data-filter=".{{ $galleryCategory->url_key }}" class="headline-lato text-capitalize">{{ $galleryCategory->title }}</a></li>
            @endif
            @endforeach
            @endif
        </ul> 
        <div class=row> 
            <div class="wrapper isp-wrap"> 
                <div class=clearfix id=list-item> 

                    @foreach($galleries as $gallery)

                    @if(count($gallery->gallerycategory) > 0 && $gallery->gallerycategory->url_key == 'links')
                    <div class="figure {{ $gallery->gallerycategory->url_key }}"> 
                        <div class="item clearfix"> <div class=item-img> 
                                @if(Helpers::fileExists($gallery->image_urls))
                                <img src="{{ asset($gallery->image_urls) }}" alt="{{ $gallery->title }}"> 
                                @endif
                                @if($gallery->link_url != null)
                                <div class=figcaption> 
                                    <a href="{{ $gallery->link_url }}" target=_blank> <i class="fa fa-link"></i> </a> 
                                </div>
                                @endif
                            </div> 
                            <div class=item-content> 
                                <h4 class="headline-lato text-capitalize">{{ $gallery->title }}</h4> 
                                <p>{{ str_limit($gallery->brief_description,97) }}</p>
                            </div> 
                        </div> 
                    </div> 
                    @endif


                    @if(count($gallery->gallerycategory) > 0 && $gallery->gallerycategory->url_key == 'images')
                    <div class="figure {{ $gallery->gallerycategory->url_key }}"> 
                        <div class="item clearfix"> <div class=item-img>
                                @if(Helpers::fileExists($gallery->image_urls))
                                <img src="{{ asset($gallery->image_urls) }}" alt="{{ $gallery->title }}"> 

                                <div class=figcaption> 
                                    <a href="{{ asset($gallery->image_urls) }}" class="zoom"> <i class="fa fa-file-image-o"></i> </a> 
                                </div>
                                @endif
                            </div> 
                            <div class=item-content> 
                                <h4 class="headline-lato text-capitalize">{{ $gallery->title }}</h4> 
                                <p>{{ str_limit($gallery->brief_description,97) }}</p>
                            </div> 
                        </div> 
                    </div>
                    @endif

                    @if(count($gallery->gallerycategory) > 0 && $gallery->gallerycategory->url_key == 'slideshow')
                    <div class="figure {{ $gallery->gallerycategory->url_key }}">
                        <div class="item clearfix">
                            <div class="item-img slide-show"> 
                                @if($gallery->image_urls != null)
                                <?php $galleryUrls = explode(',', $gallery->image_urls) ?>
                                @foreach($galleryUrls as $galleryUrl)
                                @if(Helpers::fileExists($galleryUrl))
                                <img src="{{ asset($galleryUrl) }}" alt="{{ $gallery->title }}"> 
                                @endif
                                @endforeach
                                @endif
                            </div> 
                            <a class=prev-slide>
                                <i class="fa fa-angle-left"></i>
                            </a> 
                            <a class=next-slide><i class="fa fa-angle-right"></i></a>
                            <div class=item-content> 
                                <h4 class="headline-lato text-capitalize">{{ $gallery->title }}</h4> 
                                <p>{{ str_limit($gallery->brief_description,97) }}</p>
                            </div> 
                        </div>
                    </div> 
                    @endif

                    @if(count($gallery->gallerycategory) > 0 && $gallery->gallerycategory->url_key == 'video')
                    <div class="figure {{ $gallery->gallerycategory->url_key }}"> 
                        <div class="item clearfix"> 
                            <div class=item-img> 
                                @if(Helpers::fileExists($gallery->image_urls))
                                <img src="{{ asset($gallery->image_urls) }}" alt="{{ $gallery->title }}">
                                @endif
                                @if($gallery->video_url != null)
                                <div class=figcaption> 
                                    <a href="{{ $gallery->video_url }}" class="zoom" title="video"> 
                                        <i class="fa fa-play"></i>
                                    </a>
                                </div>
                                @endif
                            </div> 
                            <div class=item-content> 
                                <h4 class="headline-lato text-capitalize">{{ $gallery->title }}</h4> 
                                <p>{{ str_limit($gallery->brief_description,97) }}</p>
                            </div> 
                        </div>
                    </div>
                    @endif

                    @endforeach

                </div> 
<!--                <div class=btn-load> 
                    <a class="btn btn-grey" id="load-more" typeobj="gallery" limitobj="1" offsetobj="1">load more</a> 
                </div> -->
            </div> 
        </div> 
    </div> 
</section> 

@endif

@endsection
