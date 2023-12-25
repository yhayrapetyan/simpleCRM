<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <form action="{{route('login')}}" method="POST">
        @csrf
        <label for="email">Email</label>
        <input type="email" id="email" name="email">

        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>

        <label for="remember_me">Remember Me</label>
        <input id="remember_me" name="remember_me" type="checkbox">
        <button type="submit">Log In</button>

        <button ><a href="{{route('forgot-password')}}">Forget Password</a></button>
    </form>

</body>
</html>
