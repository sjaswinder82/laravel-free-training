@extends('layouts.app')

@section('content')
<article class="blog-post">
    <h2 class="blog-post-title mb-1">{{$post->title}}</h2>
    <p class="blog-post-meta">{{$post->created_at}} <a href="#">Mark</a></p>

    <p>{{$post->content}}</p>
    <hr>
    <h3>Comments</h3>
    @foreach ($post->comments as $comment)
    <div>

        <p>{{$comment->content}}</p>
        <p>{{$comment->user->name}} - {{$comment->created_at}}</p>
    </div>
    @endforeach

    <hr>
    <form action="{{route('comments.store', $post->id)}}" method="post">
        @csrf
        <textarea rows=10 cols=50 id="comment" name="content" placeholder="Comment if you have any query or like the post."></textarea>
        <input type="submit" value="Comment" />
        <form>

            <!-- add comments -->
            @endsection