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
    <form action="{{route('projects.store')}}" method="POST">
        @csrf

        <label for="title">Title</label>
        <input id="title" name="title" type="text" required>

        <label for="description">Description</label>
        <input id="description" name="description" type="text">

        <label for="deadline">Deadline</label>
        <input id="deadline" name="deadline" type="date" required>

        <label for="client_id">Client id</label>
        <input id="client_id" name="client_id" type="number" required>

        <label for="user_id">User id</label>
        <input id="user_id" name="user_id" type="number" required>

        <label for="status_id">Status id</label>
        <input id="status_id" name="status_id" type="number" required>


        <button type="submit">create</button>
    </form>
</body>
</html>
