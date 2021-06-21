@extends('frontend.layouts.app')

@section('content')

    <!-- START SECTION BANNER -->
    <section id="home_banner_video" class="banner-style-1">
        <div class="video-banner">
            <video autoplay loop muted playsinline src="{{ asset('assets/images/video.mp4') }}" type="video/mp4">

            </video>
        </div>
        <div class="video-banner-content">
            <div class="js_frm_subscribe">
                <div class="kenburns_061_slide slider-content">
                    <h1> Closer To Heaven “Nepal”</h1>
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
                    <form action="{{ route('search') }}">
                        <div class="row">
                            <div class="col-md-3 col-12">
                                <div class="table_item">
                                    <div class="form-group">
                                        <select name="package_type" class="form-control" tabindex="1">
                                            <option disabled selected>Select Package Type</option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->title }}</option>
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
                                        <input type="text" class="form-control" placeholder="Enter a keyword"
                                            name="keyword">
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
                <h2>WELCOME TO THE HIMALAYAS</h2>
                <p>Himalayan Shepherd offers wide ranges of climbing, Trekking, Adventure , Cultural and Ethical trips in various regions of Nepal, Bhutan ,Tibet, India & Pakistan. Our climbing and expedition trips include giant 8000 meter peaks, 7000 meter peaks, 6000 meter peaks and new peaks. Experience the great Himalaya expedition with the top team in the world.</p>
            </div>
            <div class="row">
                @foreach ($packages as $package)
                    @if ($loop->first || $loop->last)
                        <div class="col-md-6 col-12">
                            <div class="at-item box-item">
                                <div class="at-image">
                                    <img src="{{ asset($package->image_path) }}" alt="Image">
                                    <div class="at-overlay"></div>
                                </div>
                                <div class="at-content">
                                    <h3><a
                                            href="{{ route('package.detail', $package->slug) }}">{{ $package->title }}</a>
                                    </h3>
                                    <span>{{ $package->category->title }}</span>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="col-md-3 col-12">
                            <div class="at-item box-item">
                                <div class="at-image">
                                    <img src="{{ asset($package->image_path) }}" alt="Image">
                                    <div class="at-overlay"></div>
                                </div>
                                <div class="at-content">
                                    <h3><a
                                            href="{{ route('package.detail', $package->slug) }}">{{ $package->title }}</a>
                                    </h3>
                                    <span>{{ $package->category->title }}</span>
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
                                        <img src="{{ asset($deal->package->image_path) }}" alt="Image">
                                    </div>
                                    <div class="deal-content">
                                        <h3>{{ $deal->package->title }}</h3>
                                        <p>{!! $deal->package->description !!}</p>
                                        <a href="{{ route('package.detail', $deal->package->slug) }}"
                                            class="btn-blue btn-red">More Details</a>
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

    {{-- Destination Featured --}}
    {{-- <section class="full-tours">
    <div class="container">
        <div class="section-title text-center">
            <h2>Destination Featured</h2>
            <div class="back-title"><h3>Destination</h3></div>
        </div>
    </div>
    <div class="row">
        <?php $packages = App\Models\Package\Package::where('is_featured', 1)
            ->latest()
            ->take(5)
            ->get(); ?>
        @if (isset($packages))
            @foreach ($packages as $package)
            @if ($loop->first)
                <div class="col-md-6 col-sm-12">
                    <div class="ft-item">
                        <div class="ft-image">
                            <img src="{{asset($package->image_path)}}" alt="Image">
                            <div class="ft-overlay"></div>
                        </div>
                        <div class="ft-content">
                            <h2><a href="#">{{$package->title}}</a></h2>
                            <p>Starting from <span>Rs. {{$package->price}}</span></p>
                        </div>
                    </div>
                </div>
            @else
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="ft-item">
                        <div class="ft-image">
                            <img src="{{asset($package->image_path)}}" alt="Image">
                            <div class="ft-overlay"></div>
                        </div>
                        <div class="ft-content">
                            <h2><a href="#">{{$package->title}}</a></h2>
                            <p>Starting from <span>Rs. {{$package->price}}</span></p>
                        </div>
                    </div>
                </div>
            @endif
            @endforeach
        @endif
    </div>
</section> --}}
    {{-- Destination Featured --}}

    {{-- Bucket List --}}
    <section id="bucket-list" class="bucket-list">
        <div class="bucket-icons">
            <div class="container">
                <div class="section-title text-center">
                    <h2>Top up your Bucket List</h2>
                    <div class="section-icon">
                        <i class="flaticon-diamond"></i>
                    </div>
                    <p>Fill Your Bucket with The Best Adventure</p>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="mt_filter">
                            <ul class="list-inline text-center filter">
                                <li class="active"><a href="#" data-filter=".adventure"><i
                                            class="flaticon-bicycle"></i><span>Adventure</span></a></li>
                                <li><a href="#" data-filter=".ethical"><i class="flaticon-sailboat"></i><span>Ethical &
                                            Eco</span></a></li>
                                <li><a href="#" data-filter=".camping"><i class="flaticon-wolf"></i><span>CAMPING
                                            Trails</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bucket-content">
            <div class="container">
                <div class="row isotopeContainer">
                    <?php $packages = App\Models\Package\Package::where('package_type', 'adventure')->get();
                    ?>
                    @foreach ($packages as $package)
                        <div class="col-md-6 col-xs-12 no-padding isotopeSelector adventure">
                            <div class="hovereffect-bucket bucket-item">
                                <div class="bucket-image"><img src="{{ asset($package->image_path) }}" alt="image"
                                        class="img-responsive" />
                                </div>
                                <div class="bucket-item-content">
                                    <h3><a href="{{route('package.detail',$package->slug)}}">{{ $package->title }}</a></h3>
                                    <span>{{ $package->trip_duration }} Days </span><span> Rs.
                                        {{ $package->price }}</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <?php $packages = App\Models\Package\Package::where('package_type', 'ethical')->get();
                    ?>
                    @foreach ($packages as $package)
                        <div class="col-md-6 col-xs-12 no-padding isotopeSelector ethical">
                            <div class="hovereffect-bucket bucket-item">
                                <div class="bucket-image"><img src="{{ asset($package->image_path) }}" alt="image"
                                        class="img-responsive" />
                                </div>
                                <div class="bucket-item-content">
                                    <h3><a href="{{route('package.detail',$package->slug)}}">{{ $package->title }}</a></h3>
                                    <span>{{ $package->trip_duration }} Days </span><span> Rs.
                                        {{ $package->price }}</span>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <?php $packages = App\Models\Package\Package::where('package_type', 'camping')->get();
                    ?>
                    @foreach ($packages as $package)
                        <div class="col-md-6 col-xs-12 no-padding isotopeSelector camping">
                            <div class="hovereffect-bucket bucket-item">
                                <div class="bucket-image"><img src="{{ asset($package->image_path) }}" alt="image"
                                        class="img-responsive" />
                                </div>
                                <div class="bucket-item-content">
                                    <h3><a href="{{route('package.detail',$package->slug)}}">{{ $package->title }}</a></h3>
                                    <span>{{ $package->trip_duration }} Days </span><span> Rs.
                                        {{ $package->price }}</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="section-overlay"></div>
            </div>
        </div>
    </section>
    {{-- Bucket List --}}


    {{-- Our Leader --}}
    <section class="top-destinations">
        <div class="container">
            <div class="section-title text-center">
                <h2>Our Leaders</h2>
                <div class="section-icon">
                    <i class="flaticon-diamond"></i>
                </div>
                <p>Most Experienced and Accomplished at your Service</p>
            </div>
            <div class="row">

                <div class="col-md-4 col-xs-4">
                    @foreach ($teams as $key => $team)
                        @if($key == 0)
                            <div class="top-destination-item">
                                <img class="img-responsive" src="{{asset($team->image_path)}}" alt="Image">
                                <div class="overlay">
                                    <h2><a href="#">{{$team->title}}</a></h2>
                                    <p>{{$team->position}}</p>
                                </div>
                            </div>
                        @endif

                        @if($key == 1)
                        <div class="top-destination-item">
                            <img class="img-responsive" src="{{asset($team->image_path)}}" alt="Image">
                            <div class="overlay">
                                <h2><a href="#">{{$team->title}}</a></h2>
                                <p>{{$team->position}}</p>
                            </div>
                        </div>
                        @endif
                    @endforeach
                </div>

                @foreach ($teams as $key => $team)
                    @if($key == 2)
                        <div class="col-md-4 col-xs-4">
                            <div class="top-destination-item">
                                <img class="img-responsive" src="{{asset($team->image_path)}}" alt="Image">
                                <div class="overlay overlay-full">
                                    <h2><a href="#">{{$team->title}}</a></h2>
                                    <p>{{$team->position}}</p>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach

                <div class="col-md-4 col-xs-4">
                    @foreach ($teams as $key => $team)
                        @if($key == 3)
                            <div class="top-destination-item">
                                <img class="img-responsive" src="{{asset($team->image_path)}}" alt="Image">
                                <div class="overlay">
                                    <h2><a href="#">{{$team->title}}</a></h2>
                                    <p>{{$team->position}}</p>
                                </div>
                            </div>
                        @endif

                        @if($key == 4)
                        <div class="top-destination-item">
                            <img class="img-responsive" src="{{asset($team->image_path)}}" alt="Image">
                            <div class="overlay">
                                <h2><a href="#">{{$team->title}}</a></h2>
                                <p>{{$team->position}}</p>
                            </div>
                        </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    {{-- Our Leader --}}


    {{-- Testimonial --}}
    <section class="testimonial-1">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="testimonial-inner">
                        <div class="testimonial-title">
                            <h3>Testimonials</h3>
                        </div>

                        <div id="testimonial_095"
                            class="carousel slide testimonial_095_indicators testimonial_095_control_button thumb_scroll_x swipe_x ps_easeOutSine"
                            data-ride="carousel" data-pause="hover" data-interval="5000" data-duration="2000">

                            <ol class="carousel-indicators">
                                @foreach ($testimonials as $key => $testimonial)
                                    <li data-target="#testimonial_095" data-slide-to="0" class="@if ($loop->first) active @endif">
                                    </li>
                                @endforeach
                            </ol>

                            <div class="carousel-inner" role="listbox">
                                @foreach ($testimonials as $testimonial)
                                    <div class="item @if ($loop->first) active @endif"">
                                        <div class="testimonial_095_slide">
                                            <p>{{ $testimonial->content }}</p>
                                            <div class="testimonial-image">
                                                <img src="{{ asset($testimonial->image_path) }}" alt="Image">
                                            </div>
                                            <h5><a href="#">{{ $testimonial->title }}</a></h5>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                            <a class="left carousel-control" href="#testimonial_095" role="button" data-slide="prev">
                                <span class="fa fa-chevron-left"></span>
                            </a>

                            <a class="right carousel-control" href="#testimonial_095" role="button" data-slide="next">
                                <span class="fa fa-chevron-right"></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="video-content">
                        <iframe src="https://www.youtube.com/embed/lJ87yD_8u3U"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
        <div class="testimonial-overlay"></div>
    </section>
    <section class="countdown-section">
        <div class="container">
            <div class="countdown-title">
                <h2>Special Expedition , Discover <span>Virgin</span> Mountains of The Himalaya <span>Get a chance to summit
                        untouched Mountains.</span></h2>
                <p>Be the first to discover! Hurry up</p>
                <a href="{{ route('contact') }}" class="btn btn-red btn-contactus">Contact Us</a>
            </div>
            <div class="countdown countdown-container container">
                <p id="demo"></p>
            </div>
        </div>
        <div class="testimonial-overlay"></div>
    </section>
    {{-- Testimonial --}}

     {{-- Trending Activities --}}
     <section class="top-destinations-1">
        <div class="container">
            <div class="section-title text-center">
                <h2>Trending Activities</h2>
            </div>
            <div class="row">
                <?php $packages = App\Models\Package\Package::where('is_trending', 1)
                ->latest()
                ->take(3)
                ->get(); ?>
                @if (isset($packages))
                    @foreach ($packages as $package)
                        <div class="col-md-4 col-sm-12">
                            <div class="destination-item-1 box-item">
                                <div class="destination-image-1">
                                    <img src="{{ asset($package->image_path) }}" alt="Image">
                                </div>
                                <div class="destination-content-1">
                                    <h3><a
                                            href="{{ route('package.detail', $package->slug) }}">{{ $package->title }}</a>
                                    </h3>
                                    <p class="package-days1"><i class="flaticon-time"></i> {{ $package->trip_duration }}
                                        Days</p>
                                    <div class="tour-price">
                                        <span class="tour-tail">Rs. {{ $package->price }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>
    {{-- Trending Activities --}}




@stop
