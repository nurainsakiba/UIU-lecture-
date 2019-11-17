<?php
session_start();

$errors = array(); 

// connect to the database
$con = mysqli_connect('localhost', 'root', '', 'LECTURES_FOR_UIU_STUDENT');

// REGISTER USER
if (isset($_POST['sign_up'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($con, $_POST['name']);
  $number = mysqli_real_escape_string($con, $_POST['number']);
  $email = mysqli_real_escape_string($con, $_POST['email']);
  $password_1 = mysqli_real_escape_string($con, $_POST['password']);
  $password_2 = mysqli_real_escape_string($con, $_POST['confirm-pass']);

  
  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($number)) { array_push($errors, "Number is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM user WHERE User_name='$username' OR Email='$email' LIMIT 1";
  $result = mysqli_query($con, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['User_name'] === $firstname) {
      array_push($errors, "Username already exists");
    }

    if ($user['Email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "insert into user(User_ID, User_name, contact_number, Email, password) 
	          values('','$username', '$number', '$email', '$password')";
  	mysqli_query($con, $query);
  	$_SESSION['username'] = $username;
	$_SESSION['email'] = $email;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: courses.php');
  }
  
}

/*
// LOGIN USER
if (isset($_POST['log_in'])) {
  $email = mysqli_real_escape_string($con, $_POST['email']);
  $password = mysqli_real_escape_string($con, $_POST['password']);

  if (empty($email)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM customer WHERE Email='$email' AND password='$password'";
	
	
  	$results = mysqli_query($con, $query);
	
  	if (mysqli_num_rows($results) == 1) {
		
		$save_email = mysqli_real_escape_string($con, $_POST['email']);
		$save_pass = mysqli_real_escape_string($con, $_POST['password']);
		
		$_SESSION['username'] = $firstname;
	  //$_SESSION['user_info'] = $email;
		$_SESSION['success'] = "You are now logged in";
	  
  	  header('location: order.php');
	  
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}*/

?>