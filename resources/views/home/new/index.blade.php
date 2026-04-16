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
        .post-item figure{
            height: 100% !important;
        }
        .feastron-section-title ul li {
            margin-bottom: 15px;
        }
        .feastron-section-title ul {
            padding: 15px;
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
                        <h1 class="wow fadeInUp" data-cursor="-opaque">Revolutionizing Food Delivery </h1>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">Bringing convenience, transparency, and affordability to everyday food ordering—powered by AI <br> and blockchain, with real social impact.</p>
                    </div>
                    <!-- Section Title End -->
                    <div class="d-flex align-items-center gap-3 justify-content-center flex-wrap">
                        <!-- Hero Button Start -->
                        <div class="hero-btn wow fadeInUp" data-wow-delay="0.4s">
                            <a href="#" class="btn-default btn-highlighted">
                                Play Store
                            </a>
                            <!-- <a href="#" class="btn-default">Buy Now</a> -->
                        </div>
                        <!-- Hero Button End -->
                        
                        <!-- Hero Button Start -->
                        <div class="hero-btn wow fadeInUp" data-wow-delay="0.4s">
                            <a href="#" class="btn-default">
                                App Store
                            </a>
                            <!-- <a href="#" class="btn-default">Buy Now</a> -->
                        </div>
                        <!-- Hero Button End -->
                    </div>

                    <!-- Hero Company Slider Start -->
                    <div class="hero-company-slider">
                        <p>Already chosen by the leaders</p>

                        <div class="swiper">
                            <div class="swiper-wrapper">
                                <!-- Company Logo Start -->
                                <div class="swiper-slide">
                                    <div class="company-logo">
                                        <img src="{{asset('assets/new/images/restaurants/Chaaye_Khana.png')}}" alt="">
                                    </div>
                                </div>
                                <!-- Company Logo End -->

                                <!-- Company Logo Start -->
                                <div class="swiper-slide">
                                    <div class="company-logo">
                                        <img src="{{asset('assets/new/images/restaurants/Dominos.png')}}" alt="">
                                    </div>
                                </div>
                                <!-- Company Logo End -->

                                <!-- Company Logo Start -->
                                <div class="swiper-slide">
                                    <div class="company-logo">
                                        <img src="{{asset('assets/new/images/restaurants/Hardees.png')}}" alt="">
                                    </div>
                                </div>
                                <!-- Company Logo End -->
                                
                                <!-- Company Logo Start -->
                                <div class="swiper-slide">
                                    <div class="company-logo">
                                        <img src="{{asset('assets/new/images/restaurants/Kfc.png')}}" alt="">
                                    </div>
                                </div>
                                <!-- Company Logo End -->
                                
                                <!-- Company Logo Start -->
                                <div class="swiper-slide">
                                    <div class="company-logo">
                                        <img src="{{asset('assets/new/images/restaurants/Mcdonalds.png')}}" alt="">
                                    </div>
                                </div>
                                <!-- Company Logo End -->
                                
                                <!-- Company Logo Start -->
                                <div class="swiper-slide">
                                    <div class="company-logo">
                                        <img src="{{asset('assets/new/images/restaurants/Papa_Johns.png')}}" alt="">
                                    </div>
                                </div>
                                <!-- Company Logo End -->

                                <!-- Company Logo Start -->
                                <div class="swiper-slide">
                                    <div class="company-logo">
                                        <img src="{{asset('assets/new/images/restaurants/Rahat.png')}}" alt="">
                                    </div>
                                </div>
                                <!-- Company Logo End -->

                                <!-- Company Logo Start -->
                                <div class="swiper-slide">
                                    <div class="company-logo">
                                        <img src="{{asset('assets/new/images/restaurants/Shaan_Halal.png')}}" alt="">
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
 
<!-- Join Us Section Start -->
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
                        <small>Enjoy exclusive discounts and fast delivery from your favorite stores!</small>
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
                        <p>Enjoy exclusive discounts and fast delivery from your favorite  stores!</p>
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
<!-- Join Us Section End -->

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
                            <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">Let's see what people say about <span>GoFeast</span></h2>
                            <p class="wow fadeInUp" data-wow-delay="0.4s">Crafting intuitive, user-first interfaces by intelligence for smarter, faster, and more personalized digital artificial intelligence experiences.</p>
                        </div>
                        <!-- Section Title End -->
                        
                        <!-- Testimonials Body Start -->
                        <div class="testimonials-body">
                            <!-- Testimonials Counter Item Start -->
                            <div class="testimonials-counter-item">
                                <h2><span class="counter">25</span>000+</h2>
                                <p> happy customers</p>
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
                                                    <h3>Mubashir Mitra</h3>
                                                    <p>GoFeast Customer</p>
                                                </div>
                                            </div>
                                            <div class="testimonial-quotes-img">
                                                <img src="images/testimonials-quotes-img.svg" alt="">
                                            </div>
                                        </div>                                            
                                        <div class="testimonial-content">
                                            <p>“I would definitely recommend GoFeast to anyone who hasn't tried it yet,
                                                it has been very helpful and offers delivery. Very reasonable
                                                rates and timely delivery. Easily accessible app, excellent interface
                                                also keeps me updated on the status of my orders. Customer service is
                                                impeccable and always responsive to calls and queries. Great service 5
                                                stars all around.”</p>
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
                                                    <h3>Mollie</h3>
                                                    <p>GoFeast Customer</p>
                                                </div>
                                            </div>
                                            <div class="testimonial-quotes-img">
                                                <img src="images/testimonials-quotes-img.svg" alt="">
                                            </div>
                                        </div>                                            
                                        <div class="testimonial-content">
                                            <p>“The app is super easy to use and has the best rates and quality of items
                                                with quick delivery service as well as immediate responses to calls or
                                                queries, really happy with it after trying out the first time! I hope
                                                they keep doing a good job and expand more!! ”</p>
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
                                                    <h3>Hussain Tarik</h3>
                                                    <p>GoDriver</p>
                                                </div>
                                            </div>
                                            <div class="testimonial-quotes-img">
                                                <img src="images/testimonials-quotes-img.svg" alt="">
                                            </div>
                                        </div>                                            
                                        <div class="testimonial-content">
                                            <p>“Very reliable people to work with. Always pay on time and solve our
                                                problems with the best solution ”</p>
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
                                                    <h3>Maria Johar</h3>
                                                    <p>GoFeast Customer</p>
                                                </div>
                                            </div>
                                            <div class="testimonial-quotes-img">
                                                <img src="images/testimonials-quotes-img.svg" alt="">
                                            </div>
                                        </div>                                            
                                        <div class="testimonial-content">
                                            <p>“The delivery was pretty fast and the meat was fresh. The price was also
                                                very affordable for such high quality meat. Will definitely order
                                                again.”</p>
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
                                                    <h3>Sneha Chandane</h3>
                                                    <p>GoPartner</p>
                                                </div>
                                            </div>
                                            <div class="testimonial-quotes-img">
                                                <img src="images/testimonials-quotes-img.svg" alt="">
                                            </div>
                                        </div>                                            
                                        <div class="testimonial-content">
                                            <p>“Excellent app by an excellent company. very happy to have work with a
                                                Muslim owned company that understands halal meat and the middle eastern
                                                community. i was worried to sign up as my employees are not good with
                                                technology so GoFeast was kind enough to offer us alternative methods to
                                                remain updated with the orders etc ”</p>
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
                                                    <h3>Momina Khan</h3>
                                                    <p>GoFeast Customer</p>
                                                </div>
                                            </div>
                                            <div class="testimonial-quotes-img">
                                                <img src="images/testimonials-quotes-img.svg" alt="">
                                            </div>
                                        </div>                                            
                                        <div class="testimonial-content">
                                            <p>“I'm a busy woman with one little one to take care off!! Getting meat at
                                                your doorstep beautifully packed. The convince of having the meat cut of
                                                your choice makes me never want to have the hustle of going to market 😅
                                                Great idea for creating such convince for us!!! ”</p>
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
                                                    <h3>Ali Khan</h3>
                                                    <p>GoFeast Customer</p>
                                                </div>
                                            </div>
                                            <div class="testimonial-quotes-img">
                                                <img src="images/testimonials-quotes-img.svg" alt="">
                                            </div>
                                        </div>                                            
                                        <div class="testimonial-content">
                                            <p>“Reliable and this is what was needed and fast delivery cheap rates and
                                                most importantly fresh meat ”</p>
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
                                                    <h3>Ali Ibrar</h3>
                                                    <p>GoPartner</p>
                                                </div>
                                            </div>
                                            <div class="testimonial-quotes-img">
                                                <img src="images/testimonials-quotes-img.svg" alt="">
                                            </div>
                                        </div>                                            
                                        <div class="testimonial-content">
                                            <p>“App and the sign up process is very simple. once you are onboard, just
                                                keep your app online and you can see all nearby orders, good to see them
                                                expanding to new areas every day ”</p>
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

<!-- Fast & Reliable Delivery -->
<div class="our-facts">
    <div class="container">
        <div class="row section-row">
            <div class="col-lg-12">
                <!-- Section Title Start -->
                <div class="section-title section-title-center">
                    <h3 class="wow fadeInUp">Fast & Reliable Delivery</h3>
                    <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">We provide fast delivery from your favorite <br><span> stores & restaurants</span></h2>
                </div>
                <!-- Section Title End -->
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6">
                <!--  Facts Item Start -->
                <div class="facts-item wow fadeInUp">
                    <div class="facts-item-title">
                        <h3>fast Delivery</h3>
                    </div>
                    <div class="facts-item-counter">
                        <h2><span class="counter">24</span>/7</h2>
                        <p>Fast & Efficient Service</p>
                    </div>
                    <div class="facts-item-content">
                        <p>We ensure your orders are delivered fast, saving your time and providing unmatched convenience.</p>
                    </div>
                </div>
                <!-- Facts Item End -->
            </div>

            <div class="col-lg-4 col-md-6">
                <!--  Facts Item Start -->
                <div class="facts-item wow fadeInUp" data-wow-delay="0.2s">
                    <div class="facts-item-title">
                        <h3>Stores & Restaurants</h3>
                    </div>
                    <div class="facts-item-counter">
                        <h2><span class="counter">1000</span>+</h2>
                        <p>Partners</p>
                    </div>
                    <div class="facts-item-content">
                        <p>Shop from your favorite  stores with a wide range of products available at your fingertips.</p>
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
<!-- Fast & Reliable Delivery -->

<!-- Buy GoFeast Token Start -->
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
                        <img src="{{asset('assets/new/images/Token-Icons.png')}}" alt="">
                    </div>
                    
                    <p class="wow fadeInUp mt-2" data-wow-delay="0.4s">
                        GoFeast Token is backed by a real ecosystem with rewards, payments, and deflationary mechanics.
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
                                        <li>Pioneers in the  market domain</li>
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
                                        <li>Digitalising the $1.8 trillion global  market</li>
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
<!-- Buy GoFeast Token End -->
 
<!-- GoFeast AI Section Start -->
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
                            <p class="wow fadeInUp" data-wow-delay="0.4s">Feastron makes ordering food simpler, faster, and more personalized for you, so you can quickly find what you want, make better decisions, and enjoy a seamless experience from search to checkout.
                            </p>
                        </div>
                        <div class="feastron-section-title">
                            <ul>
                                <li>
                                    Smart food search based on your diet goals
                                </li>
                                <li>
                                    Track calories before you order
                                </li>
                                <li>
                                    Check detailed ingredients instantly
                                </li>
                                <li>
                                    Find recipes and let Feastron handle your groceries accordingly
                                </li>
                                <li>
                                    Can't make up your mind let Feastron help you with your order
                                </li>
                            </ul>
                        </div>
                        <!-- Section Title End -->
                    </div>
                    <!-- Testimonials Content End -->          
                </div>
            </div>
        </div>
    </div>
</div>
<!-- GoFeast AI Section End -->

 <!-- Customer Support Section Start -->
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
                            <div class="testimonials-counter-item">
                                <h2><span>24/7</span></h2>
                                <p>Support</p>
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
<!-- Customer Support Section End -->

<!-- GoFeast Insights Token Start -->
<div class="what-we-do">
    <div class="container">
        <div class="row section-row">
            <div class="col-lg-12">
                <!-- Section Title Start -->
                <div class="section-title section-title-center">
                    <h3 class="wow fadeInUp">GoFeast Insights</h3>
                    <p class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">Discover our latest activities, social updates, and the moments that keep GoFeast moving every day.</span></p>
                </div>
                <!-- Section Title End -->
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="swiper blogSwiper">
                    <div class="swiper-wrapper">\

                        <div class="swiper-slide">
                            <div class="post-item" style="background: none; border: none; ">
                                <article>
                                    <figure class="overlay overlay-1 hover-scale rounded">
                                        <a href="#">
                                            <img src="{{asset('assets/new/images/linkedin/linkedinimage.jpeg')}}" alt="">
                                        </a>
                                    </figure>
                                </article>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="post-item" style="background: none; border: none; ">
                                <article>
                                    <figure class="overlay overlay-1 hover-scale rounded">
                                        <a href="#">
                                            <img src="{{asset('assets/new/images/linkedin/linkedinimage1.jpeg')}}" alt="">
                                        </a>
                                    </figure>
                                </article>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="post-item" style="background: none; border: none; ">
                                <article>
                                    <figure class="overlay overlay-1 hover-scale rounded">
                                        <a href="#">
                                            <img src="{{asset('assets/new/images/linkedin/linkedinimage2.jpeg')}}" alt="">
                                        </a>
                                    </figure>
                                </article>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="post-item" style="background: none; border: none; ">
                                <article>
                                    <figure class="overlay overlay-1 hover-scale rounded">
                                        <a href="#">
                                            <img src="{{asset('assets/new/images/linkedin/linkedinimage3.jpeg')}}" alt="">
                                        </a>
                                    </figure>
                                </article>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="post-item" style="background: none; border: none; ">
                                <article>
                                    <figure class="overlay overlay-1 hover-scale rounded">
                                        <a href="#">
                                            <img src="{{asset('assets/new/images/linkedin/linkedinimage4.jpeg')}}" alt="">
                                        </a>
                                    </figure>
                                </article>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="post-item" style="background: none; border: none; ">
                                <article>
                                    <figure class="overlay overlay-1 hover-scale rounded">
                                        <a href="#">
                                            <img src="{{asset('assets/new/images/linkedin/linkedinimage5.jpeg')}}" alt="">
                                        </a>
                                    </figure>
                                </article>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="post-item" style="background: none; border: none; ">
                                <article>
                                    <figure class="overlay overlay-1 hover-scale rounded">
                                        <a href="#">
                                            <img src="{{asset('assets/new/images/linkedin/linkedinimage6.jpeg')}}" alt="">
                                        </a>
                                    </figure>
                                </article>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="post-item" style="background: none; border: none; ">
                                <article>
                                    <figure class="overlay overlay-1 hover-scale rounded">
                                        <a href="#">
                                            <img src="{{asset('assets/new/images/linkedin/linkedinimage7.jpeg')}}" alt="">
                                        </a>
                                    </figure>
                                </article>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="post-item" style="background: none; border: none; ">
                                <article>
                                    <figure class="overlay overlay-1 hover-scale rounded">
                                        <a href="#">
                                            <img src="{{asset('assets/new/images/linkedin/linkedinimage8.jpeg')}}" alt="">
                                        </a>
                                    </figure>
                                </article>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="post-item" style="background: none; border: none; ">
                                <article>
                                    <figure class="overlay overlay-1 hover-scale rounded">
                                        <a href="#">
                                            <img src="{{asset('assets/new/images/linkedin/linkedinimage9.jpeg')}}" alt="">
                                        </a>
                                    </figure>
                                </article>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="post-item" style="background: none; border: none; ">
                                <article>
                                    <figure class="overlay overlay-1 hover-scale rounded">
                                        <a href="#">
                                            <img src="{{asset('assets/new/images/linkedin/linkedinimage10.jpeg')}}" alt="">
                                        </a>
                                    </figure>
                                </article>
                            </div>
                        </div>

                    </div>

                    <!-- Navigation -->
                    <div class="swiper-button-next text-danger rounded-circle" style="padding: 30px 30px"></div>
                    <div class="swiper-button-prev text-danger rounded-circle" style="padding: 30px 30px"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- GoFeast Insights Token End -->
 
@endsection

@section('scripts')
<script>
    var swiper = new Swiper(".blogSwiper", {
        slidesPerView: 4,
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
                slidesPerView: 2
            },
            768: {
                slidesPerView: 3
            },
            992: {
                slidesPerView: 4
            }
        }
    });
</script>
@endsection