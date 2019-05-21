@extends('layouts.app') // basically includes template of app.blade.php

// to use whatever inside container class use section
@section('content')
    <h1>Create Post</h1>
{{--    <form method="post" action="/posts" >--}}
<!-- curly braces mean doing filtering using blade and letting you input passed data in, the !! on each side means don't filter anything -->
        {!! Form::open(['method'=>'POST', 'action'=>'PostsController@store']) !!}

    <div class="form-group">
        {!! Form::label('title', 'Title:') !!}
        {!! Form::text('title',null, ['class'=>'form-control']) !!}
    </div>
        <!-- the name field in tag value will be the column in posts named 'title -->
{{--        <input type="text", name="title" placeholder="Enter Title">--}}

    {!! Form::submit('Create Post', ['class'=>'btn btn-primary']) !!}
        <input type="submit", name="submit">
    {!! Form::close() !!}
{{--    </form>--}}
@endsection
    
    
    
    
    
    
    
    @yield('footer')