@extends('admin.layouts.base')

@section('content')
<div class="d-flex align-items-center mb-5">
    <h3 class="title">Naskah Pending</h3>
    {{-- <a class="btn btn-primary ml-auto" href="{{route('cate.create')}}"><span><i class="zmdi zmdi-plus"></i>Tambah Publish</span></a> --}}
</div>
<table id="myTable" class="display">
    
    <thead>
        <tr>
            <th>Judul</th>
            <th>Publisher</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @php
            $checkauth = Auth::user()->role_id == 1 ? $data['publish'] : $data['publish_role'];
        @endphp
        @foreach ($checkauth as $item)
        <tr>
            <td>{{$item->naskah->judul}}</td>
            <td>{{$item->category->publish->name}}</td>
            <td><span class="text-primary">Pending</span></td>
            <td>

                <a href="#" data-link="{{ route('nas.edit',['id'=>$item->id]) }}"  class="btn btn-primary try" id="try" title="{{$item->naskah->judul}}">
                    Konfirmasi
                </a>
                <a href="{{ route('nas.download',['id'=>$item->id]) }}" data-link=""  class="btn btn-success">
                    Download Naskah
                </a>
                <a href="{{ route('nas.show',['id'=>$item->id]) }}" data-link=""  class="btn btn-warning">
                    Detail Naskah
                </a>
                {{-- <a href="{{ route('cate.edit',['id'=>$item->id]) }}" class="btn  btn-primary btn-flat btn-sm" ><i class="far fa-edit"></i></a>
                <form action="{{route('cate.delete', ['id'=>$item->id])}}"
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


<!-- Button trigger modal -->

  
  <!-- Modal -->
  <div class="modal fade" id="modal">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modal-title">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" id="modal-body">
         
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" id="modal-btn-save">Save changes</button>
        </div>
      </div>
    </div>
  </div>
@endsection


@push('js_after')
    <script>
        $('.try').click(function (event) {
            // event.preventdefault();
            var me = $(this),
                url = me.attr('data-link'),
                title = me.attr('title');

            $('#modal-title').text(title);
            $('#modal-btn-save').removeClass('hide').text(me.hasClass('edit') ? 'update' : 'create');


            $.ajax({
                url: url,
                dataType: 'html',
                success: function (response) {
                    $('#modal-body').html(response);
                }
            });

            $('#modal').modal('show');
        });

        $('#modal-btn-save').click(function (event) {
            event.preventDefault();

            var form = $('#modal-body form'),
                url = form.attr('action'),
                method = $('input[name=method]').val() == undefined ? 'POST' : 'PUT';

            form.find('.help-block').remove();
            form.find('.form-group').removeClass('has-error');

            $.ajax({
                url: url,
                method: method,
                data: form.serialize(),
                success: function (response) {
                    // form.trigger('reset');
                    // $('.alamat-class').after().empty();
                    // let dot = $('.alamat').attr('href');
                    // alamatas(dot);
                    $('#modal').modal('hide');
                    location.reload();
                    // if (method === 'POST') {
                    //     toastr.success("Succes Menambahkan Alamat!", "Success!");
                    // } else {
                    //     toastr.success("Succes mengubah Alamat!", "Success!");
                    // }
                },
                error: function (xhr) {
                    var res = xhr.responseJSON;

                    if ($.isEmptyObject(res) == false) {
                        $.each(res.errors, function (key, value) {
                            $('#' + key)
                                .closest('.form-group')
                                .addClass('has-error')
                                .append('<span class="help-block"><strong>' + value + '</strong></span>');
                        });
                    }
                }
            })
        });
    </script>
@endpush