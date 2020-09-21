<?php 

	session_start();

	require '../helper/function.php';

	if (!isset($_SESSION['login'])) {
		header("Location:login.php");
		exit;
	}

	if (isset($_GET['cari'])) {
		$keyword = $_GET['s'];
		$teknologi = query("SELECT * FROM teknologi WHERE
				nama LIKE '%$keyword%' OR
				pendiri LIKE '%$keyword%' OR
				lahir LIKE '%$keyword%' OR
				penghasilan LIKE '%$keyword%' OR
				gambar LIKE '%$keyword%' ");
	} else {

	$teknologi = query("SELECT * FROM teknologi");

	}

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Halaman Admin</title>

    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">

 	<link rel="stylesheet" type="text/css" href="../assets/css/admin.css">
  
    <script type="text/javascript">
      alert("Selamat datang di halaman admin.");
    </script>

 </head>
 <body bg background="assets/img/bg.jpg">

	<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand page-scroll" href="#home">Perusahaan Teknologi</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="logout.php" class="page-scroll">Logout</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <br>
    <br>
    <br>
 	
	<h1><center>Perusahaan Terkenal di Dunia</center></h1>

	<br>

	<center><a href="tambah.php">Tambah Data Teknologi</a></center>
	<center>
	<form action="" method="get">
		<input type="text" name="s" id="s" class="form-control" placeholder="Search..."><br>
		<button type="submit" name="cari" id="cari"><i class="glyphicon glyphicon-search"></i> Cari</button>
	</form> 
	</center>
	<br>
	<div class="content">
		<div class="main">
			<table class="table table-bordered">
				<thead>
				<tr>
					<th>ID</th>
					<th>Opsi</th>
			 		<th>Nama Perusahaan</th>
			 		<th>Pendiri</th>
			 		<th>Didirikan</th>
			 		<th>Penghasilan</th>
			 		<th>Logo</th>
		 		</tr>
		 		</thead>
		 		<tbody>
		 		<?php if(empty($teknologi)) :?>
		 			<tr>
		 				<td colspan="7">
		 					<h1 align="center">Data Tidak Ditemukan!</h1>
		 				</td>
		 			</tr>
		 		<?php else : ?>
		 			<?php $i = 1; ?>
		 			<?php foreach ($teknologi as $m) : ?>
	 			<tr>
	 				<td><?php echo $i++; ?></td>
	 				<td>
	 					<a href="ubah.php?id=<?php echo $m["id"]; ?>">Ubah</a>
	 					<a href="hapus.php?id=<?php echo $m["id"]; ?>" onclick="return confirm('Anda yakin ingin menghapus data ini ?');">Hapus</a>
	 				</td>
					<td><?php echo $m["nama"]; ?></td>
	 				<td><?php echo $m["pendiri"]; ?></td>
	 				<td><?php echo $m["lahir"]; ?></td>
	 				<td><?php echo $m["penghasilan"]; ?></td>
	 				<td><img src="../assets/img/<?= $m['gambar'];?>" ></td>
	 			</tr>
	 				<?php endforeach; ?>
	 			<?php endif; ?>
	 		</tbody>
	 		</table>
			</div>
			</div>


		</div>


 </body>
 </html>