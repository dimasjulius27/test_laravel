<!DOCTYPE html>
<html>
<head>
	<title>Dimas belajar Laravel </title>
</head>
<body>
	<h1>
		Ini adalah halaman Pegawai Passing Data Controller Ke View
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
	<br />
	<div>
		<?php 
			foreach ($arr_pegawai as $key => $value) {
				echo "$value"."<br />";
			}
		?>

	</div>
</body>
</html>