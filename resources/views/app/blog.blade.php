
@extends('partials.master')

@section('title')
Our Blog
@endsection


@section('content')

<section class=store>
    <div class=container> 
        <div class=row> 
            <div class="wrapper clearfix">
                <aside class=content>
                    @if(count($blogs)>0)

                    @foreach($blogs as $blog)
                    <div class="item-holder clearfix">
                        <div class=item-image> 
                            @if(Helpers::fileExists($blog->image_url))
                            <img src="{{ asset($blog->image_url) }}" alt="{{ $blog->title }}"> 
                            @endif
                        </div>
                        <div class=item-container> 
                            <h4>
                                <a href="{{route('singleblog',$blog->url_key)}}" class="headline-lato text-capitalize">{{ $blog->title }}</a>
                            </h4> 
                            <p>{{ str_limit($blog->brief_description,117) }}</p>
                            <a href="{{route('singleblog',$blog->url_key)}}" class="btn-small btn-grey">Read more</a>
                            <ul class=wrapper-comment> 
                                @if($blog->author_name != null)
                                <li> 
                                    <a href="#"><i class="fa fa-pencil-square-o"></i><span>by {{ $blog->author_name }}</span></a> 
                                </li> 
                                @endif
                                <li> 
                                    <a href="#"><i class="fa fa-comment-o"></i>
                                        <span><?php echo count($blog->comments) != 1 ? count($blog->comments) . ' comments' : count($blog->comments) . ' comment'; ?></span>
                                    </a> 
                                </li> 
                                @if(count($blog->blogcategory) > 0 )
                                <li> 
                                    <a href="#"><i class="fa fa-tags"></i><span>{{ $blog->blogcategory->title }}</span></a> 
                                </li> 
                                @endif
                            </ul>
                        </div>
                    </div> 
                    @endforeach


                    @endif
                </aside>


                @include('partials.blogsidebar')

            </div>
        </div> 
    </div>
</section>

@endsection