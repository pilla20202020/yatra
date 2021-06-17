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
                                            <span class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></span>
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





@stop
