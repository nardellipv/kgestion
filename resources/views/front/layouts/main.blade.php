<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>

    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
    <title>NIKNA – Business Consulting HTML Template</title>

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{ asset('front/assets/images/favicon.png') }}" type="image/png">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="{{ asset('front/assets/css/bootstrap.min.css') }}">

    <!--====== Flaticon css ======-->
    <link rel="stylesheet" href="{{ asset('front/assets/css/flaticon.css') }}">

    <!--====== Fontawesome css ======-->
    <link rel="stylesheet" href="{{ asset('front/assets/css/font-awesome.min.css') }}">

    <!--====== Animate css ======-->
    <link rel="stylesheet" href="{{ asset('front/assets/css/animate.css') }}">

    <!--====== Slick css ======-->
    <link rel="stylesheet" href="{{ asset('front/assets/css/slick.css') }}">

    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="{{ asset('front/assets/css/magnific-popup.css') }}">

    <!--====== Nice Number css ======-->
    <link rel="stylesheet" href="{{ asset('front/assets/css/jquery.nice-number.min.css') }}">

    <!--====== Default css ======-->
    <link rel="stylesheet" href="{{ asset('front/assets/css/default.css') }}">

    <!--====== Style css ======-->
    <link rel="stylesheet" href="{{ asset('front/assets/css/style.css') }}">


</head>

<body>


<!--====== PRELOADER PART START ======-->

<div class="preloader">
    <div class="loader">
        <div class="sk-cube-grid">
            <div class="sk-cube sk-cube1"></div>
            <div class="sk-cube sk-cube2"></div>
            <div class="sk-cube sk-cube3"></div>
            <div class="sk-cube sk-cube4"></div>
            <div class="sk-cube sk-cube5"></div>
            <div class="sk-cube sk-cube6"></div>
            <div class="sk-cube sk-cube7"></div>
            <div class="sk-cube sk-cube8"></div>
            <div class="sk-cube sk-cube9"></div>
        </div>
    </div>
</div>

<!--====== PRELOADER PART START ======-->

<!--====== HEADER PART START ======-->

@include('front.parts.menu')

<!--====== HEADER PART ENDS ======-->


<!--====== SLIDER PART START ======-->

@include('front.parts.slider')

<!--====== SLIDER PART ENDS ======-->

<!--====== Login ======-->
@include('front.parts.login')

<!--====== Login ======-->

<!--====== FEATUERS PART START ======-->

<section id="features-part" class="featuera pt-45 pb-75" style="background-image: url({{ asset('front/assets/images/dots.jpg') }})">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="singel-features d-flex align-items-start mt-30 justify-content-center">
                    <div class="icon">
                        <i class="flaticon-global"></i>
                    </div>
                    <div class="content pl-20">
                        <h5>Global Partnership</h5>
                        <p>World Wide Services</p>
                    </div>
                </div> <!-- singel features -->
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="singel-features d-flex align-items-start mt-30 justify-content-center">
                    <div class="icon">
                        <i class="flaticon-shopping"></i>
                    </div>
                    <div class="content pl-20">
                        <h5>Sales & Trading</h5>
                        <p>World Wide Services</p>
                    </div>
                </div> <!-- singel features -->
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="singel-features d-flex align-items-start mt-30 justify-content-center">
                    <div class="icon">
                        <i class="flaticon-creative-idea"></i>
                    </div>
                    <div class="content pl-20">
                        <h5>Market Research</h5>
                        <p>World Wide Services</p>
                    </div>
                </div> <!-- singel features -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== FEATUERS PART ENDS ======-->

<!--====== SERVICES PART START ======-->

