@section('styles')

@endsection
<!-- Footer Start -->
<footer class="main-footer">
    <div class="container">
        <div class="row section-row">
            <div class="col-lg-12">
                <!-- Section Title Start -->
                <div class="section-title">
                    <h2 class="wow fadeInUp" data-cursor="-opaque">Feed your hunger. <span>We deliver!</span></h2>
                    <p class="wow fadeInUp" data-wow-delay="0.2s">Delicious food delivered quickly so your cravings are satisfied without waiting.</p>
                </div>
                <!-- Section Title End -->
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3">
                <div class="footer-contact-box">
                    <!-- Footer Links Start -->
                    <div class="footer-links">
                        <h3>Pages</h3>
                        <!-- <p><a href="#">One Pager</a></p> -->
                        <!-- <p><a href="#">GoFeast Token</a></p> -->
                        <p><a href="{{ route('new.home') }}">Home</a></p>
                        <p><a href="{{ route('new.godriver') }}">Become a GoDriver</a></p>
                        <p><a href="{{ route('new.gopartner') }}">Become a GoPartner</a></p>
                        <!-- <p><a href="#">GoFeast Contract Explorer</a></p> -->
                    </div>
                    <!-- Footer Links End -->
                </div>  
            </div>
            <div class="col-lg-3">
                <div class="footer-contact-box">
                    <!-- Footer Links Start -->
                    <div class="footer-links">
                        <h3>Get in touch</h3>
                        <p><a href="{{ route('new.blog') }}">Blogs</a></p>
                        <p><a href="{{ route('new.aboutus') }}">About Us</a></p>
                        <p><a href="{{ route('new.contactus') }}">Contact</a></p>
                        <p><a href="mailto:cs@gofeast.io">cs@gofeast.io</a></p>
                    </div>
                    <!-- Footer Links End -->
                </div>  
            </div>
            <div class="col-lg-3">
                <div class="footer-contact-box">
                    <!-- Footer Links Start -->
                    <div class="footer-links">
                        <h3>Legal</h3>
                        <!-- <p><a href="{{ route('new.refundpolicy') }}">Refund policy</a></p>
                        <p><a href="{{ route('new.privacypolicy') }}">Privacy policy</a></p> -->
                        <p><a href="{{ route('new.termsandconditions') }}">Terms and conditions</a></p>
                    </div>
                    <!-- Footer Links End -->
                </div>  
            </div>
            <div class="col-lg-3">
                <div class="footer-contact-box">
                    <!-- Footer Links Start -->
                    <div class="footer-links">
                        <h6>Download App</h6>   
                        <p>
                            <ul class="list-unstyled text-reset mb-0">
                                <li class="d-flex">
                                    <a href="https://apps.apple.com/us/app/gofeast/id1441921154" target="_blank">
                                        <img class="app-logo" src="https://gofeast.us/public/assets/img/photos/appstore-white.png">
                                    </a>
                                    <a href="https://play.google.com/store/apps/details?id=com.gomeat.app" target="_blank">
                                        <img class="app-logo" src="https://gofeast.us/public/assets/img/photos/playstore-white.png">
                                    </a>
                                </li>
                            </ul>
                        </p>
                    </div>
                    <!-- Footer Links End -->
                </div>  
            </div>

            <div class="col-lg-12">
                <!-- Footer Copyright Text Start -->
                <div class="footer-copyright-text ">
                    <!-- <p class="mb-2">US 22 West - Suite 200, Bridgetwater, NJ, 08502 USA</p> -->
                    <small class="text-white">© {{ date('Y') }} GoFeast. All rights reserved.</small>
                </div>
                <!-- Footer Copyright Text End -->     
            </div>
        </div>
    </div>
</footer>
<!-- Footer End -->