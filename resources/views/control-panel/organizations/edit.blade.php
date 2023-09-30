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
<form action="{{route('organizations.update', $organization)}}" method="POST">
    @csrf

    <label for="title">Title</label>
    <input id="title" name="title" type="text" value="{{$organization->title}}" required>

    <label for="website">website</label>
    <input id="website" name="website" type="url" value="{{$organization->website}}" required>

    <label for="address">Address</label>
    <input id="address" name="address" type="text" value="{{$organization->address}}" required>

    <label for="description"> description</label>
    <input id="description" name="description" type="text" value="{{$organization->description}}" >


    <button type="submit">create</button>
</form>
</body>
</html>
