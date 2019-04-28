{{--[4] now in this view need only the parts that will be sent to the layout--}}
@extends('layouts/app')
@section('content')
    {{--[5c]--}}
    <h1>{{$title}}</h1>
    @if(count($services)>0)
        <ul>
        @foreach($services as $service)
            <li>{{$service}}</li>
            @endforeach
        </ul>
    @endif
@endsection
