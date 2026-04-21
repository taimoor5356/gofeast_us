@extends('layouts.new.app')
@section('styles')
    <style>
        .main-banner{
            position: relative; 
            /* background: url('{{asset('assets/new/images/short-header.png')}}') no-repeat; */
            background-position: top center;
            background-size: auto;
            padding: 115px 80px;
            z-index: 1;
        }
        .get-in-touch {
            padding: 100px 0px 0px 0px !important;
        }
        .onboarding-process {
            padding: 100px 0px 0px 0px !important;
        }
        .how-gofeast-work{
            padding: 100px 0px 0px 0px !important;
        }
        .page-faqs{
            padding: 100px 0px 50px 0px !important;
        }
        .approach-image img{
            aspect-ratio: 1/0 !important;
        }
        .approach-item .icon-box img{
            max-width: 75px !important;
        }
        .section-title h3{
            background-color: #17171792 !important;
        }
        
        .solution-item .icon-box {
            background: none !important;
        }
        .solution-item .icon-box img {
            max-width: 75px !important;
        }

        /* -- small screen size: first section image will have no padding and full height and width -- */
        @media (max-width: 768px) {
            .main-banner {
                position: relative;
                /* background: url('{{asset('assets/new/images/short-header.png')}}') no-repeat; */
                background-position: top center;
                background-size: cover;        /* 'cover' fills full width/height on small screens */
                background-size: auto;
                padding: 25px 0px 100px 0px;                    /* no padding on small screens */
                width: 100%;
                z-index: 1;
            }

            .why-gofeast {
                padding: 0px 0px 0px 0px;                    /* no padding on small screens */
            }
            .onboarding-process {
                padding-top: 100px !important;
            }
            .onboardingprocess {
                margin-top: 50px !important;
            }
            .how-gofeast-work {
                padding-top: 100px !important;
            }
            .get-in-touch{
                padding-top: 100px !important;
            }
            .page-faqs{
                padding: 100px 0px !important;
            }
        }
    </style>
@endsection
@section('meta_tags')

<!-- Meta Title -->

<title>Go-Partner for Restaurants | GoFeast.io - Join Our Network and Boost Your Restaurant's Reach</title>

<!-- Meta Description -->

<meta name="description" content="Partner with GoFeast.io to expand your restaurant's customer base. Enjoy seamless integration, increased visibility, and reliable delivery services across USA.">

<!-- Meta Keywords -->

<meta name="keywords" content="GoFeast.io restaurant partner, join GoFeast.io, restaurant delivery partnership, expand restaurant reach, USA restaurants, GoFeast.io for restaurants, food delivery partnership, restaurant marketing, increase restaurant sales">

<!-- Meta Robots -->

<meta name="robots" content="index, follow">

<!-- Open Graph Tags -->

<meta property="og:title" content="Go-Partner for Restaurants | GoFeast.io - Join Our Network and Boost Your Restaurant's Reach">

<meta property="og:description" content="Partner with GoFeast.io to expand your restaurant's customer base. Enjoy seamless integration, increased visibility, and reliable delivery services across USA.">

<meta property="og:url" content="https://www.gofeast.io/go-partner-restaurant">

<meta property="og:type" content="website">

<meta property="og:image" content="https://www.gofeast.io/assets/images/partner-restaurant-banner.jpg">

<!-- Twitter Card Tags -->

<meta name="twitter:card" content="summary_large_image">

<meta name="twitter:title" content="Go-Partner for Restaurants | GoFeast.io - Join Our Network and Boost Your Restaurant's Reach">

<meta name="twitter:description" content="Partner with GoFeast.io to expand your restaurant's customer base. Enjoy seamless integration, increased visibility, and reliable delivery services across USA.">

