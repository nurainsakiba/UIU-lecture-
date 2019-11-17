<?php
session_start();

$errors = array(); 

$con = mysqli_connect('localhost', 'root', '', 'LECTURES_FOR_UIU_STUDENT');


if (isset($_POST['remove'])) {
  
  $user_id = mysqli_real_escape_string($con, $_POST['user_id']);

  $user_check_query = "SELECT * FROM user WHERE User_ID ='$user_id'";
  $result = mysqli_query($con, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    
	$query1	= "DELETE FROM user WHERE User_ID ='$user_id'";
				
  	mysqli_query($con, $query1);
	
	header ('location: user_list.php');
  }

  else{
			  
  	echo "<script type='text/javascript'>alert('This User does not exist.');</script>";
  }
  
}

?>
