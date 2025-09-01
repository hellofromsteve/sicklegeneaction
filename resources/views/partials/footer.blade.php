<!-- Footer Area Start -->
<footer class="footer-area">
    <div class="footer-top bg-dark-2 pt-50 pb-50 pt-sm-60 pb-sm-10">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <div class="footer-logo">
                            <a href="{{ route('home') }}"><img src="{{ asset('img/logo/sgaf-logo.png') }}" alt="Sickle Gene Action Foundation"></a>
                        </div>
                        <div class="footer-info">
                            <p>Transforming Lives Through Awareness.</p>
                            <div class="footer-address">
                                <div class="s-footer-item">
                                    <i class="zmdi zmdi-home"></i>
                                    <span>44 Jungle Avenue, East Legon - Ghana</span>
                                </div>
                                <div class="s-footer-item">
                                    <i class="zmdi zmdi-phone"></i>
                                    <span>+233 552 288 935</span>
                                </div>
                                <div class="s-footer-item">
                                    <i class="zmdi zmdi-email"></i>
                                    <span>info@sicklegeneactionghana.com</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h4>Quick Links</h4>
                        <ul class="footer-list">
                            <li><a href="{{ route('about-us') }}">About us</a></li>
                            <li><a href="{{ route('about-us.mission') }}">Mission</a></li>
                            <li><a href="{{ route('contact-us') }}">Contact Us</a></li>
                            <li><a href="{{ route('how-to-help') }}">How To Help</a></li>

                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h4>About Us</h4>
                        <ul class="footer-list">
                            <li><a href="{{ route('what-we-do') }}">What We Do</a></li>
                            <li><a href="{{ route('about-us.goals') }}">Our Goals</a></li>
                            <li><a href="{{ route('about-us.inspiration') }}">Our Inspiration</a></li>
                            <li><a href="{{ route('about-us.board') }}">Our Board</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">


                    <div class="single-footer-widget">
                        <h4>Subscribe Us</h4>
                        <div class="footer-newsletter">
                            <p>Subscribe to our newsletter!</p>
                            <div class="newsletter-form mc_embed_signup">
                                <form action="{{ route('handle-subscribe') }}" method="post" >
                                    @csrf
                                    <div id="mc_embed_signup_scroll" class="mc-form">
                                        {!! NoCaptcha::display() !!}
                                        @error('g-recaptcha-response')
                                        <span class="text-red-600 text-sm">{{ $message }}</span>
                                        @enderror
                                        <input type="email" value="" name="email" class="email" id="mce-EMAIL" placeholder="Email address...." required>
                                        <div class="mc-news" aria-hidden="true"><input type="text" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef" tabindex="-1" value=""></div>
                                        <button  type="submit"><i class="zmdi zmdi-mail-send"></i></button>
                                    </div>
                                </form>
                            </div>

                        </div>
                        <div class="social-media">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom text-center bg-dark-3">
        <div class="container">
            <span class="footer-text">Copyright © <a href="https://turndalesolutions.com" target="_blank">Turndale Solutions</a>  All Right Reserved.</span>
        </div>
    </div>
</footer>
<!-- Footer Area End -->
