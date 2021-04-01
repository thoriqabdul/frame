@extends('admin.layouts.base')

@section('content')
    
{!! Form::open(['route' => 'user.store', 'method' => 'post','autocomplete'=>"false","enctype"=>'multipart/form-data']) !!}
@include('admin.user._form')
{!! Form::close() !!}


@endsection