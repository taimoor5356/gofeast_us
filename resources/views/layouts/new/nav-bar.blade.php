<!-- Header Start -->
<header class="main-header">
    <div class="header-sticky">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <!-- Logo Start -->
                <a class="navbar-brand" href="./">
                    <img src="{{asset('assets/img/logo.png')}}" width="120px" height="50px" alt="Logo">
                </a>
                <!-- Logo End -->

                <!-- Main Menu Start -->
                <div class="collapse navbar-collapse main-menu">
                    <div class="nav-menu-wrapper">
                        <?php
                            // Get the current file name
                            $current_page = basename($_SERVER['REQUEST_URI']);
                        ?>
                        <ul class="navbar-nav mr-auto" id="menu">
                            <li class="nav-item"><a class="nav-link <?php echo ($current_page == '/' || $current_page == 'pak' || $current_page == '') ? 'active' : ''; ?>" href="{{route('home')}}">Home</a>
                            <li class="nav-item submenu"><a class="nav-link" href="#">Partner with us</a>
                                <ul>                                        
                                    <li class="nav-item"><a class="nav-link" href="./go-partner">Go Partner</a></li>
                                    <li class="nav-item"><a class="nav-link" href="./go-driver">Go Driver</a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="./gomt">GOMT</a></li>
                            <li class="nav-item"><a class="nav-link" href="./blogs">Blogs</a></li>
                            <li class="nav-item submenu"><a class="nav-link" href="#">Help</a>
                                <ul>                                        
                                    <li class="nav-item"><a class="nav-link" href="./faqs">FAQs</a></li>
                                    <li class="nav-item"><a class="nav-link" href="./contact-us">Contact Us</a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="./about-us">About Us</a></li>                   
                        </ul>
                    </div>
                    
                    <!-- Header Btn Start -->
                    <div class="header-btn">
                        <a href="#" class="btn-default">Order Now</a>
                    </div>
                    <!-- Header Btn End -->
                </div>
                <!-- Main Menu End -->
                <div class="navbar-toggle"></div>
            </div>
        </nav>
        <div class="responsive-menu"></div>
    </div>
</header>
<!-- Header End -->