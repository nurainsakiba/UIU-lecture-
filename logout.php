<?php
session_start();

$con = mysqli_connect('localhost', 'root', '', 'LECTURES_FOR_UIU_STUDENT');
   //Check connection
if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
} 

  if (isset($_SESSION['username'])) {
  
		session_destroy();
		echo"<script>location.href='index.php'</script>";
  }
  else{
	  echo"<script>location.href='index.php'</script>";
  }
    
?>