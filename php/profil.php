<?php 

require '../helper/function.php';

$id = $_GET["id"];
$teknologi = query("SELECT * FROM teknologi WHERE id = $id")[0];

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Profil</title>

		<link rel="stylesheet" href="../assets/css/bootstrap.min.css">

		<link rel="stylesheet" href="../assets/css/bootstrap-theme.min.css">

		<link rel="stylesheet" href="../assets/css/profil.css">

</head>
<body bg background="../assets/img/bg.jpg">

	<h1 class="text-center">Perusahaan Teknologi</h1>
	<hr>

	<div class="container">

		<div id="sidebar">
			<img src="../assets/img/<?= $teknologi['gambar']; ?>">
		</div>
		<div id="content">
		<div class="desc">
			<p class= "nama"><?= $teknologi['nama']; ?></p>
		</div>
		<table class="table table-hover">
			<tbody>
				<tr>
					<td>Pendiri</td>
					<td> : </td>
					<td><?= $teknologi['pendiri'];?></td>
				</tr>
				<tr>
					<td>Lahir</td>
					<td> : </td>
					<td><?= $teknologi['lahir'];?></td>
				</tr>
				<tr>
					<td>Penghasilan</td>
					<td> : </td>
					<td><?= $teknologi['penghasilan'];?></td>
				</tr>
			</tbody>
		</table>
		</div>

	</div>
	<br>
	<center>
	<a href="../index.php">
		<button type="submit" name="submit" class="btn btn-info">Kembali!</button>
	</a>
	</center>
</body>
</html>