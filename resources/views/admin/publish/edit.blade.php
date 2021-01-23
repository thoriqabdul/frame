@extends('admin.layouts.base')

@section('content')
    
{!! Form::open(['route' => ["publish.update",$model->id], 'method' => 'put','autocomplete'=>"false","enctype"=>'multipart/form-data']) !!}
@include('admin.publish._form')
{!! Form::close() !!}


@endsection