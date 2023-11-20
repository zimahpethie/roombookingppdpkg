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
	$feedbackID = ""; 
	$username = "";
	$date = "";
	$room = "";
	$comment = "";
	$update = false;

	if (isset($_POST['save'])) {
		$feedbackID = $_POST['feedbackID']; 
		$username = $_POST['username']; 
		$date = $_POST['date'];
		$room = $_POST['room'];
		$comment = $_POST['comment'];

		mysqli_query($db, "INSERT INTO userfeedback (username, date, room, comment) VALUES ('$username','$date', '$room', '$comment')"); 
		$_SESSION['message'] = "Maklum balas telah dihantar"; 
		header('location: userfeedbacklist.php');
	}

?>