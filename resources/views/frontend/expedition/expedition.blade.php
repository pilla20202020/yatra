@extends ('frontend.layouts.app')
@section('content')

    <!-- START SECTION BREADCRUMB -->
    <section class="breadcrumb-outer text-center nobackground">
        <div class="container">
            <div class="breadcrumb-content">
                <h2>Expedition</h2>
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('homepage') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Expedition</li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="section-overlay"></div>
    </section>
    <!-- END SECTION BANNER -->

    <!-- EXPEDITION-->
    <section class="aboutus">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="about-icon">
                        <i class="fa fa-superpowers" aria-hidden="true"></i>
                    </div>
                    <div class="about-content">
                        <p>Himalayan Shepherds is Nepal’s first eco and community centered responsive adventure-travel and
                            Expedition Company. It has linked tourism not only with adventure but also with wellbeing and
                            human health. It delivers all elements of logistic support for peak climbing and expeditions in
                            Nepal, Tibet and Bhutan.</p>
                        <p>&nbsp;</p>
                        <p>It is founded by the world record holding climbers and environmentalists. 20th times Everest
                            Summiteer and 8 time Guinness Book of World Records holder Mr. Pemba Dorje Sherpa and first
                            Tamang lady &amp; 3 times Everest Summiteers Ms. Kanchi Maya Taman are key person of the
                            company. Himalayan Shepherds is truly committed to promote responsive eco and community centric
                            tourism industry in Nepal.</p>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- EXPEDITION-->


    {{-- Destination Featured --}}
    <section class="deals-on-sale">
        <div class="container">
            <div class="section-title text-center">
                <h2>Destination</h2>
                <div class="section-icon">
                    <i class="flaticon-diamond"></i>
                </div>
                <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                        et
                        dolore magna aliqua.Duis aute irure dolor in reprehenderit..</p> -->
            </div>
            <div class="row sale-slider slider-button">
                @foreach ($categories as $category)
                    <div class="col-md-12">
                        <div class="sale-item box-item">
                            <div class="sale-image">
                                <img src="{{asset($category->image_path)}}" alt="{{$category->title}}" height="200px">
                            </div>
                            <div class="sale-content-1 sale-content">
                                <h3><a href="{{ route('package.category', $category->slug) }}">{{$category->title}}</a></h3>
                                <div class="sale-content-inner">
                                    <a href="{{ route('package.category', $category->slug) }}" class="btn-blue btn-red btn-style-1">View More</a>
                                </div>
                            </div>
                            <div class="sale-overlay"></div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    {{-- Destination Featured --}}
@endsection
