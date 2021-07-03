@extends ('frontend.layouts.app')
@section('content')

    <!-- START SECTION BREADCRUMB -->
    <section class="breadcrumb-outer text-center nobackground">
        <div class="container">
            <div class="breadcrumb-content">
                <h2>About Us</h2>
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('homepage')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">About Us</li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="section-overlay"></div>
    </section>
    <!-- END SECTION BANNER -->

    <!-- START SECTION COURSE DETAIL -->
    <section class="bg_gray">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="text-center animation" data-animation="fadeInUp" data-animation-delay="0.01s">
                        <div class="heading_s1 text-center">
                            <h2 class="text-center">Why Choose Himalayan Shepherd</h2>
                        </div>
                        <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text</p>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($whychooseus as $whychooseus)
                    <div class="col-md-4">
                        <div class="icon_box text-center bg-white icon_box_style2 box_shadow2 radius_all_10 animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                            <div class="box_icon bg_danger mb-3">
                                <img src="{{asset($whychooseus->thumbnail_path)}}" alt="book" class="img img-fluid"/>
                            </div>
                            <div class="intro_desc">
                                <h5>{{$whychooseus->title}}</h5>
                                <p>{!! $whychooseus->content !!}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- END SECTION COURSE DETAIL -->



<!-- START SECTION ABOUT -->
<section class="overflow-hidden res_md_p_0">
	<div class="container-fluid">
    	<div class="row no-gutters align-items-center">
        	<div class="col-md-6 p-0" style="margin-top: 20px">
            	<div class="box_shadow1 bg-white overlap_section padding_eight_all">
                	<div class="animation" data-animation="fadeInLeft" data-animation-delay="0.02s">
                        <div class="heading_s1">
                          <h2>About Us</h2>
                        </div>

                        {!! $page->content !!}
                        <ul class="list_none list_item">
                        	<li>
                            	<div class="counter_content">
                                    <h3 class="h1 text_danger"><span class="counter">50+</span></h3>
                                    <h6>Destination</h6>
                                </div>
                            </li>
                            <li>
                            	<div class="counter_content">
                                    <h3 class="h1 text_light_green"><span class="counter">500+</span></h3>
                                    <h6>Customer Served</h6>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        	<div class="col-md-6">
            	<div class="animation" data-animation="fadeInRight" data-animation-delay="0.03s">
                	<div class="overlay_bg_30 about_img z_index_minus1">
                    	<img class="w-100" src="{{ asset($page->image_path)}}" alt="{{$page->title}}" class="img img-fluid"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION ABOUT -->

@stop
