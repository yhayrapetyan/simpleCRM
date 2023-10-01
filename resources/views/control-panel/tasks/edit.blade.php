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
<form action="{{route('tasks.update', $task)}}" method="POST">
    @csrf
    @method('PUT')

    <label for="title">Title</label>
    <input id="title" name="title" type="text" value="{{$task->title}}" required>

    <label for="description">Description</label>
    <input id="description" name="description" type="text" value="{{$task->description}}">

    <label for="deadline">Deadline</label>
    <input id="deadline" name="deadline" type="date" value="{{$task->deadline}}" required>

    <label for="project_id">Project id</label>
    <input id="project_id" name="project_id" type="number" value="{{$task->project_id}}" required>

    <label for="user_id">User id</label>
    <input id="user_id" name="user_id" type="number" value="{{$task->user_id}}" required>

    <label for="status_id">Status id</label>
    <input id="status_id" name="status_id" type="number" value="{{$task->status_id}}" required>

    <button type="submit">Update</button>
</form>
</body>
</html>
