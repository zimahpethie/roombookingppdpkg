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

// initializing variables
$username = "";
$fullname = "";
$position = "";
$phonenum = "";
$email    = "";
$errors = array(); 

// REGISTER USER
if (isset($_POST['registeradmin'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $fullname = mysqli_real_escape_string($db, $_POST['fullname']);
  $position = mysqli_real_escape_string($db, $_POST['position']);
  $phonenum = mysqli_real_escape_string($db, $_POST['phonenum']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Nama Pengguna diperlukan"); }
  if (empty($email)) { array_push($errors, "Emel diperlukan"); }
  if (empty($password_1)) { array_push($errors, "Kata laluan diperlukan"); }
  if ($password_1 != $password_2) {
	array_push($errors, "Kata laluan tidak sama");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM admin WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Nama pengguna telah wujud");
    }

    if ($user['email'] === $email) {
      array_push($errors, "Emel telah wujud");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO admin (username, fullname, position, phonenum, email, password) 
  			  VALUES('$username', '$fullname', '$position', '$phonenum', '$email', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "Anda telah berjaya log masuk";
  	header('location: adminhomepage.php');
  }
}

// ... 
// ... 

// LOGIN ADMIN
if (isset($_POST['login_admin'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
  	array_push($errors, "Nama pengguna diperlukan");
  }
  if (empty($password)) {
  	array_push($errors, "Kata laluan diperlukan");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "Anda telah berjaya log masuk";
  	  header('location: adminhomepage.php');
  	}else {
  		array_push($errors, "Salah nama pengguna/kata laluan");
  	}
  }
}

?>