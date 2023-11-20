<?php
require_once 'userbooking-create.php';
$results = mysqli_query($db, "SELECT * FROM booking WHERE status='Dalam proses'"); ?>


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
  <a href="adminprofilelist.php">Senarai Pengguna</a>
     <a href="adminroom.php">Senarai Bilik</a>
  <a href="adminkemaskini.php"class="active">Kemaskini Tempahan</a>
  <a href="adminbookinglist.php" >Senarai Tempahan</a>
  <a href="adminfeedbacklist.php">Senarai Maklum Balas</a>
    <a href="adminmanual.php">Manual Pengguna</a>
  <a href="adminhomepage.php?logout='1'"; class="right"><b><?php echo $_SESSION['username']; ?></b> | Log Keluar</a></p>
<?php endif ?>
</div>

<div class="container">
  <h2>Senarai Tempahan Bilik Terkini</h2>
<center><p>Sila klik "Pengesahan" untuk membuat pengesahan bagi permohonan yang telah dibuat oleh Staf/Guru.</p>
<p>Sila klik "Padam" untuk menghapuskan tempahan.</p></center>

<table class="listtable">
	<thead>
		<tr>
			<th>ID</th>
			<th>Pengguna</th>
			<th>Bilik</th>
			<th>Tarikh Mula</th>
			<th>Masa Mula</th>
			<th>Tarikh Tamat</th>
			<th>Masa Tamat</th>
			<th>Tajuk</th>
			<th>Bil<br>Peserta</th>
			<th>Jawatankuasa</th>
			<th>Pengerusi</th>
			<th>Setiausaha</th>
			<th>Keperluan<br>/ Catatan</th>
			<th>Status</th>
			<th colspan="2" style="text-align:center">Tindakan</th>
		</tr>
	</thead>

	<?php while ($row = mysqli_fetch_array($results)) {?>
		<tr>
			<td><?php echo $row['bookingID']; ?></td>
			<td><?php echo $row['username']; ?></td>
			<td><?php echo $row['room']; ?></td>
			<td style="width:8%"><?php echo $row['startdate']; ?></td>
			<td><?php echo $row['starttime']; ?></td>
			<td style="width:8%"><?php echo $row['enddate']; ?></td>
			<td><?php echo $row['endtime']; ?></td>
			<td><?php echo $row['title']; ?></td>
			<td><?php echo $row['noofparticipant']; ?></td>
			<td><?php echo $row['committee']; ?></td>
			<td><?php echo $row['chairperson']; ?></td>
			<td><?php echo $row['secretary']; ?></td>
			<td><?php echo $row['note']; ?></td>
			<td><?php echo $row['status']; ?></td>
			<td style="border-right:0px">
				<a href="adminkemaskini-detail.php?bookingID=<?php echo $row['bookingID']; ?>"><button class="button">Pengesahan</button></a>
				</td><td style="border-left:0px">
				<a href="adminkemaskini-delete.php?bookingID=<?php echo $row['bookingID']; ?>"><button class="button">Padam</button></a>
				</td>
		</tr>
	<?php } ?>
</table><br>
<div class="footer">
&copy; 2018 Pejabat Pendidikan Daerah Mukah & Pusat Kegiatan Guru Mukah
</div></div>
</body>
</html>
