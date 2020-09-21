<?php

	session_start();

	require '../helper/function.php';

	if (isset($_POST['login'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];

		$cekUser = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

		if( mysqli_num_rows($cekUser) == 1 ){
			$row = mysqli_fetch_assoc($cekUser);
			if (password_verify($password, $row["password"])) {
			$_SESSION['login'] = true;
			header("Location: index.php");
			exit;
			}
		}
				
		$error = true;

	}

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link href="../assets/css/bootstrap.min.css" rel="stylesheet">

	<style type="text/css">
		body {
			background-image: url(../assets/img/bg2.jpg);
			background-position: center;
			background-attachment: fixed;
			background-size: cover;
		}
		.kotak {
			width: 300px;
			height: 280px;
			background-color: white;
			border-radius: 20px;
		}
	</style>
</head>
<body>
<center>
	<h1>LOGIN</h1>
	<?php if (isset($error)) : ?>
		<p style="color:green; font-style:italic";>username atau password anda salah!</p>
	<?php endif; ?>
	<br>

	<div class="kotak">
	<form action="" method="post">
		<br>
		<label for="username">Username</label>
			<br>
		<input type="text" name="username" autofocus required>
		<br>
		<label for="password">Password</label>
			<br>
		<input type="password" name="password" autofocus required>
		<br>
		<br>
		<button type="submit" name="login" class="btn btn-info">Login</button>
	</form>
		<br>
		<a href="registrasi.php"><button class="btn btn-danger">Register</button></a>
	</div>
</center>
</body>
</html>