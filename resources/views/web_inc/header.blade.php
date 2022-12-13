<header class="rgb-header theme-background">
    <div class="container">
        <!--Logo Wrap Start-->
        <div class="logo">
            <a href="{{ route('website.home') }}"><img src="{{ asset('website/images/logo.png')}}" alt="Yogasana Premier League" style="width: 123px;"></a>
        </div>
        <!--Logo Wrap End-->
        <!--Inner Header Wrap Start-->
        <div class="rgb-inner-header">
            <!--Top Bar Wrap Start-->
            <div class="rgb-top-bar">
                <!--Popup Button Start-->
                <div class="rgb-popups-btn">
                    <a href="{{ route('login') }}" data-toggle="modal" data-target="#Sign" style="color: #011b47; font-weight: 800; font-size: 16px;">Login</a>
                    <a href="{{ route('regist.index') }}" data-toggle="modal" data-target="#signup" style="color: #011b47;font-weight: 800; font-size: 16px;">Register</a>
                </div>
                
                <!--Top Bar Contact Start-->
                <div class="top-bar-contact">
                    <span class="tp-address" style="color: #011b47"><i class="fa fa-map-marker"></i>B-52, SECTOR-64, NOIDA, GAUTAM BUDDHA NAGAR, UTTAR PRADESH-201301</span>
                    <span class="tp-contact" style="color: #011b47"><i class="fa fa-envelope"></i> <strong><a href="mailto:support@ypl.yoga">support@ypl.yoga</a></</strong></span>
                </div>
                <!--Top Bar Contact End-->
                <!--Social Link Start-->
                <ul class="kode-social-link simple">
                    <li><a href="https://www.facebook.com/yplyogasanapremierleague/" target="_blank" style="color: #011b47"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="https://twitter.com/YogasanaYpl" target="_blank" style="color: #011b47"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="https://www.instagram.com/yogasana_premier_league/" target="_blank" style="color: #011b47"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="https://www.youtube.com/channel/UCZ_NzcPqzsx6L1C4O3g03JQ/featured" target="_blank" style="color: #011b47"><i class="fa fa-youtube"></i></a></li>
                </ul>
                <!--Social Link End-->
            </div>
            <!--Top Bar Wrap End-->
            <!--Navigation Wrap Start-->
            <div class="rgb-navigation-wrap">
                <!--navigation inner Wrap Start-->
                <div class="kode-navigation-wrapper">
                    <nav class="navigation">
                        <div class="menu-main-menu-container">
                            <ul>
                                <li><a href="#">REGISTRATION</a>
                                    <ul class="children sub-menu">
                                        <li><a href="{{ route('regist.index') }}">PLAYER</a></li>
                                        <li><a href="{{ route('regist.refree') }}">REFEREE</a></li>
                                        <li><a href="{{ route('regist.coach') }}">COACH</a></li>
                                        <li><a href="{{ route('regist.instructor') }}">YOGA INSTRUCTOR</a></li>
                                        <!-- <li><a href="{{ route('regist.other') }}">OTHER</a></li> -->
                                    </ul>
                                </li>
                                <li><a href="{{ route('website.joinLeague') }}">JOIN LEAGUE</a></li>
                                <li><a href="{{ route('website.schedule') }}">SCHEDULE</a></li>
                                <li><a href="#">RESULTS</a>
                                     <ul class="children sub-menu">
                                        <li><a href="{{ route('website.pointtable') }}">POINT TABLE</a></li>
                                        <li><a href="{{ route('website.result') }}">PLAYER RESULT</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{ route('website.news') }}">NEWS</a></li>
                                <li><a href="#">MEDIA</a>
                                    <ul class="children sub-menu">
                                        <li><a href="{{ route('website.eventimages') }}">EVENTS IMAGES</a></li>
                                        <li><a href="{{ route('website.highlight') }}">HIGHTLIGHTS</a></li>
                                        <li><a href="{{ route('website.interview') }}">INTERVIEW</a></li>
                                        <li><a href="{{ route('website.pressconference') }}">PRESS CONFERENCE</a></li>
                                        <li><a href="{{ route('website.matchvideo') }}">MATCH VIDEO</a></li>
                                        <li><a href="{{ route('website.media') }}">IN NEWS</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{ route('website.pledge') }}">PLEDGE</a></li>
                                <li><a href="{{ route('website.support') }}">SUPPORT</a></li>
                                <li><a href="#">YPL PROCESS</a>
                                    <ul class="children sub-menu">
                                        <li><a href="{{ route('website.pProcess') }}" target="_blank">PLAYER</a></li>
                                        <li><a href="{{ route('website.rProcess') }}" target="_blank">REFEREE</a></li>
                                        <li><a href="{{ route('website.cProcess') }}" target="_blank">COACH</a></li>
                                        <li><a href="#" target="_blank">YOGA INSTRUCTOR</a></li>
                                        <li><a href="{{ route('website.tProcess') }}" target="_blank">TEAM</a></li>
                                    </ul>
                                </li>

                                <li><a href="">MORE</a>
                                    <ul class="children sub-menu">
                                        <li><a href="{{ route('website.notification') }}">NOTIFICATION</a></li>
                                        <li><a href="{{ route('website.riskform') }}">RISK FORM</a></li>
                                        <li><a href="{{ route('website.activities') }}">ACTIVITIES</a></li>
                                        <li><a href="{{ route('website.syllabus') }}">SYLLABUS</a></li>
                                        <li><a href="{{ route('website.committee') }}">COMMITTEE</a></li>
                                        <li><a href="{{ route('website.about') }}">ABOUT YPL</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <!--Responsive Menu Start-->
                    <div id="kode-responsive-navigation" class="dl-menuwrapper">
                        <button class="dl-trigger">Open Menu</button>
                        <ul class="dl-menu">
                            <li class="menu-item"><a href="#">REGISTRATION</a>
                                <ul class="dl-submenu">
                                    <li><a href="{{ route('regist.index') }}">PLAYER</a></li>
                                    <li><a href="{{ route('regist.refree') }}">REFEREE</a></li>
                                    <li><a href="{{ route('regist.coach') }}">COACH</a></li>
                                    <li><a href="{{ route('regist.instructor') }}">YOGA INSTRUCTOR</a></li>
                                    <!-- <li><a href="{{ route('regist.other') }}">OTHER</a></li> -->
                                </ul>
                            </li>
                            <li class="menu-item"><a href="{{ route('website.joinLeague') }}">JOIN LEAGUE</a></li>
                            <li class="menu-item"><a href="{{ route('website.schedule') }}">SCHEDULE</a></li>
                            <li class="menu-item"><a href="#">RESULTS</a>
                                     <ul class="dl-submenu">
                                        <li><a href="{{ route('website.pointtable') }}">POINT TABLE</a></li>
                                        <li><a href="{{ route('website.result') }}">PLAYER RESULT</a></li>
                                    </ul>
                                </li>
                            <li class="menu-item"><a href="{{ route('website.news') }}">NEWS</a></li>

                            <li class="menu-item"><a href="#">MEDIA</a>
                                <ul class="dl-submenu">
                                    <li><a href="{{ route('website.eventimages') }}">EVENTS IMAGES</a></li>
                                    <li><a href="{{ route('website.highlight') }}">HIGHTLIGHTS</a></li>
                                    <li><a href="{{ route('website.interview') }}">INTERVIEW</a></li>
                                    <li><a href="{{ route('website.pressconference') }}">PRESS CONFERENCE</a></li>
                                    <li><a href="{{ route('website.matchvideo') }}">MATCH VIDEO</a></li>
                                    <li><a href="{{ route('website.media') }}">IN NEWS</a></li>
                                </ul>
                            </li>

                            <li class="menu-item"><a href="{{ route('website.pledge') }}">PLEDGE</a></li>
                            <li class="menu-item"><a href="{{ route('website.support') }}">SUPPORT</a></li>
                            <li class="menu-item"><a href="">YPL PROCESS</a>
                                <ul class="dl-submenu">
                                    <li><a href="{{ route('website.pProcess') }}" target="_blank">PLAYER</a></li>
                                    <li><a href="{{ route('website.rProcess') }}" target="_blank">REFEREE</a></li>
                                    <li><a href="{{ route('website.cProcess') }}" target="_blank">COACH</a></li>
                                    <li><a href="#" target="_blank">YOGA INSTRUCTOR</a></li>
                                    <li><a href="{{ route('website.tProcess') }}" target="_blank">TEAM</a></li>
                                </ul>
                            </li>
                            <li class="menu-item"><a href="">MORE</a>
                                <ul class="dl-submenu">
                                    <li><a href="{{ route('website.notification') }}">NOTIFICATION</a></li>
                                    <li><a href="{{ route('website.riskform') }}">RISK FORM</a></li>
                                    <li><a href="{{ route('website.activities') }}">ACTIVITIES</a></li>
                                    <li><a href="{{ route('website.syllabus') }}">SYLLABUS</a></li>
                                    <li><a href="{{ route('website.committee') }}">COMMITTEE</a></li>
                                    <li><a href="{{ route('website.about') }}">ABOUT YPL</a></li>
                                </ul>
                            </li>
                            
                        </ul>
                    </div>
                    <!--Responsive Menu END-->

                </div>
                <!--navigation inner Wrap End-->
                <!--Search and Cart Wrap Start-->
                <div class="rgb-search-cart-wrap">
                    <!-- <div class="rgb-search-wrap">
                        <div id="kode_search" class="kode_search kf_pet_search">
                            <a class="search-here empty-link"><i class="lnr lnr-magnifier"></i></a>
                        </div>
                    </div> -->
                    <div class="rgb-user">
                        <a class="empty-link" href="{{ route('login') }}"><i class="lnr lnr-user"></i></a>
                    </div>
                    <!-- <div class="kf_cart woocommerce">
                        <a class="kode-woo-shop empty-link" href="#" id="no-active-btn-shopping"><i class="fa fa-shopping-basket "></i><span>5</span></a>
                        <div class="widget_shopping_cart_content">

                        </div>
                    </div> -->
                </div>
                <!--Search and Cart Wrap End-->
            </div>
            <!--Navigation Wrap End-->
        </div>
        <!--Inner Header Wrap End-->
    </div>
</header>