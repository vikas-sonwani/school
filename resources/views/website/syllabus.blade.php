@extends('../web_inc.main')
@section('content')

<div class="sub-banner rgb-overlay theme-border">
    <div class="container">
        <h3>SYLLABUS </h3>
        <ul class="breadcrumb">
            <li class="item-home">
                <a class="bread-link bread-home" href="{{ route('website.home') }}" title="Homepage">Home</a>
            </li>
            <li class="item-current">
                <strong class="bread-link bread-current">Syllabus</strong>
            </li>
        </ul>
    </div>
</div>

<div class="rgb-content-wrap">
    <!--Blog Detail Page Start-->
    <section class="team-alpha-listing-page">
        <div class="container">
            <div class="row">
               
                <!--Team Listing Thumb End-->
                <!--Team Listing Thumb Start-->
                <div class="col-md-12 col-sm-12">
                    @foreach($roundarr as $round)
                        
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">{{ $round['round'] }}</h3>
                            </div>
                            @if(count($round['data'])>0)
                                @foreach($round['data'] as $data)
                                <div class="panel-body">
                                    <div class="accordion" id="accordionPanelsStayOpenExample">
                                            <div class="accordion-item">
                                                <h4 class="accordion-header" id="headingOne">
                                                    <div class="panel  ">
                                                        {{ $data['activity'] }}
                                                    </div>
                                                </h4>
                                                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" style="">
                                                    <div class="accordion-body">
                                                      @if(count($data['syllabus'])>0)
                                                      <ul class="list-group">
                                                        @foreach($data['syllabus'] as $syllabus)
                                                        
                                                            <li class="list-group-item"><a href="{{ asset('images')}}/{{ $syllabus[1] }}" target="_blank">{{ $syllabus[0] }}</a></li>     

                                                        @endforeach
                                                    </ul>
                                                        
                                                      @endif
                                                    </div>
                                                </div>
                                            </div>    
                                        </div>
                                </div>
                                @endforeach
                            @endif
                        </div>

                    @endforeach
                    
                </div>
                <!--Team Listing Thumb End-->
                
                <!--Team Listing Thumb End-->
            </div>
        </div>
    </section>
    <!--Blog Detail Page End-->
    <!-- Instagram Feed Start-->
  
    <!-- Instagram Feed End-->
    <!--Brand Wrap Start-->
  
    <!--Brand Wrap End-->
</div>

@endsection