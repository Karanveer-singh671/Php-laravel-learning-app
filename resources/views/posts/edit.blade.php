@extends('layouts.app') // basically includes template of app.blade.php

// to use whatever inside container class use section
@section('content')
<h1>Edit Post</h1>
{{--    <form method="post" action="/posts/{{$post->id}}" >--}}

{{--{!! Form::open(['method'=>'PATCH', 'action'=>'PostsController@update']) !!}--}}
{!! Form::model($post, ['method'=>'PATCH', 'action'=>'PostsController@update', $post->id]) !!}

        {{csrf_field()}}

{!! Form::label('title', 'Title:') !!}
{!! Form::text('title',null, ['class'=>'form-control']) !!}

{!! Form::submit('Update Post', ['class'=>'btn btn-info']) !!}
{{--        <input type="hidden" name="_method" value="PUT">--}}
        <!-- the name field in tag value will be the column in posts named 'title -->
{{--        <input type="text", name="title" placeholder="Enter Title" value="{{$post->title}}">--}}
{{--        <input type="submit", name="Update">--}}
            {!! Form::close() !!}
{{--    </form>--}}

<!-- default method on form if don't specify is get -->
{{--<form method="post" action="/posts/{{$post->id}}">\--}}

{!! Form::open(['method'=>'DELETE', 'action'=>'PostsController@destroy']) !!}
{{--    <input type="hidden" name=_method" value="DELETE">--}}
{{--    <input type="submit" name="Delete">--}}
{!! Form::submit('Delete Post', ['class'=>'btn btn-danger', $post->id]) !!}
{!! Form::close() !!}
{{--</form>--}}
@endsection


