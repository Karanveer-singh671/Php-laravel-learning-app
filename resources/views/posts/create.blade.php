@extends('layouts.app') // basically includes template of app.blade.php

// to use whatever inside container class use section
@section('content')
    <h1>Create Post</h1>
{{--    <form method="post" action="/posts" >--}}
<!-- curly braces mean doing filtering using blade and letting you input passed data in, the !! on each side means don't filter anything
to accept files and get an enctype attribute need to add 'files'=> true-->
        {!! Form::open(['method'=>'POST', 'action'=>'PostsController@store', 'files'=>true]) !!}


    <div class="form-group">
        {!! Form::label('title', 'Title:') !!}
        {!! Form::text('title',null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
{{--            in controller to access this file use $request->file('file') since called key file here--}}
        {!! Form::file('file', ['class'=>'form-control']) !!}
    </div>
        <!-- the name field in tag value will be the column in posts named 'title -->
{{--        <input type="text", name="title" placeholder="Enter Title">--}}
    <div class="form-group">
    {!! Form::submit('Create Post', ['class'=>'btn btn-primary']) !!}
{{--        <input type="submit", name="submit">--}}
    </div>
    {!! Form::close() !!}

    @if(count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>


                @endforeach
            </ul>
        </div>
{{--    </form>--}}
@endsection
    

    
    
    
    @yield('footer')