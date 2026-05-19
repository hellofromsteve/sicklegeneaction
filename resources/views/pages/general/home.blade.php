<x-layout title="Home">

    <!-- Slider Area Start -->
    <div class=" py-5 text-center" style="background-color: #D5EDFF;">
        <div class="slider-wrapper owl-carousel">
            <div class="single-slide px-3">
                <div class="container">

                    <h1 class="display-5 fw-bold text-danger mb-4">Early Action Saves Lives</h1>


                    <div class="mb-4 d-flex align-items-center justify-content-center gap-3">
{{--                        <img src="{{ asset('img/home/heart.svg') }}" alt="Heart" style="width: 56px; height: 56px;">--}}
                        <img src="{{ asset('img/banner/home-kid.png') }}" alt="SCD Child" class="img-fluid rounded shadow" style="max-width: 400px;">
{{--                        <img src="{{ asset('img/home/heart.svg') }}" alt="Heart" style="width: 56px; height: 56px;">--}}
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
            <div class="row justify-content-center mb-4">
                <div class="col-lg-12 text-center">
                    <h1 class="text-danger">Our Inspiration</h1>
                </div>
            </div>

            <div class="row align-items-center"> <div class="col-lg-6 mb-sm-30">
                    <div class="hlp-img img-full text-center">
                        <img src="{{ asset('img/bg/inspiration.jpg') }}" alt="Kwaku Ohene-Frempong" style="width: 100%; max-width: 450px; border: 4px solid #002d5b; height: auto; border-radius: 8px;">

                        <div class="mt-3">
                            <h5 class="text-black mb-0"><strong>Kwaku Ohene-Frempong, MD</strong></h5>
                            <p class="text-black">1946–2022</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="hlp-content">
                        <h5 class="text-black mb-3"><strong>In Memoriam: Kwaku Ohene-Frempong</strong></h5>

                        <div class="inspiration-text" style="color: black; text-align: justify; line-height: 1.6;">
                            <p>
                                <strong>With decades of dedicated service to the global sickle cell disease community, Professor Kwaku Ohene-Frempong transformed the landscape of SCD care, research, and advocacy across the world.</strong>
                            </p>

                            <p>
                                He championed newborn screening, evidence-based care, and public education, which has today shaped modern SCD management.
                            </p>

                            <p>
                                As a father to a son living with sickle cell disease, Professor Ohene-Frempong understood the daily realities, challenges, and hopes of families affected by SCD. This experience further strengthened his passion to improve care and outcomes for families everywhere.
                            </p>

                            <p>
                                Through his works, countless healthcare professionals, families, and SCD warriors were empowered with knowledge, hope, and practical solutions. His leadership strengthened international partnerships and improved access to quality care in Africa, particularly Ghana.
                            </p>

                            <p>
                                His life and legacy remind us that with vision, compassion, and persistence, we can transform pain into purpose and challenges into lasting impact. KOF remains a beacon of hope and a true inspiration in the global movement to conquer Sickle Cell Disease.
                            </p>
                        </div>

                        <div class="hlp-btn mt-30">
                            <a href="{{ route('about-us.inspiration') }}" class="default-btn">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Our Inspiration  End -->

    <!-- About Us Section Start -->
    <div class="about-us-section py-5  text-center">
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
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="ht-about-feature-item">
                        <div class="mission-img mb-3">
                            <img src="{{ asset('img/home/earlydiagnosis.jpeg') }}"
                                 alt="Early Diagnosis"
                                 style="border: 4px solid #002d5b; border-radius: 8px; width: 100%; height: 250px; object-fit: cover;">
                        </div>
                        <h3 class="text-black">Early Diagnosis</h3>
                        <p class="text-black">
                            Early diagnosis of Sickle Cell Disease is crucial for timely care, improved health outcomes, and a better quality of life.
                        </p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="ht-about-feature-item">
                        <div class="mission-img mb-3">
                            <img src="{{ asset('img/home/earlyintervention.jpeg') }}"
                                 alt="Early Intervention"
                                 style="border: 4px solid #002d5b; border-radius: 8px; width: 100%; height: 250px; object-fit: cover;">
                        </div>
                        <h3 class="text-black">Early Intervention</h3>
                        <p class="text-black">
                            Prevent complications, reduce hospital visits, and empower individuals with Sickle Cell Disease to live healthier, fuller lives.
                        </p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="ht-about-feature-item">
                        <div class="mission-img mb-3">
                            <img src="{{ asset('img/home/advocacy.jpeg') }}"
                                 alt="Advocacy Support"
                                 style="border: 4px solid #002d5b; border-radius: 8px; width: 100%; height: 250px; object-fit: cover;">
                        </div>
                        <h3 class="text-black">Advocacy Support</h3>
                        <p class="text-black">
                            Advocacy support gives a voice to Sickle Cell warriors, driving awareness, policy change, and better care.
                        </p>
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
                            <div class="ht-about-feature-item p-4 border rounded shadow-sm h-100 text-center d-flex flex-column"
                                 style="border: 3px solid #002d5b !important; transition: transform 0.3s ease;">

                                <div style="width: 12px; height: 12px; background-color: #e32f4a; border-radius: 50%; margin: 0 auto 15px;"></div>

                                <h3 class="text-black">
                                    <div>{{ $parts[0] ?? '' }}</div>
                                    <div>{{ $parts[1] ?? '' }}</div>
                                </h3>

                                <a href="{{ route($feature['route']) }}" class="default-btn mt-auto">Learn More</a>
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
                    <h5>Support care for Sickle Cell Warriors.</h5>
                </div>
                <div class="donate-btn">
                    <a href="{{ route('how-to-help') }}" class="default-btn">Donate now</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Donate Text Area End -->

</x-layout>
