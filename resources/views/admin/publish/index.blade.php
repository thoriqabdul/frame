@extends('admin.layouts.base')

@section('content')
<div class="d-flex align-items-center mb-5">
    <h3 class="title">Daftar Anggota</h3>
    <a class="btn btn-primary ml-auto" href="{{route('publish.create')}}"><span><i class="zmdi zmdi-plus"></i>Tambah Anggota</span></a>
</div>
<table id="myTable" class="display">
    
</table>
@endsection

@push('js_after')
    <script>
        $(function () {
            $('#myTable').DataTable({
                serverSide: true,
                processing: true,
                searchDelay: 1000,
                ajax: '{{ route('publish.data') }}',
                columns: [
                    {data: 'name', title:'nama'},
                    {data: 'email',title:'email'},
                    {data: 'role.name', title:'Jabatan'},
                    {data: 'action', orderable: false, searchable: false}
                ]
            });
        });
    </script>
@endpush