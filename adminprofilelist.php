<?php
require_once 'userserver.php';
$results = mysqli_query($db, "SELECT * FROM user"); ?>
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
  <a href="adminprofilelist.php" class="active">Senarai Pengguna</a>
     <a href="adminroom.php">Senarai Bilik</a>
  <a href="adminkemaskini.php">Kemaskini Tempahan</a>
  <a href="adminbookinglist.php">Senarai Tempahan</a>
  <a href="adminfeedbacklist.php">Senarai Maklum Balas</a>
   <a href="adminmanual.php">Manual Pengguna</a>
  <a href="adminhomepage.php?logout='1'"; class="right"><b><?php echo $_SESSION['username']; ?></b> | Log Keluar</a></p>
<?php endif ?>
</div>

<div class="container">
    <h2>Senarai Pengguna</h2>

<table class="listtable">
	<thead>
		<tr>
			<th>ID Pengguna</th>
			<th>Nama Pengguna</th>
			<th>Nama Penuh</th>
			<th>Jawatan</th>
			<th>No. Telefon</th>
			<th>Emel</th>
			<th>Tindakan</th>
		</tr>
	</thead>
	
	<?php while ($row = mysqli_fetch_array($results)) {?>
		<tr>
			<td><?php echo $row['userID']; ?></td>
			<td><?php echo $row['username']; ?></td>
			<td><?php echo $row['fullname']; ?></td>
			<td><?php echo $row['position']; ?></td>
			<td><?php echo $row['phonenum']; ?></td>
			<td><?php echo $row['email']; ?></td>
			<td><a href="adminuser-delete.php?userID=<?php echo $row['userID']; ?>"><button class="button">Padam</button></a></td>
		</tr>
	<?php } ?>
</table>
<br>
<div class="footer">
&copy; 2018 Pejabat Pendidikan Daerah Mukah & Pusat Kegiatan Guru Mukah
</div></div>
</body>
</html>
