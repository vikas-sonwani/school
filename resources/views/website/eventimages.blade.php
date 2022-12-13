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
    <section>
        <div class="container">
           <div class="row">
                
                @foreach($eventData as $value)  
                  <div class="col-md-6 col-sm-6">
                    <div class="panel rgb-white-style">
                        <div class="panel-body">
                            
                                <div class="rgb-blog blog-list">
                                    <figure class="kode-video">
                                        <img src="{{ asset($value['image']) }}">
                                    </figure>

                                    <!--Blog List Contant Start-->
                                    <div class="rgb-blog-contant">
                                        <span class="blog-label "><i class="fa fa-image"></i></span>
                                       
                                        <!--Blog Social End-->
                                        <!--Blog Title Start-->
                                        <h5 class="blog-title"><a href="/eventimages/{{ $value['id'] }}"> {{ $value['title'] }} </a></h5>
                                        <!--Blog Title End-->
                                        <!--Blog Post Meta Start-->
                                        <div class="featured-post-meta blog-meta">
                                            <span class="blog-info post-likes">
                                                <i class="lnr lnr-calendar-full "></i>
                                                <a href="#">{{  date("d-m-Y",strtotime($value['created_at'])) }}</a>
                                            </span>
                                            <span class="blog-info post-location">
                                                <i class="lnr lnr-picture"></i>
                                                <a href="#">Event</a>
                                            </span>
                                        </div>
                                        <!--Blog Post Meta End-->
                                       
                                        <!-- <a href="blog-detail.html" class="btn-1 theme-background">Read More</a> -->
                                    </div>
                                    <!--Blog List Contant End-->
                                </div>
                        </div>
                    </div>
                </div>
            @endforeach          
            </div>
        </div>
    </section>  
</div>

@endsection