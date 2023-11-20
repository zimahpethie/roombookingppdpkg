<?php
include('userbooking-create.php');
$username=$_SESSION['username'];
$results = mysqli_query($db,"SELECT * FROM booking where username='$username'");
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
<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
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
<div class="navbar">
<a href="userhomepage.php">Laman Utama</a>
  <a href="userprofile.php">Profil</a>
<a href="userroomdetail.php">Senarai Bilik</a>
  <a href="userroomavailability.php">Tempah Bilik</a>
  <a href="usersemakstatus.php"class="active">Semak Status Tempahan</a>
  <a href="userfeedbackform.php">Maklum Balas</a>
       <a href="userfeedbacklist.php">Senarai Maklum Balas</a>
	    <a href="usermanual.php">Manual Pengguna</a>
  <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
  <a href="userhomepage.php?logout='1'"; class="right"><b><?php echo $_SESSION['username']; ?></b> | Log Keluar</a></p>
<?php endif ?>
</div>

<div class="container">

    <h2>Status Tempahan</h2>
	<center><label style="color:#DF0101">**Peringatan: Status tempahan boleh disemak selepas 24jam (waktu bekerja) tempahan dibuat</label></center>
<table class="listtable">
	<thead>
		<tr>
			<th>ID</th>
			<th>Pengguna</th>
			<th>Bilik</th>
			<th>Tarikh</th>
			<th>Masa Mula</th>
			<th>Tarikh Tamat</th>
			<th>Masa Tamat</th>
			<th>Tajuk</th>
			<th>Bil.<br>Peserta</th>
			<th>Jawatankuasa</th>
			<th>Pengerusi</th>
			<th>Setiausaha</th>
			<th>Keperluan<br>/ Catatan</th>
			<th>Status</th>
			<th colspan="2" style="text-align:center; width: 15%">Tindakan</th>
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
			<td style="text-align:center">
				<a href="userkemaskini-detail.php?bookingID=<?php echo $row['bookingID']; ?>"><button class="button">Edit</button></a>
				&nbsp;
				<a href="userkemaskini-delete.php?bookingID=<?php echo $row['bookingID']; ?>"><button class="button">Padam</button></a>
				</td>
		</tr>
<?php } ?>
</table>
<br>
<div class="footer">
&copy; 2018 Pejabat Pendidikan Daerah Mukah & Pusat Kegiatan Guru Mukah
</div></div>
</body>
</html>
