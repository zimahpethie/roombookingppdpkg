<?php 
	session_start();
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "roombookingppdpkg";
	$db=mysqli_connect($servername,$username,$password,$dbname);
// Check connection
if(mysqli_connect_errno()) {
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
	// initialize variables
	$bookingID = "";
	$username = "";
	$room = "";
	$startdate = "";
	$enddate = "";
	$starttime = "";
	$endtime = "";
	$title = "";
	$noofparticipant = "";
	$committee = "";
	$chairperson = "";
	$secretary = "";
	$note = "";
	$status = "";
	$update = false;

	if (isset($_POST['save'])) {
		$bookingID = $_POST['bookingID'];
		$username = $_POST['username'];
		$room = $_POST['room'];
		$startdate = $_POST['startdate'];
		$enddate = $_POST['enddate'];
		$starttime = $_POST['starttime'];
		$endtime = $_POST['endtime'];
		$title = $_POST['title'];
		$noofparticipant = $_POST['noofparticipant'];
		$committee = $_POST['committee'];
		$chairperson = $_POST['chairperson'];
		$secretary = $_POST['secretary'];
		$note = $_POST['note'];
		$status = $_POST['status'];

		mysqli_query($db, "INSERT INTO booking (username, room, startdate, enddate, starttime, endtime, title, noofparticipant, committee, chairperson, secretary, note, status) VALUES ('$username','$room', '$startdate', '$enddate', '$starttime', '$endtime', '$title', '$noofparticipant', '$committee', '$chairperson', '$secretary', '$note', '$status')"); 
		$_SESSION['message'] = "Tempahan anda telah dihantar"; 
		header('location: usersemakstatus.php');
	}
	
	if (isset($_POST['update'])) {
		$bookingID = $_POST['bookingID'];
		$username = $_POST['username'];
		$room = $_POST['room'];
		$startdate = $_POST['startdate'];
		$enddate = $_POST['enddate'];
		$starttime = $_POST['starttime'];
		$endtime = $_POST['endtime'];
		$title = $_POST['title'];
		$noofparticipant = $_POST['noofparticipant'];
		$committee = $_POST['committee'];
		$chairperson = $_POST['chairperson'];
		$secretary = $_POST['secretary'];
		$note = $_POST['note'];
		$status = $_POST['status'];

	mysqli_query($db, "UPDATE booking SET username='$username', room='$room', startdate='$startdate', enddate='$enddate', starttime='$starttime', endtime='$endtime', title='$title', noofparticipant='$noofparticipant', committee='$committee', chairperson='$chairperson', secretary='$secretary', note='$note', status='$status' WHERE bookingID=$bookingID");
	$_SESSION['message'] = "Data tempahan telah dikemaskini"; 
	header('location: adminkemaskini.php');
	}
	
	if (isset($_POST['simpan'])) {
		$bookingID = $_POST['bookingID'];
		$username = $_POST['username'];
		$room = $_POST['room'];
		$startdate = $_POST['startdate'];
		$enddate = $_POST['enddate'];
		$starttime = $_POST['starttime'];
		$endtime = $_POST['endtime'];
		$title = $_POST['title'];
		$noofparticipant = $_POST['noofparticipant'];
		$committee = $_POST['committee'];
		$chairperson = $_POST['chairperson'];
		$secretary = $_POST['secretary'];
		$note = $_POST['note'];
		$status = $_POST['status'];

	mysqli_query($db, "UPDATE booking SET username='$username', room='$room', startdate='$startdate', enddate='$enddate', starttime='$starttime', endtime='$endtime',  title='$title', noofparticipant='$noofparticipant', committee='$committee', chairperson='$chairperson', secretary='$secretary', note='$note', status='$status' WHERE bookingID=$bookingID");
	$_SESSION['message'] = "Data tempahan telah dikemaskini"; 
	header('location: usersemakstatus.php');
	}
	
?>