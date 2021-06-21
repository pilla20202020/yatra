@extends ('frontend.layouts.app')


@section('content')

<section class="breadcrumb-outer text-center nobackground">
    <div class="container">
        <div class="breadcrumb-content">
            <h2 class="white">{{$category->title}}</h2>
            <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('homepage')}}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{$category->title}}</li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="section-overlay"></div>
</section>


<section class="cars-destinations">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-12">
                <div class="cars-grid">
                    <div class="row">
                        @foreach ($packages as $package)
                            <div class="col-md-4 col-sm-4 col-xs-4">
                                <div class="destination-item box-item">
                                    <div class="destination-image text-center">
                                        <img src="{{asset($package->image_path)}}" alt="Image">
                                    </div>
                                    <div class="destination-content">
                                        <h3><a href="{{route('package.detail',$package->slug)}}">{{$package->title}}</a></h3>
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
        </div>

    </aside>
    </div>
    </div>
    </div>
    </section>
@endsection
