<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Yogasana Premier League</title>
    <meta name="google-site-verification" content="v0yT8sDw2oRC96xBbv4Jwv6sKE7KAsKmVjmjJqrvMMY" />
    <meta name="googlebot" content="noindex" />
    <meta name="keywords" content="yogasana premier league, yogasana game, ypl2022, ypl yoga, ypl login YPL,yoga poses, yoga competition 2022,ypl 2022 live score, ypl live score, ypl live match, online yoga competition, yogasana premier league registration, yogasana premier league login, most powerful yoga asanas, yogasana premier league app, Yogasana Premier League, real yogasana premier league website, ypl contact">
    <meta name="description" content="Yoagasana Premier League PVT Ltd is a one of its kind Yogasana Sports Platform that aims to provide an opportunity for every individual to play/learn/connect with ancient Indian Yoga Sport. Dr Kavindra Singh, the founder of YPL, established YPL on April 9th, 2021 with the sole motive of taking Yogasana to bigger heights as an International sport."/>
    @include('web_inc/css')
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-RGZGFVDL5N"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-RGZGFVDL5N');
</script>
</head>

<body class="gray-background" oncopy="return false" oncut="return false" onpaste="return false">
    <!--kode Wrapper Start-->  
    <div class="rgb-wrapper"> 
    	<!--Header 2 Wrap Start-->
        @include('web_inc/header')
        <!--Header 2 Wrap End-->
        
        <div class="rgb-content-wrap">
                @yield('content')
        </div>
        <!--Main Content Wrap End-->
        @include('web_inc.footer')
    </div>
    <!--kode Wrapper End-->
   
    @include('web_inc.script')
</body>

</html>
