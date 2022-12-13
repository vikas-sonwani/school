@extends('../web_inc.main')
@section('content')

<div class="sub-banner rgb-overlay theme-border">
    <div class="container">
        <h3>Event Images </h3>
        <ul class="breadcrumb">
            <li class="item-home">
                <a class="bread-link bread-home" href="{{ route('website.home') }}" title="Homepage">Home</a>
            </li>
            <li class="item-current">
                <strong class="bread-link bread-current">Event Images</strong>
            </li>
        </ul>
    </div>
</div>

<div class="rgb-content-wrap">
        <section class="masonry-blog-list-page">
            <div class="container">

              <div class="row">
                  <div class="col-md-12">
                    <!--Blog List Start-->
                    <div class="rgb-blog blog-detail">
                       
                        <!--Blog List Contant Start-->
                        <div class="rgb-blog-contant">
                            <span class="blog-label "><i class="fa fa-image"></i></span>
                            <!--Blog Social Start-->
                            <div class="blog-social">
                               
                                <!--Social Link Start-->
                                <ul class="kode-social-link simple">
                                    <li><a href="https://www.facebook.com/yplyogasanapremierleague/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="https://twitter.com/YogasanaYpl" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="https://www.instagram.com/yogasana_premier_league/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="https://www.youtube.com/channel/UCZ_NzcPqzsx6L1C4O3g03JQ/featured" target="_blank"><i class="fa fa-youtube"></i></a></li>
                                </ul>
                                <!--Social Link End-->
                            </div>
                            <!--Blog Social End-->
                            <!--Blog Title Start-->
                            <h5 class="blog-title"><a href="#">{{ $event->title }}</a></h5>
                            <!--Blog Title End-->
                            <!--Blog Post Meta Start-->
                            <div class="featured-post-meta blog-meta">
                               
                                <span class="blog-info post-date">
                                    <i class="lnr lnr-calendar-full "></i>
                                    <a href="#">{{  date("d-m-Y",strtotime($event->created_at)) }}</a>
                                </span>
                            </div>
                            <!--Blog Post Meta End-->
                            <p>
                                @php
                                $description = preg_replace( "/\n\s+/", "\n", rtrim(html_entity_decode(strip_tags($event->description))) );;
                                @endphp
                                {{ $description }}
                            </p>

                            <div class="row">
                            @foreach($images as $value2)
                                    <div class="col-md-4" style="padding: 15px;">
                                        <img src="{{ asset($value2->image) }}" class="img-responsive" style="height: 230px; width: auto;">
                                    </div>
                            @endforeach
                            </div>
                            
                           
                        </div>
                        <!--Blog List Contant End-->
                    </div>
                 </div>
              </div>
            </div>
        </section>
       
        <!-- Instagram Feed End-->
        <!--Brand Wrap End-->
 </div>

@endsection