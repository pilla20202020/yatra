<!-- START HEADER -->
{{-- <header class="header_wrap dark_skin">
    <div class="top-header light_skin bg-dark">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <ul class="contact_detail list_none text-center text-md-left">
                        <li><a href="#"><i class="ti-mobile"></i>123-456-7890</a></li>
                        <li><a href="#"><i class="ti-email"></i>info@yourmail.com</a></li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <div class="d-flex flex-wrap align-items-center justify-content-md-end justify-content-center mt-2 mt-md-0">
                        <ul class="list_none social_icons social_white text-center text-md-right">
                            <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                            <li><a href="#"><i class="ion-social-twitter"></i></a></li>

                        </ul>

                        <ul >
                            <a href="{{route('download')}}" class="btn btn-default btn-sm">Downloads</a>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
    <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="{{route('homepage')}}">
                <!-- <img class="logo_light" src="{{asset('assets/images/leclogo21.png')}}" alt="{{ config('app.name') }}"/>
                <img class="logo_dark" src="{{asset('assets/images/leclogo21.png')}}" alt="{{ config('app.name') }}"/> -->
                <img class="logo_dark" src="{{asset('assets/images/kclogo.png')}}"
                     alt="{{ config('app.name') }}"/>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
                    class="ion-android-menu"></span></button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    @foreach(menus() as $menu)
                        <?php
                        $hasSub = !$menu->subMenus->isEmpty();
                        ?>
                        <li class="{{($hasSub) ? "dropdown" : ""}}">
                            <a class="{{($hasSub) ? "dropdown-toggle" : ""}} nav-link" href="{{ url($menu->url) }}"
                               data-toggle="{{($hasSub) ? "dropdown" : ""}}">
                                {{$menu->name}}
                            </a>
                            @if($hasSub)
                                <div class="dropdown-menu">
                                    <ul>
                                        @foreach($menu->subMenus as $key => $sub)
                                            <li>
                                                <a class="dropdown-item nav-link nav_item"
                                                   href="{{url($sub->url)}}">{{ $sub->name }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </li>
                    @endforeach
                </ul>
            </div>
        </nav>
    </div>
</header> --}}
@if(Request::path() == '/')

<header class="head-style-1">
    <div class="upper-head clearfix">
        <div class="container">
            <div class="upper-head-inner">
                <div class="contact-info pull-left">
                    <div class="contact-info-item"><i class="flaticon-phone-call"></i>
                        <p> Phone: <span>(012)-345-6789</span></p></div>
                    <i class="flaticon-mail"></i>
                    <p> Mail: <span><a href="https://cyclonethemes.com/cdn-cgi/l/email-protection" class="__cf_email__"
                                    data-cfemail="7d0912080f13090f1c0b18113d09180e09101c1411531e1210">[email&#160;protected]</a></span>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="navigation head-style-1">
        <div class="container">
            <div class="navigation-content">
                <div class="header_menu">
                    <nav class="navbar navbar-default navbar-sticky-function navbar-arrow">
                        <div class="logo pull-left">
                            <a href="{{route('homepage')}}">
                                <img alt="Image" src="{{asset('assets/images/footer.png')}}" class="logo-white">
                                <img alt="Image" src="{{asset('assets/images/logo.png')}}" class="logo-color">
                            </a>
                        </div>
                        <div id="navbar" class="navbar-nav-wrapper">
                            <ul class="nav navbar-nav" id="responsive-menu">
                                @foreach(menus() as $menu)
                                    <?php
                                    $hasSub = !$menu->subMenus->isEmpty();
                                    ?>
                                    <li class="{{($hasSub) ? "" : ""}}">
                                        <a href="{{ url($menu->url) }} ">
                                            {{$menu->name}} @if($hasSub)<i class='fa fa-angle-down'></i>@endif
                                        </a>
                                        @if($hasSub)
                                                <ul>
                                                    @foreach($menu->subMenus as $key => $sub)
                                                        <?php
                                                            $hasChildSub = !$sub->childsubMenus->isEmpty();
                                                        ?>
                                                        <li class="{{ $hasChildSub ? '' : ''}}">
                                                            <a href="{{url($sub->url)}}">{{ $sub->name }}</a>
                                                            @if($hasChildSub)
                                                            <div class="">
                                                                <ul>
                                                                    @foreach($sub->childsubMenus->sortBy('order') as $key => $childsubmenu)
                                                                        <li><a href="{{url($childsubmenu->url)}}">{!! $childsubmenu->name !!}</a></li>
                                                                    @endforeach
                                                                </ul>
                                                            </div>
                                                            @endif
                                                        </li>
                                                    @endforeach
                                                </ul>

                                        @endif
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div id="slicknav-mobile"></div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
@else
<div class="navigation">
    <div class="container">
        <div class="navigation-content">
            <div class="header_menu">
                <nav class="navbar navbar-default navbar-sticky-function navbar-arrow">
                    <div class="logo pull-left">
                        <a href="{{route('homepage')}}">
                            <img alt="Image" src="{{asset('assets/images/logo.png')}}" class="logo-white">
                            <img alt="Image" src="{{asset('assets/images/logo.png')}}" class="logo-color">
                        </a>
                    </div>
                    <div id="navbar" class="navbar-nav-wrapper">
                        <ul class="nav navbar-nav" id="responsive-menu">
                            @foreach(menus() as $menu)
                                <?php
                                $hasSub = !$menu->subMenus->isEmpty();
                                ?>
                                <li class="{{($hasSub) ? "" : ""}}">
                                    <a href="{{ url($menu->url) }} " style="color: #5d5d5d">
                                        {{$menu->name}} @if($hasSub)<i class='fa fa-angle-down'></i>@endif
                                    </a>
                                    @if($hasSub)
                                            <ul>
                                                @foreach($menu->subMenus as $key => $sub)
                                                    <?php
                                                        $hasChildSub = !$sub->childsubMenus->isEmpty();
                                                    ?>
                                                    <li class="{{ $hasChildSub ? '' : ''}}">
                                                        <a href="{{url($sub->url)}}">{{ $sub->name }}</a>
                                                        @if($hasChildSub)
                                                        <div class="">
                                                            <ul>
                                                                @foreach($sub->childsubMenus->sortBy('order') as $key => $childsubmenu)
                                                                    <li><a href="{{url($childsubmenu->url)}}">{!! $childsubmenu->name !!}</a></li>
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                        @endif
                                                    </li>
                                                @endforeach
                                            </ul>

                                    @endif
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div id="slicknav-mobile"></div>
                </nav>
            </div>
        </div>
    </div>
</div>

@endif
<!-- END HEADER -->


