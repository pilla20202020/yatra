@extends ('frontend.layouts.app')
@section('content')

<!-- START SECTION BREADCRUMB -->
<section class="breadcrumb-outer text-center">
    <div class="container">
        <div class="breadcrumb-content">
            <h2>Contact Us Page</h2>
            <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('homepage')}}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="section-overlay"></div>
</section>
<!-- END SECTION BANNER -->



<section class="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div id="contact-form" class="contact-form">
                    <div id="contactform-error-msg"></div>
                    <form method="post" action="#" name="contactform" id="contactform">
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <label>Name:</label>
                                <input type="text" name="full_name" class="form-control" id="Name"
                                       placeholder="Enter full name" required>
                            </div>
                            <div class="form-group col-xs-6">
                                <label>Email:</label>
                                <input type="email" name="email" class="form-control" id="email"
                                       placeholder="abc@xyz.com" required>
                            </div>
                            <div class="form-group col-xs-6 col-left-padding">
                                <label>Phone Number:</label>
                                <input type="text" name="phone" class="form-control" id="phnumber"
                                       placeholder="XXXX-XXXXXX" required>
                            </div>
                            <div class="textarea col-xs-12">
                                <label>Message:</label>
                                <textarea name="comments" placeholder="Enter a message" required></textarea>
                            </div>
                            <div class="col-xs-12">
                                <div class="comment-btn">
                                    <input type="submit" class="btn-blue btn-red" id="submit" value="Send Message">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-4">
                <div class="contact-about footer-margin">
                    <div class="about-logo">
                        <img src="{{asset('assets/images/logo.png')}}" alt="Image">
                    </div>
                    <h4>Travel With Us</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                    <div class="contact-location">
                        <ul>
                            <li><i class="flaticon-maps-and-flags" aria-hidden="true"></i> Location</li>
                            <li><i class="flaticon-phone-call"></i> (012)-345-6789</li>
                            <li><i class="flaticon-mail"></i> <a
                                    href="https://cyclonethemes.com/cdn-cgi/l/email-protection" class="__cf_email__"
                                    data-cfemail="196d766c6b776d6b786f7c75596d7c6a6d74787075377a7674">[email&#160;protected]</a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-social-links">
                        <ul>
                            <li class="social-icon"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            </li>
                            <li class="social-icon"><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            </li>
                            <li class="social-icon"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            </li>
                            <li class="social-icon"><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                            </li>
                            <li class="social-icon"><a href="#"><i class="fa fa-google" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="map">
    <div id="map" style="height: 350px; width: 100%;"></div>
</div>
@endsection
