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
                            <h3>Kirim Naskah Mizan</h3>
                        </a>
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <img src="{{asset('client/img/naskah.png')}}" alt="">
                            </div>
                            <div class="col-md-6 col-12 d-flex align-items-center text-justify">
                                <p> Digital Publishing System adalah sebuah portal berbasis web yang bertujuan untuk menjembatani penerbit-penerbit Kompas Gramedia dengan pengarang. Dengan adanya Digital Publishing System, sistem penerimaan dan pengelolaan naskah akan menjadi lebih terorganisir. Selain itu, pengarang juga lebih mudah untuk menyalurkan naskahnya ke penerbit.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="doc_feedback_area parallaxie" data-background="{{asset('client/img/bg.jpg')}}" style="background: url({{asset('client/img/home_one/feedback_bg.jpg')}}) no-repeat scroll;">
    <div class="overlay_bg"></div>
    <div class="container">
        <div class="doc_feedback_info">
            <div class="doc_feedback_slider">
                <div class="item">
                    <div class="author_img">
                        <img src="{{asset('client/img/home_one/icon/feedback.jpg')}}" alt="">
                    </div>
                    <p>
                        Nulla porttitor accumsan tincidunt. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Nulla quis lorem ut libero malesuada feugiat. Vivamus suscipit tortor eget felis porttitor volutpat. Proin eget tortor risus.
                    </p>
                    <h5>Rodney Artichoke</h5>
                    <h6>UI/UX designer</h6>
                </div>
                <div class="item">
                    <div class="author_img">
                        <img src="{{asset('client/img/home_one/icon/feedback.jpg')}}" alt="">
                    </div>
                    <p>
                        Nulla porttitor accumsan tincidunt. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Nulla quis lorem ut libero malesuada feugiat. Vivamus suscipit tortor eget felis porttitor volutpat. Proin eget tortor risus.
                    </p>
                    <h5>Rodney Artichoke</h5>
                    <h6>UI/UX designer</h6>
                </div>
            </div>
            <div class="slider_nav">
                <div class="prev">
                    <span class="arrow"></span>
                </div>
                <div class="next">
                    <span class="arrow"></span>
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
                                <img src="https://dps.gramedia.com/html/assets/images/pilih-penerbit.png" alt="" class="mb-4">
                                <h5>Pilih Penerbit</h5>
                                <p>Pilih penerbit yang Anda inginkan untuk menerbitkan naskah Anda. Anda dapat memilih tiga penerbit. Penerbit pertama yang Anda pilih berarti adalah penerbit yang menjadi prioritas Anda.</p>
                            </div>
                            <div class="col-md-3 col-12">
                                <img src="https://dps.gramedia.com/html/assets/images/pilih-penerbit.png" alt="" class="mb-4">
                                <h5>Upload Naskah</h5>
                                <p>Pilih penerbit yang Anda inginkan untuk menerbitkan naskah Anda. Anda dapat memilih tiga penerbit. Penerbit pertama yang Anda pilih berarti adalah penerbit yang menjadi prioritas Anda.</p>
                            </div>
                            <div class="col-md-3 col-12">
                                <img src="https://dps.gramedia.com/html/assets/images/pilih-penerbit.png" alt="" class="mb-4">
                                <h5>Proses Review</h5>
                                <p>Pilih penerbit yang Anda inginkan untuk menerbitkan naskah Anda. Anda dapat memilih tiga penerbit. Penerbit pertama yang Anda pilih berarti adalah penerbit yang menjadi prioritas Anda.</p>
                            </div>
                            <div class="col-md-3 col-12">
                                <img src="https://dps.gramedia.com/html/assets/images/pilih-penerbit.png" alt="" class="mb-4">
                                <h5>Naskah Diterima</h5>
                                <p>Pilih penerbit yang Anda inginkan untuk menerbitkan naskah Anda. Anda dapat memilih tiga penerbit. Penerbit pertama yang Anda pilih berarti adalah penerbit yang menjadi prioritas Anda.</p>
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
                    <h2>Con't find an answer?</h2>
                    <p>Head over to our Discord channel</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-4">
                <a href="#" class="action_btn">Discord Channel <i class="arrow_right"></i></a>
            </div>
        </div>
    </div>
</section>

@endsection

