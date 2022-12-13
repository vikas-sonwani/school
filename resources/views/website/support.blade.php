@extends('../web_inc.main')
@section('content')

<div class="sub-banner rgb-overlay theme-border">
    <div class="container">
        <h3>Support </h3>
        <ul class="breadcrumb">
            <li class="item-home">
                <a class="bread-link bread-home" href="{{ route('website.home') }}" title="Homepage">Home</a>
            </li>
            <li class="item-current">
                <strong class="bread-link bread-current">Support</strong>
            </li>
        </ul>
    </div>
</div>
<style type="text/css">
    table td{
border: 0px !important;
 border-top: 0px !important;
}
</style>

<div class="rgb-content-wrap">
                <!--Blog Detail Page Start-->
                <section class="contactus-page">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-9">
                                <!--Contact Wrp Start-->
                                <div class="rgb-contact-wrap margin-bottom30">
                                    <div class="col-md-4">
                                       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3502.564518625631!2d77.3755214143737!3d28.612838382425547!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce561d2b8abbd%3A0xd4a288dc03f1fa13!2s52%2C%20B%20Block%20Rd%2C%20B%20Block%2C%20Sector%2064%2C%20Noida%2C%20Uttar%20Pradesh%20201307!5e0!3m2!1sen!2sin!4v1652697771320!5m2!1sen!2sin" width="600" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </div>
                                    <div class="col-md-8">
                                        <!--Contact Contant Start-->
                                        <div class="rgb-contact-contant rgb-white-style">
                                            <h5>Contact information</h5>
                                            <p>In case you have some question or query contact blow detail:</p>
                                            <table >
                                                <tr>
                                                    <td><i class="lnr lnr-home"></i></td>
                                                    <td><em>Address Head Office: B-52, Sector 64, Noida Gautam Buddha Nagar,<br> Uttar Pradesh, 201301</em></td>
                                                </tr>
                                                <tr>
                                                    <td><i class="lnr lnr-home"></i></td>
                                                    <td><em>Address Branch Office: A-1/6, Second Floor, Street No.-6, East Krishna Nagar, Delhi, 110051</em></td>
                                                </tr>
                                                <tr>
                                                    <td><i class="lnr lnr-envelope"></i></td>
                                                    <td><em> <a href="mailto:support@ypl.yoga">support@ypl.yoga</a></em></td>
                                                </tr>
                                                <tr>
                                                    <td><i class="lnr lnr-phone"></i></td>
                                                    <td><em> <a href="tel:+919548747778">+91 9548747778</a></em></td>
                                                </tr>
                                                <tr>
                                                    <td><i class="lnr lnr-earth"></i></td>
                                                    <td><em><a href="https://ypl.yoga">www.ypl.yoga</a></em></td>
                                                </tr>
                                            </table>
                                           
                                        </div>
                                        <!--Contact Contant End-->
                                    </div>
                                </div>
                                <!--Contact Wrp End-->
                                <!-- Kode Comment Form Start -->
                                <!-- <div class="kode-comment-form contact-form">
                                    <form method="post" id="commentform" class="comment-form">
                                        <div class="kode-left-comment-sec">
                                            <div class="kf_commet_field">
                                                <label class="fa fa-user"></label>
                                                <input placeholder="Name*" name="author" type="text" value="" data-default="Name*" size="30">
                                            </div>
                                            <div class="kf_commet_field">
                                                <label class="fa fa-envelope"></label>
                                                <input placeholder="Email*" name="email" type="text" value="" data-default="Email*" size="30">
                                            </div>
                                            <div class="kf_commet_field full-width-kode">
                                                <label class="fa fa-globe"></label>
                                                <input placeholder="Website" name="url" type="text" value="" data-default="Website" size="30">
                                            </div>
                                        </div>
                                        <div class="kode-textarea">
                                            <label class="fa fa-paper-plane"></label>
                                            <textarea placeholder="Comments*" name="comment"></textarea>
                                        </div>
                                        <p class="form-submit"><input name="submit" type="submit" class="submit btn-1 theme-background" value="Post Comment"></p>
                                    </form>
                                </div> -->
                                <!-- Kode Comment Form End -->
                            </div>
                            <div class="col-md-3">
                                <!--Widget Twitter Start-->
                                <div class="widget widget-twitter">
                                    <div class="twitter-title">
                                        <span><i class="fa fa-twitter"></i></span>
                                        <div class="text-overflow">
                                            <h5>YPL Tweet</h5>
                                            <p>Twitter feed</p>
                                        </div>
                                    </div>
                                    <!--Widget Twitter Wrap Start-->
                                    <div class="twitter-wrap">
                                        <!--Twitter Start-->
                                        <div class="twitter-twitte">
                                            <a class="twitter-timeline" data-width="220" data-height="250" href="https://twitter.com/YogasanaYpl?ref_src=twsrc%5Etfw">Tweets by YogasanaYpl</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

                                        </div>
                                        <!--Twitter End-->
                                    </div>
                                    <!--Widget Twitter Wrap End-->
                                </div>
                                <!--Widget Twitter End-->
                            </div>
                        </div>
                    </div>
                </section>
                <!--Blog Detail Page End-->
                <!-- Instagram Feed Start-->
               
            </div>
@endsection