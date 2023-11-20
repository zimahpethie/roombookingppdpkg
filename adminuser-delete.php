<?php
include "userserver.php";
$userID = $_REQUEST['userID'];
$results = mysqli_query($db, "DELETE FROM user WHERE userID=$userID");
$_SESSION['message'] = "Data pengguna telah dihapuskan"; 
header("location: adminprofilelist.php");
?>