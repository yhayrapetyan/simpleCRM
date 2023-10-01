<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User</title>
</head>
<style>
    input {
        display: block;
    }
    button {
        margin: 10px
    }
</style>
<body>
<form action="{{route('users.update', $user)}}" method="POST" >
    @csrf
    @method('PUT')

    <label for="name">Name</label>
    <input id="name" name="name" type="text" required value="{{$user->name}}">

    <label for="email">Email</label>
    <input id="email" name="email" type="email" required value="{{$user->email}}">

    <label for="phone">Phone</label>
    <input id="phone" name="phone" type="text" required value="{{$user->phone}}">

    <label for="address">Address</label>
    <input id="address" name="address" type="text" required value="{{$user->address}}">

    <label for="password"> Password</label>
    <input id="password" name="password" type="password" required>

    <label for="role_id">Role</label>
    <input id="role_id" name="role_id" type="number">

    <button type="submit">update</button>
</form>

</body>
</html>
