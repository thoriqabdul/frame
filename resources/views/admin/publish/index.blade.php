@extends('admin.layouts.base')

@section('content')
<div class="d-flex align-items-center mb-5">
    <h3 class="title">Daftar Publisher</h3>
    <a class="btn btn-primary ml-auto" href="{{route('publish.create')}}"><span><i class="zmdi zmdi-plus"></i>Tambah Publish</span></a>
</div>
<table id="myTable" class="display">
    
    <thead>
        <tr>
            <th>Nama</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data['publis'] as $item)
        <tr>
            <td>{{$item->name}}</td>
            <td>{{$item->email}}</td>
            <td>
                <a href="{{ route('publish.edit',['id'=>$item->id]) }}" class="btn  btn-primary btn-flat btn-sm" ><i class="far fa-edit"></i></a>
                <form action="{{route('publish.delete', ['id'=>$item->id])}}"
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