<?php
require_once 'userfeedback-create.php';
$results = mysqli_query($db, "SELECT * FROM userfeedback ORDER by date"); ?>
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
  <a href="adminhomepage.php">Laman Utama</a>
  <a href="adminprofilelist.php">Senarai Pengguna</a>
     <a href="adminroom.php">Senarai Bilik</a>
  <a href="adminkemaskini.php">Kemaskini Tempahan</a>
  <a href="adminbookinglist.php">Senarai Tempahan</a>
  <a href="adminfeedbacklist.php" class="active">Senarai Maklum Balas</a>
    <a href="adminmanual.php">Manual Pengguna</a>
  <a href="adminhomepage.php?logout='1'"; class="right"><b><?php echo $_SESSION['username']; ?></b> | Log Keluar</a></p>
<?php endif ?>
</div>

<div class="container">
    <h2>Senarai Maklum Balas Pengguna</h2>

<table class="listtable">
	<thead>
		<tr>
			<th>Tarikh</th>
			<th>Bilik</th>
			<th>Ulasan</th>
		</tr>
	</thead>
	
	<?php while ($row = mysqli_fetch_array($results)) {?>
		<tr>
			<td><?php echo $row['date']; ?></td>
			<td><?php echo $row['room']; ?></td>
			<td><?php echo $row['comment']; ?></td>
		</tr>
	<?php } ?>
</table>
	

<br>
<div class="footer">
&copy; 2018 Pejabat Pendidikan Daerah Mukah & Pusat Kegiatan Guru Mukah
</div></div>
</body>
</html>

