@extends('admin.layouts.base')

@section('content')
<div class="d-flex align-items-center mb-5">
    <h3 class="title">Daftar Slider</h3>
    <a class="btn btn-primary ml-auto" href="{{route('slider.create')}}"><span><i class="zmdi zmdi-plus"></i>Tambah Slider</span></a>
</div>
<table id="myTable" class="display">
    
    <thead>
        <tr>
            <th>Nama</th>
            <th>Kategori</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data['publish'] as $item)
        <tr>
            <td><img src="{{asset('storage/'.$item->img)}}" alt="" class="img-fluid" width="300" height="200"></td>
            <td> <a href="{{$item->link}}" target="_blank">check link</a>  </td>
            <td>
                <a href="{{ route('slider.edit',['id'=>$item->id]) }}" class="btn  btn-primary btn-flat btn-sm" ><i class="far fa-edit"></i></a>
                <form action="{{route('slider.delete', ['id'=>$item->id])}}"
                    onsubmit="return confirm('Are you sure?')" class="d-inline"
                    method="POST">
                    @csrf
                    <input type="hidden" name="_method" value="DELETE">

                    <button type="submit" class="btn  btn-danger btn-flat btn-sm" ><i class="far fa-trash-alt"></i></button>
                </form>
            </td>
        </tr>
        @endforeach
        
    </tbody>
</table>
@endsection