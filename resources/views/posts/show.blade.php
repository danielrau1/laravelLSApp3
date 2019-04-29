@extends('layouts/app')

@section('content')
    <a href="http://localhost/lsapp3/public/posts" >Back</a>
    {{--[12]--}}
    <h1>{{$post->title}}</h1>
    <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
                                                            {{--[25]--}}

    <div>
        {{--[18] to parse the html--}}
        {!!$post->body!!}

    </div>

    {{--[19] Edit a post--}}
    <a href="http://localhost/lsapp3/public/posts/{{$post->id}}/edit" >Edit</a>

    {{--[20] Delete a post--}}
    {{ Form::open(['action'=>['PostsController@destroy',$post->id],'method'=>'post'])}}
    {{Form::hidden('_method','DELETE')}}
    {{Form::submit('Delete')}}
    {{ Form::close()}}

@endsection
