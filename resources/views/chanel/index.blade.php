<!DOCTYPE html>
<html>
<head>
	<title>chanels</title>
</head>
<body>
	<ul>
		@foreach($chanels as $chanel)
		<li>{{$chanel->name}}</li>
		@endforeach
	</ul>
</body>
</html>