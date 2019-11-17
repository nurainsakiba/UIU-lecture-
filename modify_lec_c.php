<?php
session_start();

$errors = array(); 

$con = mysqli_connect('localhost', 'root', '', 'LECTURES_FOR_UIU_STUDENT');


if (isset($_POST['modify'])) {
  
  $lec_id = mysqli_real_escape_string($con, $_POST['lec_id']);
  $column = mysqli_real_escape_string($con, $_POST['column']);
  $value = mysqli_real_escape_string($con, $_POST['value']);

  $user_check_query = "SELECT * FROM lectures WHERE Lecture_ID ='$lec_id'";
  $result = mysqli_query($con, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    
	$query1	= "UPDATE lectures SET $column = '$value' WHERE Lecture_ID ='$lec_id'";
				
  	mysqli_query($con, $query1);
	
	header ('location: lecture_list.php');
  }

  else{
			  
  	echo "<script type='text/javascript'>alert('This Lecture does not exist.');</script>";
  }
  
}

?>
