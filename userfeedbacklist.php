<?php
include('userfeedback-create.php');
$username=$_SESSION['username'];
$results = mysqli_query($db,"SELECT * FROM userfeedback where username='$username'");
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
  <a href="usersemakstatus.php">Semak Status Tempahan</a>
  <a href="userfeedbackform.php">Maklum Balas</a>
   <a href="userfeedbacklist.php"class="active">Senarai Maklum Balas</a>
    <a href="usermanual.php">Manual Pengguna</a>
  <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
  <a href="userhomepage.php?logout='1'"; class="right"><b><?php echo $_SESSION['username']; ?></b> | Log Keluar</a></p>
<?php endif ?>
</div>

<div class="container">

    <h2>Senarai Maklum Balas</h2>
<table class="listtable">
	<thead>
		<tr>
			<th>ID</th>
			<th>Pengguna</th>
			<th>Tarikh</th>
			<th>Bilik</th>
			<th>Ulasan</th>
		</tr>
	</thead>
	
	<?php while ($row = mysqli_fetch_array($results)) {?>
		<tr>
			<td><?php echo $row['feedbackID']; ?></td>
			<td><?php echo $row['username']; ?></td>
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
