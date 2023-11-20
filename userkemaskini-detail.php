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
<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
</head>

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

    <h2>Kemaskini Tempahan</h2>
<div class="form">	
<form action="" method="post">
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
<input type="hidden" name="bookingID" value="<?php echo $bookingID; ?>">
		<div class="row">
      <div class="col-25">
        <label for="username">Nama Pengguna</label>
      </div>
      <div class="col-75">
	  <?php  if (isset($_SESSION['username'])) : ?>
	  <input type="hidden" name="username" style="text-transform: capitalize" value="<?php echo $_SESSION['username']; ?>">
	  <input type="text" name="username" style="text-transform: capitalize; width: 30%" value="<?php echo $_SESSION['username']; ?>"readonly>
	   <?php endif ?>
      </div>
    </div>
	
  <div class="row">
      <div class="col-25">
        <label for="room">Bilik</label>
      </div>
      <div class="col-75">
	  <input type="hidden" name="room" value="<?php echo $room;?>">
	  <input type="text" name="room" style="width: 30%" value="<?php echo $room;?>"readonly>
      </div>
    </div>
			
	<div class="row">
      <div class="col-25">
        <label for="startdate">Tarikh & Masa Mula</label>
      </div>
      <div class="col-75">
	  <input type="hidden" id="startdate" name="startdate" value="<?php echo $startdate; ?>"readonly>
        <input type="text" name="startdate" style="width: 30%; padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical"value="<?php echo $startdate; ?>"readonly> 
  
  <input type="hidden" id="starttime" name="starttime" value="<?php echo $starttime; ?>"readonly>
        <input type="text" name="starttime" style="width: 30%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical"value="<?php echo $starttime; ?>"readonly>
      </div>
    </div>
	 
	<div class="row">
      <div class="col-25">
        <label for="enddate">Tarikh & Masa Tamat</label>
      </div>
      <div class="col-75">
	  <input type="hidden" id="enddate" name="enddate" value="<?php echo $enddate; ?>"readonly>
        <input type="text" name="enddate" style="width: 30%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical"value="<?php echo $enddate; ?>"readonly>
   
   <input type="hidden" id="endtime" name="endtime" value="<?php echo $endtime; ?>"readonly>
        <input type="text" name="endtime" style="width: 30%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical"value="<?php echo $endtime; ?>"readonly>
      </div>
    </div>
	 
	
	<div class="row">
      <div class="col-25">
        <label for="title">Nama Kursus/Taklimat/Mesyuarat</label>
      </div>
      <div class="col-75">
        <input type="text" id="title" name="title" placeholder="Sila nyatakan nama Kursus/Taklimat/Mesyuarat" value="<?php echo $title;?>"required>
      </div>
    </div>
	
	<div class="row">
      <div class="col-25">
        <label for="noofparticipant">Jumlah Peserta</label>
      </div>
      <div class="col-75">
  <input type="number" id="noofparticipant" name="noofparticipant" min="1" placeholder="noofparticipant" style="width: 30%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical"value="<?php echo $noofparticipant;?>"required> Peserta
      </div>
    </div>
	
	<div class="row">
      <div class="col-25">
        <label for="committee">Jawatankuasa</label>
      </div>
      <div class="col-75">
        <input type="text" id="committee" name="committee" placeholder="Sila nyatakan nama Jawatankuasa"value="<?php echo $committee;?>">
      </div>
    </div>
	
	<div class="row">
      <div class="col-25">
        <label for="chairperson">Pengerusi</label>
      </div>
      <div class="col-75">
        <input type="text" id="chairperson" name="chairperson" placeholder="Sila nyatakan nama Pengerusi"value="<?php echo $chairperson;?>">
      </div>
    </div>
	
	<div class="row">
      <div class="col-25">
        <label for="secretary">Setiausaha</label>
      </div>
      <div class="col-75">
        <input type="text" id="secretary" name="secretary" placeholder="Sila nyatakan nama Setiausaha"value="<?php echo $secretary;?>">
      </div>
    </div>
   
    <div class="row">
      <div class="col-25">
        <label for="note">Keperluan Mesyuarat/Catatan</label>
      </div>
      <div class="col-75">
               <input type="text" id="note" name="note" placeholder="Sila nyatakan, sekiranya ada"value="<?php echo $note;?>">
      </div>
    </div>
	<input type="hidden" name="status" value="<?php echo $status; ?>">
    <div class="row">
	<div style="text-align: right;"><a href="usersemakstatus.php" style="text-decoration:none; float:left;  padding: 10px;
    font-size: 15px;
    color: black;
    background: #A9BCF5;
    border: none;
    border-radius: 5px">Kembali</a><button class="button" type="submit" name="simpan">Simpan</button>
    </div></div>
  </form>
</div>
<br>
<div class="footer">
&copy; 2018 Pejabat Pendidikan Daerah Mukah & Pusat Kegiatan Guru Mukah
</div></div>
</body>
</html>
