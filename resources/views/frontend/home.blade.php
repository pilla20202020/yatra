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



    <div class="search-content-slider">
        <div class="section-title text-center">
            <h2>Search Your Best Destination</h2>
            <p>Himalayan Shepherd offers wide ranges of climbing, Trekking, Adventure , Cultural and Ethical trips.</p>
        </div>
        <div class="container">
            <div class="">
                <div class="">
                    <form action="{{route('search')}}">
                        <div class="row">
                            <div class="col-md-3 col-12">
                                <div class="table_item">
                                    <div class="form-group">
                                        <select name="package_type" class="form-control" tabindex="1">
                                            <option disabled selected>Select Package Type</option>
                                            @foreach ($categories as $category)
                                                <option value="{{$category->id}}">{{$category->title}}</option>
                                            @endforeach
                                        </select>
                                        <i class="flaticon-maps-and-flags"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12 nopadding">
                                <div class="table_item">
                                    <div class="form-group">
                                        <i class="flaticon-maps-and-flags"></i>
                                        <input type="text" class="form-control" placeholder="Enter a keyword" name="keyword">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-xs-6">
                                <div class="table_item">
                                    <div class="search">
                                        <button type="submit" class="btn-blue btn-red btn-style-1 ml-2">SEARCH</button>
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


    {{-- Amazing Tour --}}
<section class="amazing-tours">
    <div class="container">
        <div class="section-title text-center">
            <h2>Amazing Tours</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Duis aute irure dolor in reprehenderit..</p>
        </div>
        <div class="row">

            {{-- @foreach ($trekkings as $trekking)
                <div class="col-md-4 col-12">
                    <div class="at-item box-item">
                        <div class="at-image">
                            <img src="{{asset($trekking->image_path)}}" alt="Image">
                            <div class="at-overlay"></div>
                        </div>
                        <div class="at-content">
                            <h3><a href="#">{{$trekking->title}}</a></h3>
                            <span>{{$trekking->category->title}}</span>
                        </div>
                    </div>
                </div>
            @endforeach --}}
            @foreach($trekkings as $key => $trekking)
                @if ($loop->first || $loop->last)
                    <div class="col-md-6 col-12">
                        <div class="at-item box-item">
                            <div class="at-image">
                                <img src="{{asset($trekking->image_path)}}" alt="Image">
                                <div class="at-overlay"></div>
                            </div>
                            <div class="at-content">
                                <h3><a href="{{route('package.detail',$trekking->slug)}}">{{$trekking->title}}</a></h3>
                                <span>{{$trekking->category->title}}</span>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="col-md-3 col-12">
                        <div class="at-item box-item">
                            <div class="at-image">
                                <img src="{{asset($trekking->image_path)}}" alt="Image">
                                <div class="at-overlay"></div>
                            </div>
                            <div class="at-content">
                                <h3><a href="{{route('package.detail',$trekking->slug)}}">{{$trekking->title}}</a></h3>
                                <span>{{$trekking->category->title}}</span>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>

        {{-- <div class="row">
            <div class="col-md-3 col-xs-6">
                <div class="at-item box-item">
                    <div class="at-image">
                        <img src="images/at1.jpg" alt="Image">
                        <div class="at-overlay"></div>
                    </div>
                    <div class="at-content">
                        <h3><a href="#">Kenya</a></h3>
                        <span>The colosseum</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-xs-6">
                <div class="at-item box-item">
                    <div class="at-image">
                        <img src="images/at3.jpg" alt="Image">
                        <div class="at-overlay"></div>
                    </div>
                    <div class="at-content">
                        <h3><a href="#">Greece</a></h3>
                        <span>The colosseum</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xs-12">
                <div class="at-item box-item">
                    <div class="at-image">
                        <img src="images/at2.jpg" alt="Image">
                        <div class="at-overlay"></div>
                    </div>
                    <div class="at-content">
                        <h3><a href="#">Iceland</a></h3>
                        <span>The colosseum</span>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
</section>
{{-- Amazing Tour --}}


{{-- Last Min Deals --}}
    <section class="deals">
        <div class="container">
            <div class="section-title section-title-white text-center">
                <h2>Last Minute Deals</h2>
                <div class="section-icon">
                    <i class="flaticon-diamond"></i>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua.Duis aute irure dolor in reprehenderit..</p>
            </div>
            <div class="deals-outer">
                <div class="row deals-slider slider-button">
                    @foreach ($deals as $deal)
                        <div class="col-md-4">
                            <div class="deals-item">
                                <div class="deals-item-outer">
                                    <div class="deals-image">
                                        <img src="{{asset($deal->package->image_path)}}" alt="Image">
                                    </div>
                                    <div class="deal-content">
                                        <h3>{{$deal->package->title}}</h3>
                                        <p>{!! $deal->package->description !!}</p>
                                        <a href="#" class="btn-blue btn-red">More Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
        <div class="section-overlay"></div>
    </section>
{{-- Last Min Deals --}}


{{-- Testimonial --}}
<section class="testimonials">
    <div class="section-title text-center">
        <h2>Best Rated Travel Agency</h2>
        <div class="section-icon section-icon-white">
            <i class="flaticon-diamond"></i>
        </div>
    </div>

    <div id="testimonial_094" class="carousel slide testimonial_094_indicators thumb_scroll_x swipe_x ps_easeOutSine"
         data-ride="carousel" data-pause="hover" data-interval="3000" data-duration="1000">

        <ol class="carousel-indicators">
            @foreach ($testimonials as $key => $testimonial)
                <li data-target="#testimonial_094" data-slide-to="0" class="@if($loop->first) active @endif">
                    <img src="{{asset($testimonial->image_path)}}">
                </li>
            @endforeach
        </ol>

        <div class="carousel-inner" role="listbox">

            @foreach ($testimonials as $testimonial)
                <div class="item @if($loop->first) active @endif">
                    <div class="{{$testimonial->slug}}">
                        <p class="text-center">{{$testimonial->content}}</p>
                        {{-- <div class="deal-rating">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star-o"></span>
                            <span class="fa fa-star-o"></span>
                        </div> --}}
                        <h5 class="text-center">{{$testimonial->title}}</h5>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</section>
{{-- Testimonial --}}




@stop
