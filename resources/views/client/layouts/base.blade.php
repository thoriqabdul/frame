<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="{{asset('client/img/favicon.ico')}}" type="image/x-icon">

    <link rel="stylesheet" href="{{asset('client/assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('client/assets/slick/slick.css')}}">
    <link rel="stylesheet" href="{{asset('client/assets/slick/slick-theme.css')}}">
    <!-- icon css-->
    <link rel="stylesheet" href="{{asset('client/assets/elagent-icon/style.css')}}">
    <link rel="stylesheet" href="{{asset('client/assets/animation/animate.css')}}">
    <link rel="stylesheet" href="{{asset('client/assets/mcustomscrollbar/jquery.mCustomScrollbar.min.css')}}">
    <link rel="stylesheet" href="{{asset('client/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('client/css/responsive.css')}}">
    <title>Docly</title>
</head>

<body data-scroll-animation="true">
    <div id="preloader">
        <div id="ctn-preloader" class="ctn-preloader">
            <div class="round_spinner">
                <div class="spinner"></div>
                <div class="text">
                    <img src="{{asset('client/img/spinner_logo.png')}}" alt="">
                    <h4><span>Doc</span>ly</h4>
                </div>
            </div>
            <h2 class="head">Did You Know?</h2>
            <p></p>
        </div>
    </div>
    <div class="click_capture"></div>
    <div class="body_wrapper">
        {{-- header --}}

        @include('client.layouts.header')
        {{-- header --}}

        {{-- content --}}
        @yield('content')
        {{-- content --}}

        {{-- footer --}}
        @include('client.layouts.footer')
        {{-- footer --}}
    </div>

    <!-- Back to top button -->
    <a id="back-to-top" title="Back to Top"></a>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{asset('client/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('client/js/pre-loader.js')}}"> </script>
<script src="{{asset('client/js/pre-loader.js')}}"> </script>
<script src="{{asset('client/assets/bootstrap/js/popper.min.js')}}"></script>
<script src="{{asset('client/assets/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('client/assets/slick/slick.min.js')}}"></script>
<script src="{{asset('client/js/parallaxie.js')}}"></script>
<script src="{{asset('client/js/TweenMax.min.js')}}"></script>
<script src="{{asset('client/js/jquery.wavify.js')}}"></script>
<script src="{{asset('client/assets/wow/wow.min.js')}}"></script>
<script src="{{asset('client/assets/mcustomscrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script src="{{asset('client/js/main.js')}}"></script>
</body>
</html>