@extends('../web_inc.main')
@section('content')

<div class="sub-banner rgb-overlay theme-border">
    <div class="container">
        <h3>Join League </h3>
        <ul class="breadcrumb">
            <li class="item-home">
                <a class="bread-link bread-home" href="{{ route('website.home') }}" title="Homepage">Home</a>
            </li>
            <li class="item-current">
                <strong class="bread-link bread-current">Join League</strong>
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
                            <h2>YOGASANA PREMIER LEAGUE 2022-23</h2>
                            
                            <img src="{{ asset('website/images/join-league.jpg') }}" alt="YOGASANA PREMIER LEAGUE" class="img-responsive" style="margin-bottom: 30px; border-radius: 20px;">

                            <p style="text-align: justify;">
                                Join the Yogasana Premier League (YPL) today to improve your Yoga skills and
gain international exposure. We believe your yoga abilities merit inclusion on the
world&#39;s most incredible Yoga sports platform. Fill out the form in the Registration
area, or if you&#39;ve already registered, just sign up using your email address.
                                <br>
                            </p>

                            <a href="{{ route('login') }}" class="btn btn-1" style="margin-bottom: 20px;">JOIN LEAGUE</a>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection