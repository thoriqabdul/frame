@extends('admin.layouts.base')

@section('content')
    
{!! Form::open(['route' => ["publish.update",$model->id], 'method' => 'put','autocomplete'=>"false"]) !!}
@include('admin.publish._form')
{!! Form::close() !!}


@endsection