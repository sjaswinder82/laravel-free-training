<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
    <div class="container">
    @if($status = session('status'))
       <div class="alert alert-primary" role="alert">
            {{$status}}
        </div>
       @endif
    <form action="{{route('posts.update', $post->id)}}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Post Title</label>
            <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{$post->title}}" id="title">
            @error('title')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Post Content</label>
            <textarea name="content" class="form-control @error('content') is-invalid @enderror" id="content" rows="3">
                {{ $post->content }}
            </textarea>
            @error('content')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror

        </div>
        <input class="form-control btn-success" type='submit' value="Update">
    <form>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>