<section id="services-part" class="pt-120 pb-130">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4">
                <div class="section-title text-center pb-15">
                    <h3>Our Services</h3>
                    <div class="underline">
                        <span></span>
                        <span></span>
                    </div>
                </div> <!-- section title -->
            </div>
        </div> <!-- row -->
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 col-sm-8">
                <div class="singel-services text-center mt-45">
                    <div class="icon mb-30">
                        <i class="flaticon-work"></i>
                    </div>
                    <div class="content">
                        <a href="services-details.html"><h4>Financeial Analysis</h4></a>
                        <p class="mt-20">Lorem ipsum dolor sit amet, consectetur adipLorem ipsum dolor sit amet, consectetur adipisicing elit, sed.</p>
                    </div>
                </div> <!-- singel services -->
            </div>
            <div class="col-lg-4 col-md-6 col-sm-8">
                <div class="singel-services text-center mt-45">
                    <div class="icon mb-30">
                        <i class="flaticon-diagram"></i>
                    </div>
                    <div class="content">
                        <a href="services-details.html"><h4>Business Growth</h4></a>
                        <p class="mt-20">Lorem ipsum dolor sit amet, consectetur adipLorem ipsum dolor sit amet, consectetur adipisicing elit, sed.</p>
                    </div>
                </div> <!-- singel services -->
            </div>
            <div class="col-lg-4 col-md-6 col-sm-8">
                <div class="singel-services text-center mt-45">
                    <div class="icon mb-30">
                        <i class="flaticon-analysis"></i>
                    </div>
                    <div class="content">
                        <a href="services-details.html"><h4>Financeial Analysis</h4></a>
                        <p class="mt-20">Lorem ipsum dolor sit amet, consectetur adipLorem ipsum dolor sit amet, consectetur adipisicing elit, sed.</p>
                    </div>
                </div> <!-- singel services -->
            </div>
            <div class="col-lg-4 col-md-6 col-sm-8">
                <div class="singel-services text-center mt-45">
                    <div class="icon mb-30">
                        <i class="flaticon-branding"></i>
                    </div>
                    <div class="content">
                        <a href="services-details.html"><h4>Marketing Plan</h4></a>
                        <p class="mt-20">Lorem ipsum dolor sit amet, consectetur adipLorem ipsum dolor sit amet, consectetur adipisicing elit, sed.</p>
                    </div>
                </div> <!-- singel services -->
            </div>
            <div class="col-lg-4 col-md-6 col-sm-8">
                <div class="singel-services text-center mt-45">
                    <div class="icon mb-30">
                        <i class="flaticon-worldwide"></i>
                    </div>
                    <div class="content">
                        <a href="services-details.html"><h4>Global Business</h4></a>
                        <p class="mt-20">Lorem ipsum dolor sit amet, consectetur adipLorem ipsum dolor sit amet, consectetur adipisicing elit, sed.</p>
                    </div>
                </div> <!-- singel services -->
            </div>
            <div class="col-lg-4 col-md-6 col-sm-8">
                <div class="singel-services text-center mt-45">
                    <div class="icon mb-30">
                        <i class="flaticon-risk"></i>
                    </div>
                    <div class="content">
                        <a href="services-details.html"><h4>Risk Management</h4></a>
                        <p class="mt-20">Lorem ipsum dolor sit amet, consectetur adipLorem ipsum dolor sit amet, consectetur adipisicing elit, sed.</p>
                    </div>
                </div> <!-- singel services -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== SERVICES PART ENDS ======-->

<!--====== COMPANY ABOUT PART START ======-->

<section id="about" class="pt-80 pb-130 gray-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="company-about-cont pt-45">
                    <h5 class="mb-15">About Our Company</h5>
                    <h3 class="mb-15">We Provide High Quality Customer Service</h3>
                    <p>Nemo enim ipsam voluptatem quia voluptas sit aut odit aspernatur dolor quia consectetur, sed the consequuntur magni eos qui ullamco voluptatem is sequi nesciunt est neque porro is quisquam, qui dolorem ipsum qui ullamco adipisci alteration eius modi tempora.
                        <br>
                        <br>
                        Nemo enim ipsam voluptatem quia voluptas sit aut odit aspernatur dolor quia consectetur.
                    </p>
                </div> <!-- company about cont -->
            </div>
            <div class="col-lg-6 pt-50">
                <div class="company-about-image">
                    <img src="assets/images/about/about.jpg" alt="About">
                </div> <!-- company about image -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== COMPANY ABOUT PART ENDS ======-->

<!--====== COUNTER PART START ======-->

