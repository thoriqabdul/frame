@extends('admin.layouts.base')

@section('content')
    
{!! Form::open(['route' => ["slider.update",$model->id], 'method' => 'put','autocomplete'=>"false","enctype"=>'multipart/form-data']) !!}
@include('admin.slider._form')
{!! Form::close() !!}


@endsection