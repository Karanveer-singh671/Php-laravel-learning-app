@extends('layouts.app') // basically includes template of app.blade.php

// to use whatever inside container class use section
@section('content')
    <h1>Create Post</h1>
    <form method="post" action="/posts" >
        <!-- the name field in tag value will be the column in posts named 'title -->
        <input type="text", name="title" placeholder="Enter Title">
        <input type="submit", name="submit">
    </form>
@endsection
    
    
    
    
    
    
    
    @yield('footer')