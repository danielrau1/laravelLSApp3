@extends('layouts/app')

@section('content')
    <h1>Posts</h1>

    {{--[11]--}}
    @if(count($posts)>0)
    @foreach($posts as $post)
        {{--[12]--}}
        <h3><a href="http://localhost/lsapp3/public/posts/{{$post->id}}">{{$post->title}}</a></h3>
        <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
                                                        {{--[25]--}}
        @endforeach
    {{--[13]--}}
        {{$posts->links()}}

        @else
        <p>no posts found</p>

    @endif

    @endsection
