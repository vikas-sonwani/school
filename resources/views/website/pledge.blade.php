@extends('../web_inc.main')
@section('content')

<div class="sub-banner rgb-overlay theme-border">
    <div class="container">
        <h3>Pledge </h3>
        <ul class="breadcrumb">
            <li class="item-home">
                <a class="bread-link bread-home" href="{{ route('website.home') }}" title="Homepage">Home</a>
            </li>
            <li class="item-current">
                <strong class="bread-link bread-current">Pledge</strong>
            </li>
        </ul>
    </div>
</div>

<div class="rgb-content-wrap">
    <section>
        <div class="container">
           <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="card rgb-white-style">
                        <div class="card-body text-center">
                             <img src="{{ asset('website/extra-images/Pledge.jpg') }}" class="img-responsive">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>  
</div>

@endsection