<section id="counter-part" class="counter-part pt-80 pb-130">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="counter-area">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="singel-counter text-center mt-40">
                                <span class="counter">1750</span>
                                <p>Project Completed</p>
                            </div> <!-- singel counter -->
                        </div>
                        <div class="col-sm-6">
                            <div class="singel-counter text-center mt-40">
                                <span class="counter">750</span>
                                <p>Happy Clients</p>
                            </div> <!-- singel counter -->
                        </div>
                        <div class="col-sm-6">
                            <div class="singel-counter text-center mt-40">
                                <span class="counter">17</span>
                                <p>Awards Won</p>
                            </div> <!-- singel counter -->
                        </div>
                        <div class="col-sm-6">
                            <div class="singel-counter text-center mt-40">
                                <span><span class="counter">7</span>M+</span>
                                <p>Social Follower</p>
                            </div> <!-- singel counter -->
                        </div>
                    </div> <!-- row -->
                </div>
            </div>
            <div class="col-lg-6">
                <div class="counter-call-to-action mt-120">
                    <h3 class="mb-20">Do You Have Any Project?</h3>
                    <p class="mb-25">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vehicula est eget felis vehicula imperdiet. Etiam non lacus at quam gravida porta. Fusce viverra consectetur turpis id lacinia.</p>
                    <a href="index.html#" class="main-btn main-btn-2">View more</a>
                </div>
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
    <div class="counter-bg bg_cover" data-overlay="6" style="background-image: url(assets/images/bg-2.jpg)"></div> <!-- counter bg -->
</section>

<!--====== COUNTER PART ENDS ======-->

<!--====== JOIN OUR TEAM PART START ======-->

<section id="whats" class="pt-120 pb-130">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="join-team-content text-center">
                    <h2 class="mb-15">Do You Want To Join Our Team?</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
                    <ul class="mt-10">
                        <li><a href="team-details.html#" class="main-btn">Apply now</a></li>
                        <li><a href="team-details.html#" class="main-btn main-btn-2">Your Career</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!--====== JOIN OUR TEAM PART ENDS ======-->

<!--====== TESTIMONIAL PART START ======-->

<section id="testimonial-part" class="pt-120 pb-130 gray-bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-title text-center pb-20">
                    <h3>What Says Our Clients</h3>
                    <div class="underline">
                        <span></span>
                        <span></span>
                    </div>
                </div> <!-- section title -->
            </div>
        </div> <!-- row -->
        <div class="row testimonial-slide">
            <div class="col-lg-6">
                <div class="singel-testimonial text-center mt-30">
                    <div class="testimonial-conent">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean feugiat volutpat odio, non sodales est. Pellentesque ullamcorper porta nulla quis egestas. In ullamcorper quam non.</p>
                    </div>
                    <div class="author-name mt-20">
                        <h6>Jhon Deo</h6>
                        <p>- Senior Engineer</p>
                        <i class="flaticon-quote"></i>
                    </div>
                    <div class="testimonial-author mt-25">
                        <img src="{{ asset('front/assets/images/testmonials/ts-1.jpg') }}" alt="author">
                    </div>
                </div> <!-- singel testimonial -->
            </div>
            <div class="col-lg-6">
                <div class="singel-testimonial text-center mt-30">
                    <div class="testimonial-conent">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean feugiat volutpat odio, non sodales est. Pellentesque ullamcorper porta nulla quis egestas. In ullamcorper quam non.</p>
                    </div>
                    <div class="author-name mt-20">
                        <h6>Jhon Deo</h6>
                        <p>- Senior Engineer</p>
                        <i class="flaticon-quote"></i>
                    </div>
                    <div class="testimonial-author mt-25">
                        <img src="{{ asset('front/assets/images/testmonials/ts-2.jpg') }}" alt="author">
                    </div>
                </div> <!-- singel testimonial -->
            </div>
            <div class="col-lg-6">
                <div class="singel-testimonial text-center mt-30">
                    <div class="testimonial-conent">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean feugiat volutpat odio, non sodales est. Pellentesque ullamcorper porta nulla quis egestas. In ullamcorper quam non.</p>
                    </div>
                    <div class="author-name mt-20">
                        <h6>Jhon Deo</h6>
                        <p>- Senior Engineer</p>
                        <i class="flaticon-quote"></i>
                    </div>
                    <div class="testimonial-author mt-25">
                        <img src="{{ asset('front/assets/images/testmonials/ts-3.jpg') }}" alt="author">
                    </div>
                </div> <!-- singel testimonial -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== TESTIMONIAL PART ENDS ======-->

