<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Laravel #4 : Passing Data Controller Ke View Laravel - www.malasngoding.com </title>
</head>
<body>
	<h1>
		Ini adalah halaman Biodata Passing Data Controller Ke View
	</h1>
	<div>
		<b>Nama : {{$nama}}</b>
		<br />
		<div>Daftar Mata Kuliah</div>
		@foreach($arr_matkul as $value)
		<label ># {{$value}}</label>
		<br />
		@endforeach
	</div>
</body>
</html>