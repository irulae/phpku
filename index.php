<?php 
require 'functions.php';

$mahasiswa = query("SELECT * FROM mahasiswa");

 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
 	<title>Halaman Admin</title>
 		
 </head>
 <body>
 	<div class="header">
 	<h1  class="alert-heading" align="center">Daftar Mahasiswa</h1>
 </div>
 	<div class="mhs">
 	<button type="button" class="btn btn-outline-success"><a href="tambah.php">Tambah Data</a></button>
	</div>
 		<table class="table table-bordered table-dark">
		<thead>
 		<tr>
 			<th>No.</th>
 			<th>Aksi</th>
 			<th>Gambar</th>
 			<th>NRP</th>
 			<th>Nama</th>
 			<th>Email</th>
 			<th>Jurusan</th>
 		</tr>
 		</thead>
 		<?php $i = 1; ?>
 		<?php foreach( $mahasiswa as $row ) : ?>
		<tbody>
		<tr>
			<td><?= $i; ?></td>
			<td>
		<button type="button" class="btn btn-outline-primary"><a href="ubah.php?id=<?= $row["id"]; ?>">UPDATE</a></button>
		<button type="button" class="btn btn-outline-primary"><a href="hapus.php?id=<?= $row["id"]; ?>">HAPUS</a></button>
			</td>
			<td><img src="img/<?= $row["gambar"]; ?>" width="50"></td>
			<td><?= $row["nrp"]; ?></td>
			<td><?= $row["nama"]; ?></td>
			<td><?= $row["email"]; ?></td>
			<td><?= $row["jurusan"]; ?></td>
		</tr>
		</tbody>
		<?php $i++; ?>
		<?php endforeach; ?>

	 	</table>

	 <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
 </body>
 </html>