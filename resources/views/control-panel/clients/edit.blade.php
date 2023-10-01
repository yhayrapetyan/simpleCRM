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
    <form action="{{route('clients.update', $client->id)}}" method="POST">
      @csrf
      @method('PUT')

        <label for="name">Name</label>
        <input id="name" name="name" type="text" value="{{$client->name}}" required>

        <label for="email">Email</label>
        <input id="email" name="email" type="email" value="{{$client->email}}" required>

        <label for="phone">Phone</label>
        <input id="phone" name="phone" type="text" value="{{$client->phone}}" required>

        <label for="organization_id">Organization</label>
        <input id="organization_id" name="organization_id" type="number" value="{{$client->organization->id}}" required>

        <button type="submit">Update</button>
    </form>
</body>
</html>
