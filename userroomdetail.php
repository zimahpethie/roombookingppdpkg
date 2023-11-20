<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "Anda perlu log masuk terlebih dahulu";
  	header('location: index.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: index.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Tempahan Bilik PPD & PKG Mukah</title>
<link rel="icon" href="img\2.png">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="main.css">
<link rel="stylesheet" type="text/css" href="inner.css">
</head>
<body>

<div class="header">

</div>
<!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
<div class="navbar">
  <a href="userhomepage.php">Laman Utama</a>
  <a href="userprofile.php">Profil</a>
<a href="userroomdetail.php"class="active">Senarai Bilik</a>
  <a href="userroomavailability.php" >Tempah Bilik</a>
  <a href="usersemakstatus.php">Semak Status Tempahan</a>
  <a href="userfeedbackform.php">Maklum Balas</a>
       <a href="userfeedbacklist.php">Senarai Maklum Balas</a>
	    <a href="usermanual.php">Manual Pengguna</a>
  <a href="adminhomepage.php?logout='1'"; class="right"><b><?php echo $_SESSION['username']; ?></b> | Log Keluar</a></p>
<?php endif ?>
</div>

<div class="container">
    <h2>Senarai Bilik</h2>

<center>
<table class="listtable" style="border:0px">
	<thead>
	 <tr>
			<th style="background:#fff; border:0px">
			<img class="mySlides3" src="img\sri.tapou.jpg" style="width:600px"></th>
			<th style="width: 40%; background:#fff; border:0px">
			<h3>Dewan Sri Tapou, PPD</h3>
			<p>Lokasi: Pejabat Pendidikan Daerah Mukah</p>
			<p>Terdapat kemudahan seperti:</p>
			<p>Pendingin hawa, kerusi, meja dan sebagainya</p>
 </th></tr>
 
		<tr>
			<th style="background:#fff; border:0px">
			<img class="mySlides1" src="img\bm1.jpeg" style="max-width:600px">
</div></th>
			<th style="width: 40%; background:#fff; border:0px">
			<h3>Bilik Mesyuarat, PKG</h3>
			<p>Bilik Mesyuarat @ Bilik Java</p>
			<p>Lokasi: Pusat Kegiatan Guru, Mukah</p>
			<p>Terdapat kemudahan seperti:</p>
			<p>Pendingin hawa, kerusi, meja dan sebagainya</p>
 </th></tr>
 
 <tr>
			<th style="background:#fff; border:0px">
			<img class="mySlides2" src="img\bs.3.jpeg" style="max-width:600px">
</div></th>
			<th style="width: 40%; background:#fff; border:0px">
			<h3>Bilik Seminar, PKG</h3>
			<p>Bilik Seminar @ Bilik Ruby</p>
			<p>Lokasi: Pusat Kegiatan Guru, Mukah</p>
			<p>Terdapat kemudahan seperti:</p>
			<p>Pendingin hawa, kerusi, meja dan sebagainya</p>
 </th></tr>

	</thead>
	</table></center>
<br>
<div class="footer">
&copy; 2018 Pejabat Pendidikan Daerah Mukah & Pusat Kegiatan Guru Mukah
</div></div>
</body>
</html>

