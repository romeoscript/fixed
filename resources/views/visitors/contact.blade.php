@extends("layouts.spacedcustomlayout")

@section("body")



<div class="banner banner-inner banner-s2 banner-s2-inner tc-light">
    <div class="banner-block">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-7 col-sm-9">
                    <div class="banner-content">
                        <div class="line-animate">
                            <span class="line line-top"></span>
                            <span class="line line-right"></span>
                            <span class="line line-bottom"></span>
                            <span class="line line-left"></span>
                        </div>
                        <p class="sub-heading">Contact support</p>
                        <h1 class="banner-heading">Send us a message</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-image">
            <img src="images/banner-12.jpg" alt="banner">
        </div>
    </div>
</div>


</header>
<!-- START SECTION BANNER -->

<div class="section section-x">
    <div class="container">
        <div class="row gutter-vr-30px">
            <div class="col-lg-4">
                <div class="text-block">
                    <div class="section-head">
                        <h5 class="heading-xs dash fw-4">Send us a message</h5>
                        <h2>Tell us how we may help you and leave us your contact info</h2>
                    </div>
                </div>
            </div><!-- .col -->
            <div class="col-lg-8">
                                    <form class="" action="{{route('postcontact')}}" method="POST">
                                        @csrf
                    <div class="form-results"></div>
                    <div class="row">
                        <div class="form-field col-md-6">
                            <input name="name" required type="text" placeholder="Your Name" class="input bg-secondary">
                        </div>
                        <div class="form-field col-md-6">
                            <input name="email" required type="email" placeholder="Your Email" class="input bg-secondary">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-field col-md-6">
                                                            <input name="phone" type="tel" placeholder="Your Phone" class="input bg-secondary">
                        </div>
                        <div class="form-field col-md-6">
                            <input name="subject" type="text" placeholder="Subject" class="input bg-secondary">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-field col-md-12">
                            <textarea name="message" required placeholder="Briefly tell us what you want... " class="input input-msg bg-secondary" aria-required="true"></textarea>
                            <button type="submit" class="btn btn-md" name="send">Send Message</button>
                        </div>
                    </div>
                </form><!-- end form -->
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->
</div>
<!-- .section -->

<!-- section  -->
        <div class="section tc-light section-x" style="padding-bottom: 30px;">
    <div class="container">
        <div class="row gutter-vr-30px">
            <div class="col-md-12">
                <div class="contact-text">
                    <div class="text-box">
                        <h3>Visit Us</h3>
                        <p class="lead"><em class="contact-icon ti-direction"></em> {{$compd? $compd->companylocation : "coming soon"}}</p>
                    </div>
                    <ul class="contact-list">
                        <li>
                            <em class="contact-icon ti-mobile"></em>
                            <div class="conatct-content">
                                <a href="tel:{{$compd? $compd->companyphone : "coming soon"}}">{{$compd? $compd->companyphone : "coming soon"}}</a>
                            </div>
                        </li>
                        <li>
                            <em class="contact-icon ti-email"></em>
                            <div class="conatct-content">
                                <a href="mailto:{{$compd? $compd->companyemail : "coming soon"}}">{{$compd? $compd->companyemail : "coming soon"}}</a>
                            </div>
                        </li>
                                                        <li>
                            <em class="contact-icon ti-world"></em>
                            <div class="conatct-content">
                                                                    <a href="{{route('index')}}">www.reefresources-fm.com</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->
    <!-- bg -->
    <div class="bg-image bg-fixed">
        <img src="images/bg-l.jpg" alt="">
    </div>
    <!-- .bg -->
</div>

<!-- code -->

<!-- end code -->
<!-- section / cta-->
<div class="section section-cta bg-primary tc-light">
<div class="container">
    <div class="row gutter-vr-30px align-items-center justify-content-between">
        <div class="col-lg-8 text-center text-lg-left">
            <div class="cta-text-s2">
                <h2><span>Start your journey to</span> <strong> Financial freedom </strong></h2>
            </div>
        </div>
        <div class="col-lg-4 text-lg-right text-center">
            <div class="cta-btn">
                <a href="{{route('register')}}" class="btn btn-lg">Get Started</a>
            </div>
        </div>
    </div>
</div>
</div>


@endsection()
