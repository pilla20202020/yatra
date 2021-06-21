<!DOCTYPE html>
<html lang="en">
    <!DOCTYPE html>
    <html xmlns="http://www.w3.org/1999/xhtml" lang="zxx">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Home | Himalayanshepherd</title>

        <script src="{{asset('assets/js/aXeeT3C8FEVE2uMUPMMUDxVnKrs.js')}}"></script>
        <link rel="shortcut icon" type="image/x-icon" href="images/logo1.png">

        <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('assets/css/plugin.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('assets/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('assets/font/flaticon.css')}}" rel="stylesheet" type="text/css">
    </head>
<body>

<!-- LOADER -->
{{-- <div id="preloader">
    <div id="status"></div>
</div>
<style>
    .search-content {
        padding: 0 25px;
    }
</style> --}}
<!-- END LOADER -->

@include('frontend.layouts.partials.header')

@yield('content')

@include('frontend.layouts.partials.footer')

<a href="#" class="scrollup" style="display: none;"><i class="ion-ios-arrow-up"></i></a>



<script data-cfasync="false" src="{{asset('assets/js/email-decode.min.js')}}"></script>
<script src="{{asset('assets/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/plugin.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>
<script src="{{asset('assets/js/main-1.js')}}"></script>
{{-- <script src="{{asset('assets/js/custom-countdown.js')}}"></script> --}}
<script src="{{asset('assets/js/preloader.js')}}"></script>
<script src="{{asset('assets/js/rocket-loader.min.js')}}"></script>
</body>


</html>
