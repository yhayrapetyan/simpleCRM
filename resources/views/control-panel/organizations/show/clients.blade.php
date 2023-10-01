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
    <h1>{{$organization}}</h1><br>
@foreach($clients as $client)
    <h3>{{$client}}</h3>
@endforeach

<a href="{{route('organizations.projects.index', $organization)}}"><button> Projects</button></a>
</body>
</html>
