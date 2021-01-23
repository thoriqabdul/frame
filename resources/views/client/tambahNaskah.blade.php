@extends('client.layouts.base')


@push('css_after')
    <style>
        .file-input {
   cursor: pointer;

   /* Style as you please, it will become the visible UI component. */
}

#upload-photo {
   opacity: 0;
   position: absolute;
   z-index: -1;
}
.bootstrap-tagsinput{
            width: 100%;
        }
        .label-info{
            background-color: #17a2b8;
            padding: 3px;
            border-radius: 5%;

        }

        .form-section{
            display: none;
        }
        .form-section.current{
            display: inherit;
        }

        .parsley-errors-list{
            margin: 2px 0 3px;
            padding: 0;
            color: red;
            list-style-type: none;
        }
    </style>
@endpush

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
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Kirim Naskah</li>
                    </ol>
                </nav>
            </div>
            <div class="col-sm-5">
            </div>
        </div>
    </div>
</section>
<section class="doc_blog_grid_area sec_pad forum-page-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="process_tab_shortcode">
                    <ul class="nav nav-tabs v_menu" id="myTabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="card-tab" data-toggle="tab" href="#card" role="tab" aria-controls="card" aria-selected="true"><span>1</span>Pilih Penerbit</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" id="customer-tab" data-toggle="tab" href="#customer" role="tab" aria-controls="customer" aria-selected="false"><span>2</span>Unggah Naskah</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="charge-tab" data-toggle="tab" href="#charge" role="tab" aria-controls="charge" aria-selected="false"><span>3</span>Isi Data Naskah</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="sub-tab" data-toggle="tab" href="#sub" role="tab" aria-controls="sub" aria-selected="false"><span>4</span>Selesai</a>
                        </li>
                        {{-- <li class="nav-item">
                            <a class="nav-link" id="success-tab" data-toggle="tab" href="#success" role="tab" aria-controls="success" aria-selected="false"><span>5</span>Success!</a>
                        </li> --}}
                    </ul>
                </div>

                <div class="card-body">
                    {!! Form::open(['route' => 'homes.store', 'method' => 'post','autocomplete'=>"false","enctype"=>'multipart/form-data',"class"=>"naskah-form",'files' => true]) !!}
                        <div class="form-section">
                            <h4>Pilih Publisher</h4>
                            <button type="button" class="btn btn-info btn-sm mb-2 tambah_vari">Tambah</button>
                            <div class="row" id="var_baru">
                                <div class="col-12">
                                    <div class="row"> 
                                        <div class="col-lg-6 form-group">
                                            <select class="form-control publish-1 pub" data-no="1" id="exampleFormControlSelect1" name="publish_id[]" required>
                                                <option value="">Pilih</option>
                                                @foreach ($cate as $item)
                                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                                @endforeach
                                            </select>
                                            {{-- <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="info@KbDoc.com" name="email" value="{{ old('email') }}"> --}}
                                        </div>
                                        <div class="col-lg-6 form-group">
                                            <select class="form-control category-1" id="exampleFormControlSelect1" name="category_id[]" required>
                                                <option value="">Pilih</option>
                                                
                                            </select>
                                            {{-- <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="info@KbDoc.com" name="email" value="{{ old('email') }}"> --}}
                                        </div>
                                    </div>
                                </div>  
                            </div>
                            <div class="col-12">
                                <div class="row">
                                    @foreach ($cate as $item)
                                    <div class="col-lg-5 col-5 mb-3">
                                        <img src="{{asset('storage/'.$item->img)}}" alt="" width="50" height="50"> <a href="{{$item->link}}"><span>{{$item->name}}</span></a>  
                                    </div>
                                    @endforeach
                                </div>
                            </div> 
                        </div>
                        <div class="form-section">
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Judul</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="staticEmail" name="judul" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Sinopsis</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="sinopsis" required></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Upload File Naskah</label>
                                <div class="col-sm-10">
                                    <label for="upload-photo" class="file-input btn btn-outline-info" >Browse File</label>
                                    <input type="file" name="pdf" id="upload-photo" data-parsley-max-file-size="5000" required accept="application/pdf"/>
                                </div>
                            </div>
                        </div>
                        <div class="form-section">
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Nama Pengarang</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="staticEmail" value="{{Auth::user()->name}}" name="pengarang" disabled>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Tambah Pengarang</label>
                                <div class="col-sm-5">
                                  <input type="number" class="form-control w-25 d-inline" id="karang" value="" name="jumlah" required>
                                  <button type="button" class="btn btn-info btn-sm submit-pengarang" id="submit-pengarang">klik</button>
                                  <div class="penulis-tambah">

                                  </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Segment Pembaca</label>
                                <div class="col-sm-10">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" name="segment[]" value="Semua" id="customCheck1" required>
                                        <label class="custom-control-label" for="customCheck1">Semua</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" name="segment[]" value="Dewasa" id="customCheck2" required>
                                        <label class="custom-control-label" for="customCheck2">Dewasa</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" name="segment[]" value="Orang Tua" id="customCheck3" required>
                                        <label class="custom-control-label" for="customCheck3">Orang Tua</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" name="segment[]" value="Remaja" id="customCheck4" required>
                                        <label class="custom-control-label" for="customCheck4">Remaja</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" name="segment[]" value="Anak - Anak" id="customCheck5" required>
                                        <label class="custom-control-label" for="customCheck5">Anak - Anak</label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Selling Point</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="selling" required></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Keyword</label>
                                <div class="col-sm-10">
                                    <input type="text" data-role="tagsinput" name="tags" class="form-control" required>
                                </div>
                            </div>
                        </div>

                        <div class="form-navigator">
                            <button type="button" class=" btn btn-info float-left kembali">Kembali</button>
                            <button type="button" class="btn btn-outline-info float-right lanjut">Lanjut</button>
                            <button type="submit" class="btn btn-outline-success float-right">Submit</button>
                        </div>
                        {!! Form::close() !!}
                </div>
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


