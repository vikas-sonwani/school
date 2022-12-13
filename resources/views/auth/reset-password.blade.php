
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Yogasana Premier League| YPL">
    <meta name="author" content="YPL 2023">
    <link rel="shortcut icon" href="{{ asset('img/fav.png') }}" />
    <title>Yogasana YPL</title>
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
                            <span style="font-weight: 700">Yogasana Premier League</span>
                        </div>
                        <div class="about-desc">
                            Login via your email address and get going with your aspirations to make it to the top of the Yogasana Premier league. In case you face any trouble regarding the Login process, simply connect to our support team at provided email address and phone numbers. 
                        </div>
                        <a href="{{ route('website.home') }}" class="know-more">Back to home </a>

                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="login-wrapper">
                        <form method="POST" action="{{ route('website.resetpassword.store') }}">
                            @csrf
                            <input type="hidden" name="token" value="{{ $request->reset_password_token }}">
                            <div class="login-screen">
                                <div class="login-body">
                                    <h3 class="text-center">RESET PASSWORD</h3>
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
                                    <div class="field-wrapper mb-3">
                                        <input type="password" name="password" required autocomplete="current-password" class=" @error('password') is-invalid @enderror">
                                        <div class="field-placeholder">{{ __('Password') }}</div>
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="field-wrapper mb-3">
                                        <input type="password" name="confirm_password" required autocomplete="current-password" class=" @error('confirm_password') is-invalid @enderror">
                                        <div class="field-placeholder">{{ __('Confirm Password') }}</div>
                                        @error('confirm_password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="d-grid gap-2 mb-3" style="text-align: center;">
                                        <button type="submit" class="btn btn-primary" style="background: #011b47;">{{ __('Reset Password') }}</button>
                                                                            
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