<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{config('app.name','LSApp3')}}</title>
</head>

<body>
{{--[6] include the layout--}}
@include('inc/navbar')

{{--[4] Here will bring the contents of the other pages--}}
@yield('content')


</body>
</html>
