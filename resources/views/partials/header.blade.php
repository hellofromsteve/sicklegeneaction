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
                                        <li class="{{ request()->routeIs('about-us') || request()->routeIs('about-us*')  ? 'active' : '' }}"> <a href="{{ route('about-us') }}">About Us</a>
                                            <ul>
                                                <li><a href="{{ route('about-us.inspiration') }}">Our Inspiration</a></li>
                                                <li><a href="{{ route('about-us.groundwork') }}">Our GroundWork</a></li>
                                                <li><a href="{{ route('about-us.mission') }}">Our Mission</a></li>
                                                <li><a href="{{ route('about-us.board') }}">Our Board</a></li>
                                                <li><a href="{{ route('about-us.goals') }}">Our Goals</a></li>
                                                <li><a href="{{ route('about-us.values') }}">Our Values</a></li>
                                            </ul>
                                        </li>

                                        <li class="{{ request()->routeIs('what-we-do') ? 'active' : '' }}"><a href="{{ route('what-we-do') }}">What We Do</a></li>
                                        <li class="{{ request()->routeIs('about-scd*') ? 'active' : '' }}"><a href="{{ route('about-scd') }}">About SCD</a>
                                            <ul>
                                                <li><a href="{{ route('about-scd.what-is-scd') }}">What Is SCD</a></li>
                                                <li><a href="{{ route('about-scd.causes-scd') }}">What Causes SCD</a></li>
                                                <li><a href="{{ route('about-scd.voices') }}">In Their Voices</a></li>
                                                <li><a href="{{ route('about-scd.cured') }}">Can It Be Cured</a></li>
                                                <li><a href="{{ route('about-scd.good-news') }}">The Good News</a></li>
                                            </ul>
                                        </li>
                                        <li class="{{ request()->routeIs('how-to-help') ? 'active' : '' }}"><a href="{{ route('how-to-help')  }}">How To Help</a>
                                        <li class="{{ request()->routeIs('contact-us') ? 'active' : '' }}"><a href="{{ route('contact-us') }}">Contact</a></li>

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
