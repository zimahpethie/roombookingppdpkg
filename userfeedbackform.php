<?php  include('userfeedback-create.php'); 
$username=$_SESSION['username'];
$results = mysqli_query($db,"SELECT * FROM feedback where username='$username'");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Tempahan Bilik PPD & PKG Mukah</title>
<link rel="icon" href="img\2.png">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="main.css">
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#tarikh" ).datepicker({ dateFormat: 'DD,dd-mm-yy'}).val();
  } );
  </script>
</head>
<body>
<?php if (isset($_SESSION['message'])): ?>
	<div class="msg" style="  margin: 0px auto; 
    padding: 10px; 
    border-radius: 5px; 
    color: #3c763d; 
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
  <a href="userroomavailability.php">Tempah Bilik</a>
  <a href="usersemakstatus.php">Semak Status Tempahan</a>
  <a href="userfeedbackform.php"class="active">Maklum Balas</a>
     <a href="userfeedbacklist.php">Senarai Maklum Balas</a>
	  <a href="usermanual.php">Manual Pengguna</a>
  <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
  <a href="userhomepage.php?logout='1'"; class="right"><b><?php echo $_SESSION['username']; ?></b> | Log Keluar</a></p>
<?php endif ?>
</div>

<div class="container">


    <h2>Maklum Balas</h2>
<center><p>Sila kemukakan sebarang pertanyaan, masalah atau cadangan sepanjang menggunakan Bilik di PPD & PKG Mukah</p></center>
<br><label style="color:red">*</label>Wajib diisi	
<div class="form">
	<form method="post" action="userfeedback-create.php" >	
	<input type="hidden" name="feedbackID" value="<?php echo $feedbackID ?>">
	
    <div class="row">
      <div class="col-25">
        <label for="username">Nama Pengguna</label>
      </div>
      <div class="col-75">
        <input type="text" name="username" style="width: 30%" value="<?php echo $username ?>" readonly>
		<input type="hidden" name="username" value="<?php echo $username ?>">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        Tarikh bilik digunakan <label for="date" style="color:red">*</label>
      </div>
      <div class="col-25">
<input type="date" name="date" style="width: 90%; padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical" id="date"required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        Bilik <label for="room" style="color:red">*</label>
      </div>
      <div class="col-75">
        <select id="room" name="room" required>
		<option value="">-- Pilih Bilik --</option>
          <option value="Dewan Sri Tapou,PPD">Dewan Sri Tapou,PPD</option>
          <option value="Bilik Mesyuarat,PKG">Bilik Mesyuarat,PKG</option>
          <option value="bBilik Seminar,PKG">Bilik Seminar,PKG</option>
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        Ulasan/Cadangan/Isu <label for="comment"style="color:red">*</label>
      </div>
      <div class="col-75">
        <textarea id="subject" name="comment" placeholder="Sila kemukakan komen, cadangan atau isu berkaitan dengan bilik PPD & PKG Mukah.." style="height:100px"required></textarea>
      </div>
    </div>
    <div class="row">
	<div style="text-align: right;">
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
