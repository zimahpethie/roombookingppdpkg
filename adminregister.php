<?php include('adminserver.php') ?>
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
  	<h2>Daftar Akaun Admin</h2>
  </div>
	
  <form method="post" action="adminregister.php">
  	<label style="color:red">*</label>Wajib diisi<br>
  	<?php include('errors.php'); ?> <br>
	<label style="color:red">*</label>Nama Pengguna
  	<div class="input-group">
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
	<div class="input-group">
  	  <label>Nama Penuh</label>
  	  <input type="text" name="fullname" value="<?php echo $fullname; ?>">
  	</div>
	<div class="input-group">
  	  <label>Jawatan</label>
  	  <select name="position">
	  <option value="">Sila pilih jawatan anda</option>
  <option value="Staf PPD">Staf PPD</option>
  <option value="Staf PKG">Staf PKG</option>
</select>
  	</div>
	<div class="input-group">
  	  <label>Nombor Telefon</label>
  	  <input type="text" name="phonenum" value="<?php echo $phonenum; ?>">
  	</div>
	 <label style="color:red">*</label>Emel
  	<div class="input-group">
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
	 <label style="color:red">*</label>Kata Laluan
  	<div class="input-group">
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Sahkan Kata Laluan</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div style="clear: both;"><div class="input-group">
  	  <p class="alignleft"><button type="reset" class="btn" name="registeradmin">Reset</button></p> <p class="alignright"><button type="submit" class="btn" name="registeradmin">Daftar</button></p>
  	</div></div><br><br><br>

  		<p><a href="index.php" style="float: left">Kembali</a><a href="adminlogin.php" style="float: right">Log Masuk</a><br>
  	
  	</p>
  </form> <br><div class="footer" style="
   left: 0;
   bottom: 0;
   width: 100%;
   color: black;
   text-align: center;">
  <p>&copy; 2018 Pejabat Pendidikan Daerah Mukah & Pusat Kegiatan Guru Mukah</p>
</div>
</body>
</html>