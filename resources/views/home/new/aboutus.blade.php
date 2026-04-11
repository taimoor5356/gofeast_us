@extends('layouts.new.app')
@section('styles')
    <style>
        .first-section {
            padding: 220px 0px 0px 0px;
        }
        .last-section {
            padding: 220px 0px 180px 0px;
        }
        .gomttoken-section {
            padding: 80px 0px 0px 0px;
        }
        .approach-item .icon-box img{
            max-width: 75px !important;
        }
        .section-title h3{
            background-color: #17171792 !important;
        }
        .how-it-work {
            padding: 200px 0px;
        }
        .service-impact-item .icon-box img {
            max-width: 60px !important;
        }
    </style>
@endsection
@section('meta_tags')
    <!-- Meta Title -->

    <title>About Us | GoFeast.io - Your Trusted Food and Grocery Delivery Service</title>

    <!-- Meta Description -->

    <meta name="description" content="Learn more about GoFeast.io, your reliable source for food and groceries in USA. Discover our mission, values, and commitment to quality and transparency in every delivery.">

    <!-- Meta Keywords -->

    <meta name="keywords" content="About GoFeast.io, food delivery, grocery delivery, online food delivery, USA, quality food, GoFeast.io values, food service, Lahore halal groceries, grocery shopping online">

    <!-- Meta Robots -->

    <meta name="robots" content="index, follow">

    <!-- Open Graph Tags -->

    <meta property="og:title" content="About Us | GoFeast.io - Your Trusted Food and Grocery Delivery Service">

    <meta property="og:description" content="Learn more about GoFeast.io, your reliable source for food and groceries in USA. Discover our mission, values, and commitment to quality and transparency in every delivery.">

    <meta property="og:url" content="https://www.gofeast.io/about-us">

    <meta property="og:type" content="website">

    <meta property="og:image" content="https://www.gofeast.io/assets/images/about-us-banner.jpg')}}">

    <!-- Twitter Card Tags -->

    <meta name="twitter:card" content="summary_large_image">

    <meta name="twitter:title" content="About Us | GoFeast.io - Your Trusted Food and Grocery Delivery Service">

    <meta name="twitter:description" content="Learn more about GoFeast.io, your reliable source for food and groceries in USA. Discover our mission, values, and commitment to quality and transparency in every delivery.">

    <meta name="twitter:image" content="https://www.gofeast.io/assets/images/about-us-banner.jpg')}}">
