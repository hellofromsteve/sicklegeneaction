<x-layout title="Contact Us">

    <!-- Banner Area Start -->
    <div class="banner-area bg-4">
        <div class="container">
            <div class="breadcrumb-text">
                <h2>Contact Us</h2>
                <div class="breadcrumb-bar">
                    <ul class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li>Contact Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Area End -->
    <!-- Contact Area Start -->
    <div class="contact-area pt-50 pt-sm-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 ml-auto">
                    <div class="contact-form-wrapper fix">
                        <h3 class="sub-title">Reach Out To Us</h3>

                        <form action="{{ route('handle-contact') }}" method="POST" class="contact_form">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 col-sm-6 mb-3">
                                    <label for="name" class="form-label">Your Name</label>
                                    <input type="text" id="name" name="name" placeholder="Enter your name" value="{{ old('name') }}" class="form-control">
                                    @error('name')
                                    <span class="text-danger d-block mt-1">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6 col-sm-6 mb-3">
                                    <label for="email" class="form-label">Your Email</label>
                                    <input type="text" id="email" name="email" placeholder="Enter your email" value="{{ old('email') }}" class="form-control">
                                    @error('email')
                                    <span class="text-danger d-block mt-1">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label">Your Message</label>
                                <textarea id="message" name="message" cols="30" rows="10" placeholder="Enter your message" class="form-control">{{ old('message') }}</textarea>
                                @error('message')
                                <span class="text-danger d-block mt-1">{{ $message }}</span>
                                @enderror
                            </div>
                            <button type="submit" class="submit-btn default-btn">
                                <span>Submit</span>
                            </button>
                            <p class="form-messege"></p>
                        </form>
                    </div>
                </div>

                <div class="col-lg-5 contact-information">
                    <h3 class="sub-title text-black"> Be Part of the Mission</h3>
                    <p class="text-black">Help us build on 30+ years of work to improve the lives of Sickle Cell Warriors in Ghana. Together, we can scale life-saving strategies and reduce pain and disability.</p>
                    <p class="text-black"> Reach out — let’s make an impact.</p>
                    <span class="ht-c-info"><span>Address:</span> 44 Jungle Avenue, East Legon - Ghana</span>
                    <span class="ht-c-info"><span>Email:</span> <a href="mailto:info@sicklegeneactionghana.com">info@sicklegeneactionghana.com</a></span>
                    <span class="ht-c-info"><span>Phone:</span> <a href="tel:+233534701222">+233534701222</a></span>
                    <div class="c-links">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-pinterest"></i></a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Contact Area End -->

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


    <!-- Donate Text Area Start -->
    <div class="donate-text-area bg-acquamarine">
        <div class="container">
            <div class="ht-donate-wrapper">
                <div class="donate-text">
                    <h2>Donate Today</h2>
                    <h5>To Save Children From the Trauma of Abuse</h5>
                </div>
                <div class="donate-btn">
                    <a href="https://goo.gl/HtFL2a" class="default-btn">Donate now</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Donate Text Area End -->


</x-layout>
