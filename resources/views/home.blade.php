@extends('layouts.app')

@section('content')
@foreach($posts as $post)
<article class="blog-post">
    <h2 class="blog-post-title mb-1">
        <a href="{{route('show.post', $post->id)}}">
            {{$post->title}}
        </a>
    </h2>
    <p class="blog-post-meta">{{ $post->created_at }} by <a href="#">Mark</a></p>
    <p>{{\Str::words($post->content, 20)}}</p>
</article>
@endforeach


<nav class="blog-pagination" aria-label="Pagination">
    {{$posts->links()}}
</nav>
@endsection