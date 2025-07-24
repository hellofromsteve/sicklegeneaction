<x-layout title="Home">

    <!-- Slider Area Start -->
    <div class="slider-area">
        <div class="slider-wrapper owl-carousel">
            <div class="single-slide" style="background-image: url('img/slider/1.jpg');">
                <div class="banner-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="text-content-wrapper">
                                    <div class="text-content">
                                        <h1><span>Empower</span> Sickle Cell Warriors</h1>
                                        <p>Join us in raising awareness, providing support, and creating opportunities for those living with Sickle Cell Disease. Together, we can inspire strength, hope, and change.</p>
                                        <div class="banner-btn">
                                            <a class="default-btn" href="https://goo.gl/HtFL2a">Learn More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slide" style="background-image: url('img/slider/2.jpg');">
                <div class="banner-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="text-content-wrapper">
                                    <div class="text-content">
                                        <h1><span>Early Action</span> Saves Lives</h1>

                                        <p>Detecting and treating Sickle Cell Disease early can make all the difference. Help spread the word and ensure every warrior gets the care they deserve from day one.</p>
                                        <div class="banner-btn">
                                            <a class="default-btn" href="https://goo.gl/HtFL2a">Learn More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Slider Area End -->
    <!--  Our Inspiration Start -->
    <div class="help-area pt-120 pb-115 ptb-sm-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="hlp-img img-full">
                        <img src="{{ asset('img/bg/inspiration.jpg') }}" alt="Kwaku Ohene-Frempong">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="hlp-content">
                        <h4 class="text-black">Our Inspiration</h4>
                        <p class="text-black"><strong>In Memoriam: Kwaku Ohene-Frempong</strong></p>
                        <p style="text-align: justify;">
                            Kwaku Ohene-Frempong, a prominent figure in hematology and a global authority on sickle cell disease (SCD) was born in Kukurantumi, Ghana in 1946 into a very large and loving family.
                        </p>

                        <p style="text-align: justify;">
                            KOF excelled academically, athletically, and in leadership during his early education in Kukurantumi and in Kumasi at the prestigious Prempeh College Secondary School.
                        </p>

                        <p style="text-align: justify;">
                            In 1972, during his second year at Yale University School of Medicine, his firstborn child, his son Kwame, was born with sickle cell disease.
                        </p>
                        <div class="hlp-btn mt-20"><a href="#" class="default-btn">Read More</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Our Inspiration  End -->

    <!-- About Us Start -->
    <div class="join-area bg-1 ptb-120 ptb-sm-60">
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-8 ms-auto">
                    <div class="ht-join-text">
                        <h4>About Us</h4>
                        <h1>Empower. Unite. Defeat Sickle Cell.</h1>
                        <p>By empowering communities and uniting voices, we can defeat the challenges of Sickle Cell Disease together, stronger.</p>
                        <div class="joning-btn">
                            <a href="#" class="default-btn">Donate</a>
                            <a href="#" class="default-btn btn-white">About Us</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Us End -->

    <!-- Our Mission Start -->
    <div class="help-area pt-110 pb-115 ptb-sm-60">
        <div class="container">
            <div class="section-title text-center ">
                <h1 class="text-black">Our Mission</h1>
                <p class="text-black">Improving the quality of lives for individuals.</p>
            </div>
            <div class="row text-center">
                <div class="col-md-4 col-sm-6">
                    <div class="ht-about-feature-item" style="">
                        <span><img src="img/icon/donation.png" alt=""></span>
                        <h3 class="text-black">Early Diagnosis</h3>
                        <p class="text-black">Early diagnosis of Sickle Cell Disease is crucial for timely care, improved health outcomes, and a better quality of life.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="ht-about-feature-item">
                        <span><img src="img/icon/volunteer.png" alt=""></span>
                        <h3 class="text-black">Early Intervention</h3>
                        <p class="text-black">Prevent complications, reduce hospital visits, and empower individuals with Sickle Cell Disease to live healthier, fuller lives.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="ht-about-feature-item">
                        <span><img src="img/icon/scholar.png" alt=""></span>
                        <h3 class="text-black">Advocacy Support</h3>
                        <p class="text-black">Advocacy support gives a voice to Sickle Cell warriors, driving awareness, policy change, and better care.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Our Mission End -->

