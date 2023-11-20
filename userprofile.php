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
<div class="navbar">
  <a href="userhomepage.php">Laman Utama</a>
  <a href="userprofile.php"class="active">Profil</a>
<a href="userroomdetail.php">Senarai Bilik</a>
  <a href="userroomavailability.php">Tempah Bilik</a>
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
    <h2>Maklumat Pengguna</h2>
        <input type="hidden" name="userID" value="<?php echo $userID ?>">
<center><table style="width:50%; border: 1px">
<tr>
    <th style="text-align: right; border: 0px; padding: 10px ">Nama Pengguna:</th>
    <td style="border-left: 0px; border-bottom: 0px; padding: 10px"><?php echo $username ?></td>
  </tr>
  <tr>
    <th style="text-align: right; border: 0px; padding: 10px">Nama Penuh:</th>
    <td style="border-left: 0px;border-top: 0px; border-bottom: 0px; padding: 10px"><?php echo $fullname ?></td>
  </tr>
  <tr>
    <th style="text-align: right; border: 0px; padding: 10px">Jawatan:</th>
    <td style="border-left: 0px;border-top: 0px; border-bottom: 0px; padding: 10px"><?php echo $position ?></td>
  </tr>
  <tr>
    <th style="text-align: right; border: 0px; padding: 10px">No. Telefon:</th>
    <td style="border-left: 0px;border-top: 0px; border-bottom: 0px; padding: 10px"><?php echo $phonenum ?></td>
  </tr>
  <tr>
    <th style="text-align: right; border: 0px; padding: 10px">Emel:</th>
    <td style="border-left: 0px;border-top: 0px; padding: 10px"><?php echo $email ?></td>
  </tr>
</table></center><br><center><a href="userprofile-update.php?userID=<?php echo $userID ?>"><button class="button">Kemaskini</button></a></center>
<br>
<div class="footer">
&copy; 2018 Pejabat Pendidikan Daerah Mukah & Pusat Kegiatan Guru Mukah
</div></div>
</body>
</html>