<!--====== LATEST NEWS PART START ======-->

@include('front.parts.lastnews')

<!--====== LATEST NEWS PART ENDS ======-->

<!--====== CONTACT PART START ======-->

<section id="contact" class="pt-80 pb-130 gray-bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-title text-center pb-20">
                    <h3>Contactenos</h3>
                    <div class="underline">
                        <span></span>
                        <span></span>
                    </div>
                </div> <!-- section title -->
            </div>
        </div> <!-- row -->
        <div class="row justify-content-center">
            <div class="col-lg-6" style="margin-top: -7%">
                <div class="contact-form contact-form-2 mt-100">
                    <form id="contact-form" action="http://nikna.uipark.net/assets/contact.php" method="post" data-toggle="validator">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="single-form form-group">
                                    <input name="name" type="text" placeholder="Name" data-error="Name is required." required="required">
                                    <div class="help-block with-errors"></div>
                                </div> <!-- single form -->
                            </div>
                            <div class="col-md-6">
                                <div class="single-form form-group">
                                    <input name="email" type="email" placeholder="Email" data-error="Valid email is required." required="required">
                                    <div class="help-block with-errors"></div>
                                </div> <!-- single form -->
                            </div>
                            <div class="col-md-6">
                                <div class="single-form form-group">
                                    <input name="subject" type="text" placeholder="Subject" data-error="Subject is required." required="required">
                                    <div class="help-block with-errors"></div>
                                </div> <!-- single form -->
                            </div>
                            <div class="col-md-6">
                                <div class="single-form form-group">
                                    <input name="phone" type="text" placeholder="Phone" data-error="Phone is required." required="required">
                                    <div class="help-block with-errors"></div>
                                </div> <!-- single form -->
                            </div>
                            <div class="col-md-12">
                                <div class="single-form form-group">
                                    <textarea name="message" placeholder="Message" data-error="Please,leave us a message." required="required"></textarea>
                                    <div class="help-block with-errors"></div>
                                </div> <!-- single form -->
                            </div>
                            <p class="form-message"></p>
                            <div class="col-md-12">
                                <div class="single-form">
                                    <button type="submit" class="main-btn">Submit</button>
                                </div> <!-- single form -->
                            </div>
                        </div> <!-- row -->
                    </form>
                </div> <!-- contact form -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== CONTACT PART ENDS ======-->

<!--====== CALL TO ACTION PART START ======-->

<section id="submit-ticket" class="submit-ticket pt-20 pb-50">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <div class="submit-ticket-content pt-25 text-center text-lg-left">
                    <h3>Are you Looking for a Consultant?</h3>
                </div> <!-- submit ticket content -->
            </div>
            <div class="col-lg-4">
                <div class="submit-ticket-btn pt-30 text-center text-lg-left">
                    <a href="about.html#" class="main-btn">Submit a ticket</a>
                </div>
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== CALL TO ACTION PART ENDS ======-->

<!--====== FOOTER PART START ======-->

