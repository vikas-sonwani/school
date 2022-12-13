@extends('../web_inc.main')
@section('content')

<div class="sub-banner rgb-overlay theme-border">
    <div class="container">
        <h3>News </h3>
        <ul class="breadcrumb">
            <li class="item-home">
                <a class="bread-link bread-home" href="{{ route('website.home') }}" title="Homepage">Home</a>
            </li>
            <li class="item-current">
                <strong class="bread-link bread-current">News</strong>
            </li>
        </ul>
    </div>
</div>

<div class="rgb-content-wrap">
        <section class="masonry-blog-list-page">
            <div class="container">
                <div class="row masonry masonryFlyIn" style="position: relative; height: 1170px;">
                    <!--Fliter Wrap Start-->
                    <div class="grid masonry_gallery">
                        
                        @foreach($news as $value)
                        <div class="col-md-4 col-sm-6 col-xs-6 masonry-item" >
                            <div class="rgb-blog blog-small">
                                <figure>
                                    <img src="{{ asset($value->featured_image) }}" alt="">
                                </figure>
                                <div class="rgb-blog-contant">
                                    <span class="blog-label "><i class="lnr lnr-picture"></i></span>
                                    <h6 class="blog-title"><a href="/news/{{ $value->id }}">{{ $value->title }}</a></h6>
                                    <span class="blog-info post-date">{{  date("d-m-Y",strtotime($value->created_at)) }}</span>
                                    <a href="/news/{{ $value->id }}" class="btn-1 theme-background">Read More</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    
                    </div>
                    <!--Fliter Wrap End-->
                </div>
            </div>
        </section>
       
        <!-- Instagram Feed End-->
        <!--Brand Wrap End-->
 </div>

@endsection