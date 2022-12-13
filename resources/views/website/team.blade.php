@extends('../web_inc.main')
@section('content')

<div class="sub-banner rgb-overlay theme-border">
    <div class="container">
        <h3>YPL's Team </h3>
        <ul class="breadcrumb">
            <li class="item-home">
                <a class="bread-link bread-home" href="{{ route('website.home') }}" title="Homepage">Home</a>
            </li>
            <li class="item-current">
                <strong class="bread-link bread-current">YPL's Team</strong>
            </li>
        </ul>
    </div>
</div>


<section class="team-alpha-listing-page">
    <div class="container">
        <div class="row">
            @foreach($team as $value)
                <div class="col-md-4 col-sm-4 col-xs-6">
                    <div class="team-list-thumb">
                        <div class="rgb-white-style">
                            <a href="#"><img src="{{ asset($value->team_image) }}" alt=""></a>
                        </div>
                        <div class="team-list-thumb-title">
                            <span class="tag-no">{{ $value->id }}</span>
                            <h5><a href="#">{{ $value->team_name }}</a></h5>
                        </div>
                        <div class="team-list-thumb-title" style="padding: 10px; height: 300px;">
                            <p style="color: #fff">
                              {{ $value->team_description }}  
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach           
        </div>
    </div>
</section>

@endsection