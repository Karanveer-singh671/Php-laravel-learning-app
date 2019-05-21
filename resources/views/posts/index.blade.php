@extends('layouts.app') // basically includes template of app.blade.php

// to use whatever inside container class use section
@section('content')
    <ul>
        @foreach($posts as $post)
            <li><a href="{{route('posts.show',$post->id)}}">{{$post->title}}</a></li>
        @endforeach
    </ul>
@endsection