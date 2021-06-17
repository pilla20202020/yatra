@extends('frontend.layouts.app')

@section('content')

    <!-- START SECTION BANNER -->
    <section id="home_banner_video" class="banner-style-1">
        <div class="video-banner">
            <video autoplay loop muted playsinline src="{{asset('assets/images/video.mp4')}}" type="video/mp4">

            </video>
        </div>
        <div class="video-banner-content">
            <div class="js_frm_subscribe">
                <div class="kenburns_061_slide slider-content">
                    <h1>You Have Been Never Closer to heaven NEPAL</h1>
                    <h2>exeperience the himalaya with us</h2>
                    <a href="tour-detail.php" class="btn-blue btn-red btn-style-1">Learn more</a>
                </div>
            </div>
        </div>
    </section>


    <div class="search-box clearfix bg-white">
        <div class="container">
            <div class="search-outer">
                <div class="search-content">
                    <form>
                        <div class="row">
                            <div class="col-md-3 col-xs-6">
                                <div class="table_item">
                                    <div class="form-group">
                                        <select name="custom-select-1" class="selectpicker form-control" tabindex="1">
                                            <option value="0">Destination</option>
                                            <option value="1">0</option>
                                            <option value="2">1</option>
                                            <option value="3">2</option>
                                            <option value="4">3</option>
                                            <option value="5">4</option>
                                        </select>
                                        <i class="flaticon-maps-and-flags"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-xs-6">
                                <div class="table_item">
                                    <div class="form-group">
                                        <select name="custom-select-2" class="selectpicker form-control" tabindex="1">
                                            <option value="0">Type</option>
                                            <option value="1">0</option>
                                            <option value="2">1</option>
                                            <option value="3">2</option>
                                            <option value="4">3</option>
                                            <option value="5">4</option>
                                        </select>
                                        <i class="flaticon-box"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-xs-6">
                                <div class="table_item">
                                    <div class="form-group">
                                        <div class='input-group date' id='datetimepicker1'>
                                            <input type='text' class="form-control" value="dd-mm-yyyy" />
                                            <i class="flaticon-calendar"></i>
                                            <span class="input-group-addon">
    <i class="fa fa-calendar" aria-hidden="true"></i>
    </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-xs-6">
                                <div class="table_item">
                                    <div class="search">
                                        <a href="#" class="btn-blue btn-red btn-style-1">SEARCH</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- END SECTION BANNER -->





<!-- START SECTION ABOUT -->
<section class="small_pt small_pb overflow-hidden ">
	<div class="container-fluid p-0 ">
    	<div class="row no-gutters align-items-center">
        	<div class="col-md-6">
            	<div class="box_shadow1 bg-white overlap_section padding_eight_all">
                	<div class="animation" data-animation="fadeInLeft" data-animation-delay="0.02s">
                        <div class="heading_s1">
                          <h2>About Us</h2>
                        </div>
                        <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary</p>
                        <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                        <ul class="list_none list_item">
                        	<li>
                            	<div class="counter_content">
                                    <h3 class="h1 text_danger"><span class="counter">6</span></h3>
                                    <h6>Sectors</h6>
                                </div>
                            </li>
                            <li>
                            	<div class="counter_content">
                                    <h3 class="h1 text_light_green"><span class="counter">20</span></h3>
                                    <h6>Clients</h6>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        	<div class="col-md-6">
            	<div class="animation" data-animation="fadeInRight" data-animation-delay="0.03s">
                	<div class="overlay_bg_30 about_img z_index_minus1">
                    	<img class="w-100" src="assets/images/about_bg.jpg" alt="about_img"/>
                    </div>
                	<a href="https://www.youtube.com/watch?v=7e90gBu4pas" class="video_popup video_play">
                    	<span class="ripple"><i class="ion-play ml-1"></i></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION ABOUT -->

<!-- START SECTION COUNTER -->
<section class="parallax_bg overlay_bg_blue_70" data-parallax-bg-image="assets/images/counter_bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-6 ">
                <div class="box_counter counter_style1 text_white text-center animation" data-animation="fadeInUp" data-animation-delay="0.02s">
                	<div class="counter_icon">
                    	<img src="assets/images/counter_icon1.png" alt="counter_icon1" />
                    </div>
                    <div class="counter_content">
                        <h3 class="counter_text"><span class="counter">6</span>+</h3>
                        <p>Sectors</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-6 ">
                <div class="box_counter counter_style1 text_white text-center animation" data-animation="fadeInUp" data-animation-delay="0.03s">
                    <div class="counter_icon">
                    	<img src="assets/images/counter_icon2.png" alt="counter_icon2" />
                    </div>
                    <div class="counter_content">
                        <h3 class="counter_text"><span class="counter">50</span></h3>
                        <p>Teams</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-6 ">
                <div class="box_counter counter_style1 text_white text-center animation" data-animation="fadeInUp" data-animation-delay="0.04s">
                    <div class="counter_icon">
                    	<img src="assets/images/counter_icon3.png" alt="counter_icon3" />
                    </div>
                    <div class="counter_content">
                        <h3 class="counter_text"><span class="counter">30</span>+</h3>
                        <p>Clients</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-6 ">
                <div class="box_counter counter_style1 text_white text-center animation" data-animation="fadeInUp" data-animation-delay="0.05s">
                	<div class="counter_icon">
                    	<img src="assets/images/counter_icon4.png" alt="counter_icon4" />
                    </div>
                    <div class="counter_content">
                        <h3 class="counter_text"><span class="counter">10</span>+</h3>
                        <p>Events</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION COUNTER -->




    <!-- START SECTION REGISTER -->
<section class="pb-0 background_bg bg_blue_dark" data-img-src="assets/images/pattern_bg.png">
	<div class="container">
    	<div class="row align-items-end">
        	<div class="col-lg-6 col-md-7">
            	<div class="register_form radius_all_10 text_white padding_eight_all animation" data-animation="fadeInLeft" data-animation-delay="0.02s">
                    <div class="heading_s1 heading_light">
                        <h2><span class="text_default">Contact Us</span></h2>
                    </div>

                    <form method="post" name="enq" action="{{route('send-contact')}}">
                                            @csrf
                                            <div class="row">
                                                <div class="form-group col-12">
                                                    <input required="required" placeholder="Enter Name" id="first-name" class="form-control" name="full_name" type="text">
                                                </div>
                                                <div class="form-group col-12">
                                                    <input required="required" placeholder="Enter Email" id="email" class="form-control" name="email_address" type="email">
                                                </div>
                                                <div class="form-group col-12">
                                                    <input required="required" placeholder="Enter Phone No." id="phone" class="form-control" name="phone_number" type="tel">
                                                </div>

                                                <div class="form-group col-lg-12">
                                                    <textarea required="required" placeholder="Message" id="description" class="form-control" name="message" rows="3"></textarea>
                                                </div>
                                                <div class="col-lg-12">
                                                    <button type="submit" title="Submit Your Message!" class="btn btn-default" name="submit" value="Submit">Submit</button>
                                                </div>
                                                <div class="col-lg-12 text-center">
                                                    <div id="alert-msg" class="alert-msg text-center"></div>
                                                </div>
                                            </div>
                                        </form>
                </div>
                <div class="large_divider"></div>
            </div>
            <div class="col-lg-6 col-md-5">
            	<div class="text-center animation" data-animation="fadeInRight" data-animation-delay="0.03s">
            		<img src="assets/images/girl_img.png" alt="girl_img" />
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION REGISTER -->



@stop
