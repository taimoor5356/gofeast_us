@extends('layouts.new.app')
@section('styles')
    <style>
        .first-section {
            padding: 220px 0px;
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
        .solution-item .icon-box {
            background: none !important;
        }
        .solution-item .icon-box img {
            max-width: 75px !important;
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
{{--
        <!-- /section -->
        <section class="wrapper bg-light" data-cues="slideInUp">
            <!-- <div class="container pt-15 pt-md-17 pb-13 pb-md-15"> -->
            <div class="container pt-3 pt-md-3 pb-10 pb-md-10">
                <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
                    <div class="col-lg-7 order-lg-2">
                        <div class="row gx-md-5 gy-5">
                            <div class="col-md-5 offset-md-1 align-self-end">
                                <div class="card bg-pale-yellow">
                                    <div class="card-body">
                                        <img src="{{asset('assets/img/photos/gofeast_images/increase-rev.png')}}" width="150" height="auto"
                                            class="mb-3" alt="" />
                                        <!-- <h4>Increase Revenue</h4> -->
                                        <p class="mb-0" >Access to GoFeast customer base</p>
                                    </div>
                                    <!--/.card-body -->
                                </div>
                                <!--/.card -->
                            </div>
                            <!--/column -->
                            <div class="col-md-6 align-self-end">
                                <div class="card bg-pale-red">
                                    <div class="card-body">
                                        <img src="{{asset('assets/img/photos/gofeast_images/no-setup-cost.png')}}" width="150" height="auto"
                                            class="mb-3" alt="" />
                                        <!-- <h4>No Setup Cost</h4> -->
                                        <p class="mb-0" >There is NO setup cost to bring your store on-board GoFeast
                                            Platform</p>
                                    </div>
                                    <!--/.card-body -->
                                </div>
                                <!--/.card -->
                            </div>
                            <!--/column -->
                            <div class="col-md-5">
                                <div class="card bg-pale-leaf">
                                    <div class="card-body">
                                        <img src="{{asset('assets/img/photos/gofeast_images/marketing.png')}}" width="150" height="auto"
                                            class="mb-3" alt="" />
                                        <!-- <h4>Marketing & Promotions</h4> -->
                                        <p class="mb-0">Be part of extensive Marketing and Promotions run by GoFeast to
                                            facilitate your sales</p>
                                    </div>
                                    <!--/.card-body -->
                                </div>
                                <!--/.card -->
                            </div>
                            <!--/column -->
                            <div class="col-md-6 align-self-start">
                                <div class="card bg-pale-primary">
                                    <div class="card-body">
                                        <img src="{{asset('assets/img/photos/gofeast_images/home-delivery.png')}}" width="150" height="auto"
                                            class="mb-3" alt="" />
                                        <!-- <h4>Home Delivery Setup</h4> -->
                                        <p class="mb-0">As GoFeast Partner, all orders placed on your store via GoFeast
                                            Platform will be delivered by GoDrivers</p>
                                    </div>
                                    <!--/.card-body -->
                                </div>
                                <!--/.card -->
                            </div>
                            <!--/column -->
                        </div>
                        <!--/.row -->
                    </div>
                    <!--/column -->
                    <div class="col-lg-5">
                        <h2 class="fs-16 text-uppercase text-line text-primary mb-3" >Why GoFeast?</h2>
                        <h3 class="display-4 mb-5">Helping you go digital, at a fraction of the cost!
                        </h3>
                        <!-- <h3 class="display-4 mb-5">The service we offer is specifically designed to meet your needs.
                        </h3> -->
                        <!-- <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Maecenas sed diam eget
                            risus varius blandit sit amet non magna. Maecenas faucibus mollis interdum. Praesent commodo
                            cursus magna, vel scelerisque nisl consectetur et.</p>
                        <a href="#" class="btn btn-navy rounded-pill mt-3">More Details</a> -->
                    </div>
                    <!--/column -->
                </div>
                <!--/.row -->
            </div>

        </section>
        <!-- /section -->
         
        <!-- /section -->
        <section class="wrapper bg-soft-primary">
            <div class="container py-10 py-md-10">
                <div class="row gx-lg-8 gx-xl-12 gy-12 align-items-center ">
                    <div class="col-lg-6 position-relative">
                        <!-- <div class="btn btn-circle btn-primary disabled position-absolute counter-wrapper flex-column d-none d-md-flex"
                            style="top: 50%; left: 50%; transform: translate(-50%, -50%); width: 170px; height: 170px;">
                            <h3 class="text-white mb-1 mt-n2"><span class="counter counter-lg">20+</span></h3>
                            <p>Year Experience</p>
                        </div> -->
                        <div class="row gx-md-5 gy-5 align-items-center">
                            <div class="col-md-6">
                                <div class="row gx-md-5 gy-5">
                                    <div class="col-md-10 offset-md-2">
                                        <figure class="rounded"><img src="{{asset('assets/img/photos/gofeast_images/order-placed.png')}}" alt="">
                                        </figure>
                                    </div>
                                    <!--/column -->
                                    <div class="col-md-12">
                                        <figure class="rounded"><img src="{{asset('assets/img/photos/gofeast_images/order-prepration.png')}}"
                                                alt=""></figure>
                                    </div>
                                    <!--/column -->
                                </div>
                                <!--/.row -->
                            </div>
                            <!--/column -->
                            <div class="col-md-6">
                                <figure class="rounded"><img src="{{asset('assets/img/photos/gofeast_images/order-delivered.png')}}" alt="">
                                </figure>
                            </div>
                            <!--/column -->
                        </div>
                        <!--/.row -->
                    </div>
                    <!--/column -->
                    <div class="col-lg-6 ">
                        <h2 class="fs-16 text-uppercase text-line text-primary mb-3">How GoFeast Works</h2>
                        <!-- <h3 class="display-4 mb-7">Here are the 3 working steps on success.</h3> -->
                        <div class="d-flex flex-row mb-6">
                            <div>
                                <span class="icon btn btn-block btn-soft-leaf disabled me-5"><span
                                        class="number fs-18 text-primary">1</span></span>
                            </div>
                            <div>
                                <h4 class="mb-1 text-primary">Order Placement</h4>
                                <p class="mb-0">Customers place a detailed order from store through our <a href="https://play.google.com/store/apps/details?id=com.gomeat.app" target="_blank">Android</a> and <a href="https://apps.apple.com/us/app/gofeast/id1441921154" target="_blank">iOS</a> customer apps
                                </p>
                            </div>
                        </div>
                        <div class="d-flex flex-row mb-6">
                            <div>
                                <span class="icon btn btn-block btn-soft-leaf disabled me-5"><span
                                        class="number fs-18 text-primary">2</span></span>
                            </div>
                            <div>
                                <h4 class="mb-1 text-primary">Preparation</h4>
                                <p class="mb-0">You prepare the order and our customer service team keep the customer updated by changing its status to 'Accepted', 'In Preparation', or 'Ready for Delivery</p>
                            </div>
                        </div>
                        <div class="d-flex flex-row">
                            <div>
                                <span class="icon btn btn-block btn-soft-leaf disabled me-5"><span
                                        class="number fs-18 text-primary">3</span></span>
                            </div>
                            <div>
                                <h4 class="mb-1 text-primary">Delivery</h4>
                                <p class="mb-0">As soon as the order is ready, our driver will pick it up and deliver it straight to the customer’s doorstep</p>
                            </div>
                        </div>
                    </div>
                    <!--/column -->
                </div>

                <!-- <hr class="my-14 my-md-17" /> -->

            </div>
            <!-- /.container -->
        </section>
        <!-- /section -->
         
        <!-- /section -->
        <section class="wrapper bg-light ">

            <div class="container py-10 py-md-10">
                <div class="row">

                    <h2 class="fs-16 text-uppercase text-line text-primary mb-3">GoPartner Onboarding Process</h2>
                    <!-- <h2 class="display-5 mb-4">Steps to follow</h2> -->

                    <!-- <p class="lead fs-lg mb-8"> <span class=" underline-3">stress-free</span> for
                        you
                        to
                        have the perfect control.</p> -->
                    <div class="row gx-lg-8 gx-xl-12 gy-4 process-wrapper line " data-cues="slideInUp"
                        data-group="process">

                        <div class="col-md-6 col-lg-3"> <span class="icon btn btn-circle btn-lg btn-primary  mb-4"><span
                                    class="number">01</span></span>
                            <h4 class="mb-1">Signup</h4>
                            <p>Fill out application (Accept Term & Conditions) and Sign Up</p>
                        </div>
                        <!--/column -->
                        <div class="col-md-6 col-lg-3"> <span class="icon btn btn-circle btn-lg btn-primary  mb-4"><span
                                    class="number">02</span></span>
                            <h4 class="mb-1">Verification</h4>
                            <p>Sales team will review the form and contact store owner
                            </p>
                        </div>
                        <!--/column -->
                        <div class="col-md-6 col-lg-3"> <span class="icon btn btn-circle btn-lg btn-primary  mb-4"><span
                                    class="number">03</span></span>
                            <h4 class="mb-1">Finalize</h4>
                            <p>Finalize your menu and pricing
                            </p>
                        </div>
                        <!--/column -->
                        <div class="col-md-6 col-lg-3"> <span class="icon btn btn-circle btn-lg btn-primary  mb-4"><span
                                    class="number">04</span></span>
                            <h4 class="mb-1">Go Live</h4>
                            <p>Get ready to receive orders
                            </p>
                        </div>
                        <!--/column -->
                    </div>
                    <!--/.row -->
                </div>
                <div class="row gx-lg-8 gx-xl-12 gy-10 mt-2  align-items-center" data-cues="slideInDown"
                    data-group="process">
                    <div class="col-lg-7">
                        <figure><img class="w-auto" src="{{asset('assets/img/photos/gofeast_images/store-contact.png')}}" alt="" /></figure>
                    </div>
                    <div class="col-lg-5 col-xl-4 ">
                        <h2 class="fs-16 text-uppercase text-line text-primary mb-3">Get In Touch</h2>
                        <h2 class="display-4 mb-8">Convinced yet? Become a GoPartner Today!</h2>

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
                                <p><a href="mailto:partnersupport@gofeast.io"
                                        class="link-body">partnersupport@gofeast.io</a>
                                </p>
                            </div>
                        </div>
                        <div class="d-flex flex-row">
                            <!-- <div>
                                <div class="icon text-primary fs-28 me-6 mt-n1"> <i
                                        class="uil uil-location-pin-alt"></i> </div>
                            </div> -->
                            <div>
                                <!-- <h5 class="mb-1">Address</h5> -->
                                <p class="mb-0">Read GoFeast <a href="./terms">Terms and Conditions</a> and
                                    acknowledge you have read the <a
                                        href="./privacy-policy"
                                        target="_blank">Privacy
                                        Policy</a></p>
                            </div>

                        </div>
                        <div>
                            <a href="https://play.google.com/store/apps/details?id=com.gomeat.partners"
                                target="_blank" class="btn btn-primary mt-3 ">Sign Up Now</a>
                        </div>
                    </div>
                </div>


            </div>
            <!-- /.container -->

            <!-- /.wrapper -->
        </section>
        <!-- /section -->

        <!-- /section -->
        <section class="wrapper bg-gray">
            <div class="container py-14 py-md-17">
                <div class="row">
                    <div class="col-lg-11 col-xxl-10 mx-auto text-center">
                        <h2 class="fs-15 text-uppercase text-primary mb-3">FAQ</h2>
                        <h3 class="display-4 mb-10 px-lg-12 px-xl-10 px-xxl-15">Questions? We’ve Got Answers.</h3>
                    </div>
                    <!--/column -->
                </div>
                <!--/.row -->
                <div class="row">
                    <div class="col-lg-10 mx-auto">
                        <div id="accordion-3" class="accordion-wrapper">
                            <div class="card accordion-item shadow-lg">
                                <div class="card-header" id="accordion-heading-3-1">
                                    <button class="collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#accordion-collapse-3-1" aria-expanded="false"
                                        aria-controls="accordion-collapse-3-1">How do i become a GoPartner?</button>
                                </div>
                                <!-- /.card-header -->
                                <div id="accordion-collapse-3-1" class="collapse"
                                    aria-labelledby="accordion-heading-3-1" data-bs-target="#accordion-3">
                                    <div class="card-body">
                                        <p>Once you have completed the sign up process, you can become a partner within
                                            a few days depending on the number of locations you have and how extensive
                                            your menu is.
                                        </p>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.collapse -->
                            </div>
                            <!-- /.card -->
                            <div class="card accordion-item shadow-lg">
                                <div class="card-header" id="accordion-heading-3-2">
                                    <button class="collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#accordion-collapse-3-2" aria-expanded="false"
                                        aria-controls="accordion-collapse-3-2">What will it cost me?</button>
                                </div>
                                <!-- /.card-header -->
                                <div id="accordion-collapse-3-2" class="collapse"
                                    aria-labelledby="accordion-heading-3-2" data-bs-target="#accordion-3">
                                    <div class="card-body">
                                        <p>There are no charges to become a partner, GoFeast charges nominal commission
                                            from each order placed through GoFeast platform.
                                        </p>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.collapse -->
                            </div>
                            <!-- /.card -->
                            <div class="card accordion-item shadow-lg">
                                <div class="card-header" id="accordion-heading-3-3">
                                    <button class="collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#accordion-collapse-3-3" aria-expanded="false"
                                        aria-controls="accordion-collapse-3-3">
                                        Who will handle the deliveries?
                                    </button>
                                </div>
                                <!-- /.card-header -->
                                <div id="accordion-collapse-3-3" class="collapse"
                                    aria-labelledby="accordion-heading-3-3" data-bs-target="#accordion-3">
                                    <div class="card-body">
                                        <p>Once you have marked an order “ready for delivery”, our driver will come and
                                            pick it up. GoFeast has independent drivers that handle delivery so you do
                                            not need to hire drivers.
                                        </p>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.collapse -->
                            </div>
                            <!-- /.card -->
                            <div class="card accordion-item shadow-lg">
                                <div class="card-header" id="accordion-heading-3-4">
                                    <button class="collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#accordion-collapse-3-4" aria-expanded="false"
                                        aria-controls="accordion-collapse-3-4">
                                        What is the GoFeast delivery radius?
                                    </button>
                                </div>
                                <!-- /.card-header -->
                                <div id="accordion-collapse-3-4" class="collapse"
                                    aria-labelledby="accordion-heading-3-4" data-bs-target="#accordion-3">
                                    <div class="card-body">
                                        <p>Our delivery radius depends on the city and store. On average we deliver up
                                            to 0-20 miles from your store.
                                        </p>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.collapse -->
                            </div>
                            <!-- /.card -->

                            <!-- /.card -->
                            <div class="card accordion-item shadow-lg">
                                <div class="card-header" id="accordion-heading-3-5">
                                    <button class="collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#accordion-collapse-3-5" aria-expanded="false"
                                        aria-controls="accordion-collapse-3-5">
                                        What items do GoPartners receive?
                                    </button>
                                </div>
                                <!-- /.card-header -->
                                <div id="accordion-collapse-3-5" class="collapse"
                                    aria-labelledby="accordion-heading-3-5" data-bs-target="#accordion-3">
                                    <div class="card-body">
                                        <p>All our partners receive a GoFeast tablet with their store’s dashboard with
                                            access to GoPartner app. This allows you to get notified when a new order is
                                            placed, update order status and keep track of your menu, sales and earnings.
                                            If your store is not equipped to use a tablet then we also offer alternative
                                            solutions.
                                        </p>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.collapse -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.accordion-wrapper -->
                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>
<!-- /section -->
 --}}
 

    <!-- Our Solution Section Start -->
    <div class="first-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <!-- Our Solution Content Start -->
                    <div class="our-solution-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">Why GoFeast</h3>
                            <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">Helping you go digital, at a fraction of the <span>cost!</span></h2>
                            <p class="wow fadeInUp" data-wow-delay="0.4s">We envision a world where artificial intelligence transforms lives, industries, and possibilities. Our goal is to lead this evolution by creating intuitive, ethical.</p>
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
                                <h3>Same Day Delivery</h3>
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
    <div class="our-approach py-0 mb-5">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title section-title-center">
                        <h3 class="wow fadeInUp">How GoFeast Works?</h3>
                        <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">Helping you go digital, at a fraction of the <span>cost!</span></h2>
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
                                <p>Customers place a detailed order from store through our Android and iOS customer apps.</p>
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
                                <p>You prepare the order and our customer service team keep the customer updated by changing its status to 'Accepted', 'In Preparation', or 'Ready for Delivery</p>
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
                                <p>As soon as the order is ready, our driver will pick it up and deliver it straight to the customer’s doorstep.</p>
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
                </div>
            </div>
        </div>
    </div>
    <!-- Our Approach Section End -->

    <!-- Our Approach Section Start -->
    <div class="our-approach py-0 mb-5">
        <div class="container" style="padding-top: 100px;">
            <div class="row section-row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title section-title-center">
                        <h3 class="wow fadeInUp">Control Orders Easily?</h3>
                        <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">Empowering vendors with a complete digital <span>solution!</span></h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- Approach Image Start -->
                    <div class="approach-image">
                        <figure class="image-anime reveal">
                            <img src="{{asset('assets/new/images/dashboard.png')}}" alt="">
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
                </div>
                <div class="col-lg-6">
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
                </div>
            </div>
        </div>
    </div>
    <!-- Our Approach Section End -->
     

    <!-- How It Work Section Start -->
    <div class="how-it-work">
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
                            <p>We help businesses design, build, and deploy intelligent solutions that drive real results. <a href="contact.html">Contact Now</a></p>
                        </div>
                        <!-- Section Footer Text End -->
                    </div>    
                    <!-- How Work Video Content End -->                
                </div>
                <div class="col-lg-6">
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
                                    <h3>Signup</h3>
                                    <p>Fill out application (Accept Term & Conditions) and Sign Up</p>
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
                                    <h3>Verification</h3>
                                    <p>Sales team will review the form and contact store owner</p>
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
                                    <h3>Finalize</h3>
                                    <p>Finalize your menu and pricing</p>
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

    <!-- Page Faqs Start -->
    <div class="page-faqs pt-0">
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
                                <div class="accordion-item wow fadeInUp mb-2" data-wow-delay="1s">
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
                                </div>
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