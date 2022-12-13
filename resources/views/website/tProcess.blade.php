@extends('../web_inc.main')
@section('content')

<div class="sub-banner rgb-overlay theme-border">
    <div class="container">
        <h3>Team Process </h3>
        <ul class="breadcrumb">
            <li class="item-home">
                <a class="bread-link bread-home" href="{{ route('website.home') }}" title="Homepage">Home</a>
            </li>
            <li class="item-current">
                <strong class="bread-link bread-current">Team Process</strong>
            </li>
        </ul>
    </div>
</div>

<div class="rgb-content-wrap">
    <section>
        <div class="container">
           <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="panel rgb-white-style" style="">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <iframe src="{{ asset('website/extra-images/Team (ypl process).pdf')}}" frameborder="0" height="900" width="100%"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>  
</div>

@endsection