<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
    <div class="container">

        <form action="{{route('register.store')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="name" name="name" class="form-control @error('name') is-invalid @enderror" value="{{old('title')}}" id="title">
                @error('name')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{old('title')}}" id="title">
                @error('email')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" value="{{old('title')}}" id="title">
                @error('password')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>
            <input class="form-control btn btn-primary" value="Register" type='submit'>
            <form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>