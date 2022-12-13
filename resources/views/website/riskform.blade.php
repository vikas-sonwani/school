@extends('../web_inc.main')
@section('content')

<div class="sub-banner rgb-overlay theme-border">
    <div class="container">
        <h3>Risk Form </h3>
        <ul class="breadcrumb">
            <li class="item-home">
                <a class="bread-link bread-home" href="{{ route('website.home') }}" title="Homepage">Home</a>
            </li>
            <li class="item-current">
                <strong class="bread-link bread-current">Risk Form</strong>
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
                            <!-- <h1 class="text-center">Risk Form</h1>   -->
                            
                            <div class="row">
                                <div class="col-md-12">
                                    
                                    <img src="{{ asset('website/extra-images/Risk-Form.jpg') }}" class="img-responsive">
                                </div>
                                <div class="col-md-12 text-center" style="margin-top: 20px;">
                                    <a href="{{ asset('website/extra-images/Risk-Form.pdf') }}" target="_blank" title="Download Risk form YPL" class="btn btn-success" download>Download</a>
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