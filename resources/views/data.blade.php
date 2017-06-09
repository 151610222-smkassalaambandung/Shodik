<!DOCTYPE html>
<html>
<head>
	<title>Looping</title>
</head>
<body>
<table border ="1">
		<tr>
			<center><h1>BUAH</h1></center>
                 <br>
		@foreach($buah as $data)
			{{$data}}<hr>
			@endforeach

		</tr>
			<br>

		@foreach($hewan as $s)
			{{$s}}<hr>
			@endforeach
			<br>


		@foreach($computer as $da)
			{{$da}}<hr>
			@endforeach
</center>

</body>
</html>