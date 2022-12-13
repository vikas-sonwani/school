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

              <div class="row">
                  <div class="col-md-12">
                    <!--Blog List Start-->

                    <div class="rgb-blog blog-detail">
                        <figure>
                            <img src="{{ asset($news['featured_image']) }} " alt="" style="min-height: 400px; width: 100%;">
                        </figure>
                        <!--Blog List Contant Start-->
                        <div class="rgb-blog-contant">
                            <span class="blog-label "><i class="fa fa-image"></i></span>
                            <!--Blog Social Start-->
                            <div class="blog-social">
                                <span class="blog-info blog-tag">
                                    <a href="#">{{ $news['type'] }}</a>
                                </span>
                            </div>
                            <!--Blog Social End-->
                            <!--Blog Title Start-->
                            <h5 class="blog-title"><a href="#">{{ $news['title'] }}</a></h5>
                            <!--Blog Title End-->
                            <!--Blog Post Meta Start-->
                            <div class="featured-post-meta blog-meta">
                               
                                <span class="blog-info post-date">
                                    <i class="lnr lnr-calendar-full "></i>
                                    <a href="#">{{ $newsdate }}</a>
                                </span>
                            </div>
                            <!--Blog Post Meta End-->
                            <P>
                                {{ $ClearText }}
                            </P>
                           
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