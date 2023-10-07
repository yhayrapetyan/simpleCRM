<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
<style>
    input {
        display: block;
    }
</style>
</head>
<body>

    <form action="{{route('roles.store')}}" method="POST">
        @csrf

        <label for="title">Role</label>
        <input id="title" name="title" type="text" required>

        @foreach($abilities as $ability)
             <label for="ability">{{$ability->title}}</label>
             <input id="ability" name="abilities[]" type="checkbox" value="{{$ability->id}}">
        @endforeach


        <button type="submit">Create</button>
    </form>
</body>
</html>