@push('js_after')
<script>
 


var penulis= $('.penulis-tambah');
var jumlah = $('#karang');
var namaPengarang = '<input type="text" class="form-control mt-2" id="" value="" name="pengarang_lain[]" required>';
$('.submit-pengarang').click(function(){
    $(penulis).empty();
    var result = $('#karang').val();
    if(result > 10){
        
        for(let i = 0; i < 10; i++){
            $(penulis).append(namaPengarang)
        }
    }else{
        for(let i = 0; i < result; i++){
            $(penulis).append(namaPengarang)
        }
    }
})
</script>

<script>
    // $(function(){
        var sections = $('.form-section')

        $(document).ready(function() {
    var max_fields      = 10; //maximum input boxes allowed
    var wrapper   		= $("#var_baru"); //Fields wrapper
    var add_button      = $(".tambah_vari"); //Add button ID

var x = 1; //initlal text box count
$(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            var nextStep = x-1;
            $(wrapper).append('<div class="col-12" >'+
                                
                                '<a href="#" class="remove_field ml-20 text-danger"><i class="fa fa-close"></i>Hapus</a>'+
                                '<div class="row">'+
                                        '<div class="col-lg-6 form-group">'+
                                            '<select class="form-control publish-'+x+' pub" data-no="'+x+'" id="exampleFormControlSelect1" name="publish_id[]" required data-parsley-group="block-0">'+
                                            '<option value="">Pilih</option>'+
                                            '@foreach ($cate as $item)'+
                                            '<option value="{{$item->id}}">{{$item->name}}</option>'+
                                            '@endforeach'+
                                            '</select>'+
                                        '</div>'+
                                        '<div class="col-lg-6 form-group">'+
                                            '<select class="form-control category-'+x+'" id="exampleFormControlSelect1" name="category_id[]" required data-parsley-group="block-0">'+
                                            '<option value="">Pilih</option>'+
                                            
                                            '</select>'+
                                        '</div>'+
                                '</div>'+
                            '</div>'); //add input box
        }
    });
    
    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })
});

$('body').on('change','.pub',function(event){
    event.preventDefault();
    let no = $(this).attr('data-no');
    let id = $(this).val();
    category(id,no)
})


let category = (id, no)=>{
    $.ajax({
        url: '{{route('homes.cate')}}?id='+id,
        success: function(response){
            console.log(response)
            $('.category-'+no).empty();
            $('.category-'+no).focus;
            $('.category-'+no).append('<option value="">-- Pilih Kategory --</option>');
            $.each(response, function(key, data){
                $('.category-'+no).append('<option value="'+ data.id +'">' + data.name + '</option>');
            })
        }
    })
}

        function navigateTo(index){
            sections.removeClass('current').eq(index).addClass('current');
            $('.form-navigator .kembali').toggle(index>0);
            var atTheEnd = index >= sections.length - 1;
            $('.form-navigator .lanjut').toggle(!atTheEnd);
            $('.form-navigator [type=submit]').toggle(atTheEnd);
        }

        function curIndex(){
            return sections.index(sections.filter('.current'));
        }

        $('.form-navigator .kembali').click(function(){
            navigateTo(curIndex()-1)
        })

        $('.form-navigator .lanjut').click(function(){
            $('.naskah-form').parsley().whenValidate({
                group: 'block-' + curIndex()
            }).done(function(){
                navigateTo(curIndex()+1)
            })
        })

        sections.each(function(index,section){
            $(section).find(':input').attr('data-parsley-group','block-'+index)
        })

        navigateTo(0)
    // })

    window.Parsley.addValidator('maxFileSize', {
  validateString: function(_value, maxSize, parsleyInstance) {
    if (!window.FormData) {
      alert('You are making all developpers in the world cringe. Upgrade your browser!');
      return true;
    }
    var files = parsleyInstance.$element[0].files;
    return files.length != 1  || files[0].size <= maxSize * 1024;
  },
  requirementType: 'integer',
  messages: {
    en: 'This file should not be larger than %s Kb',
    fr: 'Ce fichier est plus grand que %s Kb.'
  }
});
    
</script>
    
@endpush