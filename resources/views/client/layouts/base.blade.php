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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css" integrity="sha512-xmGTNt20S0t62wHLmQec2DauG9T+owP9e6VU8GigI0anN7OXLip9i7IwEhelasml2osdxX71XcYm6BQunTQeQg==" crossorigin="anonymous" />
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
    <title>Docly</title>

    @stack('css_after')
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.js" integrity="sha512-VvWznBcyBJK71YKEKDMpZ0pCVxjNuKwApp4zLF3ul+CiflQi6aIJR+aZCP/qWsoFBA28avL5T5HA+RE+zrGQYg==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput-angular.min.js" integrity="sha512-KT0oYlhnDf0XQfjuCS/QIw4sjTHdkefv8rOJY5HHdNEZ6AmOh1DW/ZdSqpipe+2AEXym5D0khNu95Mtmw9VNKg==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js" integrity="sha512-eyHL1atYNycXNXZMDndxrDhNAegH2BDWt1TmkXJPoGf1WLlNYt08CSjkqF5lnCRmdm3IrkHid8s2jOUY4NIZVQ==" crossorigin="anonymous"></script>
<script src="//cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready( function () {
            $('#myTable').DataTable();
        } );
    </script>
@stack('js_after')
</body>
</html>