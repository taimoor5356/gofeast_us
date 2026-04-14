@extends('layouts.new.app')
@section('content')
@section('styles')
    <style>
        .company-logo img {
            max-height: 90px;
        }
        .faq-accordion .accordion-item {
            margin-bottom: 5px !important;
        }
        .post-item {
            height: 100%;
            display: flex;
            flex-direction: column;
        }
        .swiper-slide {
            height: auto;
            display: flex;
        }
        .post-title {
            display: -webkit-box;
            -webkit-line-clamp: 2; /* max 2 lines */
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
        .post-item article {
            display: flex;
            flex-direction: column;
            height: 100%;
        }
        .post-header {
            flex-grow: 1; /* pushes footer down */
        }

        .post-footer {
            margin-top: auto;
        }
        .post-item figure {
            height: 220px; /* adjust as needed */
            overflow: hidden;
            border-radius: 12px;
        }

        .post-item figure img {
            width: 100%;
            height: 100%;
            object-fit: cover; /* 🔥 key line */
        }

        .card-img-p {
            padding: 5px 5px 120px 5px;
            background-color: #181818;
        }

        .card-img-p img {
            aspect-ratio: 0 !important;
            border-bottom: 1px solid #212121;
            border-radius: 0px !important;
            margin-bottom: 10px !important;
        }
        .testimonial-content {
            display: flex;
            justify-content: center;
        }
        .testimonial-content img {
            width: 100%;
            object-fit: cover;
            object-position: center;
        }
    </style>
@endsection
<!-- Hero Section Start -->
<div class="hero">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <!-- Hero Content Start -->
                <div class="hero-content">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h1 class="wow fadeInUp" data-cursor="-opaque">The Intelligence Layer Behind Food Delivery.</h1>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">GoFeast uses AI-powered systems to optimize orders, deliveries, and operations — creating faster experiences for customers, smarter tools for restaurants, and scalable growth for investors.</p>
                    </div>
                    <!-- Section Title End -->
                    
                    <!-- Hero Button Start -->
                    <div class="hero-btn wow fadeInUp" data-wow-delay="0.4s">
                        <a href="#" class="btn-default btn-highlighted">Order Now</a>
                        <!-- <a href="#" class="btn-default">Buy Now</a> -->
                    </div>
                    <!-- Hero Button End -->

                    <!-- Hero Company Slider Start -->
                    <div class="hero-company-slider">
                        <p>Already chosen by the leaders</p>

                        <div class="swiper">
                            <div class="swiper-wrapper">
                                <!-- Company Logo Start -->
                                <div class="swiper-slide">
                                    <div class="company-logo">
                                        <img src="{{asset('assets/img/photos/gofeast_images/Bereket.png')}}" alt="">
                                    </div>
                                </div>
                                <!-- Company Logo End -->

                                <!-- Company Logo Start -->
                                <div class="swiper-slide">
                                    <div class="company-logo">
                                        <img src="{{asset('assets/img/photos/gofeast_images/Shalimar.png')}}" alt="">
                                    </div>
                                </div>
                                <!-- Company Logo End -->

                                <!-- Company Logo Start -->
                                <div class="swiper-slide">
                                    <div class="company-logo">
                                        <img src="{{asset('assets/img/photos/gofeast_images/Haveli.png')}}" alt="">
                                    </div>
                                </div>
                                <!-- Company Logo End -->
                                
                                <!-- Company Logo Start -->
                                <div class="swiper-slide">
                                    <div class="company-logo">
                                        <img src="{{asset('assets/img/photos/gofeast_images/Lasani.png')}}" alt="">
                                    </div>
                                </div>
                                <!-- Company Logo End -->
                                
                                <!-- Company Logo Start -->
                                <div class="swiper-slide">
                                    <div class="company-logo">
                                        <img src="{{asset('assets/img/photos/gofeast_images/Minar.png')}}" alt="">
                                    </div>
                                </div>
                                <!-- Company Logo End -->
                                
                                <!-- Company Logo Start -->
                                <div class="swiper-slide">
                                    <div class="company-logo">
                                        <img src="{{asset('assets/img/photos/gofeast_images/Punjab.png')}}" alt="">
                                    </div>
                                </div>
                                <!-- Company Logo End -->

                                <!-- Company Logo Start -->
                                <div class="swiper-slide">
                                    <div class="company-logo">
                                        <img src="{{asset('assets/img/photos/gofeast_images/Makki Mart.png')}}" alt="">
                                    </div>
                                </div>
                                <!-- Company Logo End -->
                            </div>
                        </div>
                    </div>
                    <!-- Hero Company Slider End -->
                </div>
                <!-- Hero Content End -->
            </div>
        </div>
    </div>
</div>
<!-- Hero Section End -->
 
<!-- Our Projects Section Start -->
<div class="our-projects">
    <div class="container">
        <div class="row section-row">
            <div class="col-lg-12">
                <!-- Section Title Start -->
                <div class="section-title section-title-center">
                    <h3 class="wow fadeInUp">Join Us!</h3>
                    <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">Grow with us and unlock new <span>opportunities</span></h2>
                </div>
                <!-- Section Title End -->
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <!-- Project Item Start -->
                <div class="project-item wow fadeInUp">
                    <div class="project-image">
                        <a href="project-single.html" data-cursor-text="View">
                            <figure class="image-anime card-img-p d-flex justify-content-center align-items-center">
                                <img src="{{asset('assets/new/images/Icon1.png')}}" alt="">
                            </figure>
                        </a>
                    </div>
                    <div class="project-content">
                        <h3><a href="project-single.html">GoPartner</a></h3>
                        <small>Reach out to new customers and increase your online presence, no setup costs!</small>
                    </div>
                    <div class="project-btn">
                        <a href="project-single.html">
                            <img src="{{asset('assets/new/images/arrow-white.svg')}}" alt="">
                        </a>
                    </div>
                </div>
                <!-- Project Item End -->
            </div>
            <div class="col-lg-3 col-md-6">
                <!-- Project Item Start -->
                <div class="project-item wow fadeInUp">
                    <div class="project-image">
                        <a href="project-single.html" data-cursor-text="View">
                            <figure class="image-anime card-img-p d-flex justify-content-center align-items-center">
                                <img src="{{asset('assets/new/images/Icon2.png')}}" alt="">
                            </figure>
                        </a>
                    </div>
                    <div class="project-content">
                        <h3><a href="project-single.html">GoDriver</a></h3>
                        <small>Deliver when you want and where you want, earn the highest payout in the industry!</small>
                    </div>
                    <div class="project-btn">
                        <a href="project-single.html">
                            <img src="{{asset('assets/new/images/arrow-white.svg')}}" alt="">
                        </a>
                    </div>
                </div>
                <!-- Project Item End -->
            </div>
            <div class="col-lg-3 col-md-6">
                <!-- Project Item Start -->
                <div class="project-item wow fadeInUp">
                    <div class="project-image">
                        <a href="project-single.html" data-cursor-text="View">
                            <figure class="image-anime card-img-p d-flex justify-content-center align-items-center">
                                <img src="{{asset('assets/new/images/Icon3.png')}}" alt="">
                            </figure>
                        </a>
                    </div>
                    <div class="project-content">
                        <h3><a href="project-single.html">Ordering App</a></h3>
                        <small>Enjoy exclusive discounts and same-day delivery from your favorite local speciality stores!</small>
                    </div>
                    <div class="project-btn">
                        <a href="project-single.html">
                            <img src="{{asset('assets/new/images/arrow-white.svg')}}" alt="">
                        </a>
                    </div>
                </div>
                <!-- Project Item End -->
            </div>
            <div class="col-lg-3 col-md-6">
                <!-- Project Item Start -->
                <div class="project-item wow fadeInUp">
                    <div class="project-image">
                        <a href="project-single.html" data-cursor-text="View">
                            <figure class="image-anime card-img-p d-flex justify-content-center align-items-center">
                                <img src="{{asset('assets/new/images/Icon4.png')}}" alt="">
                            </figure>
                        </a>
                    </div>
                    <div class="project-content">
                        <h3><a href="project-single.html">GoFeast Token</a></h3>
                        <small>Utility token backed by a real use-case, with a limited supply and excellent burn economy!</small>
                    </div>
                    <div class="project-btn">
                        <a href="project-single.html">
                            <img src="{{asset('assets/new/images/arrow-white.svg')}}" alt="">
                        </a>
                    </div>
                </div>
                <!-- Project Item End -->
            </div>
        </div>

        {{--<div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="about-us-box">
                    <div class="about-us-item">
                        <div class="icon-box">
                            <img src="{{ asset('assets/new/images/arrow-white.svg')}}" alt="">
                        </div>
                        <img src="{{asset('assets/new/images/Icon1.png')}}" alt="">
                        <div class="about-item-content w-100">
                            <h3>Seamless Integration</h3>
                            <p>Reach out to new customers and increase your online presence, no setup costs!</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="project-item wow fadeInUp">
                    <div class="project-image">
                        <a href="project-single.html" data-cursor-text="View">
                            <figure class="image-anime">
                        <img src="{{asset('assets/new/images/Icon1.png')}}" alt="">
                            </figure>
                        </a>
                    </div>
                    <div class="project-content">
                        <h3><a href="project-single.html">GoPartner</a></h3>
                        <p>Reach out to new customers and increase your online presence, no setup costs!</p>
                    </div>
                    <div class="project-btn">
                        <a href="project-single.html">
                            <img src="{{ asset('assets/new/images/arrow-white.svg')}}" alt="">
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <!-- Project Item Start -->
                <div class="project-item wow fadeInUp" data-wow-delay="0.2s">
                    <div class="project-image">
                        <a href="project-single.html" data-cursor-text="View">
                            <figure class="image-anime">
                                <img src="{{asset('assets/img/photos/gofeast_images/driver.png')}}" alt="">
                            </figure>
                        </a>
                    </div>
                    <div class="project-content">
                        <h3><a href="project-single.html">GoDriver</a></h3>
                        <p>Deliver when you want and where you want, earn the highest payout in the industry!</p>
                    </div>
                    <div class="project-btn">
                        <a href="project-single.html">
                            <img src="{{ asset('assets/new/images/arrow-white.svg')}}" alt="">
                        </a>
                    </div>
                </div>
                <!-- Project Item End -->
            </div>

            <div class="col-lg-3 col-md-6">
                <!-- Project Item Start -->
                <div class="project-item wow fadeInUp" data-wow-delay="0.4s">
                    <div class="project-image">
                        <a href="project-single.html" data-cursor-text="View">
                            <figure class="image-anime">
                                <img src="{{asset('assets/img/photos/gofeast_images/app.png')}}" alt="">
                            </figure>
                        </a>
                    </div>
                    <div class="project-content">
                        <h3><a href="project-single.html">Ordering App</a></h3>
                        <p>Enjoy exclusive discounts and same-day delivery from your favorite local speciality stores!</p>
                    </div>
                    <div class="project-btn">
                        <a href="project-single.html">
                            <img src="{{ asset('assets/new/images/arrow-white.svg')}}" alt="">
                        </a>
                    </div>
                </div>
                <!-- Project Item End -->
            </div>

            <div class="col-lg-3 col-md-6">
                <!-- Project Item Start -->
                <div class="project-item wow fadeInUp" data-wow-delay="0.6s">
                    <div class="project-image">
                        <a href="project-single.html" data-cursor-text="View">
                            <figure class="image-anime">
                                <img src="{{asset('assets/img/photos/gofeast_images/gomt.png')}}" alt="">
                            </figure>
                        </a>
                    </div>
                    <div class="project-content">
                        <h3><a href="project-single.html">GOMT Token</a></h3>
                        <p>Utility token backed by a real use-case, with a limited supply and excellent burn economy!</p>
                    </div>
                    <div class="project-btn">
                        <a href="project-single.html">
                            <img src="{{ asset('assets/new/images/arrow-white.svg')}}" alt="">
                        </a>
                    </div>
                </div>
                <!-- Project Item End -->
            </div>
        </div>--}}
    </div>
</div>
<!-- Our Projects Section End -->

<!-- Our Testimonials Section Start -->
<div class="our-testimonials">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="testimonials-box">
                    <!-- Testimonials Content Start -->
                    <div class="testimonials-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">testimonials</h3>
                            <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">Powering innovation with data-driven <span>design</span></h2>
                            <p class="wow fadeInUp" data-wow-delay="0.4s">Crafting intuitive, user-first interfaces by intelligence for smarter, faster, and more personalized digital artificial intelligence experiences.</p>
                        </div>
                        <!-- Section Title End -->
                        
                        <!-- Testimonials Body Start -->
                        <div class="testimonials-body">
                            <!-- Testimonials Counter Item Start -->
                            <div class="testimonials-counter-item">
                                <h2><span class="counter">200</span>+</h2>
                                <p>projects successfully</p>
                            </div>
                            <!-- Testimonials Counter Item End -->
                            
                            <!-- Testimonials Counter Item Start -->
                            <div class="testimonials-counter-item">
                                <h2><span class="counter">600</span>+</h2>
                                <p>projects successfully</p>
                            </div>
                            <!-- Testimonials Counter Item End -->
                        </div>
                        <!-- Testimonials Body End -->
                    </div>
                    <!-- Testimonials Content End -->

                    <!-- Testimonial Slider Start -->
                    <div class="testimonial-slider">
                        <div class="swiper">
                            <div class="swiper-wrapper">
                                <!-- Testimonial Slide Start -->
                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="testimonial-header">
                                            <div class="testimonial-author">
                                                <div class="author-image">
                                                    <figure class="image-anime">
                                                        <img src="images/author-1.jpg" alt="">
                                                    </figure>
                                                </div>            
                                                <div class="author-content">
                                                    <h3>Jenny W</h3>
                                                    <p>fintech startup</p>
                                                </div>
                                            </div>
                                            <div class="testimonial-quotes-img">
                                                <img src="images/testimonials-quotes-img.svg" alt="">
                                            </div>
                                        </div>                                            
                                        <div class="testimonial-content">
                                            <p>"Working with this team we game-changer. The AI-enhanced they delivered helped  reduce bounce rates by 40% engagement like never before."</p>
                                        </div>                                        
                                    </div>
                                </div>
                                <!-- Testimonial Slide End -->
                                
                                <!-- Testimonial Slide Start -->
                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="testimonial-header">
                                            <div class="testimonial-author">
                                                <div class="author-image">
                                                    <figure class="image-anime">
                                                        <img src="images/author-2.jpg" alt="">
                                                    </figure>
                                                </div>            
                                                <div class="author-content">
                                                    <h3>jason m</h3>
                                                    <p>hardware Technician</p>
                                                </div>
                                            </div>
                                            <div class="testimonial-quotes-img">
                                                <img src="images/testimonials-quotes-img.svg" alt="">
                                            </div>
                                        </div>                                            
                                        <div class="testimonial-content">
                                            <p>"Working with this team we game-changer. The AI-enhanced they delivered helped  reduce bounce rates by 40% engagement like never before."</p>
                                        </div>                                        
                                    </div>
                                </div>
                                <!-- Testimonial Slide End -->

                                <!-- Testimonial Slide Start -->
                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="testimonial-header">
                                            <div class="testimonial-author">
                                                <div class="author-image">
                                                    <figure class="image-anime">
                                                        <img src="images/author-3.jpg" alt="">
                                                    </figure>
                                                </div>            
                                                <div class="author-content">
                                                    <h3>Lauren M</h3>
                                                    <p>hardware Technician</p>
                                                </div>
                                            </div>
                                            <div class="testimonial-quotes-img">
                                                <img src="images/testimonials-quotes-img.svg" alt="">
                                            </div>
                                        </div>                                            
                                        <div class="testimonial-content">
                                            <p>"Working with this team we game-changer. The AI-enhanced they delivered helped  reduce bounce rates by 40% engagement like never before."</p>
                                        </div>                                        
                                    </div>
                                </div>
                                <!-- Testimonial Slide End -->
                            </div>
                            <div class="testimonial-pagination"></div>
                        </div>
                    </div>
                    <!-- Testimonial Slider End -->                        
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Our Testimonials Section End -->

<!-- Same Day Delivery Start -->
<div class="our-facts">
    <div class="container">
        <div class="row section-row">
            <div class="col-lg-12">
                <!-- Section Title Start -->
                <div class="section-title section-title-center">
                    <h3 class="wow fadeInUp">Fast & Reliable Delivery</h3>
                    <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">We provide same-day delivery from your favorite local <span>speciality stores</span></h2>
                </div>
                <!-- Section Title End -->
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6">
                <!--  Facts Item Start -->
                <div class="facts-item wow fadeInUp">
                    <div class="facts-item-title">
                        <h3>Same-Day Delivery</h3>
                    </div>
                    <div class="facts-item-counter">
                        <h2><span class="counter">24</span>h</h2>
                        <p>Fast & Efficient Service</p>
                    </div>
                    <div class="facts-item-content">
                        <p>We ensure your orders are delivered on the same day, saving your time and providing unmatched convenience.</p>
                    </div>
                </div>
                <!-- Facts Item End -->
            </div>

            <div class="col-lg-4 col-md-6">
                <!--  Facts Item Start -->
                <div class="facts-item wow fadeInUp" data-wow-delay="0.2s">
                    <div class="facts-item-title">
                        <h3>Top Local Stores</h3>
                    </div>
                    <div class="facts-item-counter">
                        <h2><span class="counter">100</span>+</h2>
                        <p>Partnered Stores</p>
                    </div>
                    <div class="facts-item-content">
                        <p>Shop from your favorite local speciality stores with a wide range of products available at your fingertips.</p>
                    </div>
                </div>
                <!-- Facts Item End -->
            </div>

            <div class="col-lg-4 col-md-6">
                <!--  Facts Item Start -->
                <div class="facts-item wow fadeInUp" data-wow-delay="0.4s">
                    <div class="facts-item-title">
                        <h3>Doorstep Convenience</h3>
                    </div>
                    <div class="facts-item-counter">
                        <h2><span class="counter">100</span>%</h2>
                        <p>Customer Satisfaction</p>
                    </div>
                    <div class="facts-item-content">
                        <p>From store to your doorstep, we provide a seamless and reliable delivery experience every time.</p>
                    </div>
                </div>
                <!-- Facts Item End -->
            </div>

            <div class="col-lg-12">
                <!-- Section Footer Text Start -->
                <div class="section-footer-text wow fadeInUp" data-wow-delay="0.6s">
                    <p><span>Order Now</span> Get your favorite products delivered today. <a href="contact.html">Start Shopping</a></p>
                </div>
                <!-- Section Footer Text End -->
            </div>
        </div>
    </div>
</div>
<!-- Same Day Delivery End -->

<!-- Buy GOMT Token Start -->
<div class="what-we-do">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <!-- What We Box Start -->
                <div class="what-we-box">
                    <h3 class="text-effect">
                        Buy GoFeast Token and unlock real-world utility with rewards, payments, and a powerful burn economy.
                    </h3>
                    
                    <div class="what-we-img wow fadeInUp" data-wow-delay="0.2s">
                        <img src="{{asset('assets/img/photos/gofeast_images/TokenIconsWhite.png')}}" alt="">
                    </div>
                    
                    <p class="wow fadeInUp mt-2" data-wow-delay="0.4s">
                        GOMT is backed by a real ecosystem with rewards, payments, and deflationary mechanics.
                    </p>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="what-we-do-content">

                    <!-- Section Title -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">GoFeast Token</h3>
                        <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">Real utility & <span>poweful tokenomics</span></h2>
                    </div>
                    <!-- Vertical Accordion -->
                    <div class="faq-accordion" id="accordion">

                        <!-- GOMT Utilities -->
                        <div class="accordion-item wow fadeInUp">
                            <h2 class="accordion-header" id="heading1">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1">
                                    GoFeast Utilities
                                </button>
                            </h2>
                            <div id="collapse1" class="accordion-collapse collapse show" data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    <ul>
                                        <li>Place meat, grocery & food orders using GoFeast Token</li>
                                        <li>Get 1% cashback and exclusive discounts</li>
                                        <li>Earn GoFeast Token through our referral program</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Burn Mechanism -->
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.2s">
                            <h2 class="accordion-header" id="heading2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2">
                                    Burn Mechanism
                                </button>
                            </h2>
                            <div id="collapse2" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    <ul>
                                        <li>4% revenue in 2022 & 5% in 2023 burnt quarterly</li>
                                        <li>Additional 3% burnt if revenue hits $3 Million</li>
                                        <li>Additional 3% burnt for every crypto order</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Real Use-case -->
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.4s">
                            <h2 class="accordion-header" id="heading3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3">
                                    Real Use-case
                                </button>
                            </h2>
                            <div id="collapse3" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    <ul>
                                        <li>Business operational since 2019</li>
                                        <li>2000+ stores onboarded</li>
                                        <li>13k+ orders successfully processed</li>
                                        <li>Pioneers in the speciality market domain</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Blockchain Certifications -->
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.6s">
                            <h2 class="accordion-header" id="heading4">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4">
                                    Blockchain Certifications
                                </button>
                            </h2>
                            <div id="collapse4" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    <ul>
                                        <li>Digitalising the $1.8 trillion global speciality market</li>
                                        <li>Providing transparency & traceability using blockchain</li>
                                        <li>Empowering stores at minimal operational cost</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Why Buy GOMT -->
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.8s">
                            <h2 class="accordion-header" id="heading5">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5">
                                    Why Buy GoFeast Token?
                                </button>
                            </h2>
                            <div id="collapse5" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    <ul>
                                        <li>Real-world usage in food & grocery ecosystem</li>
                                        <li>Deflationary token with strong burn mechanics</li>
                                        <li>Growing adoption with increasing demand</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Button -->
                    <!-- <div class="what-we-do-button mt-4">
                        <a href="https://www.bitmart.com/trade/en-US?symbol=GOMT_USDT&layout=basic" target="_blank" class="btn-default">
                            Buy Now
                        </a>
                    </div> -->

                </div>
            </div>
        </div>
    </div>
</div>

<!-- Buy GOMT Token End --><!-- Our Testimonials Section Start -->
<div class="our-testimonials">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="testimonials-box">

                    <!-- Testimonial Slider Start -->
                    <div class="testimonial-slider">
                        <div class="swiper" style="padding: 20px 20px;">
                            <div class="swiper-wrapper">
                                <!-- Testimonial Slide Start -->
                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="testimonial-content">
                                            <img src="{{asset('assets/new/images/feastron.png')}}" class="rounded" alt="">
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
                            <!-- <h3 class="wow fadeInUp">Feastron AI</h3> -->
                            <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">Powered by  <span>Feastron AI</span></h2>
                            <p class="wow fadeInUp" data-wow-delay="0.4s">Feastron is the intelligence engine behind GoFeast — automating decisions, optimizing delivery routes, and improving performance across the entire ecosystem.</p>
                        </div>
                        <!-- Section Title End -->
                        
                        <!-- Testimonials Body Start -->
                        <div class="testimonials-body">
                            <!-- Testimonials Counter Item Start -->
                            <div class="testimonials-counter-item">
                                <h2><span class="counter">200</span>+</h2>
                                <p>projects successfully</p>
                            </div>
                            <!-- Testimonials Counter Item End -->
                            
                            <!-- Testimonials Counter Item Start -->
                            <div class="testimonials-counter-item">
                                <h2><span class="counter">600</span>+</h2>
                                <p>projects successfully</p>
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
<!-- Our Testimonials Section End -->

<!-- Buy GOMT Token End --><!-- Our Testimonials Section Start -->
<div class="our-testimonials">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="testimonials-box">     
                    <!-- Testimonials Content Start -->
                    <div class="testimonials-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <!-- <h3 class="wow fadeInUp">Feastron AI</h3> -->
                            <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">Customer Support <br> <span>That Cares</span></h2>
                            <p class="wow fadeInUp" data-wow-delay="0.4s">We’re here to help you anytime. Our dedicated support team ensures quick responses, reliable solutions, and a smooth experience for every user.</p>
                        </div>
                        <!-- Section Title End -->
                        
                        <!-- Testimonials Body Start -->
                        <div class="testimonials-body">
                            <!-- Testimonials Counter Item Start -->
                            <div class="testimonials-counter-item">
                                <h2><span>24/7</span></h2>
                                <p>Customer Support</p>
                            </div>
                            <!-- Testimonials Counter Item End -->
                            
                            <!-- Testimonials Counter Item Start -->
                            <div class="testimonials-counter-item">
                                <h2><span class="counter">600</span>+</h2>
                                <p>Happy Customers</p>
                            </div>
                            <!-- Testimonials Counter Item End -->
                        </div>
                        <!-- Testimonials Body End -->
                    </div>
                    <!-- Testimonials Content End --> 

                    <!-- Testimonial Slider Start -->
                    <div class="testimonial-slider">
                        <div class="swiper" style="padding: 20px 20px;">
                            <div class="swiper-wrapper">
                                <!-- Testimonial Slide Start -->
                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="testimonial-content">
                                            <img src="{{asset('assets/new/images/contactus.png')}}" class="rounded" alt="">
                                        </div>                                        
                                    </div>
                                </div>
                                <!-- Testimonial Slide End -->
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial Slider End -->           
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Our Testimonials Section End -->

<!-- Buy GOMT Token Start -->
<div class="what-we-do">
    <div class="container">
        <div class="row section-row">
            <div class="col-lg-12">
                <!-- Section Title Start -->
                <div class="section-title section-title-center">
                    <h3 class="wow fadeInUp">Media Mention</h3>
                    <p class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">Trusted by global media and industry leaders, we continue to push boundaries and redefine what's possible. 
                    See how <span>our vision is making headlines.</span></p>
                </div>
                <!-- Section Title End -->
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="swiper blogSwiper">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="post-item">
                                <div class="item">
                                    <article>
                                        <figure class="overlay overlay-1 hover-scale rounded mb-5">
                                            <a href="https://news.bitcoin.com/gofeast-token-empowering-local-speciality-stores-using-blockchain/"
                                                target="_blank">
                                                <img src="{{asset('assets/new/images/linkedin/linkedinimage.jpeg')}}"
                                                    alt="" loading="lazy">
                                            </a>
                                            <figcaption>
                                                <h5 class="from-top mb-0">Read More</h5>
                                            </figcaption>
                                        </figure>
                                        <h2 class="post-title">GoFeast Main Event</h2>
                                        {{--<div class="post-header">
                                            <div class="post-category ">
                                                <figure class="rounded mb-2 w-20">
                                                    <a href="https://news.bitcoin.com/gofeast-token-empowering-local-speciality-stores-using-blockchain/"
                                                        target="_blank">
                                                        <img src="{{asset('assets/img/photos/gofeast_images/bitcoin-logo.png')}}" alt="" loading="lazy">
                                                    </a>
                                                </figure>
                                            </div>
                                            <!-- /.post-category -->
                                            <h2 class="post-title h3 mt-1 mb-3">
                                                <a class="link-dark"
                                                    href="https://news.bitcoin.com/gofeast-token-empowering-local-speciality-stores-using-blockchain/"
                                                    target="_blank">
                                                    Empowering Local Speciality Stores Using
                                                    Blockchain
                                                </a>
                                            </h2>
                                        </div>--}}
                                        <!-- /.post-header -->
                                        <div class="post-footer">
                                            <ul class="post-meta">
                                                <li class="post-date text-primary"><i class="uil uil-calendar-alt"></i><span>9 Sep
                                                        2021</span>
                                                </li>
                                            </ul>
                                            <!-- /.post-meta -->
                                        </div>
                                        <!-- /.post-footer -->
                                    </article>
                                    <!-- /article -->
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="post-item">
                                <div class="item">
                                    <article>
                                        <figure class="overlay overlay-1 hover-scale rounded mb-5">
                                            <a href="https://finance.yahoo.com/news/gofeast-token-lists-hydra-dex-133800677.html?guccounter=1"
                                                target="_blank">
                                                <img src="{{asset('assets/new/images/linkedin/linkedinimage1.jpeg')}}" alt="" loading="lazy">
                                            </a>
                                            <figcaption>
                                                <h5 class="from-top mb-0">Read More</h5>
                                            </figcaption>
                                        </figure>
                                        <h2 class="post-title">Connect Wallet</h2>
                                        {{--<div class="post-header">
                                            <div class="post-category ">
                                                <figure class="rounded mb-2 w-20">
                                                    <a href="https://finance.yahoo.com/news/gofeast-token-lists-hydra-dex-133800677.html?guccounter=1"
                                                        target="_blank">
                                                        <img src="{{asset('assets/new/images/linkedin/linkedinimage2.jpeg')}}"
                                                            alt="" loading="lazy">
                                                    </a>
                                                </figure>
                                            </div>
                                            <!-- /.post-category -->
                                            <h2 class="post-title h3 mt-1 mb-3">
                                                <a class="link-dark"
                                                    href="https://finance.yahoo.com/news/gofeast-token-lists-hydra-dex-133800677.html?guccounter=1"
                                                    target="_blank">
                                                    GOMT Token Lists on Hydra DEX After a Sold Out ICO
                                                </a>
                                            </h2>
                                        </div>--}}
                                        <!-- /.post-header -->
                                        <div class="post-footer">
                                            <ul class="post-meta">
                                                <li class="post-date text-primary"><i class="uil uil-calendar-alt"></i><span>31 Jan
                                                        2022</span>
                                                </li>
                                            </ul>
                                            <!-- /.post-meta -->
                                        </div>
                                        <!-- /.post-footer -->
                                    </article>
                                    <!-- /article -->
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="post-item">
                                <article>
                                    <figure class="overlay overlay-1 hover-scale rounded mb-5">
                                        <a href="https://blockonomi.com/gofeast-a-necessity-in-modern-times/" target="_blank">
                                            <img src="{{asset('assets/new/images/linkedin/linkedinimage2.jpeg')}}" alt="">
                                        </a>
                                        <figcaption><h5>Read More</h5></figcaption>
                                    </figure>
                                    <h2 class="post-title">GoFeast: A Necessity in Modern Times</h2>
                                        {{--<div class="post-header">
                                            <div class="post-category ">
                                                <figure class="rounded mb-2 w-20">
                                                    <a href="https://finance.yahoo.com/news/gofeast-token-lists-hydra-dex-133800677.html?guccounter=1"
                                                        target="_blank">
                                                        <img src="{{asset('assets/img/photos/gofeast_images/yahoo-logo.png')}}"
                                                            alt="" loading="lazy">
                                                    </a>
                                                </figure>
                                            </div>
                                            <!-- /.post-category -->
                                            <h2 class="post-title h3 mt-1 mb-3">
                                                <a class="link-dark"
                                                    href="https://finance.yahoo.com/news/gofeast-token-lists-hydra-dex-133800677.html?guccounter=1"
                                                    target="_blank">
                                                    GOMT Token Lists on Hydra DEX After a Sold Out ICO
                                                </a>
                                            </h2>
                                        </div>--}}
                                        <!-- /.post-header -->
                                        <div class="post-footer">
                                            <ul class="post-meta">
                                                <li class="post-date text-primary"><i class="uil uil-calendar-alt"></i><span>31 Jan
                                                        2022</span>
                                                </li>
                                            </ul>
                                            <!-- /.post-meta -->
                                        </div>
                                        <!-- /.post-footer -->
                                </article>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="post-item">
                                <article>
                                    <figure class="overlay overlay-1 hover-scale rounded mb-5">
                                        <a href="https://www.startuptofollow.com/article/gofeast-speciality-meat-from-the-store-to-your-door" target="_blank">
                                            <img src="{{asset('assets/new/images/linkedin/linkedinimage3.jpeg')}}" alt="">
                                        </a>
                                    </figure>
                                    <h2 class="post-title">GoFeast, speciality meat from the store to your door</h2>
                                    <div class="post-footer">
                                        <ul class="post-meta">
                                            <li class="post-date text-primary"><i class="uil uil-calendar-alt"></i><span>31 Jan
                                                    2022</span>
                                            </li>
                                        </ul>
                                        <!-- /.post-meta -->
                                    </div>
                                </article>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="post-item">
                                <article>
                                    <figure class="overlay overlay-1 hover-scale rounded mb-5">
                                        <a href="https://www.cryptodaily.co.uk/2021/09/GoFeast-The-revolutionary-platform-that-will-change-the-meat-industry" target="_blank">
                                            <img src="{{asset('assets/new/images/linkedin/linkedinimage4.jpeg')}}" alt="">
                                        </a>
                                    </figure>
                                    <h2 class="post-title">Revolutionary Platform That Will Change The Meat Industry</h2>
                                        <div class="post-footer">
                                            <ul class="post-meta">
                                                <li class="post-date text-primary"><i class="uil uil-calendar-alt"></i><span>31 Jan
                                                        2022</span>
                                                </li>
                                            </ul>
                                            <!-- /.post-meta -->
                                        </div>
                                </article>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="post-item">
                                <article>
                                    <figure class="overlay overlay-1 hover-scale rounded mb-5">
                                        <a href="https://btcmanager.com/cryptocurrencies-are-making-breakthroughs-into-the-food-industry/" target="_blank">
                                            <img src="{{asset('assets/new/images/linkedin/linkedinimage5.jpeg')}}" alt="">
                                        </a>
                                    </figure>
                                    <h2 class="post-title">Crypto Breakthroughs in Food Industry</h2>
                                        <div class="post-footer">
                                            <ul class="post-meta">
                                                <li class="post-date text-primary"><i class="uil uil-calendar-alt"></i><span>31 Jan
                                                        2022</span>
                                                </li>
                                            </ul>
                                            <!-- /.post-meta -->
                                        </div>
                                </article>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="post-item">
                                <article>
                                    <figure class="overlay overlay-1 hover-scale rounded mb-5">
                                        <a href="https://www.businessheraldonline.com/article/552257996-gofeast-token-launches-affiliate-program-and-ico-tier-2" target="_blank">
                                            <img src="{{asset('assets/new/images/linkedin/linkedinimage6.jpeg')}}" alt="">
                                        </a>
                                    </figure>
                                    <h2 class="post-title">GOMT Token Launches Affiliate Program</h2>
                                        <div class="post-footer">
                                            <ul class="post-meta">
                                                <li class="post-date text-primary"><i class="uil uil-calendar-alt"></i><span>31 Jan
                                                        2022</span>
                                                </li>
                                            </ul>
                                            <!-- /.post-meta -->
                                        </div>
                                </article>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="post-item">
                                <article>
                                    <figure class="overlay overlay-1 hover-scale rounded mb-5">
                                        <a href="https://investornytt.no/gofeast-ett-ledande-logistikforetag-for-mattransport-ock-kvalitetssakring/" target="_blank">
                                            <img src="{{asset('assets/new/images/linkedin/linkedinimage7.jpeg')}}" alt="">
                                        </a>
                                    </figure>
                                    <h2 class="post-title">Fremtidens supply chain modeller</h2>
                                        <div class="post-footer">
                                            <ul class="post-meta">
                                                <li class="post-date text-primary"><i class="uil uil-calendar-alt"></i><span>31 Jan
                                                        2022</span>
                                                </li>
                                            </ul>
                                            <!-- /.post-meta -->
                                        </div>
                                </article>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="post-item">
                                <article>
                                    <figure class="overlay overlay-1 hover-scale rounded mb-5">
                                        <a href="https://www.newsbtc.com/press-releases/gofeast-launches-affiliate-program-and-ico-tier-2/" target="_blank">
                                            <img src="{{asset('assets/new/images/linkedin/linkedinimage8.jpeg')}}" alt="">
                                        </a>
                                    </figure>
                                    <h2 class="post-title">GoFeast Launches Affiliate Program</h2>
                                        <div class="post-footer">
                                            <ul class="post-meta">
                                                <li class="post-date text-primary"><i class="uil uil-calendar-alt"></i><span>31 Jan
                                                        2022</span>
                                                </li>
                                            </ul>
                                            <!-- /.post-meta -->
                                        </div>
                                </article>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="post-item">
                                <article>
                                    <figure class="overlay overlay-1 hover-scale rounded mb-5">
                                        <a href="https://seekingalpha.com/pr/18650942-gofeast-token-lists-on-hydra-dex-after-sold-out-ico" target="_blank">
                                            <img src="{{asset('assets/new/images/linkedin/linkedinimage9.jpeg')}}" alt="">
                                        </a>
                                    </figure>
                                    <h2 class="post-title">Token Lists on Hydra DEX</h2>
                                        <div class="post-footer">
                                            <ul class="post-meta">
                                                <li class="post-date text-primary"><i class="uil uil-calendar-alt"></i><span>31 Jan
                                                        2022</span>
                                                </li>
                                            </ul>
                                            <!-- /.post-meta -->
                                        </div>
                                </article>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="post-item">
                                <article>
                                    <figure class="overlay overlay-1 hover-scale rounded mb-5">
                                        <a href="https://www.finanzen.net/nachricht/aktien/gofeast-token-lists-on-hydra-dex-after-a-sold-out-ico-10981062" target="_blank">
                                            <img src="{{asset('assets/new/images/linkedin/linkedinimage10.jpeg')}}" alt="">
                                        </a>
                                    </figure>
                                    <h2 class="post-title">Hydra DEX ICO Listing</h2>
                                        <div class="post-footer">
                                            <ul class="post-meta">
                                                <li class="post-date text-primary"><i class="uil uil-calendar-alt"></i><span>31 Jan
                                                        2022</span>
                                                </li>
                                            </ul>
                                            <!-- /.post-meta -->
                                        </div>
                                </article>
                            </div>
                        </div>

                    </div>

                    <!-- Navigation -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>

                    <!-- Pagination dots -->
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Buy GOMT Token End -->

{{--
<!-- About Us Section Start -->
<div class="about-us">
    <div class="container">
        <div class="row section-row align-items-center">
            <div class="col-lg-12">
                <!-- Section Title Start -->
                <div class="section-title section-title-center">
                    <h3 class="wow fadeInUp">About Us</h3>
                    <h2 class="text-effect" data-cursor="-opaque">Our team of data scientists, engineers, and designers work at the intersection technology and strategy turning complex challenges into simple, AI powered solutions.</h2>
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
    </div>
</div>
<!-- About Us Section End -->

<!-- Our Services Section Start -->
<div class="our-services">
    <div class="container">
        <div class="row section-row">
            <div class="col-lg-12">
                <!-- Section Title Start -->
                <div class="section-title section-title-center">
                    <h3 class="wow fadeInUp">Our Services</h3>
                    <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">AI-driven design services for future <span>innovations</span></h2>
                </div>
                <!-- Section Title End -->
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6">
                <!-- Service Item Start -->
                <div class="service-item wow fadeInUp">
                    <div class="service-item-content">
                        <h3><a href="service-single.html">AI Strategy & Consulting</a></h3>
                        <p>We assess your business, identify high impact AI opportunities, and guide you with a clear roadmap for implementation.</p>
                    </div>
                    <div class="service-item-image">
                        <figure>
                            <img src="images/service-item-1.png" alt="">
                        </figure>
                    </div>
                </div>
                <!-- Service Item End -->
            </div>

            <div class="col-lg-4 col-md-6">
                <!-- Service Item Start -->
                <div class="service-item wow fadeInUp" data-wow-delay="0.2s">
                    <div class="service-item-content">
                        <h3><a href="service-single.html">AI Integration & Deployment</a></h3>
                        <p>We assess your business, identify high impact AI opportunities, and guide you with a clear roadmap for implementation.</p>
                    </div>
                    <div class="service-item-image">
                        <figure>
                            <img src="images/service-item-2.png" alt="">
                        </figure>
                    </div>
                </div>
                <!-- Service Item End -->
            </div>
            
            <div class="col-lg-4 col-md-6">
                <!-- Service Item Start -->
                <div class="service-item wow fadeInUp" data-wow-delay="0.4s">
                    <div class="service-item-content">
                        <h3><a href="service-single.html">Custom AI Solutions</a></h3>
                        <p>We assess your business, identify high impact AI opportunities, and guide you with a clear roadmap for implementation.</p>
                    </div>
                    <div class="service-item-image">
                        <figure>
                            <img src="images/service-item-3.png" alt="">
                        </figure>
                    </div>
                </div>
                <!-- Service Item End -->
            </div>

            <div class="col-lg-12">
                <!-- Service List Start -->
                <div class="service-list wow fadeInUp" data-wow-delay="0.6s">
                    <ul>
                        <li>AI UI/UX Design</li>
                        <li>Chatbot Design</li>
                        <li>Design Automation</li>
                        <li>Predictive UX</li>
                        <li>Personalized Experiences</li>
                        <li>Generative Branding</li>
                        <li>Predictive UX</li>
                    </ul>
                </div>
                <!-- Service List End -->
            </div>
        </div>
    </div>
</div>
<!-- Our Services Section End -->

<!-- How It Work Section Start -->
<div class="how-it-work">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <!-- How Work Content Start -->
                <div class="how-work-content">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">how it work</h3>
                        <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">Our process for smarter <span>AI solutions</span></h2>
                    </div>
                    <!-- Section Title End -->

                    <!-- How Work Steps Start -->
                    <div class="how-work-steps">
                        <!-- How Work Item Start -->
                        <div class="how-work-item wow fadeInUp" data-wow-delay="0.4s">
                            <div class="how-work-header">
                                <div class="icon-box">
                                    <img src="images/icon-how-work-step-1.svg" alt="">
                                </div>
                                <div class="how-work-step-no">
                                    <p>step 01</p>
                                </div>
                            </div>
                            <div class="how-work-item-content">
                                <h3>Discovery & Strategy</h3>
                                <p>We dive deep into your goals and challenges to uncover high-impact AI opportunities and craft a clear.</p>
                            </div>
                        </div>
                        <!-- How Work Item End -->

                        <!-- How Work Item Start -->
                        <div class="how-work-item wow fadeInUp" data-wow-delay="0.6s">
                            <div class="how-work-header">
                                <div class="icon-box">
                                    <img src="images/icon-how-work-step-2.svg" alt="">
                                </div>
                                <div class="how-work-step-no">
                                    <p>step 02</p>
                                </div>
                            </div>
                            <div class="how-work-item-content">
                                <h3>Data & Infrastructure Assessment</h3>
                                <p>We dive deep into your goals and challenges to uncover high-impact AI opportunities and craft a clear.</p>
                            </div>
                        </div>
                        <!-- How Work Item End -->

                        <!-- How Work Item Start -->
                        <div class="how-work-item wow fadeInUp" data-wow-delay="0.8s">
                            <div class="how-work-header">
                                <div class="icon-box">
                                    <img src="images/icon-how-work-step-3.svg" alt="">
                                </div>
                                <div class="how-work-step-no">
                                    <p>step 03</p>
                                </div>
                            </div>
                            <div class="how-work-item-content">
                                <h3>Custom AI Development</h3>
                                <p>We dive deep into your goals and challenges to uncover high-impact AI opportunities and craft a clear.</p>
                            </div>
                        </div>
                        <!-- How Work Item End -->

                        <!-- How Work Item Start -->
                        <div class="how-work-item wow fadeInUp" data-wow-delay="1s">
                            <div class="how-work-header">
                                <div class="icon-box">
                                    <img src="images/icon-how-work-step-4.svg" alt="">
                                </div>
                                <div class="how-work-step-no">
                                    <p>step 04</p>
                                </div>
                            </div>
                            <div class="how-work-item-content">
                                <h3>Optimization & Support</h3>
                                <p>We dive deep into your goals and challenges to uncover high-impact AI opportunities and craft a clear.</p>
                            </div>
                        </div>
                        <!-- How Work Item End -->
                    </div>
                    <!-- How Work Steps End -->
                </div>
                <!-- How Work Content End -->
            </div>

            <div class="col-lg-6">
                <!-- How Work Video Content Start -->
                <div class="how-work-video-content">
                    <!-- How Work Video Start -->
                    <div class="how-work-video">
                        <!-- Selfhosted Video Start -->
                        <!-- <video autoplay muted loop id="myvideo"><source src="images/nextmind-how-work-video.mp4" type="video/mp4"></video> -->
                        <video autoplay muted loop id="hwvideo"><source src="https://demo.awaikenthemes.com/assets/videos/nextmind-how-work-video.mp4" type="video/mp4"></video>
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
        </div>
    </div>
</div>
<!-- How It Work Section End -->

<!-- Our Facts Section Start -->
<div class="our-facts">
    <div class="container">
        <div class="row section-row">
            <div class="col-lg-12">
                <!-- Section Title Start -->
                <div class="section-title section-title-center">
                    <h3 class="wow fadeInUp">Our facts</h3>
                    <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">Why leading brands trust us to deliver smart <span>AI solutions</span></h2>
                </div>
                <!-- Section Title End -->
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6">
                <!--  Facts Item Start -->
                <div class="facts-item wow fadeInUp">
                    <div class="facts-item-title">
                        <h3>Proven Technical Expertise</h3>
                    </div>
                    <div class="facts-item-counter">
                        <h2><span class="counter">15</span>+</h2>
                        <p>Years of AI-Driven Design</p>
                    </div>
                    <div class="facts-item-content">
                        <p>Our team brings deep experience in machine learning, data engineering, and full-stack development.</p>
                    </div>
                </div>
                <!-- Facts Item End -->
            </div>

            <div class="col-lg-4 col-md-6">
                <!--  Facts Item Start -->
                <div class="facts-item wow fadeInUp" data-wow-delay="0.2s">
                    <div class="facts-item-title">
                        <h3>Highly customizable solutions</h3>
                    </div>
                    <div class="facts-item-counter">
                        <h2><span class="counter">200</span>+</h2>
                        <p>Projects Successfully Delivered</p>
                    </div>
                    <div class="facts-item-content">
                        <p>We don't believe in one size fits all. Every solution is tailored to your business needs and workflows.</p>
                    </div>
                </div>
                <!-- Facts Item End -->
            </div>

            <div class="col-lg-4 col-md-6">
                <!--  Facts Item Start -->
                <div class="facts-item wow fadeInUp" data-wow-delay="0.4s">
                    <div class="facts-item-title">
                        <h3>Focus on real results</h3>
                    </div>
                    <div class="facts-item-counter">
                        <h2><span class="counter">95</span>%</h2>
                        <p>Client Satisfaction Rate</p>
                    </div>
                    <div class="facts-item-content">
                        <p>We build AI that's safe, transparent, and responsible designed with security & compliance from day one.</p>
                    </div>
                </div>
                <!-- Facts Item End -->
            </div>

            <div class="col-lg-12">
                <!-- Section Footer Text Start -->
                <div class="section-footer-text wow fadeInUp" data-wow-delay="0.6s">
                    <p><span>Free</span> Let's make something great work together. <a href="contact.html">Get Free Quote</a></p>
                </div>
                <!-- Section Footer Text End -->
            </div>
        </div>
    </div>
</div>
<!-- Our Facts Section End -->

<!-- Real Impacts Section Start -->
<div class="real-impacts">
    <div class="container">
        <div class="row section-row">
            <div class="col-lg-12">
                <!-- Section Title Start -->
                <div class="section-title section-title-center">
                    <h3 class="wow fadeInUp">Real Impact</h3>
                    <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">Delivering measurable results that drive <span>growth</span></h2>
                </div>
                <!-- Section Title End -->
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6">
                <!-- Real Impact Item Start -->
                <div class="real-impact-item wow fadeInUp">
                    <!-- Real Impact Image Start -->
                    <div class="real-impact-image">
                        <h3>Increase in User Engagement Using Custom GPT Chatbots.</h3>

                        <!-- Impact Chatbot List Start -->
                        <div class="impact-chatbot-list">
                            <!-- Chatbot Item Start -->
                            <div class="chatbot-item">
                                <img src="images/impact-chatbot-1.svg" alt="">
                            </div>
                            <!-- Chatbot Item End -->

                            <!-- Chatbot Item Start -->
                            <div class="chatbot-item">
                                <img src="images/impact-chatbot-2.svg" alt="">
                            </div>
                            <!-- Chatbot Item End -->

                            <!-- Chatbot Item Start -->
                            <div class="chatbot-item">
                                <img src="images/impact-chatbot-3.svg" alt="">
                            </div>
                            <!-- Chatbot Item End -->

                            <!-- Chatbot Item Start -->
                            <div class="chatbot-item">
                                <img src="images/impact-chatbot-4.svg" alt="">
                            </div>
                            <!-- Chatbot Item End -->

                            <!-- Chatbot Item Start -->
                            <div class="chatbot-item">
                                <img src="images/impact-chatbot-5.svg" alt="">
                            </div>
                            <!-- Chatbot Item End -->
                        </div>
                        <!-- Impact Chatbot List End -->
                    </div>
                    <!-- Real Impact Image End -->

                    <!-- Real Impact Content Start -->
                    <div class="real-impact-content">
                        <p>We believe results are more than just numbers they're proof of purpose, innovation, & value delivered. Every project we take on is built with performance in mind.</p>
                    </div>
                    <!-- Real Impact Content End -->
                </div>
                <!-- Real Impact Item End -->
            </div>

            <div class="col-lg-4 col-md-6">
                <!-- Real Impact Item Start -->
                <div class="real-impact-item wow fadeInUp" data-wow-delay="0.2s">
                    <div class="real-impact-image">
                        <figure>
                            <img src="images/real-impact-image-1.png" alt="">
                        </figure>
                    </div>

                    <div class="real-impact-content highlighted-content">
                        <!-- Customer Review Images Start -->
                        <div class="customer-review-images">
                            <!-- Customer Image Start -->
                            <div class="customer-image reveal">
                                <figure class="image-anime">
                                    <img src="images/author-1.jpg" alt="">
                                </figure>
                            </div>
                            <!-- Customer Image End -->

                            <!-- Customer Image Start -->
                            <div class="customer-image reveal">
                                <figure class="image-anime">
                                    <img src="images/author-2.jpg" alt="">
                                </figure>
                            </div>
                            <!-- Customer Image End -->

                            <!-- Customer Image Start -->
                            <div class="customer-image reveal">
                                <figure class="image-anime">
                                    <img src="images/author-3.jpg" alt="">
                                </figure>
                            </div>
                            <!-- Customer Image End -->

                            <!-- Customer Image Start -->
                            <div class="customer-image reveal">
                                <figure class="image-anime">
                                    <img src="images/author-4.jpg" alt="">
                                </figure>
                            </div>
                            <!-- Customer Image End -->
                        </div>
                        <!-- Customer Review Images End -->

                        <p>Crafting intate interface by intelligence for</p>
                    </div>
                </div>
                <!-- Real Impact Item End -->
            </div>

            <div class="col-lg-4 col-md-6">
                <!-- Real Impact Item Start -->
                <div class="real-impact-item wow fadeInUp" data-wow-delay="0.4s">
                    <div class="real-impact-image">
                        <figure>
                            <img src="images/real-impact-image-2.png" alt="">
                        </figure>
                    </div>

                    <div class="real-impact-content">
                        <p>Crafting intuitive, user-first interfaces by intelligence for smarter, faster, and more personalized digital artificial intelligence experiences.</p>
                    </div>
                </div>
                <!-- Real Impact Item End -->
            </div>
        </div>
    </div>
</div>
<!-- Real Impacts Section End -->

<!-- Our Faqs Section Start -->
<div class="our-faqs">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="faqs-content">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">faq's</h3>
                        <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">Your AI questions, expertly <span>answered here</span></h2>
                    </div>
                    <!-- Section Title End -->

                    <!-- Faq's Button Start  -->
                    <div class="faqs-button wow fadeInUp" data-wow-delay="0.4s">
                        <a href="faqs.html" class="btn-default">View all faqs</a>
                    </div>
                    <!-- Faq's Button End  -->
                </div>
            </div>
            <div class="col-lg-6">
                <!-- FAQ Accordion Start -->
                <div class="faq-accordion" id="accordion">
                    <!-- FAQ Item Start -->
                    <div class="accordion-item wow fadeInUp">
                        <h2 class="accordion-header" id="heading1">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                1. What services does your AI agency offer?
                            </button>
                        </h2>
                        <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="heading1" data-bs-parent="#accordion">
                            <div class="accordion-body">
                                <p>Project timelines vary depending on complexity but typically range from 4 to 12 weeks. We provide a clear roadmap during the discovery phase.</p>
                            </div>
                        </div>
                    </div>
                    <!-- FAQ Item End -->

                    <!-- FAQ Item Start -->
                    <div class="accordion-item wow fadeInUp" data-wow-delay="0.2s">
                        <h2 class="accordion-header" id="heading2">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                2. Do I need a large amount of data to use AI?
                            </button>
                        </h2>
                        <div id="collapse2" class="accordion-collapse collapse show" aria-labelledby="heading2" data-bs-parent="#accordion">
                            <div class="accordion-body">
                                <p>Project timelines vary depending on complexity but typically range from 4 to 12 weeks. We provide a clear roadmap during the discovery phase.</p>
                            </div>
                        </div>
                    </div>
                    <!-- FAQ Item End -->

                    <!-- FAQ Item Start -->
                    <div class="accordion-item wow fadeInUp" data-wow-delay="0.4s">
                        <h2 class="accordion-header" id="heading3">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                3. How long does it take to develop an AI solution?
                            </button>
                        </h2>
                        <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3" data-bs-parent="#accordion">
                            <div class="accordion-body">
                                <p>Project timelines vary depending on complexity but typically range from 4 to 12 weeks. We provide a clear roadmap during the discovery phase.</p>
                            </div>
                        </div>
                    </div>
                    <!-- FAQ Item End -->

                    <!-- FAQ Item Start -->
                    <div class="accordion-item wow fadeInUp" data-wow-delay="0.6s">
                        <h2 class="accordion-header" id="heading4">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                4. Is my data secure with you?
                            </button>
                        </h2>
                        <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4" data-bs-parent="#accordion">
                            <div class="accordion-body">
                                <p>Project timelines vary depending on complexity but typically range from 4 to 12 weeks. We provide a clear roadmap during the discovery phase.</p>
                            </div>
                        </div>
                    </div>
                    <!-- FAQ Item End -->

                    <!-- FAQ Item Start -->
                    <div class="accordion-item wow fadeInUp" data-wow-delay="0.8s">
                        <h2 class="accordion-header" id="heading5">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                5. Can you integrate AI into our existing systems?
                            </button>
                        </h2>
                        <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5" data-bs-parent="#accordion">
                            <div class="accordion-body">
                                <p>Project timelines vary depending on complexity but typically range from 4 to 12 weeks. We provide a clear roadmap during the discovery phase.</p>
                            </div>
                        </div>
                    </div>
                    <!-- FAQ Item End -->
                </div>
                <!-- FAQ Accordion End -->
            </div>
        </div>
    </div>
</div>
<!-- Our Faqs Section End -->

<!-- Our Blog Section Start -->
<div class="our-blog">
    <div class="container">
        <div class="row section-row align-items-center">
            <div class="col-lg-12">
                <!-- Section Title Start -->
                <div class="section-title section-title-center">
                    <h3 class="wow fadeInUp">Latest blog</h3>
                    <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">Your source for cybersecurity <span>news and trends</span></h2>
                </div>
                <!-- Section Title End -->
            </div>
        </div>
        
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <!-- Post Item Start -->
                <div class="post-item wow fadeInUp">
                    <!-- Post Meta Start -->
                    <div class="post-meta">
                        <ul>
                            <li><a href="#"><i class="fa-solid fa-calendar-days"></i> May 28, 2025</a></li>
                        </ul>
                    </div>
                    <!-- Post Meta End -->

                    <!-- Post Item Content Start -->
                    <div class="post-item-content">
                        <h2><a href="blog-single.html">Ethical AI Balancing Innovation and Responsibility</a></h2>
                        <p>As AI continue to evolve, ensuring use more important than ever this article explores how businesses can innovate </p>
                    </div>
                    <!-- Post Item Content End -->

                    <!-- Post Item Readmore Button Start-->
                    <div class="post-item-btn">
                        <a href="blog-single.html" class="readmore-btn">read more</a>
                    </div>
                    <!-- Post Item Readmore Button End-->
                </div>
                <!-- Post Item End -->
            </div>

            <div class="col-lg-4 col-md-6">
                <!-- Post Item Start -->
                <div class="post-item wow fadeInUp" data-wow-delay="0.2s">
                    <!-- Post Meta Start -->
                    <div class="post-meta">
                        <ul>
                            <li><a href="#"><i class="fa-solid fa-calendar-days"></i> April 22, 2025</a></li>
                        </ul>
                    </div>
                    <!-- Post Meta End -->

                    <!-- Post Item Content Start -->
                    <div class="post-item-content">
                        <h2><a href="blog-single.html">Machine Learning Demytified A Beginner's Guide</a></h2>
                        <p>As AI continue to evolve, ensuring use more important than ever this article explores how businesses can innovate </p>
                    </div>
                    <!-- Post Item Content End -->

                    <!-- Post Item Readmore Button Start-->
                    <div class="post-item-btn">
                        <a href="blog-single.html" class="readmore-btn">read more</a>
                    </div>
                    <!-- Post Item Readmore Button End-->
                </div>
                <!-- Post Item End -->
            </div>

            <div class="col-lg-4 col-md-6">
                <!-- Post Item Start -->
                <div class="post-item wow fadeInUp" data-wow-delay="0.4s">
                    <!-- Post Meta Start -->
                    <div class="post-meta">
                        <ul>
                            <li><a href="#"><i class="fa-solid fa-calendar-days"></i> april 17, 2025</a></li>
                        </ul>
                    </div>
                    <!-- Post Meta End -->

                    <!-- Post Item Content Start -->
                    <div class="post-item-content">
                        <h2><a href="blog-single.html">How AI is Transforming Modern Businesses</a></h2>
                        <p>As AI continue to evolve, ensuring use more important than ever this article explores how businesses can innovate </p>
                    </div>
                    <!-- Post Item Content End -->

                    <!-- Post Item Readmore Button Start-->
                    <div class="post-item-btn">
                        <a href="blog-single.html" class="readmore-btn">read more</a>
                    </div>
                    <!-- Post Item Readmore Button End-->
                </div>
                <!-- Post Item End -->
            </div>
        </div>
    </div>
</div>
<!-- Our Blog Section End -->
 --}}
@endsection

@section('scripts')
<script>
    var swiper = new Swiper(".blogSwiper", {
        slidesPerView: 3,
        spaceBetween: 30,
        loop: true,

        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },

        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },

        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },

        breakpoints: {
            0: {
                slidesPerView: 1
            },
            768: {
                slidesPerView: 2
            },
            992: {
                slidesPerView: 3
            }
        }
    });
</script>
@endsection