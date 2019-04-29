@extends('layouts/app')

@section('content')
    <h1>Create Post</h1>
{{--[17]--}}
    {{ Form::open(['action'=>'PostsController@store','method'=>'post'])}}
    {{Form::label('title','Title')}}
    {{Form::text('title')}}
    <br>
    {{Form::label('body','Body')}}
    {{--[18] id for the body--}}
    {{Form::textarea('body','',['id'=>'summary-ckeditor'])}}

    {{Form::submit('Submit')}}
    {{ Form::close()}}

@endsection
