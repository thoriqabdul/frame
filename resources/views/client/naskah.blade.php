@extends('client.layouts.base')


@section('content')
<section class="breadcrumb_area">
    <img class="p_absolute bl_left" src="{{asset('client/img/v.svg')}}" alt="">
    <img class="p_absolute bl_right" src="{{asset('client/img/home_one/b_leaf.svg')}}" alt="">
    <img class="p_absolute star" src="{{asset('client/img/home_one/banner_bg.png')}}" alt="">
    <img class="p_absolute wave_shap_one" src="{{asset('client/img/blog-classic/shap_01.png')}}" alt="">
    <img class="p_absolute wave_shap_two" src="{{asset('client/img/blog-classic/shap_02.png')}}" alt="">
    <img class="p_absolute one wow fadeInRight" src="{{asset('client/img/home_one/b_man_two.png')}}" alt="">
    <img class="p_absolute two wow fadeInUp" data-wow-delay="0.2s" src="{{asset('client/img/home_one/flower.png')}}" alt="">
    <div class="container custom_container">
        {{-- <form action="#" class="banner_search_form banner_search_form_two">
            <div class="input-group">
                <input type="search" class="form-control" placeholder='Search ("/" to focus)'>
                <div class="input-group-append">
                    <select class="custom-select" id="inlineFormCustomSelect">
                        <option selected>All Category</option>
                        <option value="1">Doc Archive</option>
                        <option value="2">Doc List</option>
                        <option value="3">KbDoc</option>
                    </select>
                </div>
                <button type="submit"><i class="icon_search"></i></button>
            </div>
        </form> --}}
    </div>
</section>

<section class="page_breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-sm-7">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active"><a href="#">Home</a></li>
                    </ol>
                </nav>
            </div>
            <div class="col-sm-5">
                <a href="#" class="date"><i class="icon_clock_alt"></i>{{ date('d-m-Y') }}</a>
            </div>
        </div>
    </div>
</section>
<section class="doc_blog_grid_area sec_pad forum-page-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                {{-- <div class="answer-action">
                    <div class="action-content">
                        <div class="image-wrap">
                            <img src="{{asset('client/img/home_support/answer.png')}}" alt="answer action">
                        </div>

                        <div class="content">
                            <h2 class="ans-title">Can’t find an answer?</h2>
                            <p>
                                Make use of a qualified tutor to get the answer
                            </p>
                        </div>
                    </div>
                    <!-- /.action-content -->

                    <div class="action-button-container">
                        <a href="#" class="action_btn btn-ans">Tambah Naskah</a>
                    </div>
                    <!-- /.action-button-container -->
                </div>
                <!-- /.answer-action --> --}}

                <div class="page-content bg-white mb-3 p-3 justify-content-center">
                    <div class="row">
                        <div class="col-lg-3 col-4 text-center"> <a href="">Naskah Saya</a>   </div>
                        <div class="col-lg-3 col-4 text-center"> <a href="">Naskah Diterima</a>  </div>
                        <div class="col-lg-5 col-12 text-right">
                            <a href="{{route('homes.tambah')}}" class="btn btn-info btn-sm"> + Kirim Naskah</a>
                        </div>
                    </div>
                </div>

                <div class="community-posts-wrapper bb-radius">

                    <table id="myTable" class="display">
    
                        <thead>
                            <tr>
                                <th>Judul</th>
                                <th>Pengarang</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($script as $item)
                            <tr>
                                <td>{{$item->judul}}</td>
                                <td>{{$item->pengarang}}</td>
                                <td>
                                    <a href="{{ route('cate.edit',['id'=>$item->id]) }}" class="btn  btn-primary btn-flat btn-sm" ><i class="far fa-eye"> Detail</i></a>
                                    {{-- <form action="{{route('cate.delete', ['id'=>$item->id])}}"
                                        onsubmit="return confirm('Are you sure?')" class="d-inline"
                                        method="POST">
                                        @csrf
                                        <input type="hidden" name="_method" value="DELETE">
                    
                                        <button type="submit" class="btn  btn-danger btn-flat btn-sm" ><i class="far fa-trash-alt"></i></button>
                                    </form> --}}
                                </td>
                            </tr>
                            @endforeach
                            
                        </tbody>
                    </table>

                </div>
                <!-- /.community-posts-wrapper -->

            </div>
            <!-- /.col-lg-8 -->
        </div>
    </div>
</section>

<div class="call-to-action">
    <div class="overlay-bg"></div>    
    <div class="container">
        <div class="action-content-wrapper">
            <div class="action-title-wrap title-img">
                <img src="{{asset('client/img/home_support/chat-smile.png')}}" alt="">
                <h2 class="action-title">New to Communities?</h2>
            </div>
            <a href="#" class="action_btn">Join the community <i class="arrow_right"></i></a>
        </div>
        <!-- /.action-content-wrapper -->
    </div>
    <!-- /.container -->
</div>
@endsection