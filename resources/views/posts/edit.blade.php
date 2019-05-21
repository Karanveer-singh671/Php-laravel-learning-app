@extends('layouts.app') // basically includes template of app.blade.php

// to use whatever inside container class use section
@section('content')
<h1>Edit Post</h1>
    <form method="post" action="/posts/{{$post->id}}" >

        {{csrf_field()}}
        <input type="hidden" name="_method" value="PUT">
        <!-- the name field in tag value will be the column in posts named 'title -->
        <input type="text", name="title" placeholder="Enter Title" value="{{$post->title}}">
        <input type="submit", name="Update">
    </form>

<!-- default method on form if don't specify is get -->
<form method="post" action="/posts/{{$post->id}}">\
    <input type="hidden" name=_method" value="DELETE">
    <input type="submit" name="Delete">
</form>
@endsection


