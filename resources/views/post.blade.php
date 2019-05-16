{{--<!DOCTYPE html>--}}
{{--<html>--}}
{{--<head>--}}
{{--    <title>Laravel</title>--}}

{{--    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">--}}
{{--</head>--}}
{{--<body>--}}
{{--<div class="container">--}}
{{--    <div class="content">--}}
{{--        <!-- if want to echo just use double brackets since this is a .blade template engine inside laravel -> makes php code similar -->--}}
{{--        <div class="title">Post {{$id}} {{$name}}</div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--</body>--}}
{{--</html>--}}

@extends('layouts.app') // basically includes template of app.blade.php

// to use whatever inside container class use section

@section('content')
    <h1>Contact Page</h1>

@stop
