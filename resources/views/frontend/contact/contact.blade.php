@extends ('frontend.layouts.app')
@section('content')

<!-- START SECTION BREADCRUMB -->
<section class="breadcrumb-outer text-center nobackground">
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
                @if(Illuminate\Support\Facades\Session::has('success'))
                    <div class="alert alert-success">
                        {{Illuminate\Support\Facades\Session::get('success')}}
                    </div>
                @endif
                <div id="contact-form" class="contact-form">
                    <div id="contactform-error-msg"></div>
                    <form method="post" action="{{route('send-contact')}}" name="contactform" id="contactform">
                        @csrf
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <label>Name:</label>
                                <input type="text" name="fullname" class="form-control" id="Name"
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
                                <textarea name="message" placeholder="Enter a message" required></textarea>
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
                    <p>{{setting('description')}}</p>
                    <div class="contact-location">
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
        </div>
    </div>
</section>
<div class="map">
    <div id="map" style="height: 350px; width: 100%;"></div>
</div>
@endsection
