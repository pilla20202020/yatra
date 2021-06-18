@extends ('frontend.layouts.app')


@section('content')

<section class="breadcrumb-outer text-center">
    <div class="container">
        <div class="breadcrumb-content">
            <h2>Rent a car</h2>
            <h4 class="white">We Found: {{$packages->count()}} package</h4>
            <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="cars.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">"{{$search_title}}"</li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="section-overlay"></div>
</section>


<section class="cars-destinations">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-12">
                <div class="cars-grid">
                    <div class="row">
                        @foreach ($packages as $package)
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="destination-item box-item">
                                    <div class="destination-image text-center">
                                        <img src="{{asset($package->image_path)}}" alt="Image">
                                    </div>
                                    <div class="destination-content">
                                        <h5><strong class="color-red-3">Rs {{$package->price}}</strong></h5>
                                        <h3><a href="#">{{$package->title}}</a></h3>
                                        <p class="text-center">{!! $package->description !!}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach


                        <div class="col-xs-12">
                            <div class="pagination-content text-center">
                                <ul class="pagination">
                                    <li><a href="#"><i class="fa fa-angle-double-left" aria-hidden="true"></i></a></li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sidebar" class="col-md-4 col-sm-12">
                <aside class="detail-sidebar sidebar-wrapper">
                    <div class="sidebar-item">
                        <div class="detail-title">
                            <h3>Price Range</h3>
                        </div>
                        <div class="sidebar-content">
                            <form>
                                <div class="range-slider">
                                    <div data-min="0" data-max="2000" data-unit="$" data-min-name="min_price" data-max-name="max_price" class="range-slider-ui ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" aria-disabled="false">
                                        <span class="min-value">0 $</span>
                                        <span class="max-value">2000 $</span>
                                        <div class="ui-slider-range ui-widget-header ui-corner-all whole" style="left: 0%; width: 100%;"></div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <button class="btn btn-default" style="position: relative;left:50%;transform:translateX(-50%)">Apply</button>
                                </div>
                            </form>
                        </div>
                    </div>


            </div>
        </div>

    </aside>
    </div>
    </div>
    </div>
    </section>
@endsection
