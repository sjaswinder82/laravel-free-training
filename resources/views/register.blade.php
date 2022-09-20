@extends('layouts.auth')
@section('content')
<div class="col-12 d-flex justify-content-center">
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
        <a class="form-control btn btn-success mt-2"  href="{{route('login')}}">Already Have account</a>
        <form>
</div>
@endsection('content')