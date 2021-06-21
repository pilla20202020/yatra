@extends ('frontend.layouts.app')


@section('content')

<section class="breadcrumb-outer text-center nobackground">
    <div class="container">
        <div class="breadcrumb-content">
            <h2>{{$package->title}}</h2>
            <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Destinations</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{$package->title}}</li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="section-overlay"></div>
    <div class="tabs-navbar">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul id="tabs" class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#description">Description</a></li>
                        <li><a data-toggle="tab" href="#gallery">Gallery</a></li>
                        <li><a data-toggle="tab" href="#map">Map</a></li>
                        <li><a data-toggle="tab" href="#timeline">Tour Timeline</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="main-content detail detail-tabs">
    <div class="container">
        <div class="main-content-inner">
            <div class="row">
                <div id="content" class="col-md-8 content-desktop">
                    <div class="tab-content">
                        <div id="description" class="tab-pane fade in active">
                            <div class="detail-info">
                                <div class="detail-info-content clearfix">
                                    <h2>{{$package->title}}</h2>
                                    <p class="detail-info-price">
                                        <span class="bold">
                                            @if($deal)
                                                Rs. {{$deal->offer_price}}
                                            @else
                                                Rs. {{$package->price}}
                                            @endif
                                        </span>
                                    </p>
                                </div>
                            </div>
                            <div class="description detail-box">
                                <div class="description-content">
                                    <p>{!! $package->description !!}</p>
                                    <table>
                                        <thead>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td class="title">Departure</td>
                                            <td><i class="fa fa-map-marker" aria-hidden="true"></i> {{$package->departure}}</td>
                                        </tr>
                                        <tr>
                                            <td class="title">Departure Time</td>
                                            <td><i class="fa fa-clock-o" aria-hidden="true"></i> {{$package->departure_time}}</td>
                                        </tr>
                                        <tr>
                                            <td class="title">Maximum travellers</td>
                                            <td><i class="fa fa-user-o" aria-hidden="true"></i> {{$package->max_group_size}}</td>
                                        </tr>
                                        {{-- <tr>
                                            <td class="title">Languages</td>
                                            <td><i class="fa fa-file-audio-o" aria-hidden="true"></i> English, Thai, Malayt</td>
                                        </tr> --}}
                                        <tr>
                                            <td class="title">Includes</td>
                                            <td>
                                                <ul>
                                                    <li><i class="fa fa-check" aria-hidden="true"></i> {!! $package->cost_includes !!}</li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="title">Excludes</td>
                                            <td class="excludes">
                                                <ul>
                                                    <li><i class="fa fa-times" aria-hidden="true"></i> {!! $package->cost_excludes !!}</li>
                                                </ul>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div id="gallery" class="tab-pane fade">
                            <div class="gallery detail-box">

                                <div id="in_th_030" class="carousel slide in_th_brdr_img_030 thumb_scroll_x swipe_x ps_easeOutQuint" data-ride="carousel" data-pause="hover" data-interval="4000" data-duration="2000">

                                    <ol class="carousel-indicators">

                                        <li data-target="#in_th_030" data-slide-to="0" class="active">
                                            <img src="{{asset($package->image_path)}}" alt="in_th_030_01_sm" />
                                        </li>

                                        @if($package->image1)
                                            <li data-target="#in_th_030" data-slide-to="1">
                                                <img src="{{ asset($package->image_path1)}}" alt="in_th_030_02_sm" />
                                            </li>
                                        @endif

                                        @if($package->image2)
                                            <li data-target="#in_th_030" data-slide-to="2">
                                                <img src="{{ asset($package->image_path2)}}" alt="in_th_030_03_sm" />
                                            </li>
                                        @endif
                                    </ol>

                                    <div class="carousel-inner" role="listbox">
                                        <div class="item active">
                                            <img src="{{asset($package->image_path)}}" alt="in_th_030_01" />
                                        </div>

                                        @if($package->image1)
                                            <div class="item">
                                                <img src="{{ asset($package->image_path1)}}" alt="in_th_030_02" />
                                            </div>
                                        @endif

                                        @if($package->image2)
                                            <div class="item">
                                                <img src="{{ asset($package->image_path2)}}" alt="in_th_030_03" />
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="map" class="tab-pane fade">
                            <div class="location-map detail-box">
                                <div class="map-frame">
                                    <iframe src="{{$package->location_map}}" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

                                </div>
                            </div>
                        </div>

                        <div id="timeline" class="tab-pane fade">
                            <div class="detail-timeline detail-box">
                                <div class="timeline-content">
                                    <ul class="timeline">
                                        @foreach ($itineraries as $itinerary)
                                            <li>
                                                <div class="direction-r">
                                                    <div class="day-wrapper">
                                                        <span>{{$itinerary->day}}</span>
                                                    </div>
                                                    <div class="flag-wrapper">
                                                        <span class="flag">{{$itinerary->itinerary_title}}</span>
                                                    </div>
                                                    <div class="desc">
                                                        <p>{!! $itinerary->itinerary_description !!}</p>
                                                    </div>
                                                </div>
                                            </li>
                                        @endforeach

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true"></div>
                </div>
                <div id="content" class="col-md-8 content-mobile">
                    <div class="detail-content content-wrapper">
                        <div class="detail-info">
                            <div class="detail-info-content clearfix">
                                <h2>Everest Base Camp</h2>
                                <p class="detail-info-price"><span class="bold">$659</span></p>
                                <div class="deal-rating">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star-o"></span>
                                    <span class="fa fa-star-o"></span>
                                </div>
                            </div>
                        </div>
                        <div class="gallery detail-box">

                            <div id="in_th_030" class="carousel slide in_th_brdr_img_030 thumb_scroll_x swipe_x ps_easeOutQuint" data-ride="carousel" data-pause="hover" data-interval="4000" data-duration="2000">

                                <ol class="carousel-indicators">

                                    <li data-target="#in_th_030" data-slide-to="0" class="active">

                                        <img src="images/detailslider1.jpg" alt="in_th_030_01_sm" />
                                    </li>

                                    <li data-target="#in_th_030" data-slide-to="1">

                                        <img src="images/detailslider2.jpg" alt="in_th_030_02_sm" />
                                    </li>

                                    <li data-target="#in_th_030" data-slide-to="2">

                                        <img src="images/detailslider3.jpg" alt="in_th_030_03_sm" />
                                    </li>
                                    <li data-target="#in_th_030" data-slide-to="3">

                                        <img src="images/detailslider4.jpg" alt="in_th_030_03_sm" />
                                    </li>
                                </ol>

                                <div class="carousel-inner" role="listbox">

                                    <div class="item active">

                                        <img src="images/detailslider1.jpg" alt="in_th_030_01" />
                                    </div>


                                    <div class="item">

                                        <img src="images/detailslider2.jpg" alt="in_th_030_02" />
                                    </div>


                                    <div class="item">

                                        <img src="images/detailslider3.jpg" alt="in_th_030_03" />
                                    </div>

                                    <div class="item">

                                        <img src="images/detailslider4.jpg" alt="in_th_030_03" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="description detail-box">
                            <div class="detail-title">
                                <h3>Description</h3>
                            </div>
                            <div class="description-content">
                                <p>Brazil’s view takes you through clouds of mist and the opportunity to see these 275 falls, spanning nearly two miles! Argentina’s side allows you to walk along the boardwalk network and embark on a jungle train through the forest for unforgettable views. Hear the deafening roar and admire the brilliant rainbows created by the clouds of spray, and take in the majesty of this wonder of the world. From vibrant cities to scenic beauty, this vacation to Rio de Janeiro, Iguassu Falls, and Buenos Aires will leave you with vacation memories you’ll cherish for life.</p>
                                <table>
                                    <thead>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="title">Departure</td>
                                        <td><i class="fa fa-map-marker" aria-hidden="true"></i> San Francisco International Airport</td>
                                    </tr>
                                    <tr>
                                        <td class="title">Departure Time</td>
                                        <td><i class="fa fa-clock-o" aria-hidden="true"></i> Please arrive by 10:20 AM for a prompt departure at 10:50 AM</td>
                                    </tr>
                                    <tr>
                                        <td class="title">Maximum travellers</td>
                                        <td><i class="fa fa-user-o" aria-hidden="true"></i> 23</td>
                                    </tr>
                                    <tr>
                                        <td class="title">Languages</td>
                                        <td><i class="fa fa-file-audio-o" aria-hidden="true"></i> English, Thai, Malayt</td>
                                    </tr>
                                    <tr>
                                        <td class="title">Includes</td>
                                        <td>
                                            <ul>
                                                <li><i class="fa fa-check" aria-hidden="true"></i> Airfare</li>
                                                <li><i class="fa fa-check" aria-hidden="true"></i> Transportation</li>
                                                <li><i class="fa fa-check" aria-hidden="true"></i> Professional Guide</li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="title">Excludes</td>
                                        <td class="excludes">
                                            <ul>
                                                <li><i class="fa fa-times" aria-hidden="true"></i> Departure Taxes</li>
                                                <li><i class="fa fa-times" aria-hidden="true"></i> Entry Fees</li>
                                                <li><i class="fa fa-times" aria-hidden="true"></i> Insurance</li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="title">Popular Places</td>
                                        <td>
                                            <ul>
                                                <li><i class="fa fa-map-marker" aria-hidden="true"></i> Eiffel Tower</li>
                                                <li><i class="fa fa-map-marker" aria-hidden="true"></i> Eiffel Tower</li>
                                                <li><i class="fa fa-map-marker" aria-hidden="true"></i> Eiffel Tower</li>
                                            </ul>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="location-map detail-box">
                            <div class="detail-title">
                                <h3>Location Map</h3>
                            </div>
                            <div class="map-frame">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28185.510535377554!2d86.90746548742861!3d27.98811904127681!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39e854a215bd9ebd%3A0x576dcf806abbab2!2z4KS44KSX4KSw4KSu4KS-4KSl4KS-!5e0!3m2!1sne!2snp!4v1544516755007" style="border:0" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="detail-timeline detail-box">
                            <div class="detail-title">
                                <h3>Tour Timeline</h3>
                            </div>
                            <div class="timeline-content">
                                <ul class="timeline">

                                    <li>
                                        <div class="direction-r">
                                            <div class="day-wrapper">
                                                <span>1</span>
                                            </div>
                                            <div class="flag-wrapper">
                                                <span class="flag">Day 1 - 2 : Flights to Kathmandu.</span>
                                            </div>
                                            <div class="desc">
                                                <p>Passenger flights to Lukla. Begin the trek through the Khumbu to Base Camp.Tourist attractions people foreign sleep overnight housing. Gerimrany group discount tour operator. Airplane couchsurfing Moi scow ma ps uncharted luxury train guest tour operator German y busre laxation. Paris overnight Japan Tripit territory international carren tal Pacific outdoor Turkey. Country international to urist attractions mil es train Moscow guide. Japan horse riding money Bacel ona Buda pest yach.</p>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="direction-r">
                                            <div class="day-wrapper">
                                                <span>3</span>
                                            </div>
                                            <div class="flag-wrapper">
                                                <span class="flag">Day 3 : Arrive Kathmandu</span>
                                            </div>
                                            <div class="desc">
                                                <p>Arrive in Kathmandu and relax while enjoying the color and energy of Nepal’s capital city. Duffels of personal climbing gear and high-altitude clothing will be collected for the cargo flights to Lukla and will be waiting for you at Base Camp. </p>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="direction-r">
                                            <div class="day-wrapper">
                                                <span>4</span>
                                            </div>
                                            <div class="flag-wrapper">
                                                <span class="flag">Day 4 - 5 : Enjoy Kathmandu</span>
                                            </div>
                                            <div class="desc">
                                                <p>Enjoy Kathmandu with a city tour and attend any governmental and media affairs involving team members.Tourist attractions people foreign sleep overnight housing. Gerimrany group discount tour operator. Airplane couchsurfing Moi scow ma ps uncharted luxury train guest tour operator German y busre laxation. Paris overnight Japan Tripit territory international carren tal Pacific outdoor Turkey. Country international to urist attractions mil es train Moscow guide. Japan horse riding money Bacel ona Buda pest yach.</p>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="direction-r">
                                            <div class="day-wrapper">
                                                <span>6</span>
                                            </div>
                                            <div class="flag-wrapper">
                                                <span class="flag">Day 6 : Fly to Lukla</span>
                                            </div>
                                            <div class="desc">
                                                <p>Passenger flights to Lukla. Begin the trek through the Khumbu to Base Camp.Tourist attractions people foreign sleep overnight housing. Gerimrany group discount tour operator. Airplane couchsurfing Moi scow ma ps uncharted luxury train guest tour operator German y busre laxation. Paris overnight Japan Tripit territory international carren tal Pacific outdoor Turkey. Country international to urist attractions mil es train Moscow guide. Japan horse riding money Bacel ona Buda pest yach.</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="direction-r">
                                            <div class="day-wrapper">
                                                <span>7</span>
                                            </div>
                                            <div class="flag-wrapper">
                                                <span class="flag">Day 7 - 15 : Trek to Base Camp</span>
                                            </div>
                                            <div class="desc">
                                                <p>Trek to Base Camp, taking plenty of time to acclimatize and to visit the Sherpa families and support facilities that will become increasingly important during our expedition. We will spend several days in Namche ahead of most trekkers, and will visit the monasteries in Tengboche and Pangboche. Additional acclimatization days are scheduled at Namche (11,400ft/3,475m) and Pheriche (14,000ft/4,267m).</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="top-attractions detail-box">
                            <div class="detail-title">
                                <h3>Hotels and Availabilities</h3>
                            </div>
                            <div class="top-attraction-content">
                                <div class="att-item clearfix">
                                    <div class="att-image">
                                        <img src="images/bucket1.jpg" alt="Images">
                                    </div>
                                    <div class="att-content">
                                        <div class="att-content-left">
                                            <h4>Phulay Bay Resort</h4>
                                            <ul>
                                                <li><i class="fa fa-check" aria-hidden="true"></i> Free Wifi</li>
                                                <li><i class="fa fa-check" aria-hidden="true"></i> Free Parking</li>
                                                <li><i class="fa fa-check" aria-hidden="true"></i> Swimming Pool</li>
                                            </ul>
                                        </div>
                                        <div class="att-content-right">
                                            <p>Starting from <span class="bold">Rs. 1500</span></p>
                                            <p>1 night / 3 person</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="att-item clearfix">
                                    <div class="att-image">
                                        <img src="images/bucket2.jpg" alt="Images">
                                    </div>
                                    <div class="att-content">
                                        <div class="att-content-left">
                                            <h4>Phulay Bay Resort</h4>
                                            <ul>
                                                <li><i class="fa fa-check" aria-hidden="true"></i> Free Wifi</li>
                                                <li><i class="fa fa-check" aria-hidden="true"></i> Free Parking</li>
                                                <li><i class="fa fa-check" aria-hidden="true"></i> Swimming Pool</li>
                                                <li><i class="fa fa-check" aria-hidden="true"></i> Daily Housekeeping</li>
                                                <li><i class="fa fa-check" aria-hidden="true"></i> Restaurant Bar and Lounge</li>
                                            </ul>
                                        </div>
                                        <div class="att-content-right">
                                            <p>Starting from <span class="bold">Rs. 1500</span></p>
                                            <p>1 night / 3 person</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="att-item clearfix">
                                    <div class="att-image">
                                        <img src="images/bucket3.jpg" alt="Images">
                                    </div>
                                    <div class="att-content">
                                        <div class="att-content-left">
                                            <h4>Phulay Bay Resort</h4>
                                            <ul>
                                                <li><i class="fa fa-check" aria-hidden="true"></i> Free Wifi</li>
                                                <li><i class="fa fa-check" aria-hidden="true"></i> Free Parking</li>
                                                <li><i class="fa fa-check" aria-hidden="true"></i> Swimming Pool</li>
                                            </ul>
                                        </div>
                                        <div class="att-content-right">
                                            <p>Starting from <span class="bold">Rs. 1500</span></p>
                                            <p>1 night / 3 person</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="comments detail-box">
                            <div class="detail-title">
                                <h3>Comments</h3>
                            </div>
                            <div class="comment-content">
                                <div class="comment-item">
                                    <div class="row">
                                        <div class="col-md-3 col-sm-4">
                                            <div class="comment-image">
                                                <img src="images/comment.jpg" alt="Images">
                                                <h4><a href="#">Peter Parker</a></h4>
                                                <span class="comment-date">(18 Dec 2018)</span>
                                                <a class="btn-blue btn-red" href="#">Reply</a>
                                            </div>
                                        </div>
                                        <div class="col-md-9 col-sm-8">
                                            <div class="comment-desc">
                                                <span class="travel-date"> Travelled On : 25 March 2018</span>
                                                <div class="deal-rating">
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star-o"></span>
                                                    <span class="fa fa-star-o"></span>
                                                </div>
                                                <p>Trek to Base Camp, taking plenty of time to acclimatize and to visit the Sherpa families and support facilities that will become increasingly important during our expedition. We will spend several days in Namche ahead of most trekkers, and will visit the monasteries in Tengboche and Pangboche. </p>
                                            </div>
                                            <div class="comment-item comment-reply">
                                                <div class="row">
                                                    <div class="col-md-3 col-sm-4">
                                                        <div class="comment-image">
                                                            <img src="images/comment.jpg" alt="Images">
                                                            <h4><a href="#">Peter Parker</a></h4>
                                                            <span class="comment-date">(18 Dec 2018)</span>
                                                            <a class="btn-blue btn-red" href="#">Reply</a>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-9 col-sm-8">
                                                        <div class="comment-desc">
                                                            <span class="travel-date"> Travelled On : 25 March 2018</span>
                                                            <div class="deal-rating">
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star-o"></span>
                                                                <span class="fa fa-star-o"></span>
                                                            </div>
                                                            <p>Trek to Base Camp, taking plenty of time to acclimatize and to visit the Sherpa families and support facilities that will become increasingly important during our expedition. We will spend several days in Namche ahead of most trekkers, and will visit the monasteries in Tengboche and Pangboche. </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="comment-item comment-reply">
                                                <div class="row">
                                                    <div class="col-md-3 col-sm-4">
                                                        <div class="comment-image">
                                                            <img src="images/comment.jpg" alt="Images">
                                                            <h4><a href="#">Peter Parker</a></h4>
                                                            <span class="comment-date">(18 Dec 2018)</span>
                                                            <a class="btn-blue btn-red" href="#">Reply</a>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-9 col-sm-8">
                                                        <div class="comment-desc">
                                                            <p>Trek to Base Camp, taking plenty of time to acclimatize and to visit the Sherpa families and support facilities that will become increasingly important during our expedition. We will spend several days in Namche ahead of most trekkers, and will visit the monasteries in Tengboche and Pangboche. </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="comments-form detail-box">
                            <div class="detail-title">
                                <h3>Add Your Comment</h3>
                            </div>
                            <form>
                                <div class="row">
                                    <div class="textarea form-group col-xs-12">
                                        <label for="Name">Your Comment:</label>
                                        <textarea></textarea>
                                    </div>
                                    <div class="form-group col-xs-6">
                                        <label for="Name">Name:</label>
                                        <input type="email" class="form-control" id="Name">
                                    </div>
                                    <div class="form-group col-xs-6">
                                        <label for="email">Email address:</label>
                                        <input type="email" class="form-control" id="email">
                                    </div>
                                    <div class="form-group col-xs-12">
                                        <label for="website">Website:</label>
                                        <input type="email" class="form-control" id="website">
                                    </div>
                                    <div class="col-xs-12">
                                        <div class="comment-btn">
                                            <a href="#" class="btn-blue btn-red">Submit Comment</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div id="sidebar-sticky" class="col-md-4">

                    <aside class="detail-sidebar sidebar-wrapper">
                        <div class="sidebar-item sidebar-item-dark">
                            <div class="detail-title">
                                <h3>Book this tour</h3>

                            </div>
                            <form action="{{route('packagebook')}}" method="post">
                                @csrf
                                <div class="row">
                                    @if(Illuminate\Support\Facades\Session::has('success'))
                                        <div class="alert alert-success">
                                            {{Illuminate\Support\Facades\Session::get('success')}}
                                        </div>
                                    @endif
                                    <div class="form-group col-sm-12">
                                        <input type="text" class="form-control" name="fullname" placeholder="Name">
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <input type="email" class="form-control" name="email" placeholder="Email">
                                    </div>
                                    <div class="form-group col-sm-6 col-left-padding">
                                        <input type="number" class="form-control" name="phone" placeholder="Phone Number">
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <input type="date" class="form-control" name="date" id="date">
                                    </div>
                                    <div class="form-group col-sm-6 col-left-padding">
                                        <input type="number" class="form-control" name="group_size" placeholder="No.of People">
                                    </div>
                                    <div class="textarea col-sm-12">
                                        <textarea placeholder="Message" name="message"></textarea>
                                    </div>
                                    <input type="hidden" name="package_slug" value="{{$package->slug}}">
                                    <div class="col-sm-12">
                                        <div class="comment-btn">
                                            <button type="submit" class="btn-blue btn-red">Book Now</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="sidebar-item">
                            <div class="detail-title">
                                <h3>Popular Packages</h3>
                            </div>
                            <div class="sidebar-content sidebar-slider">
                                @foreach ($packages as $package)
                                    <div class="sidebar-package">
                                        <div class="sidebar-package-image">
                                            <img src="{{asset($package->image_path)}}" alt="Image">
                                        </div>
                                        <div class="destination-content sidebar-package-content">
                                            <h4><a href="{{route('package.detail',$package->slug)}}">{{$package->title}}</a></h4>
                                            <p><span class="bold">Rs. {{$package->price}}</span> </p>
                                            <a href="{{route('package.detail',$package->slug)}}" class="btn-blue btn-red">View Package</a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="sidebar-item sidebar-helpline">
                            <div class="sidebar-helpline-content">
                                <h3>Any Questions?</h3>
                                <p>Lorem ipsum dolor sit amet, consectet ur adipiscing elit, sedpr do eiusmod tempor incididunt ut.</p>
                                <p><i class="flaticon-phone-call"></i> (012)-345-6789</p>
                                <p><i class="flaticon-mail"></i> <a href="{{route('homepage')}}" class="__cf_email__" data-cfemail="0a7e657f78647e786b7c6f664a7e6f797e676b636624696567">[email&#160;protected]</a></p>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
