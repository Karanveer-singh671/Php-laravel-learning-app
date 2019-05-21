@extends('layouts.app') // basically includes template of app.blade.php

// to use whatever inside container class use section
@section('content')
    <h1><a href="{{route('posts.edit', $post->id)}}">{{$post->title}}</a></h1>
@endsection


