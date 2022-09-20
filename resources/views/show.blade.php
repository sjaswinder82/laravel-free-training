@extends('layouts.app')

@section('content')
<article class="blog-post">
    <h2 class="blog-post-title mb-1">{{$post->title}}</h2>
    <p class="blog-post-meta">{{$post->created_at}} <a href="#">Mark</a></p>

    <p>{{$post->content}}<p>
@endsection