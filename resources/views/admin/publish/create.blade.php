@extends('admin.layouts.base')

@section('content')
    
{!! Form::open(['route' => 'publish.store', 'method' => 'post','autocomplete'=>"false","enctype"=>'multipart/form-data']) !!}
@include('admin.publish._form')
{!! Form::close() !!}


@endsection