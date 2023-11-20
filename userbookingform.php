<?php  include('userbooking-create.php'); ?>
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

<body>
<?php if (isset($_SESSION['message'])): ?>
	<div class="msg" style="margin: 0px auto; 
    padding: 10px; 
    border-radius: 5px; 
    color: #FF0000; 
    background: #E6E6E6; 
    border: 1px solid #3c763d;
    width: 50%;
    text-align: center;">
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
  <a href="userroomavailability.php"class="active">Tempah Bilik</a>
  <a href="usersemakstatus.php">Semak Status Tempahan</a>
  <a href="userfeedbackform.php">Maklum Balas</a>
       <a href="userfeedbacklist.php">Senarai Maklum Balas</a>
	    <a href="usermanual.php">Manual Pengguna</a>
  <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
  <a href="userhomepage.php?logout='1'"; class="right"><b><?php echo $_SESSION['username']; ?></b> | Log Keluar</a></p>
<?php endif ?>
</div>

<div class="container">

  <h2>Tempah Bilik</h2>
<center><p>Sila isi maklumat di bawah untuk membuat tempahan</p></center>

<div class="w3-content w3-display-container">

<div class="w3-display-container mySlides">
  <img src="img\sri.tapou.jpg" style="width:100%; height:400px">
  <div class="w3-display-bottomleft w3-large w3-container w3-padding-16 w3-black">
    <br><center><b>Dewan Sri Tapou, PPD Mukah</b></center>
  </div>
</div>

<div class="w3-display-container mySlides">
  <img src="img\bm1.jpeg" style="width:100%; height:400px">
  <div class="w3-display-bottomleft w3-large w3-container w3-padding-16 w3-black">
    <br><center><b>Bilik Mesyuarat/Bilik Java, PKG Mukah</b></center>
  </div>
</div>

<div class="w3-display-container mySlides">
   <img src="img\bs.3.jpeg" style="width:100%; height:400px">
  <div class="w3-display-bottomleft w3-large w3-container w3-padding-16 w3-black">
    <br><center><b>Bilik Seminar/Bilik Ruby, PKG Mukah</b></center>
  </div>
</div>

<br><center><button class="button" onclick="plusDivs(-1)">&#10094;</button>
<button class="button" onclick="plusDivs(1)">&#10095;</button></center>
</div>
<br>
<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>
<label style="color:red">*</label>Wajib diisi
<div class="form">

<form method="post" action="userbooking-create.php" >	

<div class="row">
      <div class="col-25">
        <label for="username">Nama Pengguna</label>
      </div>
      <div class="col-75">
	  <?php  if (isset($_SESSION['username'])) : ?>
	  <input type="text" name="username" style="text-transform: capitalize; width: 30%" value="<?php echo $_SESSION['username']; ?>"readonly>
	   <?php endif ?>
	   <input type="hidden" name="username" style="text-transform: capitalize" value="<?php echo $_SESSION['username']; ?>">
      </div>
    </div>
	<?php

$startdate = $_GET['startdate'];
$starttime = $_GET['starttime'];
$enddate = $_GET['enddate'];
$endtime = $_GET['endtime'];
$room = $_GET['room'];
?>
  <div class="row">
      <div class="col-25">
        <label for="room">Bilik</label>
      </div>
      <div class="col-75">
	  <input type="hidden" id="room" name="room" value="<?php echo $room; ?>"readonly>
        <input type="text" id="room" name="room" style="width: 30%" value="<?php echo $room; ?>"readonly>
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
       Nama Kursus/Taklimat/Mesyuarat <label for="title" style="color:red">*</label>
      </div>
      <div class="col-75">
        <input type="text" id="title" name="title" placeholder="Sila nyatakan nama Kursus/Taklimat/Mesyuarat"required>
      </div>
    </div>
	
	<div class="row">
      <div class="col-25">
        Jumlah Peserta <label for="noofparticipant" style="color:red">*</label>
      </div>
      <div class="col-75">
  <input type="number" id="noofparticipant" name="noofparticipant" min="1" placeholder="Bil peserta" style="width: 30%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical"required> Peserta
      </div>
    </div>
	
	<div class="row">
      <div class="col-25">
        <label for="committee">Jawatankuasa</label>
      </div>
      <div class="col-75">
        <input type="text" id="committee" name="committee" placeholder="Sila nyatakan nama Jawatankuasa">
      </div>
    </div>
	
	<div class="row">
      <div class="col-25">
        <label for="chairperson">Pengerusi</label>
      </div>
      <div class="col-75">
        <input type="text" id="chairperson" name="chairperson" placeholder="Sila nyatakan nama Pengerusi">
      </div>
    </div>
	
	<div class="row">
      <div class="col-25">
        <label for="secretary">Setiausaha</label>
      </div>
      <div class="col-75">
        <input type="text" id="secretary" name="secretary" placeholder="Sila nyatakan nama Setiausaha">
      </div>
    </div>
   
    <div class="row">
      <div class="col-25">
        <label for="note">Keperluan Mesyuarat/Catatan</label>
      </div>
      <div class="col-75">
        <textarea id="note" name="note" placeholder="Sila nyatakan, sekiranya ada" style="height:150px"></textarea>
      </div>
    </div>
	
        <input type="hidden" id="status" name="status" value="Dalam proses">

    <div class="row">
	<div style="text-align: right;"><a href="userroomavailability.php" style="text-decoration:none;  color: blue; float:left;  padding: 10px;
    font-size: 15px;
    color: black;
    background: #A9BCF5;
    border: none;
    border-radius: 5px">Kembali</a>
<button class="button" type="reset" style="align: right">Reset</button>&nbsp;&nbsp;<button class="button" type="submit" name="save">Hantar</button>
    </div></div>
  </form>
</div>
<br>
<div class="footer">
&copy; 2018 Pejabat Pendidikan Daerah Mukah & Pusat Kegiatan Guru Mukah
</div></div>
</body>
</html>
