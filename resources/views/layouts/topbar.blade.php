<div class="page-header">
    <div class="row gutters">
        <div class="col-xl-10 col-lg-10 col-md-10 col-sm-6 col-10 text-center"  >
             
                            <!-- Search container start -->
            <div class="search-container">
                <div class="toggle-sidebar" id="toggle-sidebar">
                    <i class="icon-menu"></i>
                </div>              
                <div class="toggle-sidebar text-center" style="width:100%;border:none;background: none;border-radius: none; box-shadow: 0px 0px 0px 0px;" id="toggle-sidebar">
                    <img src="{{ asset('website/images/yogasna_logo.png') }}" style="width: 50px;height: 50px;">
                </div>   
                
                <div class="ui fluid category search focus text-center" style="vertical-align: middle;">
                    <a  href="#0" style="text-align: center;"><h3><span class="menu-text"></span></h3></a>               
                </div>
            </div>
                            
        </div>
                        
        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-6 col-2">
            <ul class="header-actions">
                 <li class="dropdown">
                    <a href="#" id="notifications" data-toggle="dropdown" aria-haspopup="true">
                        <i class="fa fa-bell fa-2x"></i>
                        <span style="height: 20px; width: 20px; background: red; color: #fff; border-radius: 50%; text-align: center;">@php echo count(Helper::getNotiCount(Auth::user()->id)); @endphp </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end lrg" aria-labelledby="notifications">
                        <div class="dropdown-menu-header">
                            Notifications (@php echo count(Helper::getNotiCount(Auth::user()->id)); @endphp)
                        </div>
                        <div class="customScroll">
                            <ul class="header-notifications">
                                @php
                                    $alertBell = Helper::latestNotifications(Auth::user()->id);
                                    foreach($alertBell as $alertValue){
                                @endphp
                                    <li>
                                        <a href="{{ route('admin.all_notification') }}">
                                            <div class="details">
                                                <div class="noti-details">
                                                    @if($alertValue['seen'] == 0)
                                                    <span class="badge rounded-pill bg-danger">New</span>
                                                    @endif
                                                @php echo substr_replace(ucfirst($alertValue['msg']), "...", 20) @endphp</div>
                                                <div class="noti-date">
                                                    @php 
                                                        echo date("D, d M Y", strtotime($alertValue['created_at']));
                                                    @endphp
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                @php
                                    }
                                @endphp                                     
                            </ul>
                        </div>
                    </div>
                </li>
                
                <li class="dropdown">
                    <a href="#" id="userSettings" class="user-settings" data-toggle="dropdown" aria-haspopup="true">
                        <span class="avatar">
                            <img src="{{ asset('img/user.svg') }}" alt="User Avatar">
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end md" aria-labelledby="userSettings">
                        <div class="header-profile-actions">
                            <!-- <a  href="{{ route('profile.show') }}"><i class="icon-user1"></i>{{ __('Profile') }}</a> -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                this.closest('form').submit();"><i class="icon-log-out1"></i>
                                    {{ __('Log Out') }}
                                </a>
                            </form>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>