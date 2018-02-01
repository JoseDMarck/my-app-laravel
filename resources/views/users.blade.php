<!DOCTYPE html>
<html>
<head>
	<title>Users</title>
</head>
<body>

<h1>{{$title}}</h1>
<hr>

 

@if (! empty($users))
    <ul>
        @foreach ($users as $user) 
            <li>{{$user}}</li>
        @endforeach
    </ul>
@else
    <p>No hay usuarios registrados.</p>
@endif


</body>
</html>