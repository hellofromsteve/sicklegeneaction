<!-- Header Area Start -->
<header class="header-area">
    <!--
    <div class="header-top bg-theme">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <span class="ht-header-msg">
                        <i class="zmdi zmdi-email"></i>
                        <a class="text-white" href="mailto:info@sicklegeneactionghana.com">info@sicklegeneactionghana.com</a>
                    </span>
                    <span class="ht-header-msg">
                        <i class="zmdi zmdi-phone"></i>
                        <a class="text-white"  href="tel:+233552288935">+23355 228 8935</a>
                    </span>
                </div>
                <div class="col-md-6">
                    <div class="social-media float-end">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>

                    </div>
                </div>
            </div>
        </div>
    </div>
    -->
    <div class="mainmenu-area header-sticky bg-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4">
                    <div class="logo">
                        <a href="{{ route('home') }}"><img src="{{ asset('img/logo/sgaflogo.png') }}" alt="Sickle Gene Action Foundation Logo"></a>
                    </div>
                </div>
                <div class="col-lg-9 col-md-8 d-none d-md-block">
                    <div class="menu-container">
                        <div class="menu-wrapper">
                            <div class="main-menu mean-menu">
                                <nav>
                                    <ul>
                                        <li class="{{ request()->routeIs('home') ? 'active' : '' }}"><a href="{{ route('home') }}">Home</a>

                                        </li>
                                        <li class="{{ request()->routeIs('about') || request()->routeIs('about*')  ? 'active' : '' }}"> <a href="{{ route('about') }}">About Us</a>
                                            <ul>
                                                <li><a href="{{ route('about.inspiration') }}">Our Inspiration</a></li>
                                                <li><a href="{{ route('about.groundwork') }}">Our GroundWork</a></li>
                                                <li><a href="{{ route('about.mission') }}">Our Mission</a></li>
                                                <li><a href="{{ route('about.board') }}">Our Board</a></li>
                                                <li><a href="{{ route('about.goals') }}">Our Goals</a></li>
                                                <li><a href="{{ route('about.values') }}">Our Values</a></li>
                                            </ul>
                                        </li>

                                        <li><a href="#">What We Do</a></li>
                                        <li><a href="#">About SCD</a></li>
                                        <li><a href="#">News</a>

                                        </li>
                                        <li><a href="#">Contact</a></li>
                                        <li><a href="#">How To Help</a>

                                        </li>

                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mobile-menu hidden-lg hidden-md"></div>
        </div>
    </div>
</header>
<!-- Header Area End -->
