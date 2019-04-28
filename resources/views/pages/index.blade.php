
{{--[4] now in this view need only the parts that will be sent to the layout--}}
@extends('layouts/app')
@section('content')
    {{--[5] The value passed into the controller method--}}
<h1>{{$title}}</h1>
<p>This is index page</p>
@endsection
