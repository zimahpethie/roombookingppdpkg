<?php
require_once('userserver.php');
$username=$_SESSION['username'];
$results = mysqli_query($db,"SELECT * FROM user where username='$username'");
while($row = mysqli_fetch_array($results))
{ 
$userID=$row['userID'];
$username=$row['username'];
$fullname=$row['fullname'];
$position=$row['position'];
$phonenum=$row['phonenum'];
$email=$row['email'];
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
</head>
<body>

<div class="header">

</div>
 <!-- logged in user information -->
<div class="navbar">
  <a href="userhomepage.php">Laman Utama</a>
  <a href="userprofile.php"class="active">Profil</a>
<a href="userroomdetail.php">Senarai Bilik</a>
  <a href="userroomavailability.php">Tempah Bilik</a>
  <a href="usersemakstatus.php">Semak Status Tempahan</a>
  <a href="userfeedbackform.php">Maklum Balas</a>
  <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
  <a href="userhomepage.php?logout='1'"; class="right"><b><?php echo $_SESSION['username']; ?></b> | Log Keluar</a></p>
<?php endif ?>
</div>

<div class="container">
    <h2>Kemaskini Maklumat Pengguna</h2>

<div class="form">
<form action="" method="post">
<input type="hidden" name="userID" value="<?php echo $userID; ?>">
    <div class="row">
      <div class="col-25">
        <label for="username">Nama Pengguna</label>
      </div>
      <div class="col-75">
	  <input type="hidden" name="username" value="<?php echo $username; ?>">
        <input type="text" name="username" value="<?php echo $username ?>" readonly>
      </div>
    </div>
	<div class="row">
      <div class="col-25">
       
	   <label for="fullname">Nama Penuh</label>
      </div>
      <div class="col-75">
            <input type="text" name="fullname" value="<?php echo $fullname ?>">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="position">Jawatan</label>
      </div>
      <div class="col-75">
           <input type="text" name="position" value="<?php echo $position ?>">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="phonenum">No. Telefon</label>
      </div>
      <div class="col-75">
         <input type="text" name="phonenum" value="<?php echo $phonenum ?>">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="email">Emel</label>
      </div>
      <div class="col-75">
	  	  <input type="hidden" name="email" value="<?php echo $email; ?>">
           <input type="text" name="email" value="<?php echo $email ?>" readonly></div>
    </div><div class="row">
	<br><div style="text-align: right;"><a href="userprofile.php" style="text-decoration:none; float:left;  padding: 10px;
    font-size: 15px;
    color: black;
    background: #A9BCF5;
    border: none;
    border-radius: 5px">Kembali</a><button class="button" type="submit" name="simpan">Simpan</button></div>
	
  </form></div>
</div>
<br>
<div class="footer">
&copy; 2018 Pejabat Pendidikan Daerah Mukah & Pusat Kegiatan Guru Mukah
</div></div>
</body>
</html>