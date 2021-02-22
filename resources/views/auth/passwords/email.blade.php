<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="shortcut icon" href="{{asset('client/img/favicon.ico')}}" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('client/assets/bootstrap/css/bootstrap.min.css')}}">
    <!-- icon css-->
    <link rel="stylesheet" href="{{asset('client/assets/elagent-icon/style.css')}}">
    <link rel="stylesheet" href="{{asset('client/assets/animation/animate.css')}}">
    <link rel="stylesheet" href="{{asset('client/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('client/css/responsive.css')}}">
    <title>Masuk - Kirim Naskah Mizan</title>
</head>

<body data-scroll-animation="true">
    <div id="preloader">
        <div id="ctn-preloader" class="ctn-preloader">
            <div class="round_spinner">
                <div class="spinner"></div>
                <div class="text">
                    <img src="{{asset('client/img/logo.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="body_wrapper">
        <section class="signup_area">
            <div class="row ml-0 mr-0">
                <div class="sign_left signin_left">
                    <img class="position-absolute top" src="{{asset('client/img/signup/top_ornamate.png')}}" alt="top">
                    <img class="position-absolute bottom" src="{{asset('client/img/signup/bottom_ornamate.png')}}" alt="bottom">
                    <img class="position-absolute middle" src="{{asset('client/img/signup/door.png')}}" alt="bottom">
                    <div class="round"></div>
                </div>
                <div class="sign_right signup_right">
                    <div class="sign_inner signup_inner">
                        <div class="text-center">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                            @if (session('error'))
                                <div class="alert alert-danger" role="alert">
                                    {{ session('error') }}
                                </div>
                            @endif
                            <h3>Masukan Email Anda</h3>
                            {{-- <p>Belum memiliki akun? <a href="{{ route('register') }}">Daftar di sini</a></p> --}}
                            {{-- <a href="#" class="btn-google"><img src="{{asset('client/img/signup/gmail.png')}}" alt=""><span class="btn-text">Sign in with Gmail</span></a> --}}
                        </div>
                        <div class="divider">
                            <span class="or-text"></span>
                        </div>
                        <form method="POST" action="{{ route('home.sendReset') }}" class="row login_form">
                            @csrf
                            <div class="col-lg-12 form-group">
                                <div class="small_text">Email</div>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="username@gmail.com" name="email" value="{{ old('email') }}">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-12 text-center">
                                <button type="submit" class="btn action_btn thm_btn">Send Password Reset Link</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{asset('client/js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('client/js/pre-loader.js')}}"></script>
    <script src="{{asset('client/assets/bootstrap/js/popper.min.js')}}"></script>
    <script src="{{asset('client/assets/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('client/js/parallaxie.js')}}"></script>
    <script src="{{asset('client/js/TweenMax.min.js')}}"></script>
    <script src="{{asset('client/js/jquery.wavify.js')}}"></script>
    <script src="{{asset('client/assets/wow/wow.min.js')}}"></script>
    <script src="{{asset('client/assets/counterup/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('client/assets/counterup/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('client/js/main.js')}}"></script>
    <script>
        $('.refresh').click(function(){
            $.ajax({
                type:'get',
                url:'{{route('captcha')}}',
                success:function(data){
                    $('.captcha-img').html(data.captcha)
                }
            })
        })
    </script>
</body>

</html>