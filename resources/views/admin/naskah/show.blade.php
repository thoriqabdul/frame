@extends('admin.layouts.base')

@section('content')
<div class="d-flex align-items-center mb-5">
    <h3 class="title">Detail Naskah</h3>
</div>

<ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Kontent</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Data Keterangan</a>
    </li>
  </ul>
  <div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
        <div class="mt-3">
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Judul</label>
                <div class="col-sm-10">
                  : {{$model->naskah->judul}}
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Sinopsis</label>
                <div class="col-sm-10">
                     <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="sinopsis" readonly> {{$model->naskah->sinosis}}</textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Donwload Naskah</label>
                <div class="col-sm-10">
                    <a href="{{ route('nas.download',['id'=>$model->id]) }}" data-link=""  class="btn btn-success">
                        Download Naskah
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
        <div class="mt-3">
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Nama Pengarang</label>
                <div class="col-sm-10">
                  : {{$model->naskah->pengarang}}
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Pengarang Lainnya</label>
                <div class="col-sm-10">
                 
                  @foreach ($model->naskah->other as $item)
                      <li>{{$item->nama}}</li>
                  @endforeach
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Bidang Naskah</label>
                <div class="col-sm-10">
                     : {{$model->name}}
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Segment Pembaca</label>
                <div class="col-sm-10">
                 
                  @foreach ($model->naskah->segment as $item)
                      <li>{{$item->name}}</li>
                  @endforeach
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Selling Point</label>
                <div class="col-sm-10">
                     <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="sinopsis" readonly> {{$model->naskah->selling}}</textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Key Word</label>
                <div class="col-sm-10">
                 
                  @foreach ($model->naskah->keyword as $item)
                      <li>{{$item->name}}</li>
                  @endforeach
                </div>
            </div>
        </div>
    </div>
  </div>
@endsection