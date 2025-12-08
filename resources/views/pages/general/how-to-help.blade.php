<x-layout title="How You Can Help">

    @section('head')
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/howtohelp.css') }}">
    @endsection

    <!-- Banner Area Start -->
    <div class="about-us-section mb-50 py-5 bg-light text-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h1 class="fw-bold mb-3 text-black">How You Can Help</h1>
                    <p class="fs-5 text-secondary mb-4 text-black">
                        Together, we can reduce SCD deaths and improve lives <br>in Ghana through your support and proven partnerships.
                    </p>
                </div>
                <div>

                    <a href="{{ route('online-donate') }}" class="btn btn-danger btn-md me-3 mb-2">
                        <i class="fas fa-credit-card me-2"></i>Donate Now
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Area End -->



    <!-- Our Mission Start -->
    <div class="help-area pt-50 pb-50 ptb-sm-60">
        <div class="container">
            <div class="section-title text-center ">
                <h1 class="text-black">More Ways To Help</h1>
            </div>
            <div class="row text-center">
                <div class="col-md-4 col-sm-6">
                    <div class="ht-about-feature-item" style="">
                        <i class="fas fa-heart ways-help-icon"></i>
                        <h3 class="text-black">Monthly Giving</h3>
                        <p class="text-black">Become a monthly donor and provide sustainable support for our ongoing programs and initiatives.
                        </p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="ht-about-feature-item">

                        <i class="fas fa-hands-helping ways-help-icon"></i>
                        <h3 class="text-black">In-Kind Donations</h3>
                        <p class="text-black">Donate medical supplies, educational materials, or equipment that directly supports our screening and awareness programs.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="ht-about-feature-item">
                        <i class="fas fa-bullhorn ways-help-icon"></i>
                        <h3 class="text-black">Spread Awareness</h3>
                        <p class="text-black">Share our mission on social media, organize awareness events, or help us reach more communities
                            in need.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Our Mission End -->

    <!-- Impact Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="section-title text-center">Your Impact in Action</h2>
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="impact-card">
                        <h5><i class="fas fa-graduation-cap text-danger me-2"></i>Raising Awareness</h5>
                        <p><strong>GHC 55,000</strong> to facilitate awareness drives for <strong>1,000 people</strong>
                            including:</p>
                        <ul class="mb-0">
                            <li>Sensitization exercises in educational institutions</li>
                            <li>Community center and market campaigns</li>
                            <li>Educational talks in churches</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="impact-card">
                        <h5><i class="fas fa-microphone text-danger me-2"></i>Media Outreach</h5>
                        <p><strong>GHC 45,000</strong> to support our annual media strategy:</p>
                        <ul class="mb-0">
                            <li>National media tour</li>
                            <li>Monthly publications on Sickle Cell Awareness</li>
                            <li>Broadcast and digital media campaigns</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="impact-card">
                        <h5><i class="fas fa-users text-danger me-2"></i>Amplifying Warrior Voices</h5>
                        <p><strong>GHC 48,000</strong> to train <strong>160 SCD advocates</strong> (10 per region) as
                            support group facilitators mentored by our national coordinator.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="impact-card">
                        <h5><i class="fas fa-video text-danger me-2"></i>Documentary & Stories</h5>
                        <p><strong>GHC 80,000</strong> to produce documentaries on SCD survival campaigns, stories, and
                            videos for TV stations, YouTube, and social media platforms.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="impact-card">
                        <h5><i class="fas fa-stethoscope text-danger me-2"></i>Filling Screening Gaps</h5>
                        <p><strong>GHC 32,000</strong> for screening and enrolling <strong>1,000 pupils</strong> with Sickle
                            Cell Disease onto the NHIS Scheme.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="impact-card">
                        <h5><i class="fas fa-tint text-danger me-2"></i>Blood Donation Drives</h5>
                        <p><strong>GHC 60,000</strong> to facilitate blood donation drives twice a year, including medical
                            consumables, testing, storage, and banking.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Donation Tiers Section -->
    <section class="py-5" id="donate">
        <div class="container">
            <h2 class="section-title text-center">Partnership & Donation Tiers</h2>
            <p class="text-center text-muted mb-5">We value all support we receive. No amount or resource is too small
                for the work we have ahead of us. <br> Your support is always welcomed.</p>

            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="card donation-tier tier-silver h-100">
                        <div class="card-body text-center p-4">
                            <i class="fas fa-award fa-3x text-secondary mb-3"></i>
                            <h4 class="card-title text-secondary">Silver Partner</h4>
                            <h5 class="text-muted">GHC 10,000 - 25,000</h5>
                            <hr>
                            <h6>Recognition Benefits:</h6>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-check text-success me-2"></i>Online presence on our platforms</li>
                                <li><i class="fas fa-check text-success me-2"></i>Social media recognition</li>
                                <li><i class="fas fa-check text-success me-2"></i>Media interview mentions</li>
                                <li><i class="fas fa-check text-success me-2"></i>Publication acknowledgments</li>
                            </ul>
                            <a href="{{  route('contact-us') }}" class="btn btn-outline-secondary mt-3">Become Silver Partner</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card donation-tier tier-gold h-100 position-relative">
                        <div class="badge bg-warning position-absolute top-0 start-50 translate-middle px-3 py-2">
                            Popular
                        </div>
                        <div class="card-body text-center p-4">
                            <i class="fas fa-medal fa-3x text-warning mb-3"></i>
                            <h4 class="card-title text-warning">Gold Partner</h4>
                            <h5 class="text-muted">GHC 25,000 - 50,000</h5>
                            <hr>
                            <h6>All Silver Benefits Plus:</h6>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-check text-success me-2"></i>Enhanced online visibility</li>
                                <li><i class="fas fa-check text-success me-2"></i>Priority media coverage</li>
                                <li><i class="fas fa-check text-success me-2"></i>Featured in publications</li>
                                <li><i class="fas fa-check text-success me-2"></i>Quarterly impact reports</li>
                            </ul>
                            <a href="{{  route('contact-us') }}" class="btn btn-warning mt-3 text-white">Become Gold Partner</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card donation-tier tier-diamond h-100">
                        <div class="card-body text-center p-4">
                            <i class="fas fa-gem fa-3x text-primary mb-3"></i>
                            <h4 class="card-title text-primary">Diamond Partner</h4>
                            <h5 class="text-muted">GHC 50,000+</h5>
                            <hr>
                            <h6>Premium Partnership:</h6>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-check text-success me-2"></i>All Gold benefits</li>
                                <li><i class="fas fa-check text-success me-2"></i>Optimum visibility in field exercises
                                </li>
                                <li><i class="fas fa-check text-success me-2"></i>Logo on banners, tents, t-shirts</li>
                                <li><i class="fas fa-check text-success me-2"></i>Featured in all publications</li>
                                <li><i class="fas fa-check text-success me-2"></i>Exclusive partnership opportunities
                                </li>
                            </ul>
                            <a href="{{  route('contact-us') }}"  class="btn btn-primary mt-3">Become Diamond Partner</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

        <!-- Call to Action -->
        <section class="py-5 bg-danger text-white">
            <div class="container text-center">
                <h2 class="mb-4">Ready to Make a Difference?</h2>
                <p class="lead mb-4">Your contribution and support will make a great difference in the lives of people with
                    Sickle Cell Disease in Ghana. Together, we can minimize SCD-related deaths through stakeholder
                    collaborations and best practices for a better quality of life.</p>
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <a href="{{ route('online-donate') }}" target="_blank" class="btn btn-light btn-lg me-3 mb-2">
                            <i class="fas fa-credit-card me-2"></i>Donate Online
                        </a>
                        <a href="#" class="btn btn-outline-light btn-lg mb-2">
                            <i class="fas fa-envelope me-2"></i>Contact Us
                        </a>
                    </div>
                </div>
            </div>
        </section>


</x-layout>
