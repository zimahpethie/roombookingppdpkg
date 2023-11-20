<?php
require_once 'userbooking-create.php';
$results = mysqli_query($db, "SELECT * FROM booking");?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Tempahan Bilik PPD & PKG Mukah</title>
<link rel="icon" href="img\2.png">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="main.css">
<link rel="stylesheet" type="text/css" href="inner.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
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
  <a href="adminkemaskini.php">Kemaskini Tempahan</a>
  <a href="adminbookinglist.php" class="active">Senarai Tempahan</a>
  <a href="adminfeedbacklist.php">Senarai Maklum Balas</a>
    <a href="adminmanual.php">Manual Pengguna</a>
  <a href="adminhomepage.php?logout='1'"; class="right"><b><?php echo $_SESSION['username']; ?></b> | Log Keluar</a></p>
<?php endif ?>
</div>

<div class="container">
  <h2>Senarai Tempahan Bilik</h2>
<div class="form-group">
				<div class="input-group">
					<div style="text-align: right;"><span class="input-group-addon">🔍</span>&nbsp;&nbsp;
					<input type="text" name="search_text" id="search_text" placeholder="Carian data.." class="form-control" style="width:30%" /></div>
				</div>
			</div>
			<br>
			<div id="result"></div>
		<div style="clear:both">
<br>
<div class="footer">
&copy; 2018 Pejabat Pendidikan Daerah Mukah & Pusat Kegiatan Guru Mukah
</div></div>
</body>
</html>
<script>
$(document).ready(function(){
	load_data();
	function load_data(query)
	{
		$.ajax({
			url:"filterroom.php",
			method:"post",
			data:{query:query},
			success:function(data)
			{
				$('#result').html(data);
			}
		});
	}
	
	$('#search_text').keyup(function(){
		var search = $(this).val();
		if(search != '')
		{
			load_data(search);
		}
		else
		{
			load_data();			
		}
	});
});
</script>