@include('partials.donate')

    <!-- Blog Area Start -->
    <div class="blog-area pt-70 pb-70 pt-sm-60 pb-sm-30">
        <div class="container">
            <div class="section-title text-center">
                <h1>Our Blog</h1>
                <p>Explore stories, insights, and updates on the fight against Sickle Cell Disease.</p>
            </div>
            <div class="row">
                <!-- Single Blog Start -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="ht-single-blog">
                        <div class="ht-blog-img">
                            <a href="blog-details.html"><img src="{{ asset('img/blog/gbcblog.jpg') }}" alt=""></a>
                        </div>
                        <div class="ht-blog-text">
                            <h2><a href="blog-details.html">Decentralize Hydroxyurea for widespread accessibility.</a></h2>
                            <div class="post-meta-wapper">
                                <span class="s-post-meta"><i class="zmdi zmdi-calendar-check"></i>Nov 27, 2023</span>
                                <span class="s-post-meta"><i class="zmdi zmdi-assignment-account"></i> By: <a href="#">GBC Ghana Online</a></span>
                            </div>
                            <p>Sickle cell experts have emphasised the importance of early detection of sickle ...</p>
                            <a href="blog-details.html" class="default-btn mt-10">Read More</a>
                        </div>
                    </div>
                </div>
                <!-- Single Blog End -->
                <!-- Single Blog Start -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="ht-single-blog">
                        <div class="ht-blog-img">
                            <a href="blog-details.html"><img src="{{ asset('img/blog/launchnew.png') }}" alt="Launch Logo"></a>
                        </div>
                        <div class="ht-blog-text">
                            <h2><a href="blog-details.html">Foundation launched, Urges Call To Action.</a></h2>
                            <div class="post-meta-wapper">
                                <span class="s-post-meta"><i class="zmdi zmdi-calendar-check"></i>Nov 30, 2023</span>
                                <span class="s-post-meta"><i class="zmdi zmdi-assignment-account"></i>By: <a href="#">Citi News Room</a></span>
                            </div>
                            <p>Sickle Gene Action Foundation (SGAF) has been launched in Accra with a call on...</p>
                            <a href="blog-details.html" class="default-btn mt-10">Read More</a>
                        </div>
                    </div>
                </div>
                <!-- Single Blog End -->
                <!-- Single Blog Start -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="ht-single-blog">
                        <div class="ht-blog-img">
                            <a href="blog-details.html"><img src="{{ asset('img/blog/gnablog.jpg') }}" alt="Uniting Against SCD"></a>
                        </div>
                        <div class="ht-blog-text">
                            <h2><a href="blog-details.html">Uniting Against Sickle Cell Disease in Ghana</a></h2>
                            <div class="post-meta-wapper">
                                <span class="s-post-meta"><i class="zmdi zmdi-calendar-check"></i>May 23, 2022</span>
                                <span class="s-post-meta"><i class="zmdi zmdi-assignment-account"></i>By: <a href="#">GNA </a></span>
                            </div>
                            <p>Sickle Gene Action Foundation (SGAF), a Sickle Cell Disease (SCD) advocacy...</p>
                            <a href="blog-details.html" class="default-btn mt-10">Read More</a>
                        </div>
                    </div>
                </div>
                <!-- Single Blog End -->
            </div>
        </div>
    </div>
    <!-- Blog Area End -->


    <!-- Donate Text Area Start -->
    <div class="donate-text-area bg-acquamarine">
        <div class="container">
            <div class="ht-donate-wrapper">
                <div class="donate-text">
                    <h2>Your Help Goes A Long Way</h2>
                    <h5>Support care for Sickle Cell warriors.</h5>
                </div>
                <div class="donate-btn">
                    <a href="#" class="default-btn">Donate now</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Donate Text Area End -->

</x-layout>
