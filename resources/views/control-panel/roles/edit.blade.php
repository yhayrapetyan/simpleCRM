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

<form action="{{route('roles.update', $role)}}}}" method="POST">
    @csrf
    @method('PUT')

    <label for="title">Role</label>
    <input id="title" name="title" type="text" value="{{$role->title}}" required>

    @foreach($abilities as $ability)
        <label for="ability">{{$ability->title}}</label>
        <input id="ability" name="abilities[]" type="checkbox"
               value="{{$ability->id}}" {{in_array($ability->title,
                                                   $role->ability->pluck('title')->toArray())?
                                                   'checked' : '' }}>
    @endforeach


    <button type="submit">Update</button>
</form>
</body>
</html>
