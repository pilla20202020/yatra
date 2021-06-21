@extends ('frontend.layouts.app')


@section('content')

    <section class="breadcrumb-outer text-center nobackground">
        <div class="container">
            <div class="breadcrumb-content">
                <h2 class="white">We Found: {{ $packages->count() }} package</h2>
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('homepage') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Search</li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="section-overlay"></div>
    </section>


    <section class="cars-destinations">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-12">
                    <div class="cars-grid">
                        <div class="row">
                            @foreach ($packages as $package)
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="destination-item box-item">
                                        <div class="destination-image text-center">
                                            <img src="{{ asset($package->image_path) }}" alt="Image">
                                        </div>
                                        <div class="destination-content">
                                            <h5><strong class="color-red-3">Rs {{ $package->price }}</strong></h5>
                                            <h3><a
                                                    href="{{ route('package.detail', $package->slug) }}">{{ $package->title }}</a>
                                            </h3>
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
                        <div class="sidebar-item sidebar-item-dark">
                            <div class="detail-title">
                                <h3>Search</h3>
                            </div>
                            <form action="{{ route('search') }}">
                                <div class="row">
                                    <div class="col-md-12 col-12">
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
                                    <div class="col-md-12 col-12 nopadding">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Enter a keyword"
                                                name="keyword">
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-xs-6">
                                        <div class="table_item">
                                            <div class="search">
                                                <button type="submit" class="btn-blue btn-red btn-style-1 ml-2">SEARCH</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </aside>
                </div>
            </div>

            </aside>
        </div>
        </div>
        </div>
    </section>
@endsection
