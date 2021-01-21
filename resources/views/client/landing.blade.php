@extends('client.layouts.base')

@section('content')
    
<section class="doc_banner_area_one">
    <img class="dark" src="{{asset('client/img/home_one/wave_one.svg')}}" alt="">
    <img class="dark_two" src="{{asset('client/img/home_one/wave_two.svg')}}" alt="">
    <img class="p_absolute star_one" src="{{asset('client/img/home_one/star.png')}}" alt="">
    <img class="p_absolute star_two" src="{{asset('client/img/home_one/star.png')}}" alt="">
    <img class="p_absolute star_three" src="{{asset('client/img/home_one/star.png')}}" alt="">
    <img class="p_absolute one wow fadeInLeft" data-wow-delay="0.1s" src="{{asset('client/img/home_one/b_man.png')}}" alt="">
    <img class="p_absolute two wow fadeInRight" data-wow-delay="0.2s" src="{{asset('client/img/home_one/b_man_two.png')}}" alt="">
    <img class="p_absolute three wow fadeInUp" data-wow-delay="0.3s" src="{{asset('client/img/home_one/flower.png')}}" alt="">
    <img class="p_absolute four wow fadeInRight" data-wow-delay="0.4s" src="{{asset('client/img/home_one/girl_img.png')}}" alt="">
    <img class="p_absolute five wow fadeIn" data-wow-delay="0.5s" src="{{asset('client/img/home_one/file.png')}}" alt="">
    <img class="p_absolute bl_left" src="{{asset('client/img/v.svg')}}" alt="">
    <img class="p_absolute bl_right" src="{{asset('client/img/home_one/b_leaf.svg')}}" alt="">
    <div class="container">
        <div class="doc_banner_text">
            <h2 class="wow fadeInUp" data-wow-delay="0.3s">Kirim Naskah Mizan</h2>
            <p class="wow fadeInUp" data-wow-delay="0.5s">Website ini membantu anda untuk melakukan submit naskah secara online.</p>
            </div>
    </div>
</section>
<section class="doc_features_area_one">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="media doc_features_item_one wow fadeInLeft text-center" data-wow-delay="0.2s">
                    <div class="media-body">
                        <a href="#">
                            <h3>Informasi Terbaru</h3>
                        </a>
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                <img class="d-block w-100" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22800%22%20height%3D%22400%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20800%20400%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_17723b703b9%20text%20%7B%20fill%3A%23555%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A40pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_17723b703b9%22%3E%3Crect%20width%3D%22800%22%20height%3D%22400%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22274.0390625%22%20y%3D%22217.7%22%3EFirst%20slide%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                <img class="d-block w-100" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22800%22%20height%3D%22400%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20800%20400%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_17723b703b9%20text%20%7B%20fill%3A%23555%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A40pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_17723b703b9%22%3E%3Crect%20width%3D%22800%22%20height%3D%22400%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22274.0390625%22%20y%3D%22217.7%22%3EFirst%20slide%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                <img class="d-block w-100" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22800%22%20height%3D%22400%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20800%20400%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_17723b703b9%20text%20%7B%20fill%3A%23555%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A40pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_17723b703b9%22%3E%3Crect%20width%3D%22800%22%20height%3D%22400%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22274.0390625%22%20y%3D%22217.7%22%3EFirst%20slide%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="Third slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="doc_features_area_one">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="media doc_features_item_one wow fadeInLeft text-center" data-wow-delay="0.2s">
                    <div class="media-body">
                        <a href="#">
                            <h3>Kirim Naskah Mizan</h3>
                        </a>
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <img src="{{asset('client/img/naskah.png')}}" alt="">
                            </div>
                            <div class="col-md-6 col-12 d-flex align-items-center text-justify">
                                <p> kirimnaskah.mizan.com adalah sebuah portal website yang ditujukan bagi para penulis dan calon penulis untuk mengirim naskah ke penerbit-penerbit yang ada di Mizan Grup dengan lebih mudah dan terorganisir.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="doc_features_area_one">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="media doc_features_item_one wow fadeInLeft text-center" data-wow-delay="0.2s">
                    <div class="media-body">
                        <a href="#">
                            <h3>Cara Kirim Naskah</h3>
                        </a>
                        <div class="row">
                            <div class="col-md-3 col-12">
                                <img src="{{asset('client/img/Pilih-Penerbit.png')}}" alt="" class="mb-4">
                                <h5>Pilih Penerbit</h5>
                                <p>Pilih penerbit yang kamu inginkan untuk menerbitkan naskah kamu. Kamu bisa memilih Mizan Publishing House, Bentang Pustaka, Noura Publishing, dan Muffin Graphics.</p>
                            </div>
                            <div class="col-md-3 col-12">
                                <img src="{{asset('client/img/Upload-Naskah.png')}}" alt="" class="mb-4">
                                <h5>Upload Naskah</h5>
                                <p>Isi data dan upload naskah kamu dengan format PDF berukuran maksimal 50 Mb.</p>
                            </div>
                            <div class="col-md-3 col-12">
                                <img src="{{asset('client/img/Proses-Review.png')}}" alt="" class="mb-4">
                                <h5>Proses Review</h5>
                                <p>Naskah akan direview oleh penerbit yang kamu pilih.</p>
                            </div>
                            <div class="col-md-3 col-12">
                                <img src="{{asset('client/img/Naskah-Diterima.png')}}" alt="" class="mb-4">
                                <h5>Naskah Diterima</h5>
                                <p>Naskah kamu yang disetujui oleh penerbit kemudian akan melalui proses lebih lanjut untuk kemudian diterbitkan.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="doc_action_area parallaxie" data-background="{{asset('client/img/bg.jpg')}}" style="background: url({{asset('client/img/home_one/action_bg.jpg')}}) no-repeat scroll;">
    <div class="overlay_bg"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-9 col-sm-8">
                <div class="action_text">
                    <h2>Belum memiliki akun?</h2>
                    <p>Daftarkan dan ajukan naskah mu disini.</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-4">
                <a href="{{ route('register') }}" class="action_btn">Daftar <i class="arrow_right"></i></a>
            </div>
        </div>
    </div>
</section>

@endsection

