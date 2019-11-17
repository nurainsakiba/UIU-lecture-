<?php
session_start();

$con = mysqli_connect('localhost', 'root', '', 'LECTURES_FOR_UIU_STUDENT');
  // Check connection
  if ($con->connect_error) {
   die("Connection failed: " . $con->connect_error);
  } 

  if (isset($_POST['searc'])) {
  
  $value = mysqli_real_escape_string($con, $_POST['search']);
  
  $_SESSION['search_v'] = $value;
  
    }
	
	header ('location: searchhhh.php');
	
    //header ('location: search_try_box.php');
?>

