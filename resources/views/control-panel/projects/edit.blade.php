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
<form action="{{route('projects.update', $project)}}" method="POST">
    @csrf
    @method('PUT')

    <label for="title">Title</label>
    <input id="title" name="title" type="text" value="{{$project->title}}" required>

    <label for="description">Description</label>
    <input id="description" name="description" type="text" value="{{$project->description}}">

    <label for="deadline">Deadline</label>
    <input id="deadline" name="deadline" type="date" value="{{$project->deadline}}" required>

    <label for="client_id">Client id</label>
    <input id="client_id" name="client_id" type="number" value="{{$project->client_id}}" required>

    <label for="user_id">User id</label>
    <input id="user_id" name="user_id" type="number" value="{{$project->user_id}}" required>

    <label for="status_id">Status id</label>
    <input id="status_id" name="status_id" type="number" value="{{$project->status_id}}" required>

    <button type="submit">update</button>
</form>
</body>
</html>