<meta name="twitter:image" content="https://www.gofeast.io/assets/images/partner-restaurant-banner.jpg">
@endsection
@section('content')

    <!-- Our Approach Section Start -->
    <div class="main-banner">
        <div class="container" style="padding-top: 100px;">
            <div class="row section-row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title section-title-center">
                        <h3 class="wow fadeInUp">GoPartner</h3>
                        <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque"><b style="font-weight: 900;">Empowering vendors with a </b><br> complete digital <span>solution!</span></h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <!-- Approach Image Start -->
                    <div class="approach-image">
                        <figure class="image-anime reveal">
                            <img src="{{asset('assets/new/images/partner.png')}}" class="img-fluid" alt="">
                        </figure>
                    </div>
                    <!-- Approach Image End -->
                </div>
                {{--<div class="col-lg-6">
                    <!-- Approach Image Start -->
                    <div class="approach-image">
                        <figure class="image-anime reveal">
                            <img src="{{asset('assets/new/images/mobileapp.png')}}" alt="">
                        </figure>
                        <!-- Approach Counter Box Start -->
                        <div class="approach-counter-box">
                            <!-- Approach Counter Item Start -->
                            <div class="approach-counter-item">
                                <h5><span class="counter">15</span>+</h5>
                                <p>Business problem</p>
                            </div>
                            <!-- Approach Counter Item End -->
                            <!-- Approach Counter Item Start -->
                            <div class="approach-counter-item">
                                <h5><span class="counter">2.3</span>+</h5>
                                <p>Business setup</p>
                            </div>
                            <!-- Approach Counter Item End -->
                        </div>
                        <!-- Approach Counter Box End -->
                    </div>
                    <!-- Approach Image End -->
                </div>--}}
            </div>
        </div>
    </div>
    <!-- Our Approach Section End -->

    <!-- Our Solution Section Start -->
    <div class="why-gofeast">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <!-- Our Solution Content Start -->
                    <div class="our-solution-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">Why GoFeast</h3>
                            <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">
                                Take Your Restaurant Online — <span>Fast & Easy</span></h2>
                            <p class="wow fadeInUp" data-wow-delay="0.4s">
                                Step into the future of delivery with a platform designed for everyone. We make it simple to go digital, attract new customers, and streamline your workflow—without complicated setups or high costs.
                            </p>
                        </div>
                        <div class="d-flex align-items-center gap-3 justify-content-start flex-wrap">
                            <!-- Hero Button Start -->
                            <div class="hero-btn wow fadeInUp" data-wow-delay="0.4s">
                                <a href="https://play.google.com/store/apps/details?id=com.gomeat.partners" class="btn-default btn-highlighted">
                                    Play Store
                                </a>
                                <!-- <a href="#" class="btn-default">Buy Now</a> -->
                            </div>
                            <!-- Hero Button End -->
                            
                            <!-- Hero Button Start -->
                            <div class="hero-btn wow fadeInUp" data-wow-delay="0.4s">
                                <a href="https://apps.apple.com/in/app/gopartners/id1534134861" class="btn-default">
                                    App Store
                                </a>
                                <!-- <a href="#" class="btn-default">Buy Now</a> -->
                            </div>
                            <!-- Hero Button End -->
                        </div>
                        <!-- Section Title End -->
                    </div>
                    <!-- Our Solution Content ENd -->
                </div>

                <div class="col-lg-7">
                    <!-- Solution Item List Start -->
                    <div class="solution-item-list">
                        <!-- Solution Item Start -->
                        <div class="solution-item wow fadeInUp">
                            <div class="icon-box bg-none">
                                <img class="bg-none" src="{{asset('assets/new/images/sales.png')}}" alt="">
                            </div>
                            <div class="solution-item-content">
                                <h3>Increase Sales</h3>
                                <p>Access to GoFeast customer base.</p>
                            </div>
                        </div>
                        <!-- Solution Item End -->
                        
                        <!-- Solution Item Start -->
                        <div class="solution-item wow fadeInUp" data-wow-delay="0.2s">
                            <div class="icon-box">
                                <img src="{{asset('assets/new/images/zero-cost.png')}}" alt="">
                            </div>
                            <div class="solution-item-content">
                                <h3>No Setup Cost</h3>
                                <p>There is NO setup cost to bring your store on-board GoFeast Platform.</p>
                            </div>
                        </div>
                        <!-- Solution Item End -->
                        
                        <!-- Solution Item Start -->
                        <div class="solution-item wow fadeInUp" data-wow-delay="0.4s">
                            <div class="icon-box">
                                <img src="{{asset('assets/new/images/marketing.png')}}" alt="">
                            </div>
                            <div class="solution-item-content">
                                <h3>Marketing</h3>
                                <p>Be part of extensive Marketing and Promotions run by GoFeast to facilitate your sales.</p>
                            </div>
                        </div>
                        <!-- Solution Item End -->
                        
                        <!-- Solution Item Start -->
                        <div class="solution-item wow fadeInUp" data-wow-delay="0.6s">
                            <div class="icon-box">
                                <img src="{{asset('assets/new/images/delivery.png')}}" alt="">
                            </div>
                            <div class="solution-item-content">
                                <h3>Fast Delivery</h3>
                                <p>As GoFeast Partner, all orders placed on your store via GoFeast Platform will be delivered by GoDrivers.</p>
                            </div>
                        </div>
                        <!-- Solution Item End -->
                    </div>
                    <!-- Solution Item List End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Solution Section End -->

    <!-- Our Approach Section Start -->
    <div class="how-gofeast-work">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title section-title-center">
                        <h3 class="wow fadeInUp">How GoFeast Works?</h3>
                        <!-- <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">Helping you go digital, at a fraction of the <span>cost!</span></h2> -->
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- Approach Item List Start -->
                    <div class="approach-item-list">
                        <!-- Approach Item Start -->
                        <div class="approach-item wow fadeInUp">
                            <h5 class="icon-box fw-bold">
                                1
                            </h5>
                            <div class="approach-item-content">
                                <h3>Order Placement</h3>
                                <p>Customer places an order through our Android or iOS GoFeast App.</p>
                            </div>
                        </div>
                        <!-- Approach Item End -->
                        
                        <!-- Approach Item Start -->
                        <div class="approach-item wow fadeInUp" data-wow-delay="0.2s">
                            <h5 class="icon-box fw-bold">
                                2
                            </h5>
                            <div class="approach-item-content">
                                <h3>Preparation</h3>
                                <p>You prepare the order while our system keeps the customer updated at every step.</p>
                            </div>
                        </div>
                        <!-- Approach Item End -->
                        
                        <!-- Approach Item Start -->
                        <div class="approach-item wow fadeInUp" data-wow-delay="0.4s">
                            <h5 class="icon-box fw-bold">
                                3
                            </h5>
                            <div class="approach-item-content">
                                <h3>Delivery</h3>
                                <p>Once ready, our rider picks it up and delivers it straight to the doorstep quick, safe, and hassle-free.</p>
                            </div>
                        </div>
                        <!-- Approach Item End -->
                    </div>
                    <!-- Approach Item List End -->
                </div>
                
                <div class="col-lg-6">
                    <!-- Approach Image Start -->
                    <div class="approach-image">
                        <figure class="image-anime reveal">
                            <img src="{{asset('assets/new/images/delivery.jpg')}}" alt="">
                        </figure>
                        
                        <!-- Approach Counter Box Start -->
                        <div class="approach-counter-box">
                            <!-- Approach Counter Item Start -->
                            <div class="approach-counter-item">
                                <h5><span class="counter">24</span>/7</h5>
                                <p>Customer Support</p>
                            </div>
                            <!-- Approach Counter Item End -->
                        </div>
                        <!-- Approach Counter Box End -->
                    </div>
                    <!-- Approach Image End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Approach Section End -->
     

    <!-- How It Work Section Start -->
    <div class="onboarding-process">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <!-- How Work Video Content Start -->
                    <div class="how-work-video-content">
                        <!-- How Work Video Start -->
                        <div class="how-work-video">
                            <!-- Selfhosted Video Start -->
                            <!-- <video autoplay muted loop id="myvideo"><source src="images/nextmind-how-work-video.mp4" type="video/mp4"></video> -->
                            
                            <video autoplay muted loop id="hwvideo"><source src="{{ asset('assets/new/images/onboarding1.mp4') }}" type="video/mp4"></video>
                            <!-- Selfhosted Video End -->

                            <!-- Youtube Video Start -->
                            <!-- <div id="herovideo" class="player" data-property="{videoURL:'OjTRVpgtcG4',containment:'.hero-video', showControls:false, autoPlay:true, loop:true, vol:0, mute:false, startAt:0,  stopAt:296, opacity:1, addRaster:true, quality:'large', optimizeDisplay:true}"></div> -->
                            <!-- Youtube Video End -->
                        </div>
                        <!-- How Work Video Start -->

                        <!-- Section Footer Text Start -->
                        <div class="section-footer-text wow fadeInUp" data-wow-delay="0.2s">
                            <p>We help our partners to grow and create online presence. <br><a href="{{ route('new.contactus') }}">Contact Now</a></p>
                        </div>
                        <!-- Section Footer Text End -->
                    </div>    
                    <!-- How Work Video Content End -->                
                </div>
                <div class="col-lg-6 onboardingprocess">
                    <!-- How Work Content Start -->
                    <div class="how-work-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">GoPartner Onboarding Process</h3>
                            <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">Our onboarding process is <span>simple</span></h2>
                        </div>
                        <!-- Section Title End -->

                        <!-- How Work Steps Start -->
                        <div class="how-work-steps">
                            <!-- How Work Item Start -->
                            <div class="how-work-item wow fadeInUp mb-2 p-3" data-wow-delay="0.4s">
                                <div class="how-work-header">
                                    <h5 class="icon-box fw-bold">
                                        1
                                    </h5>
                                    <div class="how-work-step-no">
                                        <p>step 01</p>
                                    </div>
                                </div>
                                <div class="how-work-item-content">
                                    <h3>Agreement</h3>
                                    <p>Accepting and agreeing to our terms and conditions</p>
                                </div>
                            </div>
                            <!-- How Work Item End -->

                            <!-- How Work Item Start -->
                            <div class="how-work-item wow fadeInUp mb-2 p-3" data-wow-delay="0.6s">
                                <div class="how-work-header">
                                    <h5 class="icon-box fw-bold">
                                        2
                                    </h5>
                                    <div class="how-work-step-no">
                                        <p>step 02</p>
                                    </div>
                                </div>
                                <div class="how-work-item-content">
                                    <h3>Signup</h3>
                                    <p>Creating the store or restaurant on our platform</p>
                                </div>
                            </div>
                            <!-- How Work Item End -->

                            <!-- How Work Item Start -->
                            <div class="how-work-item wow fadeInUp mb-2 p-3" data-wow-delay="0.8s">
                                <div class="how-work-header">
                                    <h5 class="icon-box fw-bold">
                                        3
                                    </h5>
                                    <div class="how-work-step-no">
                                        <p>step 03</p>
                                    </div>
                                </div>
                                <div class="how-work-item-content">
                                    <h3>Finalizing</h3>
                                    <p>Finalizing your menu and pricing</p>
                                </div>
                            </div>
                            <!-- How Work Item End -->

                            <!-- How Work Item Start -->
                            <div class="how-work-item wow fadeInUp mb-2 p-3" data-wow-delay="1s">
                                <div class="how-work-header">
                                    <h5 class="icon-box fw-bold">
                                        4
                                    </h5>
                                    <div class="how-work-step-no">
                                        <p>step 04</p>
                                    </div>
                                </div>
                                <div class="how-work-item-content">
                                    <h3>Go Live</h3>
                                    <p>Get ready to receive orders</p>
                                </div>
                            </div>
                            <!-- How Work Item End -->
                        </div>
                        <!-- How Work Steps End -->
                    </div>
                    <!-- How Work Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- How It Work Section End -->

   <!-- Page Contact Us Start -->
   <div class="get-in-touch">
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
                                            <li class="w-100 w-md-50">
                                                <h6><a href="tel:+19085740454">
                                                    <img src="{{asset('assets/new/images/usflag.png')}}" height="15px" width="30px" alt="">+1 908-574-0454
                                                </a></h6>
                                            </li>
                                            <li class="w-100 w-md-50">
                                                <h6><a href="tel:+923377777761">
                                                    <img src="{{asset('assets/new/images/pkflag.png')}}" height="15px" width="30px" alt="">
                                                    +92 337-7777-761
                                                </a></h6>
                                            </li>
                                            <li class="w-100 w-md-50">
                                                <h6><a href="mailto:cs@gofeast.io">
                                                    <img src="{{asset('assets/new/images/envelope.png')}}" height="15px" width="30px" alt="">
                                                    cs@gofeast.io
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

    <!-- Page Faqs Start -->
    <div class="page-faqs">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title section-title-center">
                        <h3 class="wow fadeInUp">FAQs</h3>
                        <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">Frequently Asked <span>Questions</span></h2>
                    </div>
                    <!-- Section Title End -->
                </div>         
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page FAQs Catagery Start -->
                    <div class="page-faqs-catagery">
                        <!-- FAQs section start -->
                        <div class="page-single-faqs page-faq-accordion" id="faq_1">
                            <!-- FAQ Accordion Start -->
                            <div class="faq-accordion" id="accordion">
                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp mb-2" data-wow-delay="0.2s">
                                    <h2 class="accordion-header" id="heading1">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                            How do i become a GoPartner?
                                        </button>
                                    </h2>
                                    <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="heading1" data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            <p>Once you have completed the sign up process, you can become a partner within a few days depending on the number of locations you have and how extensive your menu is.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- FAQ Item End -->

                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp mb-2" data-wow-delay="0.4s">
                                    <h2 class="accordion-header" id="heading2">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                            What will it cost me?
                                        </button>
                                    </h2>
                                    <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2" data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            <p>There are no charges to become a partner, GoFeast charges nominal commission from each order placed through GoFeast platform.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- FAQ Item End -->

                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp mb-2" data-wow-delay="0.6s">
                                    <h2 class="accordion-header" id="heading3">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                            Who will handle the deliveries?
                                        </button>
                                    </h2>
                                    <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3" data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            <p>Once you have marked an order “ready for delivery”, our driver will come and pick it up. GoFeast has independent drivers that handle delivery so you do not need to hire drivers.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- FAQ Item End -->

                                <!-- FAQ Item Start -->
                                <div class="accordion-item wow fadeInUp mb-2" data-wow-delay="0.8s">
                                    <h2 class="accordion-header" id="heading4">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                            What is the GoFeast delivery radius?
                                        </button>
                                    </h2>
                                    <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4" data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            <p>Our delivery radius depends on the city and store. On average we deliver up to 0-20 miles from your store.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- FAQ Item End -->

                                <!-- FAQ Item Start -->
                                {{--<div class="accordion-item wow fadeInUp mb-2" data-wow-delay="1s">
                                    <h2 class="accordion-header" id="heading5">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                            What items do GoPartners receive?
                                        </button>
                                    </h2>
                                    <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5" data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            <p>All our partners receive a GoFeast tablet with their store’s dashboard with access to GoPartner app. This allows you to get notified when a new order is placed, update order status and keep track of your menu, sales and earnings. If your store is not equipped to use a tablet then we also offer alternative solutions.</p>
                                        </div>
                                    </div>
                                </div>--}}
                                <!-- FAQ Item End -->
                            </div>
                            <!-- FAQ Accordion End -->
                        </div>
                        <!-- FAQs section End -->
                    </div> 
                    <!-- Page FAQs Catagery End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Faqs End -->
     

@endsection