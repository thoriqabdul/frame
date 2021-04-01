@extends('admin.layouts.base')

@section('content')
    
{!! Form::open(['route' => ["publiusersh.update",$model->id], 'method' => 'put','autocomplete'=>"false","enctype"=>'multipart/form-data']) !!}
@include('admin.user._form')
{!! Form::close() !!}


@endsection