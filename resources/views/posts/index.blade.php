@extends('layouts.app') // basically includes template of app.blade.php

// to use whatever inside container class use section
@section('content')
    <ul>
        @foreach($posts as $post)
            <div class="image-container">
{{--                will look at accessors in post if have and will use in this case it adds "/images/" with the path value--}}
                <img height="100" src="{{$post->path}}" alt="">
            </div>
            <li><a href="{{route('posts.show',$post->id)}}">{{$post->title}}</a></li>
        @endforeach
    </ul>
@endsection