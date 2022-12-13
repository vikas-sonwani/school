@extends('../web_inc.main')
@section('content')

<div class="sub-banner rgb-overlay theme-border">
    <div class="container">
        <h3>Schedule </h3>
        <ul class="breadcrumb">
            <li class="item-home">
                <a class="bread-link bread-home" href="{{ route('website.home') }}" title="Homepage">Home</a>
            </li>
            <li class="item-current">
                <strong class="bread-link bread-current">Schedule</strong>
            </li>
        </ul>
    </div>
</div>

<div class="rgb-content-wrap">
    <section class="team-alpha-listing-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="card rgb-white-style" style="height: 130px;">
                        <div class="card-body text-center">
                            <h2>Coming soon</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- <section class="white-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    
                    <h4 class="section-title gray border-top">
                        <span class="rgb-label theme-background">
                            <i class="lnr lnr-earth"></i>
                        </span>
                        LASt Game
                    </h4>
                    <div class="rgb-white-style gray margin-bottom30">
                        <div class="rgb-next-match rgb-match-info-wrap">
                            <span class="bg-icon"><i class="lnr lnr-calendar-full "></i></span>
                            <div class="opponanet-contant">
                                <div class="rgb-team-1">
                                    <div class="team-meta-logo rgb-shadow">
                                        <img src="images/fixturelogo.png" alt="">
                                    </div>
                                    <div class="text">
                                        <h6><a href="#">Giant Rhino</a></h6>
                                    </div>
                                </div>
                                <div class="rgb-opponanet">
                                    <h5 class="opponanet-style theme-background">23 - 54</h5>
                                </div>
                                <div class="rgb-team-1">
                                    <div class="team-meta-logo rgb-shadow">
                                        <img src="images/fixturelogo2.png" alt="">
                                    </div>
                                    <div class="text">
                                        <h6><a href="#">Beast  Dolphin</a></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="rgb-match-info-contant">
                                <h6>Friday 3rd March 2017</h6>
                                <p>Django Stadium</p>
                                <p>Jaguar Premier League</p>
                                <div class="info-contant-footer">
                                    <a class="match-view-btn" href="#">Match Report</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               <div class="col-md-4 col-sm-6">
                    <h4 class="section-title gray border-top">
                        <span class="rgb-label theme-background">
                            <i class="lnr lnr-earth"></i>
                        </span>
                        next Game
                    </h4>
                    <div class="rgb-white-style gray margin-bottom30">
                        <div class="rgb-next-match rgb-match-info-wrap">
                            <span class="bg-icon"><i class="lnr lnr-rocket"></i></span>
                            <div class="opponanet-contant">
                                <div class="rgb-team-1">
                                    <div class="team-meta-logo rgb-shadow">
                                        <img src="images/fixturelogo3.png" alt="">
                                    </div>
                                    <div class="text">
                                        <h6><a href="#">Fantastic Lions</a></h6>
                                    </div>
                                </div>
                                <div class="rgb-opponanet">
                                    <h5 class="opponanet-style theme-background">VS</h5>
                                </div>
                                <div class="rgb-team-1">
                                    <div class="team-meta-logo rgb-shadow">
                                        <img src="images/fixturelogo4.png" alt="">
                                    </div>
                                    <div class="text">
                                        <h6><a href="#">Dangerous Bull</a></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="rgb-match-info-contant">
                                <h6>Sunday 5th March 2017</h6>
                                <p>Django Stadium</p>
                                <p>Jaguar Premier League</p>
                                <div class="info-contant-footer">
                                    <a class="match-view-btn" href="#">Match Preview</a>
                                    <a class="btn-1 btn-small theme-background" href="#">Buy Ticket</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="widget">
                        <h4 class="section-title gray border-top">
                            <span class="rgb-label theme-background">
                                <i class="lnr lnr-earth"></i>
                            </span>
                            Sokad League
                        </h4>
                        <div class="widget-position-table gray rgb-white-style">
                            <span class="bg-icon"><i class="lnr lnr-earth"></i></span>
                            <ul class="rgb-table text-center">
                                <li class="table-head darkgray-bg-head">
                                    <div class="tb-position"><h6>no</h6></div>
                                    <div class="team-name"><h6>team</h6></div>
                                    <div class="tb-played"><h6>pld</h6></div>
                                    <div class="tb-points"><h6>points</h6></div>
                                </li>
                                <li>
                                    <div class="tb-position"><p>1</p></div>
                                    <div class="team-name"><p>Wolves</p></div>
                                    <div class="tb-played"><p>27</p></div>
                                    <div class="tb-points"><p>74</p></div>
                                </li>
                                <li>
                                    <div class="tb-position"><p>2</p></div>
                                    <div class="team-name"><p>Bulls</p></div>
                                    <div class="tb-played"><p>27</p></div>
                                    <div class="tb-points"><p>74</p></div>
                                </li>
                                <li>
                                    <div class="tb-position"><p>3</p></div>
                                    <div class="team-name"><p>Sharks</p></div>
                                    <div class="tb-played"><p>27</p></div>
                                    <div class="tb-points"><p>74</p></div>
                                </li>
                                <li>
                                    <div class="tb-position"><p>4</p></div>
                                    <div class="team-name"><p>Elaphant</p></div>
                                    <div class="tb-played"><p>27</p></div>
                                    <div class="tb-points"><p>74</p></div>
                                </li>
                                <li>
                                    <div class="tb-position"><p>5</p></div>
                                    <div class="team-name"><p>Fox</p></div>
                                    <div class="tb-played"><p>27</p></div>
                                    <div class="tb-points"><p>74</p></div>
                                </li>
                                <li>
                                    <div class="tb-position"><p>6</p></div>
                                    <div class="team-name"><p>Tiger</p></div>
                                    <div class="tb-played"><p>27</p></div>
                                    <div class="tb-points"><p>74</p></div>
                                </li>
                            </ul>
                            <a class="btn-1 theme-background btn-small" href="#">View Full Table</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <h4 class="section-title border-top">
                <span class="rgb-label theme-background">
                    <i class="lnr lnr-chart-bars"></i>
                </span>
                Upcoming Schedule
                <a class="btn-1 theme-background add-calender-btn" href="#">Add To Calender</a>
            </h4>
            
            <div class="rgb-upcoming-fixture-wrap margin-bottom30">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="rgb-white-style margin-bottom30">
                            <div class="rgb-medium-fixture-wrap">
                                <div class="opponanet-contant">
                                    <div class="rgb-team-1 pull-left">
                                        <div class="team-meta-logo rgb-shadow">
                                            <img src="images/team-medium-logo3.png" alt="">
                                        </div>
                                        <div class="text">
                                            <h6><a href="#">Thunder Fox</a></h6>
                                        </div>
                                    </div>
                                    <div class="rgb-opponanet">
                                        <h6>15:30pm</h6>
                                        <h6>12/4/2107</h6>
                                        <h5 class="opponanet-style theme-background">VS</h5>
                                        <h6>Expo Arena</h6>
                                        <h6>AbLuk League</h6>
                                        <a href="#" class="btn-1 btn-small theme-background">Buy Ticket</a>
                                    </div>
                                    <div class="rgb-team-1 pull-right">
                                        <div class="team-meta-logo rgb-shadow">
                                            <img src="images/team-medium-logo4.png" alt="">
                                        </div>
                                        <div class="text">
                                            <h6><a href="#">Deadly Sharks</a></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="rgb-white-style margin-bottom30">
                            <div class="rgb-medium-fixture-wrap">
                                <div class="opponanet-contant">
                                    <div class="rgb-team-1 pull-left">
                                        <div class="team-meta-logo rgb-shadow">
                                            <img src="images/team-medium-logo5.png" alt="">
                                        </div>
                                        <div class="text">
                                            <h6><a href="#">Monster Rhino</a></h6>
                                        </div>
                                    </div>
                                    <div class="rgb-opponanet">
                                        <h6>15:30pm</h6>
                                        <h6>12/4/2107</h6>
                                        <h5 class="opponanet-style theme-background">VS</h5>
                                        <h6>Expo Arena</h6>
                                        <h6>AbLuk League</h6>
                                        <a href="#" class="btn-1 btn-small theme-background">Buy Ticket</a>
                                    </div>
                                    <div class="rgb-team-1 pull-right">
                                        <div class="team-meta-logo rgb-shadow">
                                            <img src="images/team-medium-logo6.png" alt="">
                                        </div>
                                        <div class="text">
                                            <h6><a href="#">Giant Elephant</a></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="rgb-white-style margin-bottom30">
                            <div class="rgb-medium-fixture-wrap">
                                <div class="opponanet-contant">
                                    <div class="rgb-team-1 pull-left">
                                        <div class="team-meta-logo rgb-shadow">
                                            <img src="images/team-medium-logo7.png" alt="">
                                        </div>
                                        <div class="text">
                                            <h6><a href="#">Dangerous Sharks</a></h6>
                                        </div>
                                    </div>
                                    <div class="rgb-opponanet">
                                        <h6>15:30pm</h6>
                                        <h6>12/4/2107</h6>
                                        <h5 class="opponanet-style theme-background">VS</h5>
                                        <h6>Expo Arena</h6>
                                        <h6>AbLuk League</h6>
                                        <a href="#" class="btn-1 btn-small theme-background">Buy Ticket</a>
                                    </div>
                                    <div class="rgb-team-1 pull-right">
                                        <div class="team-meta-logo rgb-shadow">
                                            <img src="images/team-medium-logo8.png" alt="">
                                        </div>
                                        <div class="text">
                                            <h6><a href="#">Heavy Bull</a></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="rgb-white-style margin-bottom30">
                            <div class="rgb-medium-fixture-wrap">
                                <div class="opponanet-contant">
                                    <div class="rgb-team-1 pull-left">
                                        <div class="team-meta-logo rgb-shadow">
                                            <img src="images/team-medium-logo9.png" alt="">
                                        </div>
                                        <div class="text">
                                            <h6><a href="#">Oceans Dolfin</a></h6>
                                        </div>
                                    </div>
                                    <div class="rgb-opponanet">
                                        <h6>15:30pm</h6>
                                        <h6>12/4/2107</h6>
                                        <h5 class="opponanet-style theme-background">VS</h5>
                                        <h6>Expo Arena</h6>
                                        <h6>AbLuk League</h6>
                                        <a href="#" class="btn-1 btn-small theme-background">Buy Ticket</a>
                                    </div>
                                    <div class="rgb-team-1 pull-right">
                                        <div class="team-meta-logo rgb-shadow">
                                            <img src="images/team-medium-logo10.png" alt="">
                                        </div>
                                        <div class="text">
                                            <h6><a href="#">Beast Wolves</a></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="rgb-white-style margin-bottom30">
                            <div class="rgb-medium-fixture-wrap">
                                <div class="opponanet-contant">
                                    <div class="rgb-team-1 pull-left">
                                        <div class="team-meta-logo rgb-shadow">
                                            <img src="images/team-medium-logo11.png" alt="">
                                        </div>
                                        <div class="text">
                                            <h6><a href="#">Beast Wolves</a></h6>
                                        </div>
                                    </div>
                                    <div class="rgb-opponanet">
                                        <h6>15:30pm</h6>
                                        <h6>12/4/2107</h6>
                                        <h5 class="opponanet-style theme-background">VS</h5>
                                        <h6>Expo Arena</h6>
                                        <h6>AbLuk League</h6>
                                        <a href="#" class="btn-1 btn-small theme-background">Buy Ticket</a>
                                    </div>
                                    <div class="rgb-team-1 pull-right">
                                        <div class="team-meta-logo rgb-shadow">
                                            <img src="images/team-medium-logo12.png" alt="">
                                        </div>
                                        <div class="text">
                                            <h6><a href="#">Fighter Fox</a></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="rgb-white-style margin-bottom30">
                            <div class="rgb-medium-fixture-wrap">
                                <div class="opponanet-contant">
                                    <div class="rgb-team-1 pull-left">
                                        <div class="team-meta-logo rgb-shadow">
                                            <img src="images/team-medium-logo13.png" alt="">
                                        </div>
                                        <div class="text">
                                            <h6><a href="#">Fighter Fox</a></h6>
                                        </div>
                                    </div>
                                    <div class="rgb-opponanet">
                                        <h6>15:30pm</h6>
                                        <h6>12/4/2107</h6>
                                        <h5 class="opponanet-style theme-background">VS</h5>
                                        <h6>Expo Arena</h6>
                                        <h6>AbLuk League</h6>
                                        <a href="#" class="btn-1 btn-small theme-background">Buy Ticket</a>
                                    </div>
                                    <div class="rgb-team-1 pull-right">
                                        <div class="team-meta-logo rgb-shadow">
                                            <img src="images/team-medium-logo14.png" alt="">
                                        </div>
                                        <div class="text">
                                            <h6><a href="#">Thunder Lions</a></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="rgb-white-style margin-bottom30">
                            <div class="rgb-medium-fixture-wrap">
                                <div class="opponanet-contant">
                                    <div class="rgb-team-1 pull-left">
                                        <div class="team-meta-logo rgb-shadow">
                                            <img src="images/team-medium-logo15.png" alt="">
                                        </div>
                                        <div class="text">
                                            <h6><a href="#">Oceans Dolfin</a></h6>
                                        </div>
                                    </div>
                                    <div class="rgb-opponanet">
                                        <h6>15:30pm</h6>
                                        <h6>12/4/2107</h6>
                                        <h5 class="opponanet-style theme-background">VS</h5>
                                        <h6>Expo Arena</h6>
                                        <h6>AbLuk League</h6>
                                        <a href="#" class="btn-1 btn-small theme-background">Buy Ticket</a>
                                    </div>
                                    <div class="rgb-team-1 pull-right">
                                        <div class="team-meta-logo rgb-shadow">
                                            <img src="images/team-medium-logo16.png" alt="">
                                        </div>
                                        <div class="text">
                                            <h6><a href="#">Heavy Bull</a></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="rgb-white-style margin-bottom30">
                            <div class="rgb-medium-fixture-wrap">
                                <div class="opponanet-contant">
                                    <div class="rgb-team-1 pull-left">
                                        <div class="team-meta-logo rgb-shadow">
                                            <img src="images/team-medium-logo17.png" alt="">
                                        </div>
                                        <div class="text">
                                            <h6><a href="#">Dangerous Sharks</a></h6>
                                        </div>
                                    </div>
                                    <div class="rgb-opponanet">
                                        <h6>15:30pm</h6>
                                        <h6>12/4/2107</h6>
                                        <h5 class="opponanet-style theme-background">VS</h5>
                                        <h6>Expo Arena</h6>
                                        <h6>AbLuk League</h6>
                                        <a href="#" class="btn-1 btn-small theme-background">Buy Ticket</a>
                                    </div>
                                    <div class="rgb-team-1 pull-right">
                                        <div class="team-meta-logo rgb-shadow">
                                            <img src="images/team-medium-logo18.png" alt="">
                                        </div>
                                        <div class="text">
                                            <h6><a href="#">Killer Tiger</a></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
</div>

@endsection