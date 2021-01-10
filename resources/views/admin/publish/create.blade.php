@extends('admin.layouts.base')

@section('content')
    
{!! Form::open(['route' => 'publish.store', 'method' => 'post','autocomplete'=>"false"]) !!}
@include('admin.publish._form')
{!! Form::close() !!}


@endsection