<?php

	require 'helper/function.php';

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
 <html id="home">
 <head>
 	<title>Tugas Besar</title>

  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  
  <link rel="stylesheet" type="text/css" href="assets/css/index.css">

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
            <li><a href="admin/login.php" class="page-scroll">LOGIN</a></li>
          </ul>
        </div>
      </div>
    </nav>

<br>
<br>
<br>
 	
	<h1><center>Perusahaan Teknologi Terbesar di Dunia</center></h1>

	<center>
	<form action="" method="get">
		<input type="text" name="s" id="s" class="form-control" placeholder="Search...">
		<button type="submit" name="cari" id="cari" class="btn btn-success"><i class="glyphicon glyphicon-search"></i> Cari</button>
	</form> 
	</center>
  <center>
  <div class="container">
    <?php if(empty($teknologi)) :?>
      <div class="kotak">
        <h1 class="text-center">Data tidak ditemukan</h1>
      </div>
    <?php else : ?>
    <?php foreach($teknologi as $m) : ?>
      
          <div class="kotak">
            <div id="gambar">
              <img src="assets/img/<?= $m['gambar'] ?>" >
            </div>
            <div id="nama">
              <h3><?= $m['nama'] ?></h3>
              <a href="php/profil.php?id=<?= $m['id'] ?>">
                <button type="submit" name="submit" class="btn btn-danger">Selengkapnya</button>
              </a>
            </div>
          </div>
    <?php endforeach; ?>
    <?php endif; ?>
  </div>
  </center>


    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/jquery.easing.1.3.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    </body>
  </html>