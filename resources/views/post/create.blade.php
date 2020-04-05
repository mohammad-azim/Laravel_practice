<!DOCTYPE html>
<html>
<head>
	<title>create</title>
</head>
<body>
	<form action="#">
		<select name="chanel_id" id="chanel_id"></select>
		@foreach($chanels as $chanel)
			<option value="{{$chanel->id}}">{{$chanel->name}}</option>
		@endforeach
	</form>
</body>
</html>