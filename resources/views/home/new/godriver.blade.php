@extends('layouts.new.app')
@section('styles')
    <style>
        .how-work-steps ul {
            padding-left: 1rem !important;
        }
        .first-section{
            position: relative; 
            /* background: url('{{asset('assets/new/images/short-header.png')}}') no-repeat; */
            background-position: top center;
            background-size: auto;
            padding: 200px 80px 0px 80px;
            z-index: 1;
        }
        .approach-item .icon-box img{
            max-width: 75px !important;
        }
        .our-solution-content {
            margin-left: 15px !important;
        }
        img[src*="/icons/"] {
            filter: brightness(0) invert(1);
        }
        .service-impact-list{
            padding: 20px;
        }
        /* -- small screen size: first section image will have no padding and full height and width -- */
        @media (max-width: 768px) {
            .main-banner {
                position: relative;
                /* background: url('{{asset('assets/new/images/short-header.png')}}') no-repeat; */
                background-position: top center;
                background-size: cover;        /* 'cover' fills full width/height on small screens */
                background-size: auto;
                padding: 200px 0px 100px 0px;                    /* no padding on small screens */
                width: 100%;
                z-index: 1;
            }

            .why-gofeast {
                padding: 100px 0px 0px 0px;                    /* no padding on small screens */
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
    <!-- How It Work Section Start -->
    <div class="main-banner">
        <div class="container">
            <div class="row">
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <!-- How Work Content Start -->
                    <div class="how-work-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">why become a godriver</h3>
                            <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">Our onboarding process <br>is <span>Simple</span></h2>
                            <p>At GoFeast, our drivers are the true backbone of our service. Their dedication, hard work <br>and commitment keep every order moving and every customer satisfied. <br><br>Rain or shine, they go the extra mile to deliver on time with care and professionalism. We <br>proudly appreciate our GoDrivers for carrying the trust of our customers every single day.</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- How Work Steps Start -->
                        <div class="how-work-steps">
                            <ul>
                                <li class="wow fadeInUp" data-wow-delay="0.2s">
                                    <p>Fill out a quick registration form with your basic details.</p>
                                </li>
                                <li class="wow fadeInUp" data-wow-delay="0.4s">
                                    <p>Submit your CNIC, driving license, and vehicle documents for review.</p>
                                </li>
                                <li class="wow fadeInUp" data-wow-delay="0.6s">
                                    <p>Get introduced to the GoFeast app, delivery standards, and customer service expectations.</p>
                                </li>
                                <li class="wow fadeInUp" data-wow-delay="0.8s">
                                    <p>Once approved, go online and begin receiving delivery requests immediately.</p>
                                </li>
                            </ul>
                            <!-- 1. Apply
                            Fill out a quick registration form with your basic details.
                            2. Document Verification
                            Submit your CNIC, driving license, and vehicle documents for review.
                            3. Training & Orientation
                            Get introduced to the GoFeast app, delivery standards, and customer service expectations.
                            4. Start Earning
                            Once approved, go online and begin receiving delivery requests immediately. -->
                        </div>
                        <!-- How Work Steps End -->

                        <!-- Section Title End -->
                        <div class="d-flex align-items-center gap-3 justify-content-start flex-wrap">
                            <!-- Hero Button Start -->
                            <div class="hero-btn wow fadeInUp" data-wow-delay="0.4s">
                                <a href="https://play.google.com/store/apps/details?id=com.gomeat.driverapp" class="btn-default btn-highlighted">
                                    Play Store
                                </a>
                                <!-- <a href="#" class="btn-default">Buy Now</a> -->
                            </div>
                            <!-- Hero Button End -->
                            
                            <!-- Hero Button Start -->
                            <div class="hero-btn wow fadeInUp" data-wow-delay="0.4s">
                                <a href="https://apps.apple.com/pk/app/gofeast-driver/id6757268774" class="btn-default">
                                    App Store
                                </a>
                                <!-- <a href="#" class="btn-default">Buy Now</a> -->
                            </div>
                            <!-- Hero Button End -->
                        </div>
                        <!-- Hero Company Slider Start -->
                    </div>
                    <!-- How Work Content End -->
                </div>
                <div class="col-lg-4">
                    <!-- How Work Video Content Start -->
                    <div class="how-work-video-content">
                        <!-- How Work Video Start -->
                        <div class="how-work-video">
                            <!-- Selfhosted Video Start -->
                            <!-- <video autoplay muted loop id="myvideo"><source src="images/nextmind-how-work-video.mp4" type="video/mp4"></video> -->
                            
                            <img src="{{ asset('assets/new/images/driver.png') }}" alt="GoDriver">
                            <!-- Selfhosted Video End -->

                            <!-- Youtube Video Start -->
                            <!-- <div id="herovideo" class="player" data-property="{videoURL:'OjTRVpgtcG4',containment:'.hero-video', showControls:false, autoPlay:true, loop:true, vol:0, mute:false, startAt:0,  stopAt:296, opacity:1, addRaster:true, quality:'large', optimizeDisplay:true}"></div> -->
                            <!-- Youtube Video End -->
                        </div>
                        <!-- How Work Video Start -->

                        <!-- Section Footer Text Start -->
                        <!-- <div class="section-footer-text wow fadeInUp" data-wow-delay="0.2s">
                            <p>We help our partners to grow and create online presence. <br><a href="javascript:void(0);">Contact Now</a></p>
                        </div> -->
                        <!-- Section Footer Text End -->
                    </div>    
                    <!-- How Work Video Content End -->                
                </div>
            </div>
        </div>
    </div>
    <!-- How It Work Section End -->

    <!-- Our Solution Section Start -->
    <div class="why-gofeast">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title section-title-center">
                        <h3 class="wow fadeInUp">why become a godriver</h3>
                        <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">Why become a <span>GoDriver?</span></h2>
                        <p>Join a growing network of motivated riders earning flexible income while being part of a trusted delivery platform. Whether you want full-time earnings or extra income, GoDriver gives you the opportunity to grow with us.</p>
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
                                <img src="{{asset('assets/img/icons/solid/shipment.svg')}}" alt="">
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
                                <img src="{{asset('assets/img/icons/lineal/clock-3.svg')}}" alt="">
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
                                <img src="{{asset('assets/img/icons/lineal/coin.svg')}}" alt="">
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
@endsection