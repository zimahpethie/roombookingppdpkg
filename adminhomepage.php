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
<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
<div class="header">

</div>

<div class="navbar">
<a>Hai, <strong><?php echo $_SESSION['username']; ?></strong> </a>
<a href="adminhomepage.php?logout='1'"; class="right"> Log Keluar</a>
<?php endif ?>
</div>

<div class="container">
    <h2>Selamat Datang ke Sistem Tempahan Bilik PPD dan PKG Mukah</h2>
 <center>
<table class="listtable" style="border:0px">
	<thead>
		<tr>
			<th style="background:#fff; border:0px"><div class="w3-content w3-section" style="max-width:750px">
  <img class="mySlides" src="img\bm1.jpeg" alt="Bilik Mesyuarat,PKG" style="width:100%">
  <img class="mySlides" src="img\bs.3.jpeg" alt="Bilik Seminar,PKG" style="width:100%">
  <img class="mySlides" src="img\sri.tapou.jpg" alt="Dewan Sri Tapou, PPD" style="width:100%">
</div></th>
			<th style="width: 40%; background:#fff; border:0px">
			<a href="adminprofilelist.php"><button class="button" style="width: 80%">Senarai Pengguna</button></a>
			<br><br><a href="adminroom.php"><button class="button"style="width: 80%">Senarai Bilik</button></a>
			<br><br><a href="adminbookinglist.php"><button class="button"style="width: 80%">Senarai Tempahan</button></a>
			<br><br><a href="adminkemaskini.php"><button class="button"style="width: 80%">Kemaskini Tempahan</button></a>
			<br><br><a href="adminfeedbacklist.php"><button class="button"style="width: 80%">Senarai Maklum Balas</button></a>
			  <br><br><a href="adminmanual.php"><button class="button"style="width: 80%">Manual Pengguna</button></a>
 </th></tr>
	</thead>
	</table></center>
<br>
<div class="footer">
&copy; 2018 Pejabat Pendidikan Daerah Mukah & Pusat Kegiatan Guru Mukah
</div></div>
</body>
</html>
<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>