@extends('../web_inc.main')
@section('content')

<div class="sub-banner rgb-overlay theme-border">
    <div class="container">
        <h3>Result </h3>
        <ul class="breadcrumb">
            <li class="item-home">
                <a class="bread-link bread-home" href="{{ route('website.home') }}" title="Homepage">Home</a>
            </li>
            <li class="item-current">
                <strong class="bread-link bread-current">Result</strong>
            </li>
        </ul>
    </div>
</div>

<div class="rgb-content-wrap">
     <section class="team-alpha-listing-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="panel rgb-white-style">
                        <div class="panel-body text-center">
                            <p style="text-align: justify;">
                                At the end of the league, the champion and runner-up teams will be announced.
The player who performs the best in each match for all teams will be awarded.
Following the end of the final game, one male and one female player with the
highest number of points will be awarded.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection