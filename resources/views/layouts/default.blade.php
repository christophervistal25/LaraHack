<!DOCTYPE html>
<html lang="en">




<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="{{ config('app.description') }}">


    <meta property="og:url" content=" {{route('home')}} " />
    <meta property="og:type" content="article" />
    <meta property="og:title" content=" {{config('app.name')}} " />
    <meta property="og:description" content="{{ config('app.description') }}" />
    <meta property="og:image" content=" {{asset('images/LOGO.png')}} " />


    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="{{route('home')}} ">
    <meta name="twitter:title" content="{{config('app.name')}}  ">
    <meta name="twitter:description" content="{{ config('app.description') }}">
    <meta name="twitter:image:src" content="{{asset('images/LOGO.png')}} ">
    <meta name="twitter:image:width" content="312">
    <meta name="twitter:image:height" content="141">


    <title>{{ config('app.name', 'Easy Hack') }}</title>
    <link href="https://fonts.googleapis.com/css?family=Karla" rel="stylesheet"> @yield('styles')

</head>

<body>
    @yield('content') @yield('scripts')
</body>

</html>