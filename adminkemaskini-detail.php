<?php
require_once 'userbooking-create.php';?>


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

    <h2>Kemaskini Tempahan Bilik</h2>
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
			<th>Bil.Peserta</th>
			<th>Jawatankuasa</th>
			<th>Pengerusi</th>
			<th>Setiausaha</th>
			<th>Keperluan/Catatan</th>
			<th>Status</th>
		</tr>
	</thead>

<?php
$bookingID = $_REQUEST['bookingID'];
$getbooking = mysqli_query($db,"SELECT * FROM booking WHERE bookingID=$bookingID");

while ($booking=mysqli_fetch_array($getbooking)) {

	$bookingID = $booking['bookingID'];
		$username = $booking['username'];
		$room = $booking['room'];
		$startdate = $booking['startdate'];
		$enddate = $booking['enddate'];
		$starttime = $booking['starttime'];
		$endtime = $booking['endtime'];
		$title = $booking['title'];
		$noofparticipant = $booking['noofparticipant'];
		$committee = $booking['committee'];
		$chairperson = $booking['chairperson'];
		$secretary = $booking['secretary'];
		$note = $booking['note'];
$status = $booking['status'];}
?>
<form action="" method="post">
<input type="hidden" name="bookingID" value="<?php echo $bookingID; ?>">
<input type="hidden" name="username" value="<?php echo $username; ?>">
<input type="hidden" name="room" value="<?php echo $room; ?>">
<input type="hidden" name="startdate" value="<?php echo $startdate; ?>">
<input type="hidden" name="starttime" value="<?php echo $starttime; ?>">
<input type="hidden" name="enddate" value="<?php echo $enddate; ?>">
<input type="hidden" name="endtime" value="<?php echo $endtime; ?>">
<input type="hidden" name="title" value="<?php echo $title; ?>">
<input type="hidden" name="noofparticipant" value="<?php echo $noofparticipant; ?>">
<input type="hidden" name="committee" value="<?php echo $committee; ?>">
<input type="hidden" name="chairperson" value="<?php echo $chairperson; ?>">
<input type="hidden" name="secretary" value="<?php echo $secretary; ?>">
<input type="hidden" name="note" value="<?php echo $note; ?>">
		<tr>
			<td><?php echo $bookingID; ?></td>
			<td><?php echo $username; ?></td>
			<td><?php echo $room; ?></td>
			<td style="width:8%"><?php echo $startdate; ?></td>
			<td><?php echo $starttime; ?></td>
			<td style="width:8%"><?php echo $enddate; ?></td>
			<td><?php echo $endtime; ?></td>
			<td><?php echo $title; ?></td>
			<td><?php echo $noofparticipant; ?></td>
			<td><?php echo $committee; ?></td>
			<td><?php echo $chairperson; ?></td>
			<td><?php echo $secretary; ?></td>
			<td><?php echo $note; ?></td>
			<td><select id="status" name="status" style="width:auto">
			<option value="">-- Pilih Status --</option>
	<option value="Diluluskan">Diluluskan</option>
	<option value="Tidak berjaya">Tidak berjaya</option></select></td>
		<br><br></tr></table><br><div style="text-align: right;"><a href="adminkemaskini.php" style="text-decoration:none; float:left;  padding: 10px;
    font-size: 15px;
    color: black;
    background: #A9BCF5;
    border: none;
    border-radius: 5px">Kembali</a>
<td><button class="button" type="submit" name="update">Simpan</button></td></div>
</form>

<br>
<div class="footer">
&copy; 2018 Pejabat Pendidikan Daerah Mukah & Pusat Kegiatan Guru Mukah
</div></div>
</body>
</html>
