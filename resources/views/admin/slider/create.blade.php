@extends('admin.layouts.base')

@section('content')
    
{!! Form::open(['route' => 'slider.store', 'method' => 'post','autocomplete'=>"false","enctype"=>'multipart/form-data']) !!}
@include('admin.slider._form')
{!! Form::close() !!}


@endsection