@extends('admin.layouts.base')

@section('content')
<div class="d-flex align-items-center mb-5">
    <h3 class="title">Daftar User</h3>
    {{-- <a class="btn btn-primary ml-auto" href="{{route('cate.create')}}"><span><i class="zmdi zmdi-plus"></i>Tambah Publish</span></a> --}}
</div>
<table id="myTable" class="display">
    
    <thead>
        <tr>
            <th>Nama</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($checkauth as $item)
        <tr>
            <td>{{$item->name}}</td>
            <td>{{$item->email}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection