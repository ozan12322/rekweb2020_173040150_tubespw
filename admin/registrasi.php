<?php 

	require '../helper/function.php';

	if (isset($_POST['registrasi'])) {
		if (registrasi($_POST) > 0) {
			echo "<script>
			alert('user baru berhasil di tambahkan');
			document.location.href='login.php';
			</script>";
		}
	}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Registrasi</title>

	<link href="../assets/css/bootstrap.min.css" rel="stylesheet">

	<style type="text/css">
		body {
			background-color: lightskyblue;
		}
		.kotak {
			width: 300px;
			height: 250px;
			background-color: white;
			border-radius: 20px;
		}
	</style>
</head>
<body>
	<center>
	<h1>Registrasi</h1>
<br>
<br>
	<div class="kotak">
		<br>
	<form action="" method="post">
				<label for="username" >Username</label>
				<br>
				<input type="text" name="username" id="username" required>
			<br>
				<label for="password1">Password</label>
				<br>
				<input type="password" name="password1" id="password1" required>
			<br>
				<label for="password2">Ulangi Password</label>
				<br>
				<input type="password" name="password2" id="password2" required>
			<br>
			<br>
				<button type="submit" name="registrasi" class="btn btn-info">Registrasi</button>
	</form>
	</div>
</center>
</body>
</html>