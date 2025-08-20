<x-layout title="503 - Service Unavailable">

    <div class="about-us-section py-5 bg-light text-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h1 class="text-danger mb-2">Error! 503</h1>
                    <h3 class="fw-bold mb-20 text-black">Service Unavailable</h3>
                    <p class="text-secondary mb-4">Our site is temporarily down for maintenance. Please check back soon.</p>
                    <div class="mt-30">
                        <a href="{{ route('home') }}" class="default-btn">Go Back Home</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


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


</x-layout>
