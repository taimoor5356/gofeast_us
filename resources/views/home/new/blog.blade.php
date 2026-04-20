@extends('layouts.new.app')
@section('styles')
    <style>
        .first-section{
            position: relative; 
            background: url('{{asset('assets/new/images/short-header.png')}}') no-repeat;
            background-position: top center;
            background-size: auto;
            padding: 150px 80px;
            z-index: 1;
        }
        .approach-item .icon-box img{
            max-width: 75px !important;
        }
        .our-solution-content {
            margin-left: 15px !important;
        }
        
        @media (max-width: 768px) {
            .first-section {
                position: relative;
                /* background: url('{{asset('assets/new/images/short-header.png')}}') no-repeat; */
                background-position: top center;
                background-size: cover;        /* 'cover' fills full width/height on small screens */
                background-size: auto;
                padding: 220px 0px 0px 0px;                    /* no padding on small screens */
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

@endsection
@section('content')

    <!-- Page Blog Section Start -->
    <div class="first-section">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title section-title-center">
                        <h3 class="wow fadeInUp">Blogs</h3>
                        <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">Stay informed, inspired, and ahead with our latest <span>updates</span></h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                    <!-- Post Item Start -->
                    <div class="post-item wow fadeInUp">
                        <!-- Post Meta Start -->
                        <!-- <div class="post-meta">
                            <ul>
                                <li><a href="#"><i class="fa-solid fa-calendar-days"></i> May 28, 2025</a></li>
                            </ul>
                        </div> -->
                        <!-- Post Meta End -->
                        <img src="{{asset('assets/new/images/linkedin/linkedinimage.jpeg')}}" alt="">
                    </div>
                    <!-- Post Item End -->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                    <!-- Post Item Start -->
                    <div class="post-item wow fadeInUp">
                        <!-- Post Meta Start -->
                        <!-- <div class="post-meta">
                            <ul>
                                <li><a href="#"><i class="fa-solid fa-calendar-days"></i> May 28, 2025</a></li>
                            </ul>
                        </div> -->
                        <!-- Post Meta End -->
                        <img src="{{asset('assets/new/images/linkedin/linkedinimage1.jpeg')}}" alt="">
                    </div>
                    <!-- Post Item End -->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                    <!-- Post Item Start -->
                    <div class="post-item wow fadeInUp">
                        <!-- Post Meta Start -->
                        <!-- <div class="post-meta">
                            <ul>
                                <li><a href="#"><i class="fa-solid fa-calendar-days"></i> May 28, 2025</a></li>
                            </ul>
                        </div> -->
                        <!-- Post Meta End -->
                        <img src="{{asset('assets/new/images/linkedin/linkedinimage2.jpeg')}}" alt="">
                    </div>
                    <!-- Post Item End -->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                    <!-- Post Item Start -->
                    <div class="post-item wow fadeInUp">
                        <!-- Post Meta Start -->
                        <!-- <div class="post-meta">
                            <ul>
                                <li><a href="#"><i class="fa-solid fa-calendar-days"></i> May 28, 2025</a></li>
                            </ul>
                        </div> -->
                        <!-- Post Meta End -->
                        <img src="{{asset('assets/new/images/linkedin/linkedinimage3.jpeg')}}" alt="">
                    </div>
                    <!-- Post Item End -->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                    <!-- Post Item Start -->
                    <div class="post-item wow fadeInUp">
                        <!-- Post Meta Start -->
                        <!-- <div class="post-meta">
                            <ul>
                                <li><a href="#"><i class="fa-solid fa-calendar-days"></i> May 28, 2025</a></li>
                            </ul>
                        </div> -->
                        <!-- Post Meta End -->
                        <img src="{{asset('assets/new/images/linkedin/linkedinimage4.jpeg')}}" alt="">
                    </div>
                    <!-- Post Item End -->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                    <!-- Post Item Start -->
                    <div class="post-item wow fadeInUp">
                        <!-- Post Meta Start -->
                        <!-- <div class="post-meta">
                            <ul>
                                <li><a href="#"><i class="fa-solid fa-calendar-days"></i> May 28, 2025</a></li>
                            </ul>
                        </div> -->
                        <!-- Post Meta End -->
                        <img src="{{asset('assets/new/images/linkedin/linkedinimage5.jpeg')}}" alt="">
                    </div>
                    <!-- Post Item End -->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                    <!-- Post Item Start -->
                    <div class="post-item wow fadeInUp">
                        <!-- Post Meta Start -->
                        <!-- <div class="post-meta">
                            <ul>
                                <li><a href="#"><i class="fa-solid fa-calendar-days"></i> May 28, 2025</a></li>
                            </ul>
                        </div> -->
                        <!-- Post Meta End -->
                        <img src="{{asset('assets/new/images/linkedin/linkedinimage6.jpeg')}}" alt="">
                    </div>
                    <!-- Post Item End -->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                    <!-- Post Item Start -->
                    <div class="post-item wow fadeInUp">
                        <!-- Post Meta Start -->
                        <!-- <div class="post-meta">
                            <ul>
                                <li><a href="#"><i class="fa-solid fa-calendar-days"></i> May 28, 2025</a></li>
                            </ul>
                        </div> -->
                        <!-- Post Meta End -->
                        <img src="{{asset('assets/new/images/linkedin/linkedinimage7.jpeg')}}" alt="">
                    </div>
                    <!-- Post Item End -->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                    <!-- Post Item Start -->
                    <div class="post-item wow fadeInUp">
                        <!-- Post Meta Start -->
                        <!-- <div class="post-meta">
                            <ul>
                                <li><a href="#"><i class="fa-solid fa-calendar-days"></i> May 28, 2025</a></li>
                            </ul>
                        </div> -->
                        <!-- Post Meta End -->
                        <img src="{{asset('assets/new/images/linkedin/linkedinimage8.jpeg')}}" alt="">
                    </div>
                    <!-- Post Item End -->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                    <!-- Post Item Start -->
                    <div class="post-item wow fadeInUp">
                        <!-- Post Meta Start -->
                        <!-- <div class="post-meta">
                            <ul>
                                <li><a href="#"><i class="fa-solid fa-calendar-days"></i> May 28, 2025</a></li>
                            </ul>
                        </div> -->
                        <!-- Post Meta End -->
                        <img src="{{asset('assets/new/images/linkedin/linkedinimage9.jpeg')}}" alt="">
                    </div>
                    <!-- Post Item End -->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                    <!-- Post Item Start -->
                    <div class="post-item wow fadeInUp">
                        <!-- Post Meta Start -->
                        <!-- <div class="post-meta">
                            <ul>
                                <li><a href="#"><i class="fa-solid fa-calendar-days"></i> May 28, 2025</a></li>
                            </ul>
                        </div> -->
                        <!-- Post Meta End -->
                        <img src="{{asset('assets/new/images/linkedin/linkedinimage10.jpeg')}}" alt="">
                    </div>
                    <!-- Post Item End -->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                    <!-- Post Item Start -->
                    <div class="post-item wow fadeInUp">
                        <!-- Post Meta Start -->
                        <!-- <div class="post-meta">
                            <ul>
                                <li><a href="#"><i class="fa-solid fa-calendar-days"></i> May 28, 2025</a></li>
                            </ul>
                        </div> -->
                        <!-- Post Meta End -->
                        <img src="{{asset('assets/new/images/linkedin/linkedinimage11.jpeg')}}" alt="">
                    </div>
                    <!-- Post Item End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Blog Section End -->

@endsection