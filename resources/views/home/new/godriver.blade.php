@extends('layouts.new.app')
@section('styles')
    <style>
        .first-section {
            padding: 220px 0px;
        }
        .approach-item .icon-box img{
            max-width: 75px !important;
        }
        .our-solution-content {
            margin-left: 15px !important;
        }
    </style>
@endsection
@section('meta_tags')

<!-- Meta Title -->

<title>Become a Go-Rider | GoFeast.io - Join Our Team and Deliver Food and Groceries in Lahore</title>

<!-- Meta Description -->

<meta name="description" content="Join GoFeast.io as a Go-Rider and help deliver fresh food and groceries to customers in USA. Enjoy flexible hours, competitive pay, and a rewarding experience.">

<!-- Meta Keywords -->

<meta name="keywords" content="GoFeast.io Go-Rider, delivery rider jobs, food delivery rider, grocery delivery rider, join GoFeast.io, delivery jobs in  USA delivery jobs, flexible rider jobs, food delivery rider, rider jobs with GoFeast.io">

<!-- Meta Robots -->

<meta name="robots" content="index, follow">

<!-- Open Graph Tags -->

<meta property="og:title" content="Become a Go-Rider | GoFeast.io - Join Our Team and Deliver online food and Groceries in Lahore">

<meta property="og:description" content="Join GoFeast.io as a Go-Rider and help deliver fresh food and groceries to customers in USA. Enjoy flexible hours, competitive pay, and a rewarding experience.">

<meta property="og:url" content="https://www.gofeast.io/go-rider">

<meta property="og:type" content="website">

<meta property="og:image" content="https://www.gofeast.io/assets/images/go-rider-banner.jpg">

<!-- Twitter Card Tags -->

<meta name="twitter:card" content="summary_large_image">

<meta name="twitter:title" content="Become a Go-Rider | GoFeast.io - Join Our Team and Deliver Food and Groceries in Lahore">

<meta name="twitter:description" content="Join GoFeast.io as a Go-Rider and help deliver fresh food and groceries to customers in USA. Enjoy flexible hours, competitive pay, and a rewarding experience.">

