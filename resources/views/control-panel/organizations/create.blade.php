<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Organizations</title>
</head>
<body>
    <form action="{{route('organizations.store')}}" method="POST">
        @csrf

        <label for="title">Title</label>
        <input id="title" name="title" type="text" required>

        <label for="website">website</label>
        <input id="website" name="website" type="url" required>

        <label for="address">Address</label>
        <input id="address" name="address" type="text" required>

        <label for="description"> description</label>
        <input id="description" name="description" type="text">


        <button type="submit">create</button>
    </form>
</body>
</html>
