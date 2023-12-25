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
<form action="{{route('send-recovery-link')}}" method="POST">
    @csrf
    <label for="email">Email</label>
    <input id="email" name="email" type="email" required>
    <button type="submit"> send</button>
</form>

</body>
</html>
