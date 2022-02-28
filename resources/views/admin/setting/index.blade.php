@extends('admin.layouts.base')
@section('content')
    <div class="d-flex align-items-center mb-5">
        <h3 class="title">Daftar Anggota</h3>
        {{-- <a class="btn btn-primary ml-auto" href="{{route('user.create')}}"><span><i class="zmdi zmdi-plus"></i>Tambah Anggota</span></a> --}}
    </div>
        {!! Form::open(['route' => 'setting.store', 'method' => 'post','autocomplete'=>"false","enctype"=>'multipart/form-data']) !!}
        <div class="card">
            <div class="card-body">
                {{-- <form class="form-horizontal form-material"> --}}


                    <div class="form-group mb-4 w-25">
                        {!! Form::label('Tentang', 'Image') !!}
                        <input type="file" name="logo" class="dropify" data-default-file="{!!  App\Http\Models\Setting::getByCode('logo') !== null ? '/storage/'.App\Http\Models\Setting::getByCode('logo') : null !!}" />
                    </div>

                    <div class="form-group mb-4 w-25">
                        {!! Form::label('Tentang', 'Whats App 1') !!}
                        <input type="text" name="wa1" class="form-control numeric_only" value="{!!  App\Http\Models\Setting::getByCode('wa1') !!}" />
                    </div>

                    <div class="form-group mb-4 w-25">
                        {!! Form::label('Tentang', 'Whats App 2') !!}
                        <input type="text" name="wa2" class="form-control numeric_only" value="{!!  App\Http\Models\Setting::getByCode('wa2')  !!}" />
                    </div>


                {{-- </form> --}}
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-6">
                <button type="submit" class="btn btn-primary btn-block btn-lg">Submit</button>
            </div>
        </div>
        {!! Form::close() !!}

@endsection


@push('js_after')
    <script>
        $('.dropify').dropify();
        $('.numeric_only').bind('keyup paste', function(){this.value = this.value.replace(/[^0-9]/g, ''); });
        $(".curency").on("keyup",function(){
        var rgx = /^[0-9]*\.?[0-9]*$/;
        if($(this).val().match(rgx)){
            return true;
        }else{
            alert("Hanya bisa di input angka dan titik");
            this.value = this.value.replace(/[^0-9]/g, '');
        }
    });
    </script>
@endpush
