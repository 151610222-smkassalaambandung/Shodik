<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table border="1">

		<center>

				<h1>daftar :{{$data}}</h1>

		</center>


	          <br>

		@foreach($ujang as $datas)
			{{$datas}}
			<hr>
		@endforeach

	</table>

</body>
</html>