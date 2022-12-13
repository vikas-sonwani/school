<!-- Bootstrap core CSS -->
<link href="{{ asset('website/css/bootstrap.css') }}" rel="stylesheet">
<!-- Slick Slider CSS -->
<link href="{{ asset('website/css/slick.css') }}" rel="stylesheet" />
<!-- DL Menu CSS -->
<link href="{{ asset('website/js/dl-menu/component.css') }}" rel="stylesheet">
<!-- ICONS CSS -->
<link href="{{ asset('website/css/font-awesome.css') }}" rel="stylesheet">
<link href="{{ asset('website/css/linearicons.css') }}" rel="stylesheet">
<!-- Typography CSS -->
<link href="{{ asset('website/css/typographys.css') }}" rel="stylesheet">
<!-- Widget CSS -->
<link href="{{ asset('website/css/widget.css') }}" rel="stylesheet">
<!-- Shortcodes CSS -->
<link href="{{ asset('website/css/shortcodes.css') }}" rel="stylesheet">
<!-- Custom Main StyleSheet CSS -->
<link href="{{ asset('website/style.css') }}" rel="stylesheet">
<!-- Color CSS -->
<link href="{{ asset('website/css/color.css') }}" rel="stylesheet">
<!-- Responsive CSS -->
<link href="{{ asset('website/css/responsive.css') }}" rel="stylesheet">

<link rel="stylesheet" href="https://rawgit.com/LeshikJanz/libraries/master/Bootstrap/baguetteBox.min.css">

<style type="text/css">
.container.gallery-container {
    background-color: #fff;
    color: #35373a;
    min-height: 100vh;
    padding: 30px 50px;
}
.gallery-container h1 {
    text-align: center;
    margin-top: 50px;
    font-family: 'Droid Sans', sans-serif;
    font-weight: bold;
}
.gallery-container p.page-description {
    text-align: center;
    margin: 25px auto;
    font-size: 18px;
    color: #999;
}
.tz-gallery {
    padding: 40px;
}
/* Override bootstrap column paddings */
.tz-gallery .row > div {
    padding: 20px;
}
.tz-gallery .lightbox img {
    width: 100%;
    border-radius: 0;
    position: relative;
}
.tz-gallery .lightbox:before {
    position: absolute;
    top: 50%;
    left: 50%;
    margin-top: -13px;
    margin-left: -13px;
    opacity: 0;
    color: #fff;
    font-size: 26px;
    font-family: 'Glyphicons Halflings';
    content: '\2b';
    pointer-events: none;
    z-index: 9000;
    transition: 0.4s;
}
.tz-gallery .lightbox:after {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    opacity: 0;
    background-color: rgba(46, 132, 206, 0.7);
    content: '';
    transition: 0.4s;
}
.tz-gallery .lightbox:hover:after,
.tz-gallery .lightbox:hover:before {
    opacity: 1;
}
.baguetteBox-button {
    background-color: transparent !important;
}
@media(max-width: 768px) {
    body {
        padding: 0;
    }
}
</style>
@stack('css')