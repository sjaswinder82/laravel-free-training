<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify Email</title>
</head>
<body>
    <h3>Hello {{$name}}</h3>
    <h3>Thanks for signing up.</h3>
    Verify your email by <a href="{{route('verify.email', $token)}}">clicking here</a>.
</body>
</html>