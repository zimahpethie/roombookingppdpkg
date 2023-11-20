<?php  
require_once 'userbooking-create.php';
$results = mysqli_query($db, "SELECT * FROM booking");
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

<div class="header">

</div>

<div class="navbar">
  <a href="userhomepage.php">Laman Utama</a>
  <a href="userprofile.php">Profil</a>
<a href="userroomdetail.php">Senarai Bilik</a>
  <a href="userroomavailability.php" class="active">Tempah Bilik</a>
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

    <h2>Semak Kekosongan Bilik</h2>
	<center><label style="color:#DF0101">**Peringatan:Tempahan hendaklah dibuat 3hari sebelum tarikh digunakan</label></center>
	<center><br><p>Sila isi tarikh, masa dan bilik untuk semak kekosongan bilik</p></center>
	<form method="POST" style="margin: auto; width:auto; border: 0px">
<table class="listtable" style="border: 0px">
	<thead>
		<tr>
			<th style="background: #fff; color:#000; border: 0px; text-align:left">Tarikh & Masa Mula</th>
			<th style="background: #fff; color:#000; border: 0px; text-align:left">Tarikh & Masa Tamat</th>
			<th style="background: #fff; color:#000; border: 0px; text-align:left">Bilik</th>
		</tr>
	</thead>
	<tr>
		<td style="border: 0px"><input type="date" name="startdate"style="width: auto%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical" required>&nbsp;
  <select  id="starttime" name="starttime"style="width: 40%" required>
     <option value="">-- Pilih Masa Mula --</option>
          <option value="0800">0800</option>
          <option value="0830">0830</option>
          <option value="0900">0900</option>
		  <option value="0930">0930</option>
		  <option value="1000">1000</option>
		  <option value="1030">1030</option>
		  <option value="1100">1100</option>
		  <option value="1130">1130</option>
		  <option value="1200">1200</option>
		  <option value="1230">1230</option>
		  <option value="1300">1300</option>
		  <option value="1330">1330</option>
		  <option value="1400">1400</option>
		  <option value="1430">1430</option>
		  <option value="1500">1500</option>
		  <option value="1530">1530</option>
		  <option value="1600">1600</option>
		  <option value="1630">1630</option>
		  <option value="1700">1700</option>
        </select ></td>
		<td style="border: 0px"><input type="date" name="enddate"style="width: auto%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical" required>&nbsp;
  <select id="endtime" name="endtime" style="width: 40%" required>
   <option value="">-- Pilih Masa Tamat --</option>
          <option value="0800">0800</option>
          <option value="0830">0830</option>
          <option value="0900">0900</option>
		  <option value="0930">0930</option>
		  <option value="1000">1000</option>
		  <option value="1030">1030</option>
		  <option value="1100">1100</option>
		  <option value="1130">1130</option>
		  <option value="1200">1200</option>
		  <option value="1230">1230</option>
		  <option value="1300">1300</option>
		  <option value="1330">1330</option>
		  <option value="1400">1400</option>
		  <option value="1430">1430</option>
		  <option value="1500">1500</option>
		  <option value="1530">1530</option>
		  <option value="1600">1600</option>
		  <option value="1630">1630</option>
		  <option value="1700">1700</option>
        </select></td>
  <td style="border: 0px"><select id="room" name="room" required>
     <option value="">-- Pilih Bilik --</option>
          <option value="Dewan Sri Tapou, PPD">Dewan Sri Tapou,PPD</option>
          <option value="Bilik Mesyuarat, PKG">Bilik Mesyuarat,PKG</option>
          <option value="Bilik Seminar, PKG">Bilik Seminar,PKG</option>
        </select></td>
	</tr>
	
	</table>
	<div style="text-align: right;">
	<button class="button" type="submit" name="filter">Semak</button></div>              
             </form><br>
<table class="listtable">
	<thead>
		<tr>
			<?php
			if (isset($_POST['filter'])){
				$startdate=$_POST['startdate'];
				$enddate=$_POST['enddate'];
				$starttime=$_POST['starttime'];
				$endtime=$_POST['endtime'];
				$room=$_POST['room'];
				$output = '';
				$results = mysqli_query($db,"SELECT * FROM booking WHERE room='$room' 
				AND startdate <= '$startdate' 
				AND enddate >= '$enddate' 
				AND starttime <= '$starttime' 
				AND endtime >= '$endtime'");
				
				if(mysqli_num_rows($results)>0)  
      {  
				while ($row = mysqli_fetch_array($results)) {  
                $output .= '  
				<center><p>Bilik, tarikh dan masa yang dipilih tidak tersedia. Sila pilih bilik/tarikh/masa lain</p></center>
	<table class="listtable">
	<thead>
		<tr>
		<tr>
		<th>Pengguna</th>
			<th>Bilik</th>
			<th>Tarikh Mula</th>
			<th>Masa Mula</th>
			<th>Tarikh Tamat</th>
			<th>Masa Tamat</th>
			<th>Tajuk</th>
			<th>Status</th>
		</tr>
	</thead>
			<td>'. $row["username"] .'</td>
			<td>'. $row["room"] .'</td>
			<td>'. $row["startdate"] .'</td>
			<td>'. $row["starttime"] .'</td>
			<td>'. $row["enddate"] .'</td>
			<td>'. $row["endtime"] .'</td>
			<td>'. $row["title"] .'</td>
			<td>Tidak tersedia</td>
		</tr></table>
			   ';  
           } 
      } 
      else  
      {  
           $output .= '  
                <table class="listtable">
	<thead>
		<tr>
		<th>Tarikh Mula</th>
		<th>Masa Mula</th>
		<th>Tarikh Tamat</th>
		<th>Masa Tamat</th>
		<th>Bilik</th>
		<th>Status</th>
		<th>Tindakan</th>
		</tr>
	</thead>
                <tr> 
				<td style="text-align:center">'. $_POST["startdate"] .'</td>
				<td style="text-align:center">'. $_POST["starttime"] .'</td>
				<td style="text-align:center">'. $_POST["enddate"] .'</td>
				<td style="text-align:center">'. $_POST["endtime"] .'</td>
				<td style="text-align:center">'. $_POST["room"] .'</td>
				<td style="text-align:center">Tersedia</td>
<td style="text-align:center"><a href="userbookingform.php?startdate='. $_POST["startdate"] .'&starttime='. $_POST["starttime"] .'&enddate='. $_POST["enddate"] .'&endtime='. $_POST["endtime"] .'&room='. $_POST["room"] .'"><button class="button">Tempah Bilik</button></a></td>  
                </tr>  </table>
           ';  
      }  
      $output .= '</table>';  
      echo $output;  
 }  
 ?>
<br>
<div class="footer">
&copy; 2018 Pejabat Pendidikan Daerah Mukah & Pusat Kegiatan Guru Mukah
</div></div>
</body>
</html>