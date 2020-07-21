@extends('layouts.backend')
@section('css_after')
@endsection
@section('content')
    <h1>{{$resource->name}}</h1>
    @include($resource->view_name)
@endsection
@section('js_after')

@endsection
