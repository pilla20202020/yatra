<!-- START FOOTER -->
<section class="trusted-partners">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-xs-4">
                <div class="partners-title">
                    <h3>Our <span>Partners</span></h3>
                </div>
            </div>
            <div class="col-md-9 col-xs-8">
                <ul class="partners-logo partners-slider slick-initialized slick-slider">
                    <div aria-live="polite" class="slick-list draggable">
                        <div class="slick-track"
                            style="opacity: 1; width: 300px; transform: translate3d(0px, 0px, 0px);" role="listbox">
                            <li class="slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false"
                                style="width: 100px;" tabindex="-1" role="option" aria-describedby="slick-slide10"><a
                                    href="" tabindex="0"><img src="" alt="Image"></a></li>
                            <li class="slick-slide slick-active" data-slick-index="1" aria-hidden="false"
                                style="width: 100px;" tabindex="-1" role="option" aria-describedby="slick-slide11"><a
                                    href="" tabindex="0"><img src="" alt="Image"></a></li>
                            <li class="slick-slide slick-active" data-slick-index="2" aria-hidden="false"
                                style="width: 100px;" tabindex="-1" role="option" aria-describedby="slick-slide12"><a
                                    href="#" tabindex="0"><img
                                        src="{{asset('assets/images/partner.svg_.png')}}"
                                        alt="Image"></a></li>
                        </div>
                    </div>
                </ul>
            </div>
        </div>
    </div>
</section>

<footer>
    <div class="footer-upper">
        <div class="container">

            <div class="footer-links">
                <div class="row">
                    <div class="col-md-5 col-12">
                        <div class="footer-about footer-margin">
                            <div class="about-logo">
                                <img src="{{ asset('assets/images/footer.png') }}" alt="Image">
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt.</p>
                            <div class="about-location">
                                <ul>
                                    <li><i class="flaticon-maps-and-flags" aria-hidden="true"></i>{{setting('address')}}</li>
                                    <li><i class="flaticon-phone-call"></i><a href="tel:01-4375882">{{setting('phone')}}</a></li>
                                    <li><i class="flaticon-mail"></i> <a
                                            href="mailto:info@himalayanshepherdnepal.com">{{setting('email')}}</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="footer-social-links">
                                <ul>
                                    <li class="social-icon"><a href="{{setting('facebook')}}"><i
                                        class="fa fa-facebook" aria-hidden="true"></i></a>
                                    </li>
                                    <li class="social-icon"><a href="{{setting('instagram')}}"><i
                                                class="fa fa-instagram" aria-hidden="true"></i></a>
                                    </li>
                                    <li class="social-icon"><a href="{{setting('twitter')}}"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    </li>
                                    <li class="social-icon"><a href="{{setting('youtube')}}"><i
                                                class="fa fa-youtube" aria-hidden="true"></i></a>
                                    </li>
                                    <li class="social-icon"><a href="{{setting('linkedin')}}"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="footer-links-list footer-margin">
                            <h3>Expedition</h3>
                            <ul>
                                <li><a href="{{route('package.detail','Join%20Mountain%20Clean%20Up%20Campaigns')}}">Mountain Clean up <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                                <li><a href="{{route('package.detail','Supporting%20Youth%20Education')}}">Supporting Youth Education <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                </li>
                                <li><a href="{{route('package.detail','mt-everest')}}">Mt. Everest <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="footer-links-list footer-margin">
                            <h3>Quick Links</h3>
                            <ul>
                                <li><a href="{{route('homepage')}}">Home <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                                <li><a href="{{route('expedition')}}">Expedition <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                </li>
                                <li><a href="{{route('page.detail','about-us')}}">About Us <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                                <li><a href="{{route('contact')}}">Contact Us <i class="fa fa-angle-right"
                                            aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    {{-- <div class="col-md-3 col-sm-4">
                        <div class="footer-links-list">
                            <div class="footer-instagram">
                                <h3>Instagram</h3>
                                <ul>
                                    <li><img src="images/insta1.jpg" alt="Image"></li>
                                    <li><img src="images/insta2.jpg" alt="Image"></li>
                                    <li><img src="images/insta3.jpg" alt="Image"></li>
                                    <li><img src="images/insta4.jpg" alt="Image"></li>
                                    <li><img src="images/insta5.jpg" alt="Image"></li>
                                    <li><img src="images/insta6.jpg" alt="Image"></li>
                                    <li><img src="images/insta7.jpg" alt="Image"></li>
                                    <li><img src="images/insta8.jpg" alt="Image"></li>
                                    <li><img src="images/insta9.jpg" alt="Image"></li>
                                </ul>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-xs-6">
                    <div class="copyright-content">
                        <p>2020 <i class="fa fa-copyright" aria-hidden="true"></i> {{setting('name')}}
                        </p>
                    </div>
                </div>
                {{-- <div class="col-xs-6">
                    <div class="payment-content">
                        <ul>
                            <li>We Accept</li>
                            <li>
                                <img src="images/payment1.png" alt="Image">
                            </li>
                            <li>
                                <img src="images/payment2.png" alt="Image">
                            </li>
                            <li>
                                <img src="images/payment3.png" alt="Image">
                            </li>
                            <li>
                                <img src="images/payment4.png" alt="Image">
                            </li>
                        </ul>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</footer>


<div id="back-to-top">
    <a href="#"></a>
</div>
<!-- END FOOTER -->
