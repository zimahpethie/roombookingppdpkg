<?php
include "userbooking-create.php";
$bookingID = $_REQUEST['bookingID'];
$getbooking = mysqli_query($db,"DELETE FROM booking WHERE bookingID=$bookingID");
$_SESSION['message'] = "Data tempahan telah dihapuskan"; 
header("location: adminkemaskini.php");
?>