<section id="footer-part" class="footer-part pt-70 pb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="footer-description pt-50">
                    <div class="logo mb-20">
                        <a href="index.html#">
                            <img src="{{ asset('front/assets/images/logo-2.png') }}" alt="Logo">
                        </a>
                    </div>
                    <p class="mb-15">ur clients range from FTSE comp anies, to large organisations and some small local businesses who are striving to expand.</p>
                    <ul>
                        <li><a href="index.html#"><i class="flaticon-facebook"></i></a></li>
                        <li><a href="index.html#"><i class="flaticon-twitter-logo-silhouette"></i></a></li>
                        <li><a href="index.html#"><i class="flaticon-google-plus"></i></a></li>
                        <li><a href="index.html#"><i class="flaticon-linkedin-logo"></i></a></li>
                        <li><a href="index.html#"><i class="flaticon-instagram-social-network-logo-of-photo-camera"></i></a></li>
                    </ul>
                </div> <!-- footer description -->
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="footer-link pt-45 pl-50">
                    <div class="title mb-30">
                        <h4>Usefull Links</h4>
                    </div>
                    <ul>
                        <li><a href="about.html"><i class="fa fa-angle-right"></i> About Us</a></li>
                        <li><a href="blog-grid.html"><i class="fa fa-angle-right"></i> Company News</a></li>
                        <li><a href="blog-list-sidebar.html"><i class="fa fa-angle-right"></i> Our Blog</a></li>
                        <li><a href="company-history.html"><i class="fa fa-angle-right"></i> About Career</a></li>
                        <li><a href="testimonials.html"><i class="fa fa-angle-right"></i> Clients</a></li>
                    </ul>
                </div> <!-- footer link -->
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="footer-contact pt-45">
                    <div class="title mb-35">
                        <h4>Contact Us</h4>
                    </div>
                    <ul>
                        <li>
                            <p>+12 345 678 9008 </p>
                            <p>+12 987 654 7566</p>
                        </li>
                        <li>
                            <p>contactus@buildetic.com</p>
                            <p>info@support.com</p>
                        </li>
                        <li>
                            <p>721/A Central Street, New York. South East Addril, CEO 12309</p>
                        </li>
                    </ul>
                </div> <!-- footer contact -->
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="footer-subscribe pt-45">
                    <div class="title mb-35">
                        <h4>Subscribe Us</h4>
                    </div>
                    <p>Join 90,000+ awesome subscribers and update yourself with our exclusive offers.</p>
                    <div class="subscribe-form mt-25">
                        <form action="index.html#">
                            <input type="text" placeholder="Enter your Email">
                            <button type="button"><i class="flaticon-send"></i></button>
                        </form>
                    </div>
                </div>  <!-- footer subscribe -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== FOOTER PART ENDS ======-->

<!--====== COPYRIGHT PART START ======-->

<section id="copyright-part" class="copyright-part pt-15 pb-25">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="copyright-content text-center text-lg-left pt-10">
                    <p>&copy; 2019 All Rights Reserved. Designed By NIKNA</p>
                </div> <!-- copyright content -->
            </div>
            <div class="col-lg-6">
                <div class="copyright-policy text-center text-lg-right pt-10">
                    <ul>
                        <li><a href="index.html#">Terms & Condition</a></li>
                        <li><a href="index.html#">Privacy Policy</a></li>
                        <li><a href="index.html#">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== COPYRIGHT PART ENDS ======-->

<!--====== BACK TO TOP PART START ======-->

<a href="index.html#" class="back-to-top">
    <i class="flaticon-chevron-up"></i>
</a>

<!--====== BACK TO TOP PART ENDS ======-->

<!--====== jquery js ======-->
<script src="{{ asset('front/assets/js/vendor/modernizr-3.6.0.min.js') }}"></script>
<script src="{{ asset('front/assets/js/vendor/jquery-1.12.4.min.js') }}"></script>

<!--====== Bootstrap js ======-->
<script src="{{ asset('front/assets/js/bootstrap.min.js') }}"></script>

<!--====== Slick js ======-->
<script src="{{ asset('front/assets/js/slick.min.js') }}"></script>

<!--====== Magnific Popup js ======-->
<script src="{{ asset('front/assets/js/jquery.magnific-popup.min.js') }}"></script>

<!--====== Isotope js ======-->
<script src="{{ asset('front/assets/js/isotope.pkgd.min.js') }}"></script>

<!--====== Images Loaded js ======-->
<script src="{{ asset('front/assets/js/imagesloaded.pkgd.min.js') }}"></script>

<!--====== Counter Up js ======-->
<script src="{{ asset('front/assets/js/waypoints.min.js') }}"></script>
<script src="{{ asset('front/assets/js/jquery.counterup.min.js') }}"></script>

<!--====== Nice Number js ======-->
<script src="{{ asset('front/assets/js/jquery.nice-number.min.js') }}"></script>

<!--====== Validator js ======-->
<script src="{{ asset('front/assets/js/validator.min.js') }}"></script>

<!--====== Ajax Contact js ======-->
<script src="{{ asset('front/assets/js/ajax-contact.js') }}"></script>

<!--====== Main js ======-->
<script src="{{ asset('front/assets/js/main.js') }}"></script>

<!--====== Map js ======-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDC3Ip9iVC0nIxC6V14CKLQ1HZNF_65qEQ"></script>
<script src="{{ asset('front/assets/js/map-script.js') }}"></script>

</body>

</html>
