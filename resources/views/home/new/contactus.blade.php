@extends('layouts.new.app')
@section('styles')
    <style>
        .first-section{
            position: relative; 
            background: url('{{asset('assets/new/images/short-header.png')}}') no-repeat;
            background-position: top center;
            background-size: auto;
            padding: 215px 0px 0px 0px;
            z-index: 1;
        }

        .testimonials-box {
            background: none;
            border: none;
            padding: 0px;
        }

        /* .page-blog {
            padding: 220px 0px;
        } */
        .approach-item .icon-box img{
            max-width: 75px !important;
        }
        .our-solution-content {
            margin-left: 15px !important;
        }
        .csr-testimonial-slider .swiper{
            background: none !important;
            border: none !important;
        }
        .csr-testimonial-slider::before {
            content: none !important;
        }
        .contactus-section-row {
            margin-bottom: 0px !important;
        }

        @media (min-width: 992px) {
            .testimonials-counter-item > div {
                width: auto !important;
            }
        }
        @media (max-width: 768px) {
            .first-section {
                position: relative;
                /* background: url('{{asset('assets/new/images/short-header.png')}}') no-repeat; */
                background-position: top center;
                background-size: cover;        /* 'cover' fills full width/height on small screens */
                background-size: auto;
                padding: 125px 0px 0px 0px;                    /* no padding on small screens */
                width: 100%;
                z-index: 1;
            }
            .how-it-work {
                padding-top: 100px !important;
            }
        }

    </style>
@endsection
@section('meta_tags')

<!-- Meta Title -->

<title>Contact Us | GoFeast.io - Get in Touch for Online Food & Grocery Delivery in Lahore</title>



<!-- Meta Description -->

<meta name="description" content="Have questions or need assistance? Contact GoFeast.io for inquiries about our Online Food & Grocery delivery services in USA. We're here to help!">



<!-- Meta Keywords -->

<meta name="keywords" content="GoFeast.io contact, customer support, Online Food & Grocery inquiries, grocery delivery questions, contact GoFeast.io, USA, GoFeast.io help, get in touch with GoFeast.io, Lahore grocery delivery support">



<!-- Meta Robots -->

<meta name="robots" content="index, follow">



<!-- Open Graph Tags -->

<meta property="og:title" content="Contact Us | GoFeast.io - Get in Touch for Online Food & Grocery Delivery in Lahore">

<meta property="og:description" content="Have questions or need assistance? Contact GoFeast.io for inquiries about our Online Food & Grocery delivery services in USA. We're here to help!">

<meta property="og:url" content="https://www.gofeast.io/contact-us">

<meta property="og:type" content="website">

<meta property="og:image" content="https://www.gofeast.io/assets/images/contact-us-banner.jpg">



<!-- Twitter Card Tags -->

<meta name="twitter:card" content="summary_large_image">

<meta name="twitter:title" content="Contact Us | GoFeast.io - Get in Touch for Online Food & Grocery Delivery in Lahore">

<meta name="twitter:description" content="Have questions or need assistance? Contact GoFeast.io for inquiries about our Online Food & Grocery delivery services in USA. We're here to help!">

<meta name="twitter:image" content="https://www.gofeast.io/assets/images/contact-us-banner.jpg">

@endsection
@section('content')

 <!-- Customer Support Section Start -->
<div class="first-section">
    <div class="container">
        <div class="row section-row contactus-section-row">
            <div class="col-lg-12">
                <!-- Section Title Start -->
                <div class="section-title section-title-center">
                    <h3 class="wow fadeInUp">Contact Us</h3>
                    <h2 class="wow fadeInUp">Get In <span>Touch</span></h2>
                </div>
                <!-- Section Title End -->
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="testimonials-box">    

                    <!-- Testimonial Slider Start -->
                    <div class="testimonial-slider csr-testimonial-slider">
                        <div class="swiper">
                            <div class="swiper-wrapper">
                                <!-- Testimonial Slide Start -->
                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="testimonial-content">
                                            <img src="{{asset('assets/new/images/contactus_img.png')}}" class="rounded" alt="">
                                        </div>                                        
                                    </div>
                                </div>
                                <!-- Testimonial Slide End -->
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial Slider End -->    
                    <!-- Testimonials Content Start -->
                    <div class="testimonials-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">Need some help? Reach <br>out to <span>us</span></h2>
                            <p class="wow fadeInUp" data-wow-delay="0.4s">We’re here to help you anytime. Our dedicated support team ensures quick responses, reliable solutions, and a smooth experience for every user.
                                <br>
                                <br>
                                Quick delivery at your door step is just a click away. Trained professional customer service representative providing you immediate response on every query.
                            </p>
                        </div>
                        <!-- Section Title End -->
                        
                        <!-- Testimonials Body Start -->
                        <div class="testimonials-body">
                            <!-- Testimonials Counter Item Start -->
                            <div class="testimonials-counter-item d-flex flex-wrap gap-5">
    
    <!-- Phone Column -->
    <div class="w-100 w-lg-auto">
        <p>Phone:</p>
        <h6>
            <a href="tel:+19085740454" class="text-white">
                <img src="{{asset('assets/new/images/usflag.png')}}" height="20px" width="30px" alt=""> 
                +1908-574-0454
            </a>
        </h6>
        <h6 class="mt-3">
            <a href="tel:+923377777761" class="text-white">
                <img src="{{asset('assets/new/images/pkflag.png')}}" height="20px" width="30px" alt=""> 
                +92 337-7777-761
            </a>
        </h6>
    </div>

    <!-- Email Column -->
    <div class="w-100 w-lg-auto">
        <p>Email:</p>
        <h6>
            <a href="mailto:info@gofeast.com" class="text-white">
                <img src="{{asset('assets/new/images/envelope.png')}}" height="15px" width="23px" alt="">
                info@gofeast.com
            </a>
        </h6>
    </div>

</div>
                            <!-- Testimonials Counter Item End -->
                        </div>
                        <!-- Testimonials Body End -->
                    </div>
                    <!-- Testimonials Content End -->         
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Customer Support Section End -->
@endsection