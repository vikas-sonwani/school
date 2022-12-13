@extends('../web_inc.main')
@section('content')

<div class="sub-banner rgb-overlay theme-border">
    <div class="container">
        <h3>In News </h3>
        <ul class="breadcrumb">
            <li class="item-home">
                <a class="bread-link bread-home" href="{{ route('website.home') }}" title="Homepage">Home</a>
            </li>
            <li class="item-current">
                <strong class="bread-link bread-current">In News</strong>
            </li>
        </ul>
    </div>
</div>

<div class="rgb-content-wrap">
    <section class="masonry-blog-list-page">
        <div class="container gallery-container">
            <div class="tz-gallery">
                <div class="row">
                    @foreach($media as $value)
                    <div class="col-sm-12 col-md-4" style="text-align: center; hei">
                        <a class="lightbox" href="{{ asset($value->featured_image) }}">
                            <img src="{{ asset($value->featured_image) }}" alt="" style="height: 250px; width: 100%; object-fit: cover;">
                        </a>
                        <h5>{{ $value->title }}</h5>
                        <p>{{ date('d-m-Y', strtotime($value->in_news_date)) }}</p>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
</div>

@endsection