@endsection
@section('content')

    <!-- Our Solution Section Start -->
    <div class="first-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <!-- Our Solution Content Start -->
                    <div class="our-solution-content">
                        <!-- Section Title Start -->
                        <div class="section-title mb-4">
                            <h3 class="wow fadeInUp">About Us</h3>
                            <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">About  <span>GoFeast!</span></h2>
                            <p class="wow fadeInUp" data-wow-delay="0.4s">Since 2019, GoFeast has been helping your local halal/kosher stores go digital! Powered by the GoFeast Technology Platform, consumers can place orders for meat, grocery or food and have them delivered to their doorstep on the same-day. Using Blockchain technology, GoFeast is revolutionizing the speciality meat supply chain and certification processes by making each step transparent and traceable. Thus, paving the way for a safer industry.</p>
                        </div>
                        <div class="section-title">
                            <div class="hero-btn wow fadeInUp d-flex justify-content-start mb-4" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                                <a href="contact.html" class="btn-default btn-highlighted">Value Proposition</a>
                            </div>
                        </div>
                        <!-- Section Title End -->
                    </div>
                    <!-- Our Solution Content ENd -->
                </div>

                <div class="col-lg-7">
                  <div class="position-relative" data-cue="slideInDown" data-show="true" style="animation-name: slideInDown; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">
                    <a href="https://www.youtube.com/embed/tzYQxCJew8Q" class="btn btn-circle btn-primary btn-play ripple mx-auto mb-6 position-absolute" style="top:50%; left: 50%; transform: translate(-50%,-50%); z-index:3;" data-glightbox=""><i class="icn-caret-right"></i></a>
                      <figure class="rounded"><img src="https://gofeast.us/public/assets/img/photos/gofeast_images/gomt-proposition.jpg" alt=""></figure>
                  </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Our Solution Section End -->

    <!-- Our Solution Section Start -->
    <div class="first-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                  <div class="position-relative" data-cue="slideInDown" data-show="true" style="animation-name: slideInDown; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">
                    <a href="https://www.youtube.com/embed/tzYQxCJew8Q" class="btn btn-circle btn-primary btn-play ripple mx-auto mb-6 position-absolute" style="top:50%; left: 50%; transform: translate(-50%,-50%); z-index:3;" data-glightbox=""><i class="icn-caret-right"></i></a>
                      <figure class="rounded"><img src="{{asset('assets/img/photos/gofeast_images/our-mission.png')}}" alt=""></figure>
                  </div>
                </div>
                <div class="col-lg-5">
                    <!-- Our Solution Content Start -->
                    <div class="our-solution-content">
                        <!-- Section Title Start -->
                        <div class="section-title mb-4">
                            <h3 class="wow fadeInUp">Our Mission</h3>
                            <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">Our   <span>Mission!</span></h2>
                            <p class="wow fadeInUp" data-wow-delay="0.4s">GoFeast strives to be the leading digital marketplace connecting consumers with speciality meat stores and offering same-day delivery services powered by the GoFeast Technology Platform.</p>
                        </div>
                        <!-- Section Title End -->
                    </div>
                    <!-- Our Solution Content ENd -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Solution Section End -->

    <!-- Our Solution Section Start -->
    <div class="first-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <!-- Our Solution Content Start -->
                    <div class="our-solution-content">
                        <!-- Section Title Start -->
                        <div class="section-title mb-4">
                            <h3 class="wow fadeInUp">Our Vision</h3>
                            <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">Our   <span>Vision!</span></h2>
                            <p class="wow fadeInUp" data-wow-delay="0.4s">Using blockchain technology, GoFeast aims to digitalize the speciality food industry by making the speciality meat supply chain and certification transparent.</p>
                        </div>
                        <!-- Section Title End -->
                    </div>
                    <!-- Our Solution Content ENd -->
                </div>
                <div class="col-lg-7">
                  <div class="position-relative" data-cue="slideInDown" data-show="true" style="animation-name: slideInDown; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">
                    <a href="https://www.youtube.com/embed/tzYQxCJew8Q" class="btn btn-circle btn-primary btn-play ripple mx-auto mb-6 position-absolute" style="top:50%; left: 50%; transform: translate(-50%,-50%); z-index:3;" data-glightbox=""><i class="icn-caret-right"></i></a>
                      <figure class="rounded"><img src="{{asset('assets/img/photos/gofeast_images/vision.png')}}" alt=""></figure>
                  </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Our Solution Section End -->

    <!-- Our Solution Section Start -->
    <div class="last-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                  <div class="position-relative" data-cue="slideInDown" data-show="true" style="animation-name: slideInDown; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">
                    <a href="https://www.youtube.com/embed/tzYQxCJew8Q" class="btn btn-circle btn-primary btn-play ripple mx-auto mb-6 position-absolute" style="top:50%; left: 50%; transform: translate(-50%,-50%); z-index:3;" data-glightbox=""><i class="icn-caret-right"></i></a>
                      <figure class="rounded"><img src="{{asset('assets/img/photos/gofeast_images/business.png')}}" alt=""></figure>
                  </div>
                </div>
                <div class="col-lg-5">
                    <!-- Our Solution Content Start -->
                    <div class="our-solution-content">
                        <!-- Section Title Start -->
                        <div class="section-title mb-4">
                            <h3 class="wow fadeInUp">Our Business Model</h3>
                            <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">Our   <span>Business Model!</span></h2>
                            <p class="wow fadeInUp" data-wow-delay="0.4s">Our Business Model is one of the simplest in the Tech industry offering steady and consistent revenue streams with no cash collection risks and high cash flows. GoFeast is a Logistics Technology Startup and not a meat seller. We are providing a technology marketplace for the buying and selling of speciality (halal and kosher) meat along with in-app speciality certifications.</p>
                        </div>
                        <!-- Section Title End -->
                    </div>
                    <!-- Our Solution Content ENd -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Solution Section End -->

@endsection