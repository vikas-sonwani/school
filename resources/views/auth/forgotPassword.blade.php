<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="UniPro App">
    <meta name="author" content="ParkerThemes">
    <link rel="shortcut icon" href="{{ asset('img/fav.png') }}" />
    <title>Yogasna YPL | Password Reset</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>

<body class="authentication">
    <div class="login-container">
        <div class="container-fluid h-100">
            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif
            <!-- Row start -->
            <div class="row g-0 h-100">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="login-about">
                        <div class="slogan">
                            <!-- <span>WELCOME TO</span> -->
                            <span style="font-weight: 700">Yogasana Premier Leauge</span>
                        </div>
                        <div class="about-desc">
                            Yogasana Premier League Pvt Ltd is a leading Yogasana sports platform, providing opportunities for all people to play/learn/connect with the Yogasana sport.Eestablished on 09 April 2021, Yogasana Sports is a competition of Yogasana game at the national  and Worldwide level and in which any Yogasana player can adopt Yogasana as his livelihood.

                        </div>
                        <a href="{{ route('website.home') }}" class="know-more">Back to home </a>

                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="login-wrapper">
                        <form method="POST" action="{{ route('website.changePass') }}">
                            @csrf
                            <div class="login-screen">
                                <div class="login-body">
                                    <h3 class="text-center">FORGOT PASSWORD</h3>
                                    <a href="#" class="login-logo" >
                                        <img src="{{ asset('img/yogasna_logo2.png') }}" alt="iChat" style="width: 100%; height: auto;">
                                    </a>
                                    
                                    <div class="field-wrapper">
                                        <input type="email" name="email" value="{{ old('email') }}" class=" @error('email') is-invalid @enderror" required autofocus>
                                        <div class="field-placeholder">{{ __('Email ID') }}</div>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    
                                    <div class="d-grid gap-2 mb-3" style="text-align: center;">
                                       <button type="submit" class="btn btn-primary" style="background: #011b47;">{{ __('Reset Password') }}</button>
                                       <a href="{{ route('login') }}">Back to login</a>                      
                                    </div>

                                </div>
                                
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Row end -->

        </div>
    </div>

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/modernizr.js') }}"></script>
    <script src="{{ asset('js/moment.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

</body>

</html>