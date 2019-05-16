@extends('layouts.app') // basically includes template of app.blade.php

// to use whatever inside container class use section
@section('content')
    <h1>Contact Page</h1>
    @if (count($poeple))
        <ul>
        @foreach($people as $person)

            <li>{{person}}</li>

        @endforeach
       </ul>
    @endif


    @stop

@section('footer')

{{--    <script>alert('Hello')</script>--}}

    @stop