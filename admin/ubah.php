<?php 

	session_start();

	require '../helper/function.php';

	if (!isset($_SESSION['login'])) {
		header("Location:login.php");
		exit;
	}

	$id = $_GET["id"];
	$m = query("SELECT * FROM teknologi WHERE id = $id")[0];

	if (isset($_POST["ubah"])) {
		if (ubah($_POST) > 0) {
			echo "<script>
			alert('Data Berhasil Diubah');
			document.location.href='index.php';
			</script>";
		} else {
			echo "<script>
			alert('Data Gagal Diubah');
			document.location.href='index.php';
			</script>";
		}
	}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Ubah Data Teknologi</title>
		<link href="../assets/css/bootstrap.min.css" rel="stylesheet">

		<link rel="stylesheet" type="text/css" href="../assets/css/tambah.css">
</head>
<body>
	<div class="container">
	<h1>Ubah Data Teknologi</h1>
	<br>
	<form action="" method="post">
		
			<input type="hidden" name="id" value="<?php echo $m["id"]; ?>">
			
				<label for="nama">Nama</label><br>
				<input type="text" name="nama" id="nama" required autocomplete="off" autofocus value="<?php echo $m["nama"]; ?>">
			
			<br>
			
				<label for="pendiri">Pendiri</label><br>
				<input type="text" name="pendiri" id="pendiri" required autocomplete="off" autofocus value="<?php echo $m["pendiri"]; ?>">
			
			<br>
			
				<label for="lahir">Lahir</label><br>
				<input type="text" name="lahir" id="lahir" required autocomplete="off" autofocus value="<?php echo $m["lahir"]; ?>">
			
			<br>
			
				<label for="penghasilan">Penghasilan</label><br>
				<input type="text" name="penghasilan" id="penghasilan" required autocomplete="off" autofocus value="<?php echo $m["penghasilan"]; ?>">
			
			<br>
			
				<label for="gambar">Gambar</label><br>
				<input type="text" name="gambar" id="gambar" required autocomplete="off" autofocus value="<?php echo $m["gambar"]; ?>">
				<br>
				<br>
			<button type="submit" name="ubah" class="btn btn-info">Ubah</button>

	</form>
	<br>
	<a href="index.php"><button class="btn btn-danger">Kembali</button></a>
</div>
</body>
</html>