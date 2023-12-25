<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="{{route('set-password')}}" method="POST">
    @csrf
    <label for="password">Password</label>
    <input id="password" name="password" type="password" required>

    <label for="password_confirmation">Password Confirmation</label>
    <input id="password_confirmation" name="password_confirmation" type="password" required>

    <input id="email" name="email" value="{{$email}}" type="hidden">
    <input id="token" name="token" value="{{$token}}" type="hidden">
</form>
</body>
</html>
