{{--[4] now in this view need only the parts that will be sent to the layout--}}
@extends('layouts/app')
@section('content')
    {{--[5b]--}}
    <h1><?php echo $title; ?></h1>
    <p>This is index about</p>
@endsection
