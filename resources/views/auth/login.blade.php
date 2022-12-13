<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="UniPro App">
    <meta name="author" content="ParkerThemes">
    <link rel="shortcut icon" href="{{ asset('img/fav.png') }}" />
    <title>CMS</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>

<body class="authentication">
    <div class="login-container">
        <div class="container-fluid h-100">
            
            <!-- Row start -->
            <div class="row g-0 h-100">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="login-about">
                        <div class="slogan">
                            <!-- <span>WELCOME TO</span> -->
                            <span style="font-weight: 700">College Management System</span>
                        </div>
                        <div class="about-desc">
                            Log in with your email address and start working toward your goal of reaching the top of the Yogasana Premier League. If you face any trouble with the Login procedure, please contact our support team at the homepage&#39;s email address and phone numbers. 
                        </div>
                        <a href="{{ route('login') }}" class="know-more">Back to home </a>

                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="login-wrapper">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="login-screen">
                                <div class="login-body">
                                    <h3 class="text-center">LOGIN</h3>
                                    <br>
                                    
                                    @include('layouts.message')
                                    <div class="field-wrapper">
                                        <input type="email" name="email" value="{{ old('email') }}" class=" @error('email') is-invalid @enderror" required autofocus>
                                        <div class="field-placeholder">{{ __('Email ID') }}</div>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="field-wrapper mb-3">
                                        <input type="password" name="password" required autocomplete="current-password" class=" @error('email') is-invalid @enderror">
                                        <div class="field-placeholder">{{ __('Password') }}</div>
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="d-grid gap-2 mb-3" style="text-align: center;">
                                        <button type="submit" class="btn btn-primary" style="background: #011b47;">{{ __('Login') }}</button>
                                                                              
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