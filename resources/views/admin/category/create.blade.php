@extends('admin.layouts.base')

@section('content')
    
{!! Form::open(['route' => 'cate.store', 'method' => 'post','autocomplete'=>"false"]) !!}
@include('admin.category._form')
{!! Form::close() !!}


@endsection