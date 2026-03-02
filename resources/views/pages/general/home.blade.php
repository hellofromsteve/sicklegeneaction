<x-layout title="Home">

    <!-- Slider Area Start -->
    <div class=" py-1 text-center">
        <div class="slider-wrapper owl-carousel">
            <div class="single-slide px-3">
                <div class="container">


                    <h1 class="display-5 fw-bold text-danger mb-4">Early Action <br> Saves Lives</h1>


                    <div class="mb-4 d-flex justify-content-center">
                        <img src="{{ asset('img/banner/home-kid.png') }}" alt="SCD Child" class="img-fluid rounded shadow" style="max-width: 300px;">
                    </div>


                    <div class="mb-2">
                        <h2 class="fw-bold text-black">Born With Sickle Cell Disease</h2>
                        <p class="text-black fs-5">
                            In sub-Saharan Africa, millions of children like this<br>
                            die before the age of 5.
                        </p>
                    </div>


                    <div>
                        <h2 class="fw-bold text-black">You Can Make a Difference.</h2>
                        <p class="text-black fs-5">
                            Join us in taking meaningful action<br>
                            to help keep each one of them alive and well, into productive adulthood.
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Slider Area End -->


    <!--  Our Inspiration Start -->
    <div class="help-area pt-50 pb-115 ptb-sm-60">
        <div class="container">
            <div class="justify-content-center">
                <div class="col-lg-12 bg-white text-center justify-content-center">
                      <h1 class=" text-danger mb-4">Our Inspiration</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="hlp-img img-full">
                        <img src="{{ asset('img/bg/inspiration.jpg') }}" alt="Kwaku Ohene-Frempong">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="hlp-content">
{{--                        <h4 class="text-black">Our Inspiration</h4>--}}
                        <h5 class="text-black"><strong>In Memoriam: <br> Kwaku Ohene-Frempong</strong></h5>
                        <p class="text-black" style="text-align: justify;"><strong>
                            Kwaku Ohene-Frempong, a prominent figure in hematology and a global authority on sickle cell disease (SCD) was born in Kukurantumi, Ghana in 1946 into a very large and loving family.
                            </strong>
                        </p>

                        <p class="text-black" style="text-align: justify;"> <strong>

                            KOF excelled academically, athletically, and in leadership during his early education in Kukurantumi and in Kumasi at the prestigious Prempeh College Secondary School.
                            </strong>
                        </p>

                        <p class="text-black" style="text-align: justify;"> <strong>

                            In 1972, during his second year at Yale University School of Medicine, his firstborn child, his son Kwame, was born with sickle cell disease.
                            </strong>
                        </p>
                        <div class="hlp-btn mt-20"><a href="{{ route('about-us.inspiration') }}" class="default-btn">Read More</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Our Inspiration  End -->

    <!-- About Us Section Start -->
    <div class="about-us-section py-5 bg-light text-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h1 class=" text-danger mb-2">About Us</h1>
                    <h1 class="fw-bold mb-3 text-black">Empower. Unite</h1>
                    <p class="fs-5 text-secondary mb-4">
                        By empowering communities and uniting voices, we can overcome the challenges of Sickle Cell Disease — together, stronger.
                    </p>
                    <div class="d-flex justify-content-center gap-3">
                        <a href="{{ route('how-to-help') }}" class="default-btn px-4">Donate</a>
                        <a href="{{ route('about-us') }}" class="default-btn btn-white px-4 ">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Us Section End -->



    <!-- Our Mission Start -->
    <div class="help-area pt-60 pb-115 ptb-sm-60">
        <div class="container">
            <div class="section-title text-center ">
                <h1 class="text-danger">Our Mission</h1>
                <p class="text-black">Improving the quality of lives for individuals.</p>
            </div>
            <div class="row text-center">
                <div class="col-md-4 col-sm-6">
                    <div class="ht-about-feature-item" style="">
                        <span><img src="{{ asset('img/icon/donation.png') }}" alt=""></span>
                        <h3 class="text-black">Early Diagnosis</h3>
                        <p class="text-black">Early diagnosis of Sickle Cell Disease is crucial for timely care, improved health outcomes, and a better quality of life.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="ht-about-feature-item">
                        <span><img src="{{ asset('img/icon/volunteer.png') }}" alt=""></span>
                        <h3 class="text-black">Early Intervention</h3>
                        <p class="text-black">Prevent complications, reduce hospital visits, and empower individuals with Sickle Cell Disease to live healthier, fuller lives.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="ht-about-feature-item">
                        <span><img src="{{ asset('img/icon/scholar.png') }}" alt=""></span>
                        <h3 class="text-black">Advocacy Support</h3>
                        <p class="text-black">Advocacy support gives a voice to Sickle Cell warriors, driving awareness, policy change, and better care.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Our Mission End -->

{{--@include('partials.donate')--}}

    <!-- What We Do Start -->
    <div class="blog-area pt-70 pb-30 pt-sm-60 pb-sm-30">
        <div class="container">
            <div class="section-title text-center">
                <h1 class="text-danger">What We Do</h1>
{{--                <p class="text-black">Explore stories, insights, and updates on the fight against Sickle Cell Disease.</p>--}}
            </div>
            <div class="row text-center">
                <div class="row text-center">
                    @foreach($whatWeDo as $feature)
                        @php
                            $parts = explode(' ', $feature['title'], 2);
                        @endphp
                        <div class="col-6 col-md-4 mb-5">
                            <div class="ht-about-feature-item p-4 border rounded shadow-sm h-100 text-center">
                                <!-- Red dot -->
                                <div style="width: 12px; height: 12px; background-color: #e32f4a; border-radius: 50%; margin: 0 auto 15px;"></div>

                                <h3 class="text-black">
                                    <div>{{ $parts[0] ?? '' }}</div>
                                    <div>{{ $parts[1] ?? '' }}</div>
                                </h3>

                                <a href="{{ route($feature['route']) }}" class="default-btn">Read More</a>

                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- What We Do End -->


    <!-- Donate Text Area Start -->
    <div class="donate-text-area bg-danger ">
        <div class="container">
            <div class="ht-donate-wrapper">
                <div class="donate-text">
                    <h2>Your Help Goes A Long Way</h2>
                    <h5>Support care for Sickle Cell warriors.</h5>
                </div>
                <div class="donate-btn">
                    <a href="{{ route('how-to-help') }}" class="default-btn">Donate now</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Donate Text Area End -->

</x-layout>
