<footer class="footer_area f_bg_color">
    <img class="p_absolute leaf" src="{{asset('client/img/v.svg')}}" alt="">
    <img class="p_absolute f_cloud" src="{{asset('client/img/home_two/cloud.png')}}" alt="">
    <img class="p_absolute f_email" src="{{asset('client/img/home_two/email-icon.png')}}" alt="">
    <img class="p_absolute f_email_two" src="{{asset('client/img/home_two/email-icon_two.png')}}" alt="">
    <div class="footer_top">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="f_widget subscribe_widget">
                        <a href="index.html" class="f_logo"><img src="{{asset('client/img/logo.png')}}" alt=""></a>
                        <p>kirimnaskah.mizan.com adalah sebuah portal website yang ditujukan bagi para penulis dan calon penulis untuk mengirim naskah ke penerbit-penerbit yang ada di Mizan Grup dengan lebih mudah dan terorganisir.</p>
                    </div>
                </div>
                <div class="col-lg-5 col-sm-6">
                    <div class="f_widget link_widget pl_70">
                        <h3 class="f_title">Head Office</h3>
                        <ul class="list-unstyled link_list">
                            <li>Gd. Cibis Nine Lt. 12 Unit G-2</li>
                            <li>Jl. TB. Simatupang No. 2<br>
                                Cilandak Timur, Pasar Minggu<br>
                                Jakarta Selatan 12560</li>
                            <li>(021) 80623799</li>
                            <li>mizan.publika@mizan.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-1 col-sm-6">
                    <div class="f_widget link_widget pl_70">
                        <a href="#" class="btn-btn link">Home</a>
                    </div>
                </div>
                <div class="col-lg-1 col-sm-6">
                    <div class="f_widget link_widget pl_70">
                        <a href="{{ route('register') }}" class="btn-btn link">Register</a>
                    </div>
                </div>
                <div class="col-lg-1 col-sm-6">
                    <div class="f_widget link_widget pl_70">
                        <a href="{{ route('login') }}" class="btn-btn link">Login</a>
                    </div>
                </div>
            </div>
            <div class="border_bottom"></div>
        </div>
    </div>
    <div class="footer_bottom text-center">
        <div class="container">
            <p>© 2020 All Rights Reserved by <a href="https://mizan.com">Mizan</a></p>
        </div>
    </div>
</footer>