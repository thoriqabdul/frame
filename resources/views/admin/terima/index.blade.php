@extends('admin.layouts.base')

@section('content')
<div class="d-flex align-items-center mb-5">
    <h3 class="title">Naskah Diterima</h3>
    {{-- <a class="btn btn-primary ml-auto" href="{{route('cate.create')}}"><span><i class="zmdi zmdi-plus"></i>Tambah Publish</span></a> --}}
</div>
<table id="myTable" class="display">
    
    <thead>
        <tr>
            <th>Judul</th>
            <th>Publisher</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($terima as $item)
        <tr>
            <td>{{$item->naskah->judul}}</td>
            <td>{{$item->publisher}}</td>
            <td><span class="text-success">Diterima</span></td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection