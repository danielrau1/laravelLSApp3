@extends('layouts/app')

@section('content')
    <a href="http://localhost/lsapp3/public/posts" >Back</a>
    {{--[12]--}}
    <h1>{{$post->title}}</h1>
    <small>Written on {{$post->created_at}}</small>
    <div>
        {{--[18] to parse the html--}}
        {!!$post->body!!}

    </div>


@endsection