<meta name="twitter:image" content="https://www.gofeast.io/assets/images/go-rider-banner.jpg">
@endsection
@section('content')
{{--
<!-- /section -->
<section class="wrapper bg-light">
    <div class="container pt-3 pt-md-3 pb-10 pb-md-10">
        <div class="row gx-lg-0 gy-10 align-items-center">
            <div class="col-lg-6">
                <div class="row g-6 text-center">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-lg-12">
                                <figure class="rounded mb-6"><img src="{{asset('assets/img/photos/gofeast_images/drivertop.png')}}"
                                        alt=""></figure>
                            </div>
                            <!-- /column -->
                            <div class="col-lg-12">
                                <div class="card shadow-lg">
                                    <div class="card-body">
                                        <div class="icon btn btn-circle btn-lg btn-primary disabled mb-3">
                                            <i class="uil uil-android"></i>
                                        </div>
                                        <h4>GoDriver Android App</h4>
                                        <p class="mb-2">Download GoDriver Android App to get yourself registered
                                        </p>
                                        <a href="https://play.google.com/store/apps/details?id=com.gomeat.driverapp"
                                            target="_blank"
                                            class="btn btn-expand btn-soft-primary rounded-pill">
                                            <i class="uil uil-download-alt"></i>
                                            <span>Download Now</span>
                                        </a>
                                    </div>
                                    <!--/.card-body -->
                                </div>
                                <!--/.card -->
                            </div>
                            <!-- /column -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /column -->
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-lg-12 order-md-2 ">
                                <figure class="rounded mb-6 mb-md-0"><img
                                        src="{{asset('assets/img/photos/gofeast_images/driverbottom.png')}}" alt=""></figure>
                            </div>
                            <!-- /column -->
                            <div class="col-lg-12">
                                <div class="card shadow-lg mb-md-6 mt-lg-6">
                                    <div class="card-body">
                                        <div class="icon btn btn-circle btn-lg btn-primary disabled mb-3">
                                            <i class="uil uil-apple"></i>
                                        </div>
                                        <h4>GoDriver iOS App</h4>
                                        <p class="mb-2">Download GoDriver iOS App to get yourself registered
                                        </p>
                                        <a href="https://apps.apple.com/us/app/gofeast-driver/id1479449038"
                                            target="_blank"
                                            class="btn btn-expand btn-soft-primary rounded-pill">
                                            <i class="uil uil-download-alt"></i>
                                            <span>Download Now</span>
                                        </a>
                                    </div>
                                    <!--/.card-body -->
                                </div>
                                <!--/.card -->
                            </div>
                            <!-- /column -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /column -->
            <div class="col-lg-5 offset-lg-1">
                <h2 class="fs-16 text-uppercase text-line text-primary mb-3">GoDriver Onboarding</h2>
                <h2 class="display-4 mb-3">Become A GoDriver</h2>
                <!-- <p class="lead fs-lg lh-sm">The full service we are offering is specifically designed to meet
                            your business needs.</p> -->
                <p style="text-align: justify;">I agree that I have read and accepted the Terms and Conditions listed in the Delivery section</p>

                <!-- <a href="#" class="btn btn-primary rounded-pill mt-3">Registration Form</a>

                        <p class="text-primary mt-2">* You can fill registration form <strong>OR</strong> can signup
                            from our GoDriver
                            App</p> -->

                <div class="row d-flex text-center py-5">
                    <div class="col mb-1">

                        <a href="https://www.youtube.com/embed/d1qHWl38Rls" target="_blank"
                            class="btn btn-expand btn-soft-primary ripple rounded-pill mx-auto" data-glightbox>
                            <i class="uil uil-signin"></i>
                            <span>Learn Sign up Process</span>
                        </a>
                    </div>
                    <!--<div class="col mb-1">-->
                    <!--    <a class="btn btn-expand btn-soft-primary rounded-pill">-->
                    <!--        <i class="uil uil-list-ol-alt"></i>-->
                    <!--        <span>Learn About Tasks</span>-->
                    <!--    </a>-->
                    <!--</div>-->
                </div>



            </div>
            <!-- /column -->
        </div>
    </div>

</section>
<!-- /section -->

<section class="wrapper bg-soft-primary">
    <div class="container py-12 ">
        <div class="row gx-lg-8 gx-xl-12 gy-10 gy-lg-0">
            <div class="col-lg-4 text-center text-lg-start">
                <p class="lead fs-lg mb-0 pe-xxl-10">Why Become a
                </p>
                <h3 class="display-4 mb-3 pe-xl-15">GoDriver</h3>
            </div>
            <!-- /column -->
            <div class="col-lg-8 mt-lg-2">
                <div class="row align-items-center counter-wrapper gy-6 text-center">
                    <div class="col-md-4">
                        <img src="{{asset('assets/img/icons/solid/shipment.svg')}}"
                            class="svg-inject icon-svg solid-mono  text-primary mb-3" alt="" />
                        <p>Full And Part Time</p>
                    </div>
                    <!--/column -->
                    <div class="col-md-4">
                        <img src="{{asset('assets/img/icons/lineal/clock-3.svg')}}"
                            class="svg-inject icon-svg solid-mono text-primary mb-3" alt="" />

                        <p>Work On Your Own Time</p>
                    </div>
                    <!--/column -->
                    <div class="col-md-4">
                        <img src="{{asset('assets/img/icons/lineal/coin.svg')}}"
                            class="svg-inject icon-svg solid-mono text-primary  mb-3" alt="" />
                        <p>Highest Pay Per Delivery</p>
                    </div>
                    <!--/column -->
                </div>
                <!--/.row -->
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /section -->
<section class="wrapper bg-light ">

    <div class="container py-10 py-md-10">
        <div class="row gx-lg-8 gx-xl-12 gy-10  align-items-center" data-cues="slideInDown"
            data-group="process">

            <div class="col-lg-5 col-xl-5 ">
                <h2 class="fs-16 text-uppercase text-line text-primary mb-3">Get In Touch</h2>
                <h2 class="display-4 mb-8">Convinced yet? Become a GoDriver Today!</h2>

                <div class="d-flex flex-row">
                    <div>
                        <div class="icon text-primary fs-28 me-6 mt-n1"> <i class="uil uil-phone-volume"></i>
                        </div>
                    </div>
                    <div>
                        <h5 class="mb-1">Phone</h5>
                        <p><a href="tel:13123133533" class="link-body">+1 312-313-3533</a></p>
                    </div>
                </div>
                <div class="d-flex flex-row">
                    <div>
                        <div class="icon text-primary fs-28 me-6 mt-n1"> <i class="uil uil-envelope"></i> </div>
                    </div>
                    <div>
                        <h5 class="mb-1">E-mail</h5>
                        <p><a href="mailto:driversupport@gofeast.io"
                                class="link-body">driversupport@gofeast.io</a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <figure><img class="w-auto" src="{{asset('assets/img/photos/gofeast_images/driver-contact.png')}}" alt="" /></figure>
            </div>
        </div>


    </div>
    <!-- /.container -->

    <!-- /.wrapper -->
</section>
<!-- /section -->
 --}}
    <!-- Our Solution Section Start -->
    <div class="first-section">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title section-title-center">
                        <h3 class="wow fadeInUp">GoDriver Onboarding</h3>
                        <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">Become A <span>GoDriver!</span></h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <!-- About Us Box Start -->
                    <div class="about-us-box">
                        <!-- About Us Item Start -->
                        <div class="about-us-item">
                            <div class="about-item-content">
                                <h3>Seamless Integration</h3>
                                <h2><span class="counter">298</span>+</h2>
                            </div>
                            <div class="icon-box">
                                <img src="images/icon-about-item-1.svg" alt="">
                            </div>
                        </div>
                        <!-- About Us Item End -->
                        
                        <!-- About Item Image Start -->
                        <div class="about-item-image">
                            <img src="images/about-item-image-1.png" alt="">
                        </div>
                        <!-- About Item Image End -->
                    </div>
                    <!-- About Us Box End -->
                </div>

                <div class="col-lg-3 col-md-6">
                    <!-- About Us Box Start -->
                    <div class="about-us-box">
                        <!-- About Us Item Start -->
                        <div class="about-us-item">
                            <div class="about-item-content">
                                <h3>AI Projects Delivered</h3>
                                <h2><span class="counter">978</span>+</h2>
                            </div>
                            <div class="icon-box">
                                <img src="images/icon-about-item-2.svg" alt="">
                            </div>
                        </div>
                        <!-- About Us Item End -->
                        
                        <!-- About Item Image Start -->
                        <div class="about-item-image">
                            <img src="images/about-item-image-2.png" alt="">
                        </div>
                        <!-- About Item Image End -->
                    </div>
                    <!-- About Us Box End -->
                </div>

                <div class="col-lg-3 col-md-6">
                    <!-- About Us Box Start -->
                    <div class="about-us-box">
                        <!-- About Us Item Start -->
                        <div class="about-us-item">
                            <div class="about-item-content">
                                <h3>Handled by AI Bots</h3>
                                <h2><span class="counter">300</span>%</h2>
                            </div>
                            <div class="icon-box">
                                <img src="images/icon-about-item-3.svg" alt="">
                            </div>
                        </div>
                        <!-- About Us Item End -->
                        
                        <!-- About Item Image Start -->
                        <div class="about-item-image">
                            <img src="images/about-item-image-3.png" alt="">
                        </div>
                        <!-- About Item Image End -->
                    </div>
                    <!-- About Us Box End -->
                </div>

                <div class="col-lg-3 col-md-6">
                    <!-- About Us Box Start -->
                    <div class="about-us-box">
                        <!-- About Us Item Start -->
                        <div class="about-us-item">
                            <div class="about-item-content">
                                <h3>Faster Time to Market</h3>
                                <h2><span class="counter">95</span>X</h2>
                            </div>
                            <div class="icon-box">
                                <img src="images/icon-about-item-4.svg" alt="">
                            </div>
                        </div>
                        <!-- About Us Item End -->
                        
                        <!-- About Item Image Start -->
                        <div class="about-item-image">
                            <img src="images/about-item-image-4.png" alt="">
                        </div>
                        <!-- About Item Image End -->
                    </div>
                    <!-- About Us Box End -->
                </div>
            </div>
            {{--<div class="row">
                <div class="col-lg-7">
                    <!-- Solution Item List Start -->
                    <div class="solution-item-list">
                        <!-- Solution Item Start -->
                        <div class="solution-item wow fadeInUp">
                            <img src="{{asset('assets/img/photos/gofeast_images/drivertop.png')}}" alt="">
                        </div>
                        <!-- Solution Item End -->
                        
                        <!-- Solution Item Start -->
                        <div class="solution-item wow fadeInUp" data-wow-delay="0.2s">
                            <div class="icon-box">
                                <img src="{{asset('assets/img/photos/gofeast_images/no-setup-cost.png')}}" alt="">
                            </div>
                            <div class="solution-item-content mb-3">
                                <h3>GoDriver iOS App</h3>
                                <p>Download GoDriver iOS App to get yourself registered</p>
                            </div>
                            <div class="header-btn">
                                <a href="#" class="btn-default">Download Now</a>
                            </div>
                        </div>
                        <!-- Solution Item End -->
                        
                        <!-- Solution Item Start -->
                        <div class="solution-item wow fadeInUp" data-wow-delay="0.4s">
                            <div class="icon-box">
                                <img src="{{asset('assets/img/photos/gofeast_images/marketing.png')}}" alt="">
                            </div>
                            <div class="solution-item-content mb-3">
                                <h3>Marketing</h3>
                                <p>Be part of extensive Marketing and Promotions run by GoFeast to facilitate your sales.</p>
                            </div>
                            <div class="header-btn">
                                <a href="#" class="btn-default">Download Now</a>
                            </div>
                        </div>
                        <!-- Solution Item End -->
                        
                        <!-- Solution Item Start -->
                        <div class="solution-item wow fadeInUp" data-wow-delay="0.6s">
                            <img src="{{asset('assets/img/photos/gofeast_images/driverbottom.png')}}" alt="">
                        </div>
                        <!-- Solution Item End -->
                    </div>
                    <!-- Solution Item List End -->
                </div>
                <div class="col-lg-5">
                    <!-- Our Solution Content Start -->
                    <div class="our-solution-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <!-- <h3 class="wow fadeInUp">GoDriver Onboarding</h3> -->
                            <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">Become A <span>GoDriver!</span></h2>
                            <p class="wow fadeInUp" data-wow-delay="0.4s">I agree that I have read and accepted the Terms and Conditions listed in the Delivery section</p>
                            <div class="header-btn mt-3">
                                <a href="#" class="btn-default">Learn Signup Process</a>
                            </div>
                        </div>
                        <!-- Section Title End -->
                    </div>
                    <!-- Our Solution Content ENd -->
                </div>
            </div>--}}
        </div>
    </div>
    <!-- Our Solution Section End -->
    <!-- Our Solution Section Start -->
    <div class="whybecome-section">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title section-title-center">
                        <h3 class="wow fadeInUp">why become a godriver</h3>
                        <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">Why become a <span>GoDriver?</span></h2>
                    </div>
                    <!-- Section Title End -->
                </div>         
            </div>
            <div class="row section-row align-items-center">
                <div class="col-lg-12">
                    <div class="service-impact-list">
                        <!-- Service Impact Item Start -->
                        <div class="service-impact-item wow fadeInUp d-flex flex-column align-items-center" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                            <div class="icon-box">
                                <img src="images/icon-approach-1.svg" alt="">
                            </div>
                            <div class="service-impact-item-content text-center">
                                <h3>Full and Part Time</h3>
                                <!-- <p>Our mission is to the power of AI to solve real.</p> -->
                            </div>
                        </div>
                        <!-- Service Impact Item End -->
                        <!-- Service Impact Item Start -->
                        <div class="service-impact-item wow fadeInUp d-flex flex-column align-items-center" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                            <div class="icon-box">
                                <img src="images/icon-approach-1.svg" alt="">
                            </div>
                            <div class="service-impact-item-content text-center">
                                <h3>Work on your time</h3>
                                <!-- <p>Our mission is to the power of AI to solve real.</p> -->
                            </div>
                        </div>
                        <!-- Service Impact Item End -->
                        <!-- Service Impact Item Start -->
                        <div class="service-impact-item wow fadeInUp d-flex flex-column align-items-center" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                            <div class="icon-box">
                                <img src="images/icon-approach-1.svg" alt="">
                            </div>
                            <div class="service-impact-item-content text-center">
                                <h3>Highest pay per delivery</h3>
                                <!-- <p>Our mission is to the power of AI to solve real.</p> -->
                            </div>
                        </div>
                        <!-- Service Impact Item End -->
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Our Solution Section End -->
   <!-- Page Contact Us Start -->
    <div class="page-contact-us py-4">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title section-title-center">
                        <h3 class="wow fadeInUp">get in touch</h3>
                        <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">Convinced yet? Become a  <span>GoPartner Today!</span></h2>
                    </div>
                    <!-- Section Title End -->
                </div>         
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!-- Contact Us Form Start -->
                    <div class="conatct-us-form">
                        <!-- Contact Form Start -->
                        <div class="contact-form d-flex justify-content-center align-items-center">
                            <!-- Section Title Start -->
                            <div class="section-title col-lg-12">
                                <!-- Sidebar CTA Box Start -->
                                <div class="sidebar-cta-box">
                                    <!-- Sidebar CTA Content Start -->
                                    <div class="sidebar-cta-content">
                                        <h3>We're here help!</h3>
                                        <p>Need assistance? We're here to help with support, guidance, and resources. Reach out to us anytime.</p>
                                    </div>
                                    <!-- Sidebar CTA Content End -->

                                    <div class="sidebar-cta-contact">
                                        <ul>
                                            <li class="w-50">
                                                <h6><a href="tel:152885253">
                                                    +1152885253
                                                </a></h6>
                                            </li>
                                            <li class="w-50">
                                                <h6><a href="mailto:support@domainname.com">
                                                    support@domainname.com
                                                </a></h6>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Sidebar CTA Box End -->
                            </div>
                            <!-- Section Title End -->
                        </div>
                        <!-- Contact Form End -->
                
                        <!-- Google Map Iframe Start -->
                        <div class="google-map-iframe">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m12!1m8!1m3!1d43872.74802611315!2d-74.67140084520511!3d40.5844244834361!3m2!1i1024!2i768!4f13.1!2m1!1sUS%2022%20West%20-%20Suite%20200%2C%20Bridgetwater%2C%20NJ%2C%2008502%20USA!5e1!3m2!1sen!2s!4v1775822507844!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                        <!-- Google Map Iframe End -->
                    </div>
                    <!-- Contact Us Form End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Contact Us End -->
@endsection