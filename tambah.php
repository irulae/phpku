<?php
require 'functions.php';

if( isset($_POST["submit"]) ) {

	if( tambah($_POST) > 0 ) {
		echo " 
		<script>
			alert('data behasil ditambahkan!')
			document.location.href = 'index.php';
		</script>
		";
	} else {
		echo " 
		<script>
			alert('data gagal ditambahkan!')
			document.location.href = 'tambah.php';
		</script>
		";
	}

}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<title>Tambah data mahasiswa</title>
</head>
<body>
	<h1>Tambah data mahasiswa</h1>
	

	<form action="" method="post">
		<ul>
			<li>
				<label for="nrp">NRP:</label>
				<input type="text" name="nrp" id="nrp">

			</li>
			<li>
				<label for="nama">Nama:</label>
				<input type="text" name="nama" id="nama">
			</li>
			<li>
				<label for="email">Email:</label>
				<input type="text" name="email" id="email">
			</li>
			<li>
				<label for="jurusan">Jurusan:</label>
				<input type="text" name="jurusan" id="jurusan">
			</li>
			<li>
				<label for="gambar">Gambar:</label>
				<input type="text" name="gambar" id="gambar">
			</li>
			<li>
				<button type="submit" name="submit" class="btn btn-primary">Kirim</button>
			</li>
		</ul>
	
	</form>



</body>
</html>