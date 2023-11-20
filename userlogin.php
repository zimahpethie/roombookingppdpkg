<?php include('userserver.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Sistem Tempahan Bilik PPD & PKG Mukah</title>
  <link rel="icon" href="img\2.png">
  <link rel="stylesheet" type="text/css" href="indexpage.css">
</head>
<body>
<center><img src="img\headerindex.png" style="size:100%" alt="header index"></center>
  <div class="header">
  	<h2>Log Masuk Pengguna</h2>
  </div>
	 
  <form method="post" action="userlogin.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Nama Pengguna</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Kata Laluan</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Log Masuk</button>
  	</div>
  	
  		<p><a href="index.php" style="float: left">Kembali</a><a href="userregister.php" style="float: right">Daftar akaun</a><br>
  	
  	</p>
  </form>
 <br><div class="footer" style="position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   color: black;
   text-align: center;">
  <p>&copy; 2018 Pejabat Pendidikan Daerah Mukah & Pusat Kegiatan Guru Mukah</p>
</div>
</body>
</html>