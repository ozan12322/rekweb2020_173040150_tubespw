<?php

	session_start();

	require '../helper/function.php';
	// cek tombol submit

	if (!isset($_SESSION['login'])) {
		header("Location:login.php");
		exit;
	}
	
	if ( isset($_POST['tambah'])) {
		if(tambah($_POST) > 0) {
			echo "
	<script>
		alert('Data Berhasil Ditambah');
		document.location.href='index.php';
	</script>";
		} else {
			echo "
	<script>
		alert('Data Gagal Ditambah');
		document.location.href='index.php';
	</script>";
		}
	}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Teknologi</title>
	
	<link href="../assets/css/bootstrap.min.css" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="../assets/css/tambah.css">
</head>
<body>

	<div class="container">
	<h1>Tambah Data Teknologi</h1>
	<br>
	<form action="" method="post">
				<label for="nama">Nama</label>
				<br>
				<input type="text" name="nama" id="nama" required autocomplete="off" autofocus>
			<br>
				<label for="pendiri">Pendiri</label>
				<br>
				<input type="text" name="pendiri" id="pendiri" required autocomplete="off" autofocus>
			<br>
				<label for="lahir">Lahir</label>
				<br>
				<input type="text" name="lahir" id="lahir" required autocomplete="off" autofocus>
			<br>
				<label for="penghasilan">Penghasilan</label>
				<br>
				<input type="text" name="penghasilan" id="penghasilan" required autocomplete="off" autofocus>
			<br>
				<label for="gambar">Gambar</label>
				<br>
				<input type="text" name="gambar" id="gambar" required autocomplete="off" autofocus>
			<br>
			<br>
				<button type="submit" name="tambah" class="btn btn-info">Tambah</button>
		</ul>
	</form>
		<br>
		<a href="index.php"><button class="btn btn-danger">Kembali</button></a>
	</div>
</body>
</html>