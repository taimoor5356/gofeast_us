@extends('layouts.new.app')
@section('styles')
    <style>
        .first-section {
            padding: 200px 0px 100px 0px;
        }
        .third-section {
            padding: 120px 0px 0px 0px;
        }
        .last-section {
            padding: 120px 0px 180px 0px;
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


            .our-mission {
                padding: 0px 0px 0px 50px;                    /* no padding on small screens */
            }

            .our-vision {
                padding: 0px 50px 00px 0px;                    /* no padding on small screens */
            }

            .our-technology {
                padding: 0px 0px 0px 50px;                    /* no padding on small screens */
            }
        @media (max-width: 768px) {
            .first-section {
                position: relative;
                /* background: url('{{asset('assets/new/images/short-header.png')}}') no-repeat; */
                background-position: top center;
                background-size: cover;        /* 'cover' fills full width/height on small screens */
                background-size: auto;
                padding: 120px 0px 100px 0px;                    /* no padding on small screens */
                width: 100%;
                z-index: 1;
            }

            .second-section {
                padding: 100px 0px 0px 0px;                    /* no padding on small screens */
            }
            .third-section {
                padding-top: 100px !important;
            }
            .last-section {
                padding-top: 50px !important;
            }

            .our-mission {
                padding: 0px 0px 50px 0px;                    /* no padding on small screens */
            }

            .our-vision {
                padding: 0px 0px 50px 0px;                    /* no padding on small screens */
            }

            .our-technology {
                padding: 0px 0px 50px 0px;                    /* no padding on small screens */
            }
            
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
                <div class="col-lg-6">
                    <!-- Our Solution Content Start -->
                    <div class="our-solution-content">
                        <!-- Section Title Start -->
                        <div class="section-title mb-4">
                            <h3 class="wow fadeInUp">About Us</h3>
                            <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">Smarter Food, Grocery & Meat <span>Delivery</span></h2>
                            <p class="wow fadeInUp" data-wow-delay="0.4s">GoFeast is transforming the way people order food, groceries, and meat through a reliable digital marketplace. Operating in the USA and Pakistan, we connect customers with trusted restaurants, grocery stores, and meat providers — all through one seamless platform. With a strong focus on fast deliveries, excellent customer support, and everyday convenience, GoFeast ensures orders reach your doorstep quickly and efficiently. Our advanced technology, including AI and Blockchain solutions, enhances operations, transparency, and customer experience as we continue to shape the future of commerce. From your favorite meal to essential groceries, GoFeast brings quality, speed, and convenience closer to you.</p>
                        </div>
                        <!-- Section Title End -->
                    </div>
                    <!-- Our Solution Content ENd -->
                </div>

                <div class="col-lg-6">
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
    <div class="second-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                  <div class="position-relative" data-cue="slideInDown" data-show="true" style="animation-name: slideInDown; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">
                    <figure class="rounded our-mission">
                        <img src="{{asset('assets/new/images/mission.png')}}" alt="">
                    </figure>
                  </div>
                </div>
                <div class="col-lg-6">
                    <!-- Our Solution Content Start -->
                    <div class="our-solution-content">
                        <!-- Section Title Start -->
                        <div class="section-title mb-4">
                            <h3 class="wow fadeInUp">Our Mission</h3>
                            <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">Our   <span>Mission!</span></h2>
                            <p class="wow fadeInUp" data-wow-delay="0.4s">Smart systems powered by AI and blockchain technology. We use innovation to improve delivery speed, optimize operations, enhance customer experience, and create greater transparency across the supply chain. Our technology helps us deliver smarter, faster, and more efficiently every day.</p>
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
    <div class="third-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <!-- Our Solution Content Start -->
                    <div class="our-solution-content">
                        <!-- Section Title Start -->
                        <div class="section-title mb-4">
                            <h3 class="wow fadeInUp">Our Vision</h3>
                            <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">Our   <span>Vision!</span></h2>
                            <p class="wow fadeInUp" data-wow-delay="0.4s">Simple, affordable, and transparent delivery for everyone. We aim to make ordering food, groceries, and meat easier for every household and business through a platform built on trust, convenience, and fair pricing. Our mission is to bring reliable delivery services within reach of every community.</p>
                        </div>
                        <!-- Section Title End -->
                    </div>
                    <!-- Our Solution Content ENd -->
                </div>
                <div class="col-lg-6">
                  <div class="position-relative" data-cue="slideInDown" data-show="true" style="animation-name: slideInDown; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">
                      <figure class="rounded our-vision">
                        <img src="{{asset('assets/new/images/vision.png')}}" alt="">
                    </figure>
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
                <div class="col-lg-6">
                  <div class="position-relative" data-cue="slideInDown" data-show="true" style="animation-name: slideInDown; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">
                      <figure class="rounded our-technology">
                        <img src="{{asset('assets/new/images/business.png')}}" alt="">
                    </figure>
                  </div>
                </div>
                <div class="col-lg-6">
                    <!-- Our Solution Content Start -->
                    <div class="our-solution-content">
                        <!-- Section Title Start -->
                        <div class="section-title mb-4">
                            <h3 class="wow fadeInUp">Our Technology</h3>
                            <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">Our   <span>Technology!</span></h2>
                            <p class="wow fadeInUp" data-wow-delay="0.4s">Creating opportunities through an inclusive, women-led workforce. We believe in empowering talent, supporting equal opportunities, and building a stronger community through meaningful employment. By investing in people, we create positive social and economic impact that grows with every delivery.</p>
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