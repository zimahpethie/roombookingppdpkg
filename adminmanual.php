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
<?php if (isset($_SESSION['message'])): ?>
	<div class="msg">
		<?php 
			echo $_SESSION['message']; 
			unset($_SESSION['message']);
		?>
	</div>
<?php endif ?>
<div class="header">

</div>
 <!-- logged in user information -->
 <?php  if (isset($_SESSION['username'])) : ?>
<div class="navbar">
  <a href="adminhomepage.php">Laman Utama</a>
  <a href="adminprofilelist.php" >Senarai Pengguna</a>
     <a href="adminroom.php">Senarai Bilik</a>
  <a href="adminkemaskini.php">Kemaskini Tempahan</a>
  <a href="adminbookinglist.php">Senarai Tempahan</a>
  <a href="adminfeedbacklist.php">Senarai Maklum Balas</a>
   <a href="adminmanual.php"class="active">Manual Pengguna</a>
  <a href="adminhomepage.php?logout='1'"; class="right"><b><?php echo $_SESSION['username']; ?></b> | Log Keluar</a></p>
<?php endif ?>
</div>

<div class="container">
    <h2>Manual Pengguna</h2>
	<center><a href="manualpengguna.php"><img src="img\um.png" style="width: 100px; height 100px" alt="header index">Manual Pengguna</a></center>
<br><center><p>Langkah-langkah memngemaskini status tempahan bilik</p></center>
<center><img src="img\flowchartadmin.png" alt="flowchartadmin"></center>


<br>
<div class="footer">
&copy; 2018 Pejabat Pendidikan Daerah Mukah & Pusat Kegiatan Guru Mukah
</div></div>
</body>
</html>