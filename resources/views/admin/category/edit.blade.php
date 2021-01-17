@extends('admin.layouts.base')

@section('content')
    
{!! Form::open(['route' => ["cate.update",$model->id], 'method' => 'put','autocomplete'=>"false"]) !!}
@include('admin.category._form')
{!! Form::close() !!}